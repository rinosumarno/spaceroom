<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		require APPPATH . 'libraries/phpmailer/src/Exception.php';
		require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH . 'libraries/phpmailer/src/SMTP.php';
		$this->table 		= 'jadwal_booking';
		$this->load->model('Globalmodel', 'project');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data_calendar = $this->project->get_list($this->table);
		$calendar = array();
		foreach ($data_calendar as $key => $val) {
			$calendar[] = array(
				'id' 	=> intval($val->id),
				'title' => $val->title,
				'description' => trim($val->description),
				'start' => date_format(date_create($val->start_date), "Y-m-d H:i:s"),
				// 'end' 	=> date_format( date_create($val->end_date) ,"Y-m-d H:i:s"),
				'color' => $val->color,
			);
		}

		$data = array();
		$data['get_data']			= json_encode($calendar);

		$data['peminjaman'] = $this->db->query("select * from transaksi t, user u where t.id_user=u.id_user order by t.id_booking desc limit 10")->result();
		$data['slide'] = $this->db->query("select * from slide where id_slide")->result();
		$data['konten'] = $this->db->query("select * from kontenhome1 order by id_konten")->result();
		$this->load->view('toplayout');
		$this->load->view('home', $data);
	}

	public function login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() != false) {
			$where = array('username' => $username, 'password' => md5($password));

			$data = $this->m_perpus->edit_data($where, 'admin');
			$d = $this->m_perpus->edit_data($where, 'admin')->row();
			$cek = $data->num_rows();

			if ($cek > 0) {
				$session = array('id' => $d->id_admin, 'nama' => $d->nama_admin, 'status' => 'login');
				$this->session->set_userdata($session);
				redirect(base_url() . 'admin');
			} else {
				$dt = $this->m_perpus->edit_data($where, 'user');
				$hasil = $this->m_perpus->edit_data($where, 'user')->row();
				$proses = $dt->num_rows();

				if ($proses > 0) {
					$session = array('id_agt' => $hasil->id_user, 'nama_agt' => $hasil->nama_user, 'status' => 'login');
					$this->session->set_userdata($session);
					redirect(base_url() . 'galery');
				} else {
					$this->session->set_flashdata('alert', 'Login gagal! Username atau password salah');
					redirect(base_url() . 'welcome/login');
				}
			}
		} else {

			$this->load->view('login');
		}
	}
	public function register_view()
	{
		$this->load->view('register');
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
				'id_user' => $this->m_perpus->kode_otomatis_user(),
				'username' => $username,
				'nama_user' => $nama,
				'password' => md5($password),

				'no_telp' => $notelp,
				'alamat' => $alamat,
				'email' => $email
			);

			$this->m_perpus->insert_data($data, 'user');
			redirect(base_url() . 'welcome/login');
		} else {
			$this->load->view('register');
		}
	}

	function paket()
	{
		$data['user'] = $this->m_perpus->get_data('user')->result();
		$data['paket'] = $this->m_perpus->get_data('paket')->result();

		$data['header'] = 'Katalog paket';

		$this->load->view('toplayout');
		$this->load->view('index4', $data);
	}

	function booking()
	{
		$data['kategori'] = $this->db->query('select*from kategori k, paket b where k.id_kategori=b.id_kategori')->result();

		$this->load->view('toplayout');
		$this->load->view('ob', $data);
	}
	function lupa_pass()
	{
		$this->load->view('lupa');
	}
	function act_lupa_pass()
	{
		$email = $this->input->post('email');
		$panggil = $this->db->query("SELECT * FROM user where email = '$email' ");
		$jikaAda = $panggil->num_rows();
		$panggilData = $panggil->result();
		if ($jikaAda == 0) {
			echo "<script>alert('Email Tidak Terdaftar')</script>";
			echo "<script>window.location= '" . base_url('welcome/lupa_pass') . "' </script>";
		} else {

			foreach ($panggilData as $value) {
				$password = $value->password;
				$id = $value->id_user;
			}

			$where = array('id_user' => $id);
			$data = array('password' => md5($value->email . $value->id_user));
			$this->m_perpus->update_data($where, $data, 'user');

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
			$mailContent = "<h2>Konfirmasi Lupas password anda sudah terkonfirmasi $value->nama_user</h2>
      <table border='1' cellpadding='10'>
      <tr>
      <td style='background-color: #636e72;'>Passoword</td>
      </tr>
      <tr>
      <td>$email$value->id_user</td>
      </tr>
      </table>"; // isi email
			$mail->Body = $mailContent;

			// Send email
			if (!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				echo "<script>alert('Email Pembatalan Booking Telah Dikirim ')</script>";
				echo '<meta http-equiv="refresh" content="0;url=http://localhost:8080/spaceroom/welcome/login">';
			}
		}
	}
}
