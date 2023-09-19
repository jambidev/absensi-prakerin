<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE) {
			if ($this->session->userdata('role') == '1') {
				redirect('admin');
			} else if ($this->session->userdata('role') == '2') {
				redirect('guru');
			} else if ($this->session->userdata('role') == '3') {
				redirect('siswa');
			} else if ($this->session->userdata('role') == '4') {
				redirect('industri');
			}
		} else {
			$data['title'] = 'Login - Prakerin SMK Telkom Malang 2017';
			$this->load->view('login_view', $data);
		}
	}

	//login
	public function masuk()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			if ($this->form_validation->run() == TRUE ) {
				if ($this->login_model->cek() == TRUE) {
					if ($this->session->userdata('role') == '1') {
						redirect('admin');
					} else if ($this->session->userdata('role') == '2') {
						redirect('guru');
					} else if ($this->session->userdata('role') == '3') {
						redirect('siswa');
					} else if ($this->session->userdata('role') == '4') {
						redirect('industri');
					}
				} else {
					$data = $this->session->set_flashdata('notif', 'Username atau Password salah');
					redirect('login');
				}
			} else {
				$data = $this->session->set_flashdata('notif', 'Lengkapi Username dan Password');
					redirect('login');
			}
		}
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */