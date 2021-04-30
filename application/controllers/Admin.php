<?php
defined('BASEPATH') or exit('NO Direct Script Access Allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		require APPPATH . 'libraries/phpmailer/src/Exception.php';
		require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH . 'libraries/phpmailer/src/SMTP.php';
		// cek Calender
		$this->table 		= 'jadwal_booking';
		$this->load->model('Globalmodel', 'modeldb');
		// cek login
		if ($this->session->userdata('status') != "login") {
			$alert = $this->session->set_flashdata('alert', 'Silahkan Anda Login Terlebih Dahulu');
			redirect(base_url());
		}
	}

	function index()
	{
		$data['peminjaman'] = $this->db->query("select * from transaksi order by id_booking desc limit 10")->result();
		$data['user'] = $this->db->query("select * from user order by id_user desc limit 10")->result();
		$data['nama_member'] = $this->db->query("select * from user order by id_user desc limit 10")->result();
		$data['admin'] = $this->db->query("select * from admin order by id_admin desc limit 10")->result();

		$this->load->view('admin/header');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/footer');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url() . 'welcome?pesan=logout');
	}

	function ganti_password()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/ganti_password');
		$this->load->view('admin/footer');
	}

	function ganti_password_act()
	{
		$pass_baru = $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');

		$this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass', 'Ulangi Password Baru', 'required');
		if ($this->form_validation->run() != false) {
			$data = array('password' => md5($pass_baru));
			$w = array('id_admin' => $this->session->userdata('id'));
			$this->m_perpus->update_data($w, $data, 'admin');
			redirect(base_url() . 'admin/ganti_password?pesan=berhasil');
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/ganti_password');
			$this->load->view('admin/footer');
		}
	}
	//PR
	public function testimoni()
	{
		$data['testimoni'] = $this->db->query('SELECT * FROM dokumentasi')->result();

		$this->load->view('admin/header');
		$this->load->view('admin/data_testimoni', $data);
		$this->load->view('admin/footer');
	}
	public function delete_testimoni($id)
	{
		$where = array('id' => $id);
		$this->m_perpus->delete_data($where, 'dokumentasi');
		redirect(base_url() . 'admin/testimoni');
	}
	//================================= DATA GALERY FOOTER =====================================================
	function galery()
	{
		$data['galery'] = $this->m_perpus->get_data('galery')->result();
		//memuat data kategori untuk ditampilkan di select form
		$this->load->view('admin/header');
		$this->load->view('admin/datagalery', $data);
		$this->load->view('admin/footer');
	}

	function tambah_galery()
	{
		$data['galery'] = $this->m_perpus->get_data('galery')->result();
		$data['ruangan'] = $this->m_perpus->get_data('ruangan')->result();
		//memuat data kategori untuk ditampilkan di select form
		$this->load->view('admin/header');
		$this->load->view('admin/tambahgalery', $data);
		$this->load->view('admin/footer');
	}

	public function aktif_gambar($id)
	{
		$id_ruangan = $this->input->post('id_ruangan');
		$gambar = $this->input->post('gambar');
		$aktif = $this->input->post('aktif');
		$where = array('id_galery' => $id);
		$data = array(
			'id_ruangan' => $id_ruangan,
			'gambar' => $gambar,
			'aktif' => $aktif,
		);
		$this->m_perpus->update_data($where, $data, 'galery');
		redirect('admin/galery');
	}

	function galery_act()
	{
		$id_ruangan = $this->input->post('id_ruangan');
		// $aktif = $this->input->post('aktif');
		$this->form_validation->set_rules('id_ruangan', 'id_ruangan', 'required');
		if ($this->form_validation->run() != false) {
			//configurasi upload gambar
			$config['upload_path'] = './assets/galery/datagalery/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '3000';
			$config['file_name'] = 'gambar' . time();

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) {
				$image = $this->upload->data();

				$data = array(
					'gambar' => $image['file_name'],
					'id_ruangan' => $id_ruangan,
					// 'aktif' => $aktif,
				);

				$this->m_perpus->insert_data($data, 'galery');
				redirect(base_url() . 'admin/galery');
			} else {
				$this->session->set_flashdata('alert', 'Anda Belum Memilih Foto');
			}
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/tambahgalery');
		}
	}

	function edit_galery($id_galery)
	{
		$data = array(
			"galery" => $this->m_perpus->detailgalery($id_galery)
		);
		$data['galery1'] = "select * from galery where id_galery";
		$galeries = $this->db->query("select * from galery where id_galery = '$id_galery' ")->result();
		foreach ($galeries as $value) {
			$id_ruangan = $value->id_ruangan;
		}
		$data['ruangan_select'] = $this->db->query('select * from ruangan r, galery g where g.id_ruangan = r.id_ruangan and 
			g.id_galery = "$id_galery" ')->result();

		$data['ruangan'] = $this->db->query("select * from ruangan")->result(); ///masih salah

		$this->load->view('admin/header');
		$this->load->view('admin/editgalery', $data);
		$this->load->view('admin/footer');
	}

	function update_galery()
	{
		$id = $this->input->post('id');
		$id_ruangan = $this->input->post('id_ruangan');

		$config['upload_path'] = './assets/galery/datagalery/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '3000';
		$config['file_name'] = 'gambar' . time();

		$this->load->library('upload', $config);
		$where = array('id_galery' => $id);
		$data = array(
			'id_ruangan' => $id_ruangan,
			'gambar' => $image['file_name']
		);

		if ($this->upload->do_upload('foto')) {
			//proses upload gambar
			$image = $this->upload->data();
			unlink('assets/galery/datagalery/' . $this->input->post('old_pict', TRUE));
			$data['gambar'] = $image['file_name'];

			$this->m_perpus->update_data($where, $data, 'galery');
		} else {
			$this->m_perpus->update_data($where, $data, 'galery');
		}

		$this->m_perpus->update_data($where, $data, 'galery');
		redirect(base_url() . 'admin/galery');
	}

	function hapus_galery($id)
	{
		$where = array('id_galery' => $id);
		$this->m_perpus->delete_data($where, 'galery');
		redirect(base_url() . 'admin/galery');
	}
	//==========================================================================================================

	//================================= DATA ADMIN =====================================================//

	function admin()
	{
		$data['admin'] = $this->m_perpus->get_data('admin')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/data_admin', $data);
		$this->load->view('admin/footer');
	}

	function tambah_admin()
	{
		$data['admin'] = $this->m_perpus->get_data('admin')->result();
		//memuat data kategori untuk ditampilkan di select form
		$this->load->view('admin/header');
		$this->load->view('admin/tambah_admin', $data);
		$this->load->view('admin/footer');
	}

	function admin_act()
	{
		$nama = $this->input->post('nama_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');


		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() != false) {

			$data = array(
				'nama_admin' => $nama,
				'username' => $username,
				'password' => md5($password)
			);

			$this->m_perpus->insert_data($data, 'admin');
			redirect(base_url() . 'admin/admin');
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/tambah_admin');
		}
	}


	//=================================================================================================//
	//=================================== Data User ===================================================//

	function user()
	{
		$data['user'] = $this->m_perpus->get_data('user')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/data_user', $data);
		$this->load->view('admin/footer');
	}

	function tambah_user()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/tambahuser');
		$this->load->view('admin/footer');
	}

	function tambah_user_act()
	{
		$username = $this->input->post('username');
		$nama = $this->input->post('nama_user');
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');
		$gender = $this->input->post('gender');
		$notelp = $this->input->post('notelp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		$this->form_validation->set_rules('nama_user', 'Nama user', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() != false) {
			$data = array(
				'username' => $username,
				'nama_user' => $nama,
				'password' => md5($password),
				'gender' => $gender,
				'no_telp' => $notelp,
				'alamat' => $alamat,
				'email' => $email
			);

			$this->m_perpus->insert_data($data, 'user');
			redirect(base_url() . 'admin/user');
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/tambahuser');
			$this->load->view('admin/footer');
		}
	}

	function edit_user($id)
	{
		$where = array('id_user' => $id);
		$data['user'] = $this->m_perpus->edit_data($where, 'user')->result();

		$this->load->view('admin/header');
		$this->load->view('admin/edituser', $data);
		$this->load->view('admin/footer');
	}

	function update_user()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama_user');
		$gender = $this->input->post('gender');
		$notelp = $this->input->post('notelp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$this->form_validation->set_rules('nama_user', 'Nama user', 'required');
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('notelp', 'No Telp', 'numeric|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		if ($this->form_validation->run() != false) {
			$where = array('id_user' => $id);
			$data = array(
				'nama_user' => $nama,
				'gender' => $gender,
				'no_telp' => $notelp,
				'alamat' => $alamat,
				'email' => $email
			);
			$this->m_perpus->update_data($where, $data, 'user');
			redirect(base_url() . 'admin/user');
		} else {
			$where = array('id_user' => $id);
			$data['paket'] = $this->m_perpus->edit_data($where, 'user')->result();
			$this->load->view('admin/header');
			$this->load->view('admin/edituser', $data);
			$this->load->view('admin/footer');
		}
	}

	function hapus_user($id)
	{
		$where = array('id_user' => $id);
		$this->m_perpus->delete_data($where, 'user');
		redirect(base_url() . 'admin/user');
	}
	////////////////////////////////////////////// FUNGSI UNTUK PROSES BOOKING 
	//created by freeze
	function data_booking()
	{

		$data['peminjaman'] = $this->db->query("SELECT * from transaksi t, user u 
			where t.id_user=u.id_user order by t.id_booking desc limit 10")->result();
		$this->load->view('admin/header');
		$this->load->view('admin/peminjaman', $data);
		$this->load->view('admin/footer');
	}
	//created by freeze
	function selesai_peminjaman()
	{
		$data['peminjaman'] = $this->db->query("SELECT * from transaksi t, user u
			where t.id_user=u.id_user order by t.id_booking asc limit 10")->result();
		$title = $this->input->post('title');
		$id_booking = $this->input->post('id_booking');
		$id_user = $this->input->post('id_user');
		$desc = $this->input->post('description');
		$color = $this->input->post('color');
		$start = $this->input->post('start_date');
		$end = $this->input->post('end_date');
		$this->form_validation->set_rules('title', 'Title', 'required');
		if ($this->form_validation->run() != false) {
			$where = array('id_booking' => $id);
			$data = array(
				'id_booking' => $id,
				'title' => $title,
				'id_booking' => $id_booking,
				'id_user' => $id_user,
				'description' => $desc,
				'color' => $color,
				'start_date' => $start,
				// 'end_date' => $end,
				'create_at' => date('Y-m-d H:i:s'),
			);
			$this->m_perpus->insert_data($data, 'jadwal_booking');
			redirect(base_url() . 'admin/ubah_status/' . $id_booking);
		} else {
			$where = array('id_booking' => $id);
			$data['paket'] = $this->m_perpus->edit_data($where, 'transaksi')->result();
			$this->load->view('admin/header');
			$this->load->view('admin/peminjaman', $data);
		}
	}
	//created by freeze
	public function ubah_status($id)
	{
		$data_transaksi = $this->db->query("select * from transaksi where id_booking = '$id'")->result();
		foreach ($data_transaksi as $value) {
			$id_booking = $value->id_booking;
			$id_user = $value->id_user;
			$id_ruangan = $value->id_ruangan;
			$nama = $value->nama;
			$email = $value->email_pemesan;
			$jam = $value->jam;
			$tgl = $value->tgl;
			// $tgl_selesai = $value->tgl_selesai;
			$notelp = $value->notelp;
			$alamat = $value->almt;
			$gambar = $value->gambar;
		}
		$where = array('id_booking' => $id_booking);
		$data = array(
			'id_booking' => $id_booking,
			'id_user' => $id_user,
			'id_ruangan' => $id_ruangan,
			'nama' => $nama,
			'email_pemesan' => $email,
			'jam' => $jam,
			'notelp' => $notelp,
			'almt' => $alamat,
			'tgl' => $tgl,
			// 'tgl_selesai' => $tgl_selesai,
			'gambar' => $gambar,
			'status' => 'Diterima',
		);
		$this->m_perpus->update_data($where, $data, 'transaksi');
		redirect(base_url() . 'admin/email_success/' . $id_booking);
	}
	//created by freeze
	public function email_success($id)
	{
		$data_transaksi = $this->db->query(" select * from transaksi where id_booking = '$id'  ")->result();
		foreach ($data_transaksi as $value) {
			$id_booking = $value->id_booking;
			$id_user = $value->id_user;
			$id_ruangan = $value->id_ruangan;
			$nama = $value->nama;
			$email = $value->email_pemesan;
			$jam = $value->jam;
			$tgl = $value->tgl;
			// $tgl_selesai = $value->tgl_selesai;
			$notelp = $value->notelp;
			$alamat = $value->almt;
			$gambar = $value->gambar;
		}
		$response = false;
		$mail = new PHPMailer();
		// SMTP configuration
		$mail->isSMTP();
		$url_echo = base_url();
		$mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
		$mail->SMTPAuth = true;
		$mail->Username = 'spaceroomdpk@gmail.com'; // user email
		$mail->Password = 'spaceroomcare'; // password email
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('spaceroomdpk@gmail.com', 'Spaceroom'); // user email
		$mail->addReplyTo('', ''); //user email

		// Add a recipient
		$mail->addAddress($email); //email tujuan pengiriman email

		// Email subject
		$mail->Subject = 'Email Booking Ruangan Space Room'; //subject email

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<h2>Selamat untuk <b>$nama</b> pemesanan ruangan Space Room anda diterima </h2>
      <table border='1' cellpadding='10'>
      <tr>
      <td style='background-color: #636e72;'>Tanggal Booking</td>
      <td style='background-color: #636e72;'>Jam Datang</td>
      <td style='background-color: #636e72;'>Biaya</td>
      </tr>
      <tr>
      <td>$tgl</td>
      <td>$jam</td>
      <td>FREE</td>
      </tr>
      </table> </br>
      <p><b>*Pembooking harap membawa bukti email ini dan KTP asli untuk menukarkan kunci ruangan.</b></p>
      <p><b>*Jika dalam 1 jam dari waktu yang sudah ditentukan pemboking tidak datang, maka bookingan akan di batalkan melalui
    admin!</b></p>"; // isi email
		$mail->Body = $mailContent;

		// Send email
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo "<script>alert('Email Terima Booking Sudah Dikirim')</script>";
			echo '<meta http-equiv="refresh" content="0;url=http://localhost:8080/spaceroom/admin/data_booking">';
		}
	}
	//created by freeze
	public function tolak_booking()
	{
		$id_booking = $this->input->post('id_booking');
		$id_user = $this->input->post('id_user');
		$id_ruangan = $this->input->post('id_ruangan');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email_pemesan');
		$jam = $this->input->post('jam');
		$tgl = $this->input->post('tgl');
		// $tgl_selesai = $this->input->post('tgl_selesai');
		$notelp = $this->input->post('notelp');
		$alamat = $this->input->post('almt');
		$gambar = $this->input->post('gambar');
		$where = array('id_booking' => $id_booking);
		$data = array(
			'id_booking' => $id_booking,
			'id_user' => $id_user,
			'id_ruangan' => $id_ruangan,
			'nama' => $nama,
			'email_pemesan' => $email,
			'jam' => $jam,
			'notelp' => $notelp,
			'almt' => $alamat,
			'tgl' => $tgl,
			// 'tgl_selesai' => $tgl_selesai,
			'gambar' => $gambar,
			'status' => 'Ditolak',
		);
		$this->m_perpus->update_data($where, $data, 'transaksi');
		redirect(base_url() . 'admin/email_tolak/' . $id_booking);
	}
	//created by freeze
	public function email_tolak($id)
	{
		$data_transaksi = $this->db->query(" select * from transaksi where id_booking = '$id'  ")->result();
		foreach ($data_transaksi as $value) {
			$id_booking = $value->id_booking;
			$id_user = $value->id_user;
			$id_ruangan = $value->id_ruangan;
			$nama = $value->nama;
			$email = $value->email_pemesan;
			$jam = $value->jam;
			$tgl = $value->tgl;
			// $tgl_selesai = $value->tgl_selesai;
			$notelp = $value->notelp;
			$alamat = $value->almt;
			$gambar = $value->gambar;
		}
		$response = false;
		$mail = new PHPMailer();
		// SMTP configuration
		$mail->isSMTP();
		$url_echo = base_url();
		$mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
		$mail->SMTPAuth = true;
		$mail->Username = 'spaceroomdpk@gmail.com'; // user email
		$mail->Password = 'spaceroomcare'; // password email
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('spaceroomdpk@gmail.com', 'Spaceroom'); // user email
		$mail->addReplyTo('', ''); //user email

		// Add a recipient
		$mail->addAddress($email); //email tujuan pengiriman email

		// Email subject
		$mail->Subject = 'Email Booking Ruangan Space Room'; //subject email

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<h2>Maaf untuk $nama pemesanan ruangan meeting anda ditolak </h2>
      <table border='1' cellpadding='10'>
      <tr>
      <td style='background-color: #636e72;'>Tanggal Booking</td>
      <td style='background-color: #636e72;'>Biaya</td>
      </tr>
      <tr>
      <td>$tgl</td>
      <td>FREE</td>
      </tr>
      </table>
      <p><b>Ada beberapa keterangan ketika bookingan ditolak:</b></p>
      <p style='color:red;'><b>*tanggal booking sudah di booking oleh pembooking lain.</b></p>
      <p style='color:red;'><b>*Data foto KTP tidak sah atau kurang jelas.</b></p>
      <p style='color:red;'><b>*Anda menginput tanggal booking tidak singkron / memboking pada tanggal
      yang
      sudah lewat</b></p>
<p><b>Silahkan Booking kembali dengan data yang benar dan tidak bentrok</b></p>"; // isi email
		$mail->Body = $mailContent;
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo "<script>alert('Email penolakan Booking telah dikirim')</script>";
			echo '<meta http-equiv="refresh" content="0;url=http://localhost:8080/spaceroom/admin/data_booking">';
		}
	}
	//created by freeze
	public function batalkan_booking()
	{
		$id_booking = $this->input->post('id_booking');
		$id_user = $this->input->post('id_user');
		$id_ruangan = $this->input->post('id_ruangan');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email_pemesan');
		$jam = $this->input->post('jam');
		$tgl = $this->input->post('tgl');
		// $tgl_selesai = $this->input->post('tgl_selesai');
		$notelp = $this->input->post('notelp');
		$alamat = $this->input->post('almt');
		$gambar = $this->input->post('gambar');
		$where = array('id_booking' => $id_booking);
		$data = array(
			'id_booking' => $id_booking,
			'id_user' => $id_user,
			'id_ruangan' => $id_ruangan,
			'nama' => $nama,
			'email_pemesan' => $email,
			'jam' => $jam,
			'notelp' => $notelp,
			'almt' => $alamat,
			'tgl' => $tgl,
			// 'tgl_selesai' => $tgl_selesai,
			'gambar' => $gambar,
			'status' => 'Dibatalkan',
		);
		$this->m_perpus->update_data($where, $data, 'transaksi');
		redirect(base_url() . 'admin/delete_jadwal/' . $id_booking);
	}
	//created by freeze
	function delete_jadwal($id)
	{
		$data_jadwal = $this->db->query("select * from jadwal_booking where id_booking = '$id'")->result();
		foreach ($data_jadwal as $isi) {
			$id_jadwal = $isi->id;
		}
		$where = array('id' => $id_jadwal);
		$this->m_perpus->delete_data($where, 'jadwal_booking');
		redirect(base_url() . 'admin/email_batal/' . $id);
	}
	//created by freeze
	public function email_batal($id)
	{
		$data_transaksi = $this->db->query(" select * from transaksi where id_booking = '$id'")->result();
		foreach ($data_transaksi as $value) {
			$id_booking = $value->id_booking;
			$id_user = $value->id_user;
			$id_ruangan = $value->id_ruangan;
			$nama = $value->nama;
			$email = $value->email_pemesan;
			$jam = $value->jam;
			$tgl = $value->tgl;
			// $tgl_selesai = $value->tgl_selesai;
			$notelp = $value->notelp;
			$alamat = $value->almt;
			$gambar = $value->gambar;
		}
		$response = false;
		$mail = new PHPMailer();
		// SMTP configuration
		$mail->isSMTP();
		$url_echo = base_url();
		$mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
		$mail->SMTPAuth = true;
		$mail->Username = 'spaceroomdpk@gmail.com'; // user email
		$mail->Password = 'spaceroomcare'; // password email
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('spaceroomdpk@gmail.com', 'Spaceroom'); // user email
		$mail->addReplyTo('', ''); //user email

		// Add a recipient
		$mail->addAddress($email); //email tujuan pengiriman email

		// Email subject
		$mail->Subject = 'Email Booking Ruangan Space Room'; //subject email

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<h2>Booking ruangan telah dibatalkan oleh anda $nama</h2>
      <table border='1' cellpadding='10'>
      <tr>
      <td style='background-color: #636e72;'>Tanggal Booking</td>
      <td style='background-color: #636e72;'>Biaya</td>
      </tr>
      <tr>
      <td>$tgl</td>
      <td>FREE</td>
      </tr>
      </table>"; // isi email
		$mail->Body = $mailContent;

		// Send email
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo "<script>alert('Email Pembatalan Booking Telah Dikirim ')</script>";
			echo '<meta http-equiv="refresh" content="0;url=http://localhost:8080/spaceroom/admin/data_booking">';
		}
	}
	public function data_batal()
	{
		$data['data_batal'] = $this->db->query('SELECT * FROM konfirmasi_pembatalan')->result();

		$this->load->view('admin/header');
		$this->load->view('admin/data_batal', $data);
		$this->load->view('admin/footer');
	}

	//==================================================== DATA GALERY SLIDE SHOW WELCOME ============================================


	function slide()
	{
		$data['slide'] = $this->m_perpus->get_data('slide')->result();
		//memuat data kategori untuk ditampilkan di select form
		$this->load->view('admin/header');
		$this->load->view('admin/dataslide', $data);
		$this->load->view('admin/footer');
	}

	function tambah_slide()
	{
		$data['slide'] = $this->m_perpus->get_data('slide')->result();
		//memuat data kategori untuk ditampilkan di select form
		$this->load->view('admin/header');
		$this->load->view('admin/tambahslide', $data);
		$this->load->view('admin/footer');
	}

	function slide_act()
	{

		$judul_slide = $this->input->post('judul_slide');

		$this->form_validation->set_rules('judul_slide', 'Judul Slide', 'required');

		if ($this->form_validation->run() != false) {
			//configurasi upload gambar
			$config['upload_path'] = './assets/galery/slide/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '3000';
			$config['file_name'] = 'gambar' . time();

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$image = $this->upload->data();

				$data = array(
					'judul_slide' => $judul_slide,
					'gambar' => $image['file_name']
				);

				$this->m_perpus->insert_data($data, 'slide');
				redirect(base_url() . 'admin/slide');
			} else {
				$this->session->set_flashdata('alert', 'Anda Belum Memilih Foto');
			}
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/tambahslide');
			$this->load->view('admin/footer');
		}
	}

	function edit_slide($id_slide)
	{
		$data = array(
			"slide" => $this->m_perpus->detailslide($id_slide)
		);
		$data['slide1'] = "select * from slide where id_slide";

		//$data['paket'] = $this->m_perpus->edit_data($where,'paket')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/editslide', $data);
		$this->load->view('admin/footer');
	}

	function update_slide()
	{
		$id = $this->input->post('id');
		$judul_slide = $this->input->post('judul_slide');


		$this->form_validation->set_rules('judul_slide', 'Judul Slide', 'required');

		if ($this->form_validation->run() != false) {
			$config['upload_path'] = './assets/galery/slide/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '3000';
			$config['file_name'] = 'gambar' . time();

			$this->load->library('upload', $config);

			$where = array('id_slide' => $id);
			$data = array(

				'judul_slide' => $judul_slide,
				'gambar' => $image['file_name']
			);

			if ($this->upload->do_upload('foto')) {
				//proses upload gambar
				$image = $this->upload->data();
				unlink('assets/galery/slide/' . $this->input->post('old_pict', TRUE));
				$data['gambar'] = $image['file_name'];

				$this->m_perpus->update_data($where, $data, 'slide');
			} else {
				$this->m_perpus->update_data($where, $data, 'slide');
			}

			$this->m_perpus->update_data($where, $data, 'slide');
			redirect(base_url() . 'admin/slide');
		} else {
			$where = array('id_slide' => $id);
			$data['slide'] = $this->db->query("select * from slide where id_slide")->result();
			$data['slide'] = $this->m_perpus->get_data('slide')->result();
			//$data['paket'] = $this->m_perpus->edit_data($where,'paket')->result();
			$this->load->view('admin/header');
			$this->load->view('admin/editslide', $data);
			$this->load->view('admin/footer');
		}
	}

	function hapus_slide($id)
	{
		$where = array('id_slide' => $id);
		$this->m_perpus->delete_data($where, 'slide');
		redirect(base_url() . 'admin/slide');
	}


	//=============================================================================================================================================

	//================================= DATA KONTENHOME 1 =====================================================
	function konten()
	{
		$data['konten'] = $this->m_perpus->get_data('kontenhome1')->result();
		//memuat data kategori untuk ditampilkan di select form
		$this->load->view('admin/header');
		$this->load->view('admin/datakonten', $data);
		$this->load->view('admin/footer');
	}

	function tambah_konten()
	{
		$data['konten'] = $this->m_perpus->get_data('kontenhome1')->result();
		//memuat data kategori untuk ditampilkan di select form
		$this->load->view('admin/header');
		$this->load->view('admin/tambahkonten', $data);
	}

	function konten_act()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');


		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($this->form_validation->run() != false) {

			$data = array(

				'judul' => $judul,
				'deskripsi' => $deskripsi

			);

			$this->m_perpus->insert_data($data, 'kontenhome1');
			redirect(base_url() . 'admin/konten');
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/tambahkonten');
		}
	}

	function edit_konten($id_konten)
	{
		$data = array(
			"konten" => $this->m_perpus->detailkonten($id_konten)
		);
		$data['konten1'] = "select * from kontenhome1 where id_konten";

		//$data['paket'] = $this->m_perpus->edit_data($where,'paket')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/editkonten', $data);
	}

	function update_konten()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');


		if ($this->form_validation->run() != false) {

			$where = array('id_konten' => $id);
			$data = array(

				'judul' => $judul,
				'deskripsi' => $deskripsi

			);

			$this->m_perpus->update_data($where, $data, 'kontenhome1');
			redirect(base_url() . 'admin/konten');
		} else {
			$where = array('id_konten' => $id);
			$data['konten'] = $this->db->query("select * from kontenhome1 where id_konten")->result();
			$data['konten'] = $this->m_perpus->get_data('kontenhome1')->result();
			//$data['paket'] = $this->m_perpus->edit_data($where,'paket')->result();
			$this->load->view('admin/header');
			$this->load->view('admin/konten', $data);
		}
	}

	function hapus_konten($id)
	{
		$where = array('id_konten' => $id);
		$this->m_perpus->delete_data($where, 'kontenhome1');
		redirect(base_url() . 'admin/konten');
	}
	//=============================================================================================================================//
	function transaksi_selesai_act()
	{
		$id = $this->input->post('id');
		$tgl_dikembalikan = $this->input->post('tgl_dikembalikan');
		$tgl_kembali = $this->input->post('tgl_kembali');
		$paket = $this->input->post('paket');
		$denda = $this->input->post('denda');
		$this->form_validation->set_rules('tgl_dikembalikan', 'Tanggal Di Kembalikan', 'required');
		if ($this->form_validation->run() != false) {
			// menghitung selisih hari 
			$batas_kembali = strtotime($tgl_kembali);
			$dikembalikan = strtotime($tgl_dikembalikan);
			$selisih = abs(($batas_kembali - $dikembalikan) / (60 * 60 * 24));
			$total_denda = $denda * $selisih;
			// update status peminjaman
			$data = array('status_peminjaman' => '1', 'total_denda' => $total_denda, 'tgl_pengembalian' => $tgl_dikembalikan, 'status_pengembalian' => '1');
			//$data3 = array();
			$w = array('id_pinjam' => $id);
			$this->m_perpus->update_data($w, $data, 'transaksi');
			//$this->m_perpus->update_data($w,$data3,'detail_pinjam');
			// update status paket
			$data2 = array('status_paket' => '1');
			$w2 = array('id_paket' => $paket);
			$this->m_perpus->update_data($w2, $data2, 'paket');

			redirect(base_url() . 'admin/peminjaman');
		} else {
			$data['paket'] = $this->m_perpus->get_data('paket')->result();
			$data['user'] = $this->m_perpus->get_data('user')->result();
			$data['peminjaman'] = $this->db->query("select * from peminjaman p,user a, detail_pinjam d, paket b  where p.id_user = a.id_user and p.id_pinjam = d.id_pinjam and d.id_paket = b.id_paket and p.id_pinjam='$id'")->result();

			$this->load->view('admin/header');
			$this->load->view('admin/transaksi_selesai', $data);
		}
	}

	function laporan_transaksi()
	{
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		$this->form_validation->set_rules('dari', 'dari tanggal', 'required');
		$this->form_validation->set_rules('sampai', 'sampai tanggal', 'required');

		if ($this->form_validation->run() != false) {
			$data['laporan'] = $this->db->query("SELECT * from transaksi t, user a where t.id_user=a.id_user AND tgl between '$dari' AND '$sampai' order by id_booking desc")->result();

			$this->load->view('admin/header');
			$this->load->view('admin/laporan_filter_transaksi', $data);
			$this->load->view('admin/footer');
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/laporan_transaksi');
			$this->load->view('admin/footer');
		}
	}

	function laporan_print_transaksi()
	{
		$dari = $this->input->get('dari');
		$sampai = $this->input->get('sampai');

		if ($dari != "" && $sampai != "") {
			$data['laporan'] = $this->db->query("SELECT * from transaksi t, user a where t.id_user=a.id_user AND tgl between '$dari' AND '$sampai' order by id_booking desc")->result();
			$this->load->view('admin/laporan_print_transaksi', $data);
		} else
			redirect("admin/laporan_transaksi");
	}
	//////////////////////////////////////////////////////////Controller Khusus Calendar/////////////////////////////////////////////////////////////
	public function calendar()
	{
		$data_calendar = $this->modeldb->get_list($this->table);
		$calendar = array();
		foreach ($data_calendar as $key => $val) {
			$calendar[] = array(
				'id' 	=> intval($val->id),
				'title' => $val->title,
				'description' => trim($val->description),
				'start' => date_format(date_create($val->start_date), "Y-m-d H:i:s"),
				// 'end' 	=> date_format(date_create($val->end_date), "Y-m-d H:i:s"),
				'color' => $val->color,
			);
		}
		$data = array();
		$data['get_data']			= json_encode($calendar);
		$this->load->view('calendar', $data);
	}

	public function save()
	{
		$response = array();
		$this->form_validation->set_rules('title', 'Title cant be empty ', 'required');
		if ($this->form_validation->run() == TRUE) {
			$param = $this->input->post();
			$calendar_id = $param['calendar_id'];
			unset($param['calendar_id']);

			if ($calendar_id == 0) {
				$param['create_at']   	= date('Y-m-d H:i:s');
				$insert = $this->modeldb->insert($this->table, $param);

				if ($insert > 0) {
					$response['status'] = TRUE;
					$response['notif']	= 'Success add calendar';
					$response['id']		= $insert;
				} else {
					$response['status'] = FALSE;
					$response['notif']	= 'Server wrong, please save again';
				}
			} else {
				$where 		= ['id'  => $calendar_id];
				$param['modified_at']   	= date('Y-m-d H:i:s');
				$update = $this->modeldb->update($this->table, $param, $where);

				if ($update > 0) {
					$response['status'] = TRUE;
					$response['notif']	= 'Success add calendar';
					$response['id']		= $calendar_id;
				} else {
					$response['status'] = FALSE;
					$response['notif']	= 'Server wrong, please save again';
				}
			}
		} else {
			$response['status'] = FALSE;
			$response['notif']	= validation_errors();
		}

		echo json_encode($response);
	}

	public function delete()
	{
		$response 		= array();
		$calendar_id 	= $this->input->post('id');
		if (!empty($calendar_id)) {
			$where = ['id' => $calendar_id];
			$delete = $this->modeldb->delete($this->table, $where);

			if ($delete > 0) {
				$response['status'] = TRUE;
				$response['notif']	= 'Success delete calendar';
			} else {
				$response['status'] = FALSE;
				$response['notif']	= 'Server wrong, please save again';
			}
		} else {
			$response['status'] = FALSE;
			$response['notif']	= 'Data not found';
		}

		echo json_encode($response);
	}
}
