<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('industri_model');
		$this->load->model('guru_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('role') == 4) {
			$data['main_view']='industri/dashboard_industri_view';
			$data['title'] = 'Jurnal Siswa - Prakerin SMK Telkom Malang 2017';
			$data['kota'] = $this->industri_model->getKota();
			$data['jurnal'] = $this->industri_model->getPost();
			$data['nama'] = $this->industri_model->getGuru();
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}		
	}

	public function logout()
	{
		$array = array(
			'username' => '',
			'logged_in'=> FALSE
		);
		
		$this->session->set_userdata( $array );
		redirect('login');		
	}

	public function updatestatus()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='industri/dashboard_industri_view';
			$this->industri_model->updatestatus();
			$this->load->view('template_view', $data);
			redirect('industri');
		} else {
			redirect('login');
		}
	}

	public function datasiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='industri/data_siswa_industri_view';
			$data['title'] = 'Data Siswa - Prakerin SMK Telkom Malang 2017';
			$data['kota'] = $this->industri_model->getKota();
			$data['siswa'] = $this->industri_model->getDataSiswa();
			$this->load->view('template_view', $data);
		} else {
			redirect('industri');
		}
	}

	public function detailsiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'industri/detail_siswa_view';
			$data['title'] = 'Profil Siswa - Prakerin SMK Telkom Malang 2017';
			$data['kota'] = $this->industri_model->getKota();
			//ambil data guru
			$id_sw = $this->uri->segment(3);
			$data['detil'] = $this->industri_model->get_siswa_by_id($id_sw);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('industri');
		}
	}

	public function datajurnal()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'industri/data_absen_view';
			$data['title'] = 'Jurnal Kegiatan Prakerin - Prakerin SMK Telkom Malang 2017';
			$data['kota'] = $this->industri_model->getKota();
			$data['foto'] = $this->guru_model->getFoto();
			//ambil data absen
			$id_sw = $this->uri->segment(3);
			$data['jurnal'] = $this->guru_model->get_post_by_id();
			$data['nama'] = $this->guru_model->getNamaSiswa();

			$this->load->view('template_view', $data);
		}
		else{
			redirect('login');
		}
	}

	public function dataguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'siswa/profil_guru_view';
			$data['title'] = 'Profil Guru - Prakerin SMK Telkom Malang 2017';
			$data['kota'] = $this->industri_model->getKota();
			$data['nama'] = $this->industri_model->getGuru();
			$data['no'] = $this->industri_model->getNo();
			$data['foto_guru'] = $this->industri_model->getFoto();
			$this->load->view('template_view', $data);
		}
		else{
			redirect('industri');
		}
	}

}

/* End of file Industri.php */
/* Location: ./application/controllers/Industri.php */