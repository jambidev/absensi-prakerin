<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

	public function getFoto()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('foto_guru')
						 ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->foto_guru;
     	}
     	return TRUE;
	}

	public function getKota()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('kota')
						 ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->kota;
     	}
     	return TRUE;
	}

	/*public function getIndustri()
	{
		$query = $this->db->where('nama_guru_pembimbing', $this->session->userdata('jeneng'))
						  ->select('nama_industri')
						  ->get('tb_industri');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_industri;
     	}
     	return TRUE;
	}*/

	public function getKotaSiswa()
	{
		$kueri = $this->db->where('nama_guru_pembimbing', $this->session->userdata('jeneng'))
						  ->order_by('nama_siswa', 'ASC')
						  ->get('tb_user_siswa')
						  ->result();
		return $kueri;
	}

	public function get_post_by_id()
	{
		$id_sw = $this->uri->segment(3);
		return $this->db->where('id_user', $id_sw)
						->order_by('tanggal', 'DESC')
						->get('tb_post')
						->result();
	}

	public function getNamaSiswa()
	{
		$id_sw = $this->uri->segment(3);
		$query = $this->db->where('id_user', $id_sw)
						  ->select('nama_siswa')
						  ->get('tb_user_siswa');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama_siswa;
     	}
     	return TRUE;
	}

	public function getNo()
	{
		$guru = $this->session->userdata('jeneng');
		$query =  $this->db->where('nama_guru', $guru)
						   ->select('no_telp_guru')
						   ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->no_telp_guru;
     	}
     	return TRUE;
	}

	public function editfoto($foto)
	{
		$id_gr = $this->session->userdata('id_user');
		$data = array(
				  	 'foto_guru' => $foto['file_name']
				);
		$this->db->where('id_user', $id_gr)->update('tb_user_guru', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editprofil()
	{
		$id_gr = $this->session->userdata('id_user');
		$data = array(
					 'nama_guru' => $this->input->post('nama_guru'),
				  	 'no_telp_guru' => $this->input->post('no_telp'),
				  	 'kota' => $this->input->post('kota'),
				  	 'jenis_kelamin' => $this->input->post('jk'),
				);
		$login = array(
					  'username' => $this->input->post('username'),
					  'password' => $this->input->post('password'),
				);
		$this->db->where('id_user', $id_gr)->update('tb_user_guru', $data);
		$this->db->where('id_user', $id_gr)->update('tb_login', $login);
		$this->session->set_userdata('jeneng', $this->input->post('nama_guru'));
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
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

	public function getJK()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						  ->select('jenis_kelamin')
						  ->get('tb_user_guru');
		if ($query->num_rows() > 0) {
         	return $query->row()->jenis_kelamin;
     	}
     	return TRUE;
	}

	public function countJumlahSiswa()
	{	
		// $sql = "SELECT COUNT(`nama_siswa`) FROM `tb_user_siswa` WHERE `nama_guru_pembimbing` = '".$this->session->userdata('jeneng')."' ";
		// $query = $this->db->query($sql);  
		
		$namaguru = $this->session->userdata('jeneng');	
		return $this->db->where('nama_guru_pembimbing', $namaguru)
						->from('tb_user_siswa')
						->count_all_results();
		// return $this->db->where('id_user', $this->session->userdata('id_user'))
		// 			->count_all('tb_user_siswa');		
	}

	public function countSiswaSudahAbsen()
	{
		// $sql = "SELECT COUNT(`tb_post`.`nama_siswa`) FROM `tb_post` LEFT JOIN `tb_user_siswa` ON `tb_post`.`id_user` = `tb_user_siswa`.`id_user` WHERE `tanggal` = '2018-01-10' AND `tb_user_siswa`.`nama_guru_pembimbing` = 'Dra. Peni Wardayani'"

		$namaguru = $this->session->userdata('jeneng');
		$tanggal = date('Y-m-d');

		return $this->db->select('tb_post.nama_siswa')
						->where('nama_guru_pembimbing', $namaguru)
						->where('tanggal', $tanggal)
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();

	}
	
	public function countSiswaConfirm()
	{
		// $sql = SELECT COUNT(`tb_post`.`nama_siswa`) FROM `tb_post` LEFT JOIN `tb_user_siswa` ON `tb_post`.`id_user` = `tb_user_siswa`.`id_user`WHERE `tb_post`.`tanggal` = '2018-01-10' AND `tb_user_siswa`.`nama_guru_pembimbing` = 'Dra. Peni Wardayani' AND `tb_post`.`status` = 'Sudah dikonfirmasi' 

		$namaguru = $this->session->userdata('jeneng');
		$tanggal = date('Y-m-d');

		return $this->db->select('tb_post.nama_siswa')
						->where('nama_guru_pembimbing', $namaguru)
						->where('tanggal', $tanggal)
						->where('tb_post.status', 'Sudah dikonfirmasi')
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();

	}

	public function countSiswaBelumConfirm()
	{
		$namaguru = $this->session->userdata('jeneng');
		$tanggal = date('Y-m-d');

		return $this->db->select('tb_post.nama_siswa')
						->where('nama_guru_pembimbing', $namaguru)
						->where('tanggal', $tanggal)
						->where('tb_post.status', 'Menunggu konfirmasi')
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaMasukPerBulan()
	{
		// $sql = SELECT COUNT(`tb_post`.`nama_siswa`) FROM `tb_post` LEFT JOIN `tb_user_siswa` ON `tb_post`.`id_user` = `tb_user_siswa`.`id_user` WHERE MONTH(`tb_post`.`tanggal`) = 01 AND YEAR(`tb_post`.`tanggal`) = 2018 AND `tb_post`.`ket_abs` = 'Masuk' AND `tb_user_siswa`.`nama_guru_pembimbing` = 'Dra. Peni Wardayani' ;

		$namaguru = $this->session->userdata('jeneng');
		$bulan = date('m');
		$tahun = date('Y');

		return $this->db->select('tb_post.id_user')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', "Masuk")
						->where('nama_guru_pembimbing', $namaguru)
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaSakitPerBulan()
	{
		$namaguru = $this->session->userdata('jeneng');
		$bulan = date('m');
		$tahun = date('Y');

		return $this->db->select('tb_post.id_user')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', "Sakit")
						->where('nama_guru_pembimbing', $namaguru)
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaIzinPerBulan()
	{
		$namaguru = $this->session->userdata('jeneng');
		$bulan = date('m');
		$tahun = date('Y');

		return $this->db->select('tb_post.id_user')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', "Izin")
						->where('nama_guru_pembimbing', $namaguru)
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaMasukHariIni() {
		$namaguru = $this->session->userdata('jeneng');
		$time = date('Y-m-d');

		return $this->db->select('tb_post.id_user')
						->where('tanggal', $time)
						->where('ket_abs', "Masuk")
						->where('nama_guru_pembimbing', $namaguru)
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaSakitHariIni() {
		$namaguru = $this->session->userdata('jeneng');
		$time = date('Y-m-d');

		return $this->db->select('tb_post.id_user')
						->where('tanggal', $time)
						->where('ket_abs', "Sakit")
						->where('nama_guru_pembimbing', $namaguru)
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaIzinHariIni() {
		$namaguru = $this->session->userdata('jeneng');
		$time = date('Y-m-d');

		return $this->db->select('tb_post.id_user')
						->where('tanggal', $time)
						->where('ket_abs', "Izin")
						->where('nama_guru_pembimbing', $namaguru)
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

}

/* End of file Guru_model.php */
/* Location: ./application/models/Guru_model.php */