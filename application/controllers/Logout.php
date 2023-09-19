<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$this->session->sess_destroy();
			redirect('/');
		}
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */