<?php
defined('BASEPATH') or exit('NO Direct Script Acces Allowed');

class galery extends CI_Controller
{

	function index()
	{
		$data['user'] = $this->m_perpus->get_data('user')->result();
		$dataAktif = $this->db->query("SELECT * FROM galery where aktif 
							  = 'aktif' ORDER BY id_galery DESC LIMIT 1 ")->result();
		foreach ($dataAktif as $value) {
			$getAktif = $value->id_galery;
		}
		$data['ruangan'] = $this->db->query("SELECT * FROM ruangan r, galery g where g.id_galery = '$getAktif' AND r.id_ruangan = g.id_ruangan AND g.aktif = 'aktif' ORDER BY r.id_ruangan DESC")->result();

		$data['header'] = 'Katalog paket';
		$this->load->view('toplayout');
		$this->load->view('galery_foto', $data);
	}
	function galeri()
	{
		$data['galery'] = $this->db->query("select * from galery where id_galery")->result();
		$this->load->view('toplayout');
		$this->load->view('galeri', $data);
	}	
	//created by freeze
	public function testimoni()
	{
		$data['testimoni'] = $this->db->query("SELECT * FROM dokumentasi")->result();
		$this->load->view('toplayout');
		$this->load->view('testimoni_show', $data);
	}

	public function tambah_testimoni($id){
		$data['id_booking'] = $this->db->query(" SELECT * FROM transaksi WHERE id_booking = '$id' ")->result();
		$this->load->view('toplayout');
		$this->load->view('testimoni', $data);
	}
	public function act_testimoni(){

		$id_booking = $this->input->post('id_booking');
		$id_user = $this->input->post('id_user');
			//configurasi upload gambar
		$config['upload_path'] = './assets/upload/dokumentasi/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['file_name'] = 'gambar' . time();

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			$image = $this->upload->data();

			$data = array(
				'id_booking' => $id_booking,
				'id_user' => $id_user,
				'gambar' => $image['file_name'],

			);
			$this->m_perpus->insert_data($data, 'dokumentasi');
			redirect('galery/testimoni');
		} else{
			echo '<script>return alert("Foto anda tidak masuk !!")</script>';
		}
	}
}

