<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->model('admin_model');
	}
	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('role') == 3) {
			$data['main_view'] = 'siswa/dashboard_siswa_view';
			$data['title'] = 'Dashboard Siswa - Prakerin SMK Telkom Malang 2017';
			$data['isAbsen'] = $this->siswa_model->cekAbsen();
			$data['jurnal'] = $this->siswa_model->getDatajurnal();
			$data['kelas'] = $this->siswa_model->getKelas();
			$data['foto'] = $this->siswa_model->getFoto();
			$data['industri'] = $this->siswa_model->getIndustri();
			$data['kota'] = $this->siswa_model->getKota();
			$data['jk'] = $this->siswa_model->getJK();
			/*if ($this->siswa_model->cekAlpha() == TRUE) {
				$this->siswa_model->tambahAlpha();
			}*/
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

	public function insertjurnal()
	{
		$config['upload_path'] = './uploads/foto_prakerin/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '10240';
		// kalau error karena max. size, ubah di file php.ini (post_max_size) dan (upload_max_filesize)

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			if($this->siswa_model->tambahjurnal($this->upload->data()) == TRUE) {
				$data['main_view'] = 'dashboard_siswa_view';
				$this->session->set_flashdata('notif', 'Berhasil absen');
				redirect('siswa');
			} else {
				$data['main_view'] = 'dashboard_siswa_view';
				$this->session->set_flashdata('notif', 'Gagal absen');
				redirect('siswa');
			}
		} else {
			$data['main_view'] = 'dashboard_siswa_view';
			$this->session->set_flashdata('notif', 'Gagal absen');
			redirect('siswa');
		}
	}

	public function profilku()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('role') == 3) {
			$data['main_view'] = 'siswa/profil_siswa_view';
			$data['title'] = 'Profilku - Prakerin SMK Telkom Malang 2017';
			$data['kelas'] = $this->siswa_model->getKelas();
			$data['foto'] = $this->siswa_model->getFoto();
			$data['industri'] = $this->siswa_model->getIndustri();
			$data['kota'] = $this->siswa_model->getKota();
			$data['nama'] = $this->siswa_model->getNama();
			$data['no'] = $this->siswa_model->getNo();
			$data['alamat'] = $this->siswa_model->getAlamat();
			$data['jk'] = $this->siswa_model->getJK();
			$data['user'] = $this->siswa_model->getUser();
			$data['pass'] = $this->siswa_model->getPass();
			$this->load->view('template_view', $data);
		}
		else{
			redirect('siswa');
		}
	}

	public function updateprofil()
	{
		$this->siswa_model->editprofil();
		$data['main_view'] = 'siswa/profil_siswa_view';
		$this->session->set_flashdata('notif', 'Berhasil mengubah profil');
		redirect('siswa/profilku');
	}

	public function profilguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'siswa/profil_guru_view';
			$data['title'] = 'Profil Guru - Prakerin SMK Telkom Malang 2017';
			$data['kelas'] = $this->siswa_model->getKelas();
			$data['foto'] = $this->siswa_model->getFoto();
			$data['industri'] = $this->siswa_model->getIndustri();
			$data['kota'] = $this->siswa_model->getKota();
			$data['nama'] = $this->siswa_model->getGuru();
			$data['no'] = $this->siswa_model->noGuru();
			$data['foto_guru'] = $this->siswa_model->fotoGuru();
			$data['jk'] = $this->siswa_model->getJK();
			$this->load->view('template_view', $data);
		}
		else{
			redirect('siswa');
		}
	}

	public function updatefoto(){
		$config['upload_path'] = './uploads/foto_siswa/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_sizes'] = '10240';

		$this->load->library('upload', $config);

		$id_sw = $this->session->userdata('id_user');
		if ($this->upload->do_upload('foto')) {
			if($this->siswa_model->editfoto($this->upload->data()) == TRUE) {
				$data['main_view'] = 'profil_siswa_view';
				$this->session->set_flashdata('notif', 'Berhasil mengubah foto');
				redirect('siswa/profilku');
			} else {
				$data['main_view'] = 'profil_siswa_view';
				$this->session->set_flashdata('notif', 'Gagal mengubah foto');
				redirect('siswa/profilku');
			}
		} else {
			$data['main_view'] = 'profil_siswa_view';
			$this->session->set_flashdata('notif', 'Gagal mengubah foto');
			$id_sw = $this->session->userdata('id_user');
			redirect('siswa/profilku');
		}
	}

	public function updatejurnal()
	{
		$id = $this->input->post('id');
		$data['jurnal'] = $this->siswa_model->getJurnal($id);
		$this->load->view('siswa/update_jurnal_view', $data);
	}

	public function updatejurnalnya()
	{
		if ($_FILES['foto']['size'] == 0) {
			if($this->siswa_model->updatejurnaly()) {
				$data['main_view'] = 'dashboard_siswa_view';
				$this->session->set_flashdata('notif', 'Berhasil mengubah jurnal');
				redirect('siswa');
			} else {
				$data['main_view'] = 'dashboard_siswa_view';
				$this->session->set_flashdata('notif', 'Gagal mengubah jurnal');
				redirect('siswa');
			}
		} else {
			$config['upload_path'] = './uploads/foto_prakerin/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_sizes'] = '10240';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->siswa_model->updatejurnal($this->upload->data())) {
					$data['main_view'] = 'dashboard_siswa_view';
					$this->session->set_flashdata('notif', 'Berhasil mengubah jurnal');
					redirect('siswa');
				} else {
					$data['main_view'] = 'dashboard_siswa_view';
					$this->session->set_flashdata('notif', 'Gagal mengubah jurnal');
					redirect('siswa');
				}
			} else {
				$data['main_view'] = 'dashboard_siswa_view';
				$this->session->set_flashdata('notif', 'Gagal mengubah jurnal');
				$id_sw = $this->session->userdata('id_user');
				redirect('siswa');
			}
		}
	}
}
/* End of file Siswa.php */
/* Location: ./application/controllers/Siswa.php */