<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri_model extends CI_Model {

	public function getKota()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('kota')
						 ->get('tb_industri');
		if ($query->num_rows() > 0) {
         	return $query->row()->kota;
     	}
     	return TRUE;
	}

	public function getIndustri()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('nama_industri')
						 ->get('tb_industri');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_industri;
     	}
     	return TRUE;
	}

	public function getPost()
	{
		$query = $this->getIndustri();

		return $this->db->where('industri', $query)
						->order_by('tanggal', 'DESC')
						->get('tb_post')
						->result();	
	}

	public function updatestatus()
	{
		$id = $this->uri->segment(3);
		return $this->db->where('id_post', $id)
						->set('status', 'Sudah dikonfirmasi')
						->update('tb_post');
	}

	public function getDataSiswa()
	{
		$query = $this->getIndustri();
		return $this->db->where('industri', $query)
						->order_by('nama_siswa', 'ASC')
						->get('tb_user_siswa')
						->result();
	}

	public function get_siswa_by_id($id_sw){
		return $this->db->where('id_user', $id_sw)
						->get('tb_user_siswa')
						->row();
	}

	public function getGuru()
	{
		$query =  $this->db->where('id_user', $this->session->userdata('id_user'))
						   ->select('nama_guru_pembimbing')
						   ->get('tb_industri');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_guru_pembimbing;
     	}
     	return TRUE;
	}

	public function getNo()
	{
		$guru = $this->getGuru();
		$query =  $this->db->where('nama_guru', $guru)
						   ->select('no_telp_guru')
						   ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->no_telp_guru;
     	}
     	return TRUE;
	}

	public function getFoto()
	{
		$guru = $this->getGuru();
		$query =  $this->db->where('nama_guru', $guru)
						   ->select('foto_guru')
						   ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->foto_guru;
     	}
     	return TRUE;
	}

}

/* End of file Industri_model.php */
/* Location: ./application/models/Industri_model.php */