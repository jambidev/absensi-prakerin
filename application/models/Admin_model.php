<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

	public function genIDg()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_user_guru')->row('id_user');
		$lastNo = substr($query, 2);
		$next = $lastNo + 1;
		$kd = 'GR';
		return $kd.sprintf('%02s', $next);
	}

	public function tambahguru($foto)
	{
		$login = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				  		'id_level' => '2',
				  		'id_user' => $this->genIDg(),
				  		'nama' => $this->input->post('nama_guru')
				  	  );
		$detail = array (
				 		'nama_guru' => $this->input->post('nama_guru'),
				  		'no_telp_guru' => $this->input->post('telp'),
				  		'kota' => $this->input->post('kota'),
				  		'jenis_kelamin' => $this->input->post('jk'),
				  		'foto_guru' => $foto['file_name'],
				  		'id_user' => $this->genIDg()
				  	  );
		$this->db->insert('tb_login', $login);
		$this->db->insert('tb_user_guru', $detail);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function tambahsiswa($foto)
	{
		$login = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				  		'id_level' => '3',
				  		'id_user' => $this->genIDs(),
				  		'nama' => $this->input->post('nama_siswa')
				  	  );
		$detail = array (
				 		'nama_siswa' => $this->input->post('nama_siswa'),
				 		'kelas' => $this->input->post('kelas'),
				  		'no_telp_siswa' => $this->input->post('telp'),
				  		'kota' => $this->input->post('kota'),
				  		'jenis_kelamin' => $this->input->post('jk'),
				  		'alamat_prakerin' => $this->input->post('alamat'),
				  		'industri' => $this->input->post('industri'),
				  		'foto_siswa' => $foto['file_name'],
				  		'id_user' => $this->genIDs()
				  	  );
		$this->db->insert('tb_login', $login);
		$this->db->insert('tb_user_siswa', $detail);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function genIDs()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_user_siswa')->row('id_user');
		$lastNo = substr($query, 3);
		$next = $lastNo + 1;
		$kd = 'SW';
		return $kd.sprintf('%03s', $next);
	}

	public function genIDa()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_user_admin')->row('id_user');
		$lastNo = substr($query, 2);
		$next = $lastNo + 1;
		$kd = 'AD';
		return $kd.sprintf('%02s', $next);
	}

	public function tambahadmin($foto)
	{
		$login = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				  		'id_level' => '1',
				  		'id_user' => $this->genIDa(),
				  		'nama' => $this->input->post('nama_admin')
				  	  );
		$detail = array (
				 		'nama' => $this->input->post('nama_admin'),
				  		'no_telp_admin' => $this->input->post('telp'),
				  		'foto_admin' => $foto['file_name'],
				  		'id_user' => $this->genIDa()
				  	  );
		$this->db->insert('tb_login', $login);
		$this->db->insert('tb_user_admin', $detail);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getIndustri()
	{
		$query = $this->db->get('tb_industri')->result();
		return $query;
	}

	public function getGuru()
	{
		$query = $this->db->get('tb_user_guru')->result();
		return $query;
	}

	public function getDataGuru()
	{
		return $this->db->order_by('nama_guru', 'ASC')->get('tb_user_guru')->result();
	}
	
	public function get_guru_by_id($id_gr){
		return $this->db->where('id_user', $id_gr)
						->get('tb_user_guru')
						->row();
	}

	public function get_guruu_by_id($id_gr){
		return $this->db->where('id_user', $id_gr)
						->get('tb_login')
						->row();
	}
	
	public function editguru($id_gr)
	{
		$data = array(
					 'nama_guru' => $this->input->post('nama_guru'),
					 'no_telp_guru' => $this->input->post('telp'),
					 'kota' => $this->input->post('kota'),
				  	 'jenis_kelamin' => $this->input->post('jk'),
				);
		$login = array(
					 'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
				);
		$this->db->where('id_user', $id_gr)->update('tb_user_guru', $data);
		$this->db->where('id_user', $id_gr)->update('tb_login', $login);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function getDataSiswa()
	{
		return $this->db->order_by('industri', 'ASC')
						->order_by('nama_siswa', 'ASC')
						->get('tb_user_siswa')
						->result();
	}

	public function get_siswa_by_id($id_sw){
		return $this->db->where('id_user', $id_sw)
						->get('tb_user_siswa')
						->row();
	}

	public function get_siswal_by_id($id_sw){
		return $this->db->where('id_user', $id_sw)
						->get('tb_login')
						->row();
	}

	public function editsiswa($id_sw)
	{
		$data = array(
					 'nama_siswa' => $this->input->post('nama_siswa'),
				 	 'kelas' => $this->input->post('kelas'),
				  	 'no_telp_siswa' => $this->input->post('telp'),
				  	 'kota' => $this->input->post('kota'),
				  	 'jenis_kelamin' => $this->input->post('jk'),
				  	 'alamat_prakerin' => $this->input->post('alamat'),
				  	 'industri' => $this->input->post('industri')
				);
		$login = array(
					 'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
				);
		$this->db->where('id_user', $id_sw)->update('tb_user_siswa', $data);
		$this->db->where('id_user', $id_sw)->update('tb_login', $login);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editfotosiswa($foto)
	{
		$id_sw = $this->uri->segment(3);
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

	public function editfotoguru($foto)
	{
		$id_gr = $this->uri->segment(3);
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
	
	public function hapusguru($id_gr)
	{
		$this->db->where('id_user', $id_gr)->delete('tb_user_guru');
		$this->db->where('id_user', $id_gr)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function hapussiswa($id_sw)
	{
		$this->db->where('id_user', $id_sw)->delete('tb_user_siswa');
		$this->db->where('id_user', $id_sw)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function genIDi()
	{
		$query = $this->db->order_by('id_user', 'DESC')->limit(1)->get('tb_industri')->row('id_user');
		$lastNo = substr($query, 2);
		$next = $lastNo + 1;
		$kd = 'ID';
		return $kd.sprintf('%02s', $next);
	}

	public function addindustri()
	{
		$login = array (
				 		'username' => $this->input->post('username'), 
				 		'password' => $this->input->post('password'),
				  		'id_level' => '4',
				  		'id_user' => $this->genIDi(),
				  		'nama' => $this->input->post('nama_ind')
				  	  );
		$detail = array (
				 		'nama_industri' => $this->input->post('nama_ind'),
				  		'no_telp_industri' => $this->input->post('telp'),
				  		'alamat_industri' => $this->input->post('alamat'),
				  		'kota' => $this->input->post('kota'),
				  		'id_user' => $this->genIDi(),
				  		'nama_guru_pembimbing' =>  $this->input->post('nama_guru')
				  	  );
		$this->db->insert('tb_login', $login);
		$this->db->insert('tb_industri', $detail);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editindustri($id_id)
	{
		$data = array(
					 'nama_industri' => $this->input->post('nama_industri'),
				  	 'no_telp_industri' => $this->input->post('telp'),
				  	 'kota' => $this->input->post('kota'),
				  	 'alamat_industri' => $this->input->post('alamat'),
				  	 'nama_guru_pembimbing' => $this->input->post('nama_guru_pembimbing')
				);
		$this->db->where('id_user', $id_id)->update('tb_industri', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function hapusindustri($id_id)
	{
		$this->db->where('id_user', $id_id)->delete('tb_industri');
		$this->db->where('id_user', $id_id)->delete('tb_login');
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_industri_by_id($id_id){
		return $this->db->where('id_user', $id_id)
						->get('tb_industri')
						->row();
	}

	public function get_industril_by_id($id_id){
		return $this->db->where('id_user', $id_id)
						->get('tb_login')
						->row();
	}

	public function getNamaGuru()
	{
		return $this->db->order_by('kota', 'ASC')
						->select('nama_guru')
						->get('tb_user_guru')
						->result();
	}

	public function getDataIndustri()
	{
		return $this->db->order_by('nama_industri', 'ASC')->get('tb_industri')->result();
	}

	public function countGuru()
	{
		return $this->db->count_all('tb_user_guru');
	}

	public function countSiswa()
	{
		return $this->db->count_all('tb_user_siswa');
	}

	public function countIndustri()
	{
		return $this->db->count_all('tb_industri');
	}

	public function tidakMasuk()
	{
		$bulan = date('m');
		$tahun = date('Y');

		return $this->db->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs !=', 'Masuk')
						->get('tb_post')
						->result();
	}

	public function getFoto()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('foto_admin')
						 ->get('tb_user_admin');
		if ($query->num_rows() > 0) {
         	return $query->row()->foto_admin;
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

	public function getNama()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('nama')
						 ->get('tb_login');
		if ($query->num_rows() > 0) {
         	return $query->row()->nama;
     	}
     	return TRUE;
	}

	public function getNo()
	{
		$query = $this->db->where('id_user', $this->session->userdata('id_user'))
						 ->select('no_telp_admin')
						 ->get('tb_user_admin');
		if ($query->num_rows() > 0) {
         	return $query->row()->no_telp_admin;
     	}
     	return TRUE;
	}

	public function getDataAdmin()
	{
		return $this->db->order_by('nama', 'ASC')
						->get('tb_user_admin')
						->result();
	}

	public function get_admin_by_id($id_ad){
		return $this->db->where('id_user', $id_ad)
						->get('tb_user_admin')
						->row();
	}

	public function editprofil($id_ad)
	{
		$data = array(
					 'nama' => $this->input->post('nama_admin'),
					 'no_telp_admin' => $this->input->post('no_telp'),
				);
		$login = array(
					 'username' => $this->input->post('username'),
					 'password' => $this->input->post('password'),
					 'nama' => $this->input->post('nama_admin'),
				);
		$this->db->where('id_user', $id_ad)->update('tb_user_admin', $data);
		$this->db->where('id_user', $id_ad)->update('tb_login', $login);
		$this->session->set_userdata('jeneng', $this->input->post('nama_admin'));
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function editfotoadmin($foto)
	{
		$id_ad = $this->session->userdata('id_user');;
		$data = array(
				  	 'foto_admin' => $foto['file_name']
				);
		$this->db->where('id_user', $id_ad)->update('tb_user_admin', $data);
		if ($this->db->affected_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	/*public function get_masuk_per_hari()
	{
		$bulan = date('m');
		$tahun = date('Y');

		return $this->db->select('tb_post.tanggal')
						->select('count(ket_abs) as masuk')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', 'Masuk')
						->group_by('tanggal');
	}*/

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
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaIzinPerBulan()
	{
		// $sql = SELECT COUNT(`tb_post`.`nama_siswa`) FROM `tb_post` LEFT JOIN `tb_user_siswa` ON `tb_post`.`id_user` = `tb_user_siswa`.`id_user` WHERE MONTH(`tb_post`.`tanggal`) = 01 AND YEAR(`tb_post`.`tanggal`) = 2018 AND `tb_post`.`ket_abs` = 'Masuk' AND `tb_user_siswa`.`nama_guru_pembimbing` = 'Dra. Peni Wardayani' ;

		$namaguru = $this->session->userdata('jeneng');
		$bulan = date('m');
		$tahun = date('Y');

		return $this->db->select('tb_post.id_user')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', "Izin")
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaSakitPerBulan()
	{
		// $sql = SELECT COUNT(`tb_post`.`nama_siswa`) FROM `tb_post` LEFT JOIN `tb_user_siswa` ON `tb_post`.`id_user` = `tb_user_siswa`.`id_user` WHERE MONTH(`tb_post`.`tanggal`) = 01 AND YEAR(`tb_post`.`tanggal`) = 2018 AND `tb_post`.`ket_abs` = 'Masuk' AND `tb_user_siswa`.`nama_guru_pembimbing` = 'Dra. Peni Wardayani' ;

		$namaguru = $this->session->userdata('jeneng');
		$bulan = date('m');
		$tahun = date('Y');

		return $this->db->select('tb_post.id_user')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', "Sakit")
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaMasukHariIni() {
		$time = date('Y-m-d');

		return $this->db->select('tb_post.id_user')
						->where('tanggal', $time)
						->where('ket_abs', "Masuk")
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaSakitHariIni() {
		$time = date('Y-m-d');

		return $this->db->select('tb_post.id_user')
						->where('tanggal', $time)
						->where('ket_abs', "Sakit")
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaIzinHariIni() {
		$time = date('Y-m-d');

		return $this->db->select('tb_post.id_user')
						->where('tanggal', $time)
						->where('ket_abs', "Izin")
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function tidakMasukBulannya()
	{
		$bulan = $this->input->post('bulan');
		$tahun = date('Y');

		return $this->db->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs !=', 'Masuk')
						->get('tb_post')
						->result();
	}

	public function bulannya()
	{
		$bulan = $this->input->post('bulan');
		$query =  $this->db->where('MONTH(tanggal)',$bulan)
						->get('tb_post');
		return $query->row()->tanggal;
	}

	public function siswaMasukBulannya()
	{
		$bulan = $this->input->post('bulan');
		$tahun = date('Y');

		return $this->db->select('tb_post.id_user')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', "Masuk")
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaIzinBulannya()
	{
		$bulan = $this->input->post('bulan');
		$tahun = date('Y');

		return $this->db->select('tb_post.id_user')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', "Izin")
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

	public function siswaSakitBulannya()
	{
		$bulan = $this->input->post('bulan');
		$tahun = date('Y');

		return $this->db->select('tb_post.id_user')
						->where('MONTH(tanggal)', $bulan)
						->where('YEAR(tanggal)', $tahun)
						->where('ket_abs', "Sakit")
						->from('tb_post')
						->join('tb_user_siswa', 'tb_post.id_user = tb_user_siswa.id_user', 'left')
						->count_all_results();
	}

}
/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */