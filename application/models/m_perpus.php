<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class M_perpus extends CI_Model{
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function get_data($table){
		return $this->db->get($table);
	}

	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

public function detailgalery($id_galery) {

		$this->load->database();
		$this->db->where('id_galery', $id_galery);
		return $this->db->get("galery")->result();
	}
	public function insert_detail($where)
		{
			$sql ="insert into detail_pinjam (id_booking,id_paket) select transaksi.id_booking,transaksi.id_paket from transaksi where transaksi.id_user='$where'";
			$this ->db->query($sql);
		}
			public function insert_detail_transaksi($where)
		{
			$sql ="insert into peminjaman (id_booking,nama,email,jam,tgl,notelp,almt,id_kategori,id_paket) select transaksi.id_booking, transaksi.nama, transaksi.email, transaksi.jam, transaksi.tgl, transaksi.notelp, transaksi.almt, transaksi.id_user, transaksi.id_paket from transaksi";
			$this ->db->query($sql);
		}

	public function detail($buku) {

        $this->load->database();
        $this->db->where('id_paket', $buku);
        return $this->db->get("buku")->result();
    }
	public function find($where,$table){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id_paket',$where)
		->limit(1)
		->get($table);
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

	public function kosongkan_data($table){
		return $this->db->truncate($table);
	}


	public function kode_otomatis(){
		$this->db->select('right(id_booking,3) as kode', false);
		$this->db->order_by('id_booking','desc');
		$this->db->limit(1);
		$query=$this->db->get('transaksi');
		if($query->num_rows()<>0){
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}

		$kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
		$kodejadi='SP'.$kodemax;

		return $kodejadi;


	}

	public function kode_otomatis_galery(){
		$this->db->select('right(id_galery,3) as kode', false);
		$this->db->order_by('id_galery','desc');
		$this->db->limit(1);
		$query=$this->db->get('galery_foto');
		if($query->num_rows()<>0){
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}

		$kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
		$kodejadi='GL'.$kodemax;

		return $kodejadi;


	}
	public function kode_otomatis_user(){
		$this->db->select('right(id_user,3) as kode', false);
		$this->db->order_by('id_user','desc');
		$this->db->limit(1);
		$query=$this->db->get('user');
		if($query->num_rows()<>0){
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}

		$kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
		$kodejadi='US'.$kodemax;

		return $kodejadi;


	}
	public function kode_otomatis_paket(){
		$this->db->select('right(id_paket,3) as kode', false);
		$this->db->order_by('id_paket','desc');
		$this->db->limit(1);
		$query=$this->db->get('paket');
		if($query->num_rows()<>0){
			$data=$query->row();
			$kode=intval($data->kode)+1;
		}else{
			$kode=1;
		}

		$kodemax=str_pad($kode,3,"0", STR_PAD_LEFT);
		$kodejadi='PK'.$kodemax;

		return $kodejadi;


	}
	public function get(){

		$this->load->database();
		$this->db->order_by("id_paket");
		$this->db->limit(99);
		return $this->db->get("buku")->result();		
	}

	//========================================================== MODEL SLIDE SHOW HOME ===============================================================


	public function detailslide($id_slide) {

		$this->load->database();
		$this->db->where('id_slide', $id_slide);
		return $this->db->get("slide")->result();
	}

	//===============================================================================================================================================

	public function detailkonten($id_konten) {

		$this->load->database();
		$this->db->where('id_konten', $id_konten);
		return $this->db->get("kontenhome1")->result();
	}

	//========================================================== MODEL SLIDE SHOW HOME ===========================================================

	public function get_list($table, $where = FALSE )
	{
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get($table)->result();
	}	

	public function insert($table, $param)
	{
		$this->db->insert($table, $param);
		return $this->db->insert_id();
	}

	public function update($table, $set, $where)
	{
		$this->db->where($where);
		$this->db->update($table, $set);
		return $this->db->affected_rows();
	}

	public function delete($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
		return $this->db->affected_rows();
	}
	//===============================================================================================================================================
}