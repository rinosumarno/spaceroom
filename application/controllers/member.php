<?php
defined('BASEPATH') or exit('NO Direct Script Acces Allowed');

class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//cek login
		$this->table 		= 'jadwal_booking';
		$this->load->model('Globalmodel', 'project');
		$this->load->library('form_validation');
		if ($this->session->userdata('status') != "login") {
			$alert = $this->session->set_flashdata('alert', 'Silahkan Anda Login Terlebih Dahulu');
			redirect(base_url());
		}
	}

	function index()
	{

		$data_calendar = $this->project->get_list($this->table);
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
		$data['user'] = $this->m_perpus->get_data('user')->result();
		$data['slide'] = $this->db->query("select * from slide where id_slide")->result();
		$data['konten'] = $this->db->query("select * from kontenhome1 order by id_konten")->result();
		$data['peminjaman'] = $this->db->query("select * from transaksi t, user u where t.id_user=u.id_user order by t.id_booking desc limit 10")->result();

		$data['header'] = 'Katalog paket';

		$this->load->view('toplayout');
		$this->load->view('home', $data);
	}

	function gantipass()
	{
		$this->load->view('toplayout');
		$this->load->view('gantipass');
	}

	function gantipass_act()
	{
		$pass_baru = $this->input->post('pass_baru');
		$ulang_pass = $this->input->post('ulang_pass');

		$this->form_validation->set_rules('pass_baru', 'Password Baru', 'required|matches[ulang_pass]');
		$this->form_validation->set_rules('ulang_pass', 'Ulangi Password Baru', 'required');
		if ($this->form_validation->run() != false) {
			$data = array('password' => md5($pass_baru));
			$w = array('id_user' => $this->session->userdata('id_agt'));
			$this->m_perpus->update_data($w, $data, 'user');
			redirect(base_url() . 'member/gantipass?pesan=berhasil');
		} else {
			$this->load->view('toplayout');
			$this->load->view('gantipass');
		}
	}
	function booking($id)
	{
		$data['peminjaman'] = $this->db->query("select * from transaksi t,
		user u where t.id_user=u.id_user and t.status = 'Diterima' order by t.id_booking desc limit 10")->result();
		$data['ruangan'] = $this->db->query("select * from ruangan where id_ruangan = $id")->result();

		$this->load->view('toplayout');
		$this->load->view('ob', $data);
	}

	function booking_act()
	{
		$jam = $this->input->post('jam');
		$id_ruangan = $this->input->post('id_ruangan');
		$email_pemesan = $this->input->post('email_pemesan');
		$tgl = $this->input->post('tgl');
		// $tgl_selesai = $this->input->post('tgl_selesai');
		$notelp = $this->input->post('notelp');
		$almt = $this->input->post('almt');
		$harga = $this->input->post('harga');
		$id_paket = $this->input->post('id_paket');
		$this->form_validation->set_rules('notelp', '', 'required');
		if ($this->form_validation->run() != false) {
			//configurasi upload gambar
			$config['upload_path'] = './assets/galery/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['file_name'] = 'gambar' . time();

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$image = $this->upload->data();

				$data = array(
					'id_ruangan' => $id_ruangan,
					'id_booking' => $this->m_perpus->kode_otomatis(),
					'id_user' => $this->session->userdata('id_agt'),
					'nama' => $this->session->userdata('nama_agt'),
					'jam' => $jam,
					'email_pemesan' => $email_pemesan,
					'tgl' => $tgl,
					// 'tgl_selesai' => $tgl_selesai,
					'notelp' => $notelp,
					'almt' => $almt,
					'gambar' => $image['file_name'],

				);

				$this->m_perpus->insert_data($data, 'transaksi');
				redirect(base_url() . 'peminjaman/cetak_laporan_paket');
			} else {
				$this->session->set_flashdata('alert', 'Anda Belum Memilih Foto');
			}
		} else {
			$this->load->view('toplayout');
			$this->load->view('ob');
		}
	}

	public function register()
	{
		$username = $this->input->post('username');
		$nama = $this->input->post('nama_user');
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');

		$notelp = $this->input->post('notelp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');

		$this->form_validation->set_rules('nama_user', 'Nama user', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
		if ($this->form_validation->run() != false) {
			$data = array(
				'username' => $username,
				'nama_user' => $nama,
				'password' => md5($password),
				'no_telp' => $notelp,
				'alamat' => $alamat,
				'email' => $email
			);
			echo "<script>alert('Berhasil Membuat Akun')</script>";

			$this->m_perpus->insert_data($data, 'user');
			redirect(base_url() . 'admin/user');
		}
	}
	// public function historybayar()
	// {

	// 	$data['peminjaman'] = $this->m_perpus->edit_data(array('id_user' => $this->session->userdata('id_agt')), 'user')->result();
	// 	$id_usr = $this->session->userdata('id_agt');
	// 	$data['peminjaman'] = $this->db->query("SELECT * FROM transaksi t,user u WHERE t.id_user=u.id_user and t.id_user='$id_usr' order by t.id_booking asc ")->result();
	// 	$data['peminjaman'] = $this->db->query("SELECT * from transaksi")->result();

	// 	$this->load->view('toplayout');
	// 	$this->load->view('histori', $data);
	// }
}
