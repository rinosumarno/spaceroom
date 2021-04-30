<?php
defined('BASEPATH') or exit('NO Direct Script Access Allowed');

//created by freeze
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
///////////////////
class Peminjaman extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//created by freeze
		require APPPATH . 'libraries/phpmailer/src/Exception.php';
		require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH . 'libraries/phpmailer/src/SMTP.php';
		// cek login
		if ($this->session->userdata('status') != "login") {
			$alert = $this->session->set_flashdata('alert', 'Anda belum Login');
			redirect(base_url());
		}
	}

	function index()
	{
		$data['peminjaman'] = $this->db->query("SELECT * FROM transaksi")->result();
		$this->load->view('admin/header');
		$this->load->view('admin/peminjaman', $data);
		$this->load->view('admin/footer');
	}

	//one to many
	// BATAS KONFRIMASI created by freeze
	function cetak_laporan_paket()
	{
		$data['user'] = $this->m_perpus->edit_data(array('id_user' => $this->session->userdata('id_agt')), 'user')->result();

		$where = $this->session->userdata('id_agt');

		$data['peminjaman'] = $this->db->query("select*from transaksi t,user a where a.id_user=t.id_user and '$where'=a.id_user order by t.id_booking desc limit 1")->result();

		$data['data_booking'] = $this->db->query("select*from transaksi t,user a where a.id_user=t.id_user and '$where'=a.id_user order by t.id_booking desc")->result();

		$data['gmail'] = $this->db->query("select t.email_pemesan from transaksi t,user a where a.id_user=t.id_user and '$where'=a.id_user order by id_booking desc limit 1")->result();

		$d = $this->m_perpus->edit_data(array('id_user' => $this->session->userdata('id_agt')), 'transaksi')->num_rows();
		if ($d > 0) {
			$this->load->view('toplayout');
			$this->load->view('laporan_paket', $data);
		} else {
			echo "<script>alert('Data Masih Kosong !!')</script>";
			echo "<script>window.location='" . base_url() . "'</script>";
		}
	}

	//created by freeze
	public function konfirmasi_pembatalan($id)
	{
		$data_transaksi = $this->db->query(" select * from transaksi where id_booking = '$id' ")->result();
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
		$mail->Username = 'spaceroomuserdpk@gmail.com'; // user email
		$mail->Password = 'spaceroomcare'; // password email
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('spaceroomuserdpk@gmail.com', 'Konfrimasi Pembatalan'); // user email
		$mail->addReplyTo($email, $nama); //user email

		// Add a recipient
		$mail->addAddress('spaceroomdpk@gmail.com'); //email tujuan pengiriman email

		// Email subject
		$mail->Subject = 'Booking Ruangan Walkot'; //subject email

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<h2>Bookingan atas nama $nama dengan kode booking $id_booking minta dibatalkan!! </h2>
      <table border='1' cellpadding='10'>
      <tr>
      <td style='background-color: #636e72;'>id booking</td>
      <td style='background-color: #636e72;'>Tanggal Booking</td>
      <td style='background-color: #636e72;'>Biaya</td>
      </tr>
      <tr>
      <td>$id_booking</td>
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
			$data = array(
				'id_booking' => $id_booking,
				'id_user' => $id_user,
			);

			$this->m_perpus->insert_data($data, 'konfirmasi_pembatalan');
			echo "<script>alert('Konfirmasi Pembatalan telah telah dikirim !!')</script>";
			echo '<meta http-equiv="refresh" content="0;url=http://localhost:8080/spaceroom/peminjaman/cetak_laporan_paket">';
		}
	}

	function laporan_print_paket()
	{
		$data['user'] = $this->m_perpus->edit_data(array('id_user' => $this->session->userdata('id_agt')), 'user')->result();
		$where = $this->session->userdata('id_agt');
		$data['peminjaman'] = $this->db->query("select*from transaksi t,paket b,user a where t.id_paket=b.id_paket and a.id_user=t.id_user and '$where'=a.id_user order by t.id_booking desc limit 1")->result();
		$data['gmail'] = $this->db->query("select t.email from transaksi t,paket b,user a where t.id_paket=b.id_paket and a.id_user=t.id_user and '$where'=a.id_user order by id_booking desc limit 1")->result();
		$d = $this->m_perpus->edit_data(array('id_user' => $this->session->userdata('id_agt')), 'transaksi')->num_rows();
		if ($d > 0) {
			$this->load->view('toplayout');
			$this->load->view('laporan_print_paket', $data);
		}
	}
	function laporan_pdf_paket()
	{
		$this->load->library('dompdf_gen');

		$data['user'] = $this->m_perpus->edit_data(array('id_user' => $this->session->userdata('id_agt')), 'user')->result();
		$where = $this->session->userdata('id_agt');
		$data['peminjaman'] = $this->db->query("select*from transaksi t,paket b,user a where t.id_paket=b.id_paket and a.id_user=t.id_user and a.id_user=$where order by t.id_booking limit 1")->result();
		$d = $this->m_perpus->edit_data(array('id_user' => $this->session->userdata('id_agt')), 'transaksi')->num_rows();
		if ($d > 0) {
			$this->load->view('laporan_pdf_paket', $data);

			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();

			$this->dompdf->set_paper($paper_size, $orientation);
			//convert to pedf
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporan_data_paket.pdf", array('attachment' => 0));
			//nama file pdf yang dihasilkan
		}
	}
}
