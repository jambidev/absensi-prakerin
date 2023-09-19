<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('guru_model');
		$this->load->model('industri_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('role') == 2) {
			$data['main_view']='guru/dashboard_guru_view';
			$data['title'] = 'Dashboard Guru - Prakerin SMK Telkom Malang 2017';
			$data['foto'] = $this->guru_model->getFoto();
			$data['kota'] = $this->guru_model->getKota();
			$data['siswa'] = $this->guru_model->getKotaSiswa();
			$data['jk'] = $this->guru_model->getJK();
			$data['countJumlahS'] = $this->guru_model->countJumlahSiswa();
			$data['countSudahAbsen'] = $this->guru_model->countSiswaSudahAbsen();
			$data['countTerconfirm'] = $this->guru_model->countSiswaConfirm();
			$data['countBelumTerconfirm'] = $this->guru_model->countSiswaBelumConfirm();
			$data['countSiswaMasukH'] = $this->guru_model->siswaMasukHariIni();
			$data['countSiswaIzinH'] = $this->guru_model->siswaIzinHariIni();
			$data['countSiswaSakitH'] = $this->guru_model->siswaSakitHariIni();
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
	
	public function datajurnal()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'guru/data_absen_view';
			$data['title'] = 'Jurnal Kegiatan Prakerin - Prakerin SMK Telkom Malang 2017';
			$data['foto'] = $this->guru_model->getFoto();
			$data['kota'] = $this->guru_model->getKota();
			//ambil data absen
			$id_sw = $this->uri->segment(3);
			$data['jurnal'] = $this->guru_model->get_post_by_id();
			$data['nama'] = $this->guru_model->getNamaSiswa();
			$data['jk'] = $this->guru_model->getJK();

			$this->load->view('template_view', $data);
		}
		else{
			redirect('login');
		}
	}

	public function profilsiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'guru/detail_siswa_view';
			$data['title'] = 'Data Siswa - Prakerin SMK Telkom Malang 2017';
			$data['kota'] = $this->guru_model->getKota();
			$data['foto'] = $this->guru_model->getFoto();
			//ambil data guru
			$id_sw = $this->uri->segment(3);
			$data['detil'] = $this->industri_model->get_siswa_by_id($id_sw);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('guru');
		}
	}

	public function profil()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'guru/profil_guru_edit_view';
			$data['title'] = 'Profil - Prakerin SMK Telkom Malang 2017';
			$data['foto'] = $this->guru_model->getFoto();
			$data['no'] = $this->guru_model->getNo();
			$data['kota'] = $this->guru_model->getKota();
			$data['user'] = $this->guru_model->getUser();
			$data['pass'] = $this->guru_model->getPass();
			$data['jk'] = $this->guru_model->getJK();
			$this->load->view('template_view', $data);
		}
		else{
			redirect('guru');
		}
	}

	public function updatefoto(){
		$config['upload_path'] = './uploads/foto_guru/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_sizes'] = '10240';

		$this->load->library('upload', $config);

		$id_gr = $this->session->userdata('id_user');
		if ($this->upload->do_upload('foto')) {
			if($this->guru_model->editfoto($this->upload->data()) == TRUE) {
				$this->session->set_flashdata('notif', 'Berhasil mengubah foto');
				redirect('guru/profil');
			} else {
				$this->session->set_flashdata('notif', 'Gagal mengubah foto');
				redirect('guru/profil');
			}
		} else {
			$this->session->set_flashdata('notif', 'Gagal mengubah foto');
			$id_gr = $this->session->userdata('id_user');
			redirect('guru/profil');
		}
	}

	public function updateprofil()
	{
		$this->guru_model->editprofil();
		$this->session->set_flashdata('notif', 'Berhasil mengubah profil');
		redirect('guru/profil');
	}

	public function rekapdata()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'guru/rekap_absen_view';
			$data['title'] = 'Rekap Absen Siswa - Prakerin SMK Telkom Malang 2017';
			$data['foto'] = $this->guru_model->getFoto();
			$data['kota'] = $this->guru_model->getKota();
			$data['siswa'] = $this->guru_model->getKotaSiswa();
			$data['jk'] = $this->guru_model->getJK();
			$data['countJumlahS'] = $this->guru_model->countJumlahSiswa();
			$data['countSudahAbsen'] = $this->guru_model->countSiswaSudahAbsen();
			$data['countTerconfirm'] = $this->guru_model->countSiswaConfirm();
			$data['countBelumTerconfirm'] = $this->guru_model->countSiswaBelumConfirm();
			$data['countSiswaMasukPerbulan'] = $this->guru_model->siswaMasukPerBulan();
			$data['countSiswaIzinPerbulan'] = $this->guru_model->siswaIzinPerBulan();
			$data['countSiswaSakitPerbulan'] = $this->guru_model->siswaSakitPerBulan();
			$data['countSiswaMasukH'] = $this->guru_model->siswaMasukHariIni();
			$data['countSiswaIzinH'] = $this->guru_model->siswaIzinHariIni();
			$data['countSiswaSakitH'] = $this->guru_model->siswaSakitHariIni();
			$id_sw = $this->uri->segment(3);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('guru');
		}
	}
}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */