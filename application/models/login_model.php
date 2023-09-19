<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function cek()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->get('tb_login');

		//cek db, set session
		if ($query->num_rows() > 0) {
			$data = array('username' => $username,
						  'logged_in' => TRUE,
						  'id_user' => $query->row()->id_user,
						  'role' => $query->row()->id_level,
						  'jeneng' => $query->row()->nama
						 );
			$this->session->set_userdata( $data );
			return TRUE;
		} else {
			return FALSE;
		}
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */