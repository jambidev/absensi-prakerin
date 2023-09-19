<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	// cek jika belum absen
	public function cekAbsen()
	{
		$today = date("Y-m-d");
		$query = $this->db->where('tanggal', $today)
						  ->where('id_user', $this->session->userdata('id_user'))
						  ->get('tb_post');
		return $query->num_rows() == 0;
	}

	public function genIDj()
	{
		$query = $this->db->order_by('id_post', 'DESC')->limit(1)->get('tb_post')->row('id_post');
		$lastNo = substr($query, 4);
		$next = $lastNo + 1;
		$kd = 'KET';
		return $kd.sprintf('%04s', $next);
	}

	public function tambahjurnal($foto)
	{
		$data = array (
				 		'isi' => $this->input->post('keterangan'),
				  		'foto_kegiatan' => $foto['file_name'],
				  		'id_user' => $this->session->userdata('id_user'),
				  		'tanggal' => date("Y-m-d"),
				  		'status' => 'Menunggu konfirmasi',
				  		'id_post' => $this->genIDj(),
				  		'nama_siswa' => $this->session->userdata('jeneng'),
				  		'industri' =>  $this->getIndustri(),
				  		'ket_abs' => $this->input->post('ket_abs')
				  	  );
		$this->db->insert('tb_post', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getDataJurnal()
	{
		return $this->db->where('id_user', $this->session->userdata('id_user'))
						->order_by('tanggal', 'DESC')
						->get('tb_post')
						->result();
	}

	public function getKelas()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('kelas')
						 ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->kelas;
     	}
     	return TRUE;
	}

	public function getFoto()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('foto_siswa')
						 ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->foto_siswa;
     	}
     	return TRUE;
	}

	public function getIndustri()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('industri')
						 ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->industri;
     	}
     	return TRUE;
	}

	public function getKota()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('kota')
						 ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->kota;
     	}
     	return TRUE;
	}

	public function getNama()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('nama_siswa')
						  ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_siswa;
     	}
     	return TRUE;
	}

	public function getNo()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('no_telp_siswa')
						  ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->no_telp_siswa;
     	}
     	return TRUE;
	}

	public function getAlamat()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('alamat_prakerin')
						  ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->alamat_prakerin;
     	}
     	return TRUE;
	}

	public function getJK()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('jenis_kelamin')
						  ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->jenis_kelamin;
     	}
     	return TRUE;
	}

	public function getUser()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('username')
						  ->get('tb_login');
		if ($query->num_rows() > 0) {
         	return $query->row()->username;
     	}
     	return TRUE;
	}

	public function getPass()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('password')
						  ->get('tb_login');
		if ($query->num_rows() > 0) {
         	return $query->row()->password;
     	}
     	return TRUE;
	}

	public function editprofil()
	{
		$id_sw = $this->session->userdata('id_user');
		$data = array(
					 'nama_siswa' => $this->input->post('nama_siswa'),
				 	 'kelas' => $this->input->post('kelas'),
				  	 'no_telp_siswa' => $this->input->post('no_telp'),
				  	 'kota' => $this->input->post('kota'),
				  	 'jenis_kelamin' => $this->input->post('jk'),
				  	 'alamat_prakerin' => $this->input->post('alamat'),
				  	 'industri' => $this->input->post('industri'),
				);
		$login = array(
					  'username' => $this->input->post('username'),
					  'password' => $this->input->post('password'),
				);
		$this->db->where('id_user', $id_sw)->update('tb_user_siswa', $data);
		$this->db->where('id_user', $id_sw)->update('tb_login', $login);
		$this->session->set_userdata('jeneng', $this->input->post('nama_siswa'));
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getGuru()
	{
		$ind = $this->siswa_model->getIndustri();

     	$kueri = $this->db->where('nama_industri', $ind)
     					  ->select('nama_guru_pembimbing')
     					  ->get('tb_industri');
     	if ($kueri->num_rows() > 0) {
         	return $kueri->row()->nama_guru_pembimbing;
     	}
     	return TRUE;
	}

	public function noGuru()
	{
		$nama = $this->siswa_model->getGuru();
		$query = $this->db->where('nama_guru', $nama)
						  ->select('no_telp_guru')
						  ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->no_telp_guru;
     	}
     	return TRUE;
	}

	public function fotoGuru()
	{
		$nama = $this->siswa_model->getGuru();
		$query = $this->db->where('nama_guru', $nama)
						  ->select('foto_guru')
						  ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->foto_guru;
     	}
     	return TRUE;
	}

	public function editfoto($foto)
	{
		$id_sw = $this->session->userdata('id_user');
		$data = array(
				  	 'foto_siswa' => $foto['file_name']
				);
		$this->db->where('id_user', $id_sw)->update('tb_user_siswa', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getJurnal($id)
	{
		return $this->db->where('id_post', $id)
						->where('id_user', $this->session->userdata('id_user'))
						->get('tb_post')
						->row();
	}

	public function updatejurnal($foto)
	{
		$post = $this->input->post('idpost');
		$data = array(
				'ket_abs'	=> $this->input->post('ket_abs'),
				'isi'		=> $this->input->post('keterangan'),
				'foto_kegiatan' => $foto['file_name']
			);
		$this->db->where('id_post', $post)->update('tb_post', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function updatejurnaly()
	{
		$post = $this->input->post('idpost');
		$data = array(
				'ket_abs'	=> $this->input->post('ket_abs'),
				'isi'		=> $this->input->post('keterangan'),
			);
		$this->db->where('id_post', $post)->update('tb_post', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file Siswa_model.php */
/* Location: ./application/models/Siswa_model.php */