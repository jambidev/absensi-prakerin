<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('guru_model');
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('role') == 1) {
			$data['main_view']='admin/dashboard_admin_view';
			$data['countG'] = $this->admin_model->countGuru();
			$data['countS'] = $this->admin_model->countSiswa();
			$data['countI'] = $this->admin_model->countIndustri();
			$data['foto'] = $this->admin_model->getFoto();
			$data['absen'] = $this->admin_model->tidakmasuk();
			$data['countSiswaMasukPerbulan'] = $this->admin_model->siswaMasukPerBulan();
			$data['countSiswaIzinPerbulan'] = $this->admin_model->siswaIzinPerBulan();
			$data['countSiswaSakitPerbulan'] = $this->admin_model->siswaSakitPerBulan();
			$data['siswaMasukHariIni'] = $this->admin_model->siswaMasukHariIni();
			$data['siswaIzinHariIni'] = $this->admin_model->siswaIzinHariIni();
			$data['siswaSakitHariIni'] = $this->admin_model->siswaSakitHariIni();
			$data['title'] = 'Dashboard Admin - Prakerin SMK Telkom Malang 2018';
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}	
	}

	public function dashboard()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('role') == 1) {
			$data['main_view'] = 'admin/dashboard_admin_rekap_view';
			$data['title'] = 'Dashboard Admin - Prakerin SMK Telkom Malang 2018';
			$data['countG'] = $this->admin_model->countGuru();
			$data['countS'] = $this->admin_model->countSiswa();
			$data['countI'] = $this->admin_model->countIndustri();
			$data['foto'] = $this->admin_model->getFoto();
			$data['absen'] = $this->admin_model->tidakMasukBulannya();
			$data['bulan'] = $this->admin_model->bulannya();
			$data['countSiswaMasukPerbulan'] = $this->admin_model->siswaMasukPerBulan();
			$data['countSiswaIzinPerbulan'] = $this->admin_model->siswaIzinPerBulan();
			$data['countSiswaSakitPerbulan'] = $this->admin_model->siswaSakitPerBulan();
			$data['siswaMasukBulannya'] = $this->admin_model->siswaMasukBulannya();
			$data['siswaIzinBulannya'] = $this->admin_model->siswaIzinBulannya();
			$data['siswaSakitBulannya'] = $this->admin_model->siswaSakitBulannya();
			$this->load->view('template_view', $data);
		}
		else{
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

	public function addguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='admin/add_guru_view';
			$data['title'] = 'Tambah Data Guru - Prakerin SMK Telkom Malang 2018';
			$data['foto'] = $this->admin_model->getFoto();
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}
	}

	public function addsiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='admin/add_siswa_view';
			$data['title'] = 'Tambah Data Siswa - Prakerin SMK Telkom Malang 2018';
			$data['industri'] = $this->admin_model->getIndustri();
			$data['guru'] = $this->admin_model->getGuru();
			$data['foto'] = $this->admin_model->getFoto();
			$data['foto'] = $this->admin_model->getFoto();
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}
	}

	//tambah data guru
	public function insertguru()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('nama_guru', 'Nama guru', 'trim|required');
		$this->form_validation->set_rules('telp', 'No. Telp', 'trim|required|min_length[11]|max_length[12]');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_guru/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '1024';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->admin_model->tambahguru($this->upload->data()) == TRUE) {
					$data['main_view'] = 'admin/add_guru_view';
					$this->session->set_flashdata('notif', 'Berhasil menambahkan data guru');
					redirect('admin/addguru');
				} else {
					$data['main_view'] = 'admin/add_guru_view';
					$this->session->set_flashdata('notif', 'Gagal menambahkan data guru');
					redirect('admin/addguru');
				}
			} else {
				$data['main_view'] = 'admin/add_guru_view';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('admin/addguru');
			}
		} else {
			$data['main_view'] = 'admin/add_guru_view';
			$this->session->set_flashdata('notif', 'Lengkapi semua field');
			redirect('admin/addguru');
		}
	}

	//tambah data siswa
	public function insertsiswa()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('nama_siswa', 'Nama guru', 'trim|required');
		$this->form_validation->set_rules('telp', 'No. Telp', 'trim|required|min_length[11]|max_length[12]|numeric');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('industri', 'Industri', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$config['upload_path'] = './uploads/foto_siswa/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '10240';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->admin_model->tambahsiswa($this->upload->data()) == TRUE) {
					$data['main_view'] = 'add_siswa_view';
					$this->session->set_flashdata('notif', 'Berhasil menambahkan data siswa');
					redirect('admin/addsiswa');
				} else {
					$data['main_view'] = 'add_siswa_view';
					$this->session->set_flashdata('notif', 'Gagal menambahkan data siswa');
					redirect('admin/addsiswa');
				}
			} else {
				$data['main_view'] = 'dashboard_admin';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('admin/addsiswa');
			}
		} else {
			$data['main_view'] = 'dashboard_admin';
			$this->session->set_flashdata('notif', 'Lengkapi semua field');
			redirect('admin/addsiswa');
		}
	}

	//show data siswa
	public function datasiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='admin/data_siswa_view';
			$data['title'] = 'Data Siswa - Prakerin SMK Telkom Malang 2018';
			$data['siswa'] = $this->admin_model->getDataSiswa();
			$data['foto'] = $this->admin_model->getFoto();
			$this->load->view('template_view', $data);
		} else {
			redirect('admin');
		}
	}

	//show data guru
	public function dataguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='admin/data_guru_view';
			$data['title'] = 'Data Guru - Prakerin SMK Telkom Malang 2018';
			$data['guru'] = $this->admin_model->getDataGuru();
			$data['foto'] = $this->admin_model->getFoto();
			$this->load->view('template_view', $data);
		} else {
			redirect('admin');
		}
	}

	//edit data guru view
	public function editguru()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/edit_guru_view';
			$data['title'] = 'Ubah Data Guru - Prakerin SMK Telkom Malang 2018';
			//ambil data guru
			$id_gr = $this->uri->segment(3);
			$data['foto'] = $this->admin_model->getFoto();
			$data['detil'] = $this->admin_model->get_guru_by_id($id_gr);
			$data['detill'] = $this->admin_model->get_guruu_by_id($id_gr);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('admin/dataguru');
		}
	}

	//update data guru
	public function updateguru($id_gr)
	{
		$this->admin_model->editguru($id_gr);
		$data['main_view'] = 'admin/data_guru_view';
		$this->session->set_flashdata('notif', 'Berhasil mengubah data guru');
		$id_gr = $this->uri->segment(3);
		redirect('admin/dataguru');
	}

	//edit data siswa view
	public function editsiswa()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/edit_siswa_view';
			$data['title'] = 'Ubah Data Siswa - Prakerin SMK Telkom Malang 2018';
			//ambil data siswa
			$id_sw = $this->uri->segment(3);
			$data['foto'] = $this->admin_model->getFoto();
			$data['detil'] = $this->admin_model->get_siswa_by_id($id_sw);
			$data['detill'] = $this->admin_model->get_siswal_by_id($id_sw);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('admin/datasiswa');
		}
	}

	//update data siswa
	public function updatesiswa($id_sw)
	{
		$this->admin_model->editsiswa($id_sw);
		$data['main_view'] = 'admin/data_siswa_view';
		$this->session->set_flashdata('notif', 'Berhasil mengubah data siswa');
		$id_sw = $this->uri->segment(3);
		redirect('admin/datasiswa');
	}

	public function updatefotosiswa($id_sw)
	{
		$config['upload_path'] = './uploads/foto_siswa/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_sizes'] = '10240';

		$this->load->library('upload', $config);

		$id_sw = $this->uri->segment(3);
		if ($this->upload->do_upload('foto')) {
			if($this->admin_model->editfotosiswa($this->upload->data()) == TRUE) {
				$data['main_view'] = 'admin/data_siswa_view';
				$this->session->set_flashdata('notif', 'Berhasil mengubah foto');
				redirect('admin/datasiswa');
			} else {
				$data['main_view'] = 'admin/edit_siswa_view';
				$this->session->set_flashdata('notif', 'Gagal mengubah foto');
				redirect('admin/datasiswa');
			}
		} else {
			$data['main_view'] = 'admin/edit_siswa_view';
			$this->session->set_flashdata('notif', 'Gagal mengubah foto');
			$id_sw = $this->uri->segment(3);
			redirect('admin/datasiswa');
		}
	}

	public function updatefotoguru($id_gr)
	{
		$config['upload_path'] = './uploads/foto_guru/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_sizes'] = '10240';

		$this->load->library('upload', $config);

		$id_sw = $this->uri->segment(3);
		if ($this->upload->do_upload('foto')) {
			if($this->admin_model->editfotoguru($this->upload->data()) == TRUE) {
				$data['main_view'] = 'admin/data_guru_view';
				$this->session->set_flashdata('notif', 'Berhasil mengubah foto');
				redirect('admin/dataguru');
			} else {
				$data['main_view'] = 'admin/edit_guru_view';
				$this->session->set_flashdata('notif', 'Gagal mengubah foto');
				redirect('admin/dataguru');
			}
		} else {
			$data['main_view'] = 'admin/edit_guru_view';
			$this->session->set_flashdata('notif', 'Gagal mengubah foto');
			$id_sw = $this->uri->segment(3);
			redirect('admin/dataguru');
		}
	}

	public function deleteguru()
	{
		$id_gr = $this->uri->segment(3);
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->admin_model->hapusguru($id_gr) == TRUE) {
				$this->session->set_flashdata('notif', 'Berhasil menghapus data guru');
				redirect('admin/dataguru');
			} else {
				$this->session->set_flashdata('notif', 'Gagal menghapus data guru');
				redirect('admin/dataguru');
			}
		} else {
			redirect('admin/dataguru');
		}
	}

	public function deletesiswa()
	{
		$id_sw = $this->uri->segment(3);
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->admin_model->hapussiswa($id_sw) == TRUE) {
				$this->session->set_flashdata('notif', 'Berhasil menghapus data siswa');
				redirect('admin/datasiswa');
			} else {
				$this->session->set_flashdata('notif', 'Gagal menghapus data siswa');
				redirect('admin/datasiswa');
			}
		} else {
			redirect('admin/datasiswa');
		}
	}

	public function addindustri()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/add_industri_view';
			$data['title'] = 'Tambah Data Industri - Prakerin SMK Telkom Malang 2018';
			$data['nama_guru'] = $this->admin_model->getNamaGuru();
			$data['foto'] = $this->admin_model->getFoto();
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}
	}

	public function insertindustri()
	{
		if ($this->input->post('insert')) {
			$this->form_validation->set_rules('alamat', 'Alamat Industri', 'trim|required');
			if ($this->form_validation->run() == TRUE ) {
				if ($this->admin_model->addindustri() == TRUE) {
					$this->session->set_flashdata('notif', 'Berhasil menambah data industri');
					redirect('admin/addindustri');
				} else {
					$this->session->set_flashdata('notif', 'Gagal menambah data industri');
					redirect('admin/addindustri');
				}
			} else {
				$this->session->set_flashdata('notif', 'Lengkapi field');
				redirect('admin/addindustri');
			}
		}
	}

	public function dataindustri()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='admin/data_industri_view';
			$data['title'] = 'Data Industri - Prakerin SMK Telkom Malang 2018';
			$data['industri'] = $this->admin_model->getDataIndustri();
			$data['foto'] = $this->admin_model->getFoto();
			$this->load->view('template_view', $data);
		} else {
			redirect('admin');
		}
	}

	public function deleteindustri()
	{
		$id_id = $this->uri->segment(3);
		if ($this->session->userdata('logged_in') == TRUE) {
			if ($this->admin_model->hapusindustri($id_id) == TRUE) {
				$this->session->set_flashdata('notif', 'Berhasil menghapus data industri');
				redirect('admin/dataindustri');
			} else {
				$this->session->set_flashdata('notif', 'Gagal menghapus data industri');
				redirect('admin/dataindustri');
			}
		} else {
			redirect('admin/dataindustri');
		}
	}

	public function editindustri()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/edit_industri_view';
			$data['title'] = 'Ubah Data Industri - Prakerin SMK Telkom Malang 2018';
			//ambil data industri
			$id_id = $this->uri->segment(3);
			$data['foto'] = $this->admin_model->getFoto();
			$data['detil'] = $this->admin_model->get_industri_by_id($id_id);
			$data['detill'] = $this->admin_model->get_industril_by_id($id_id);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('admin/dataindustri');
		}
	}

	//update data siswa
	public function updateindustri($id_id)
	{
		$this->form_validation->set_rules('nama_industri', 'Nama Industri', 'trim|required');
		$this->form_validation->set_rules('telp', 'No. Telp', 'trim|required|numeric');
		$this->form_validation->set_rules('nama_guru_pembimbing', 'Industri', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Industri', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {

			if($this->admin_model->editindustri($id_id) == TRUE) {
				$data['main_view'] = 'admin/data_industri_view';
				$this->session->set_flashdata('notif', 'Berhasil mengubah data industri');
				$id_id = $this->uri->segment(3);
					redirect('admin/dataindustri');
			} else {
				$data['main_view'] = 'admin/data_industri_view';
				$this->session->set_flashdata('notif', 'Gagal mengubah data industri');
				$id_id = $this->uri->segment(3);
				redirect('admin/dataindustri');
			}
		} 
		else {
			$data['main_view'] = 'admin/data_industri_view';
			$this->session->set_flashdata('notif', 'Lengkapi semua field');
			$id_id = $this->uri->segment(3);
			redirect('admin/dataindustri');
		}
	}

	public function datajurnal()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/data_absen_view';
			$data['title'] = 'Jurnal Kegiatan Prakerin - Prakerin SMK Telkom Malang 2018';
			$data['foto'] = $this->guru_model->getFoto();
			$data['kota'] = $this->guru_model->getKota();
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

	public function importsiswa()
	{
		$fileName = $this->input->post('import', TRUE);

  		$config['upload_path'] = './uploads/import_siswa/'; 
  		$config['file_name'] = $fileName;
  		$config['allowed_types'] = 'xlsx';
  		$config['encrypt_name']= TRUE;
  		$config['max_size'] = 10240;

  		$this->load->library('upload', $config);
  		$this->upload->initialize($config); 
  
  		if (!$this->upload->do_upload('import')) {
   			$this->session->set_flashdata('notif','Gagal import data siswa'); 
   			redirect('admin/addsiswa'); 
 		} else {
   			$media = $this->upload->data();
   			$inputFileName = './uploads/import_siswa/'.$media['file_name'];
   
   			try {
    			$inputFileType = IOFactory::identify($inputFileName);
    			$objReader = IOFactory::createReader($inputFileType);
    			$objPHPExcel = $objReader->load($inputFileName);
  			} catch(Exception $e) {
    			die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
  			}

  			$sheet = $objPHPExcel->getSheet(0);
  			$highestRow = $sheet->getHighestRow();
  			$highestColumn = $sheet->getHighestColumn();

  			for ($row = 2; $row <= $highestRow; $row++){  
   				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
     			NULL,
     			TRUE,
     			FALSE);
   				$login = array(
		     		"id_user"=> trim(preg_replace("/[^a-zA-Z0-9]/", "", $this->admin_model->genIDs())), // opsional hapus spasi depan
		     		"id_level"=> '3',
		     		"nama"=> $rowData[0][2],
		     		"username"=> $rowData[0][0],
		     		"password"=> $rowData[0][1]);
	     		$data = array(
		     		"id_user"=> trim(preg_replace("/[^a-zA-Z0-9]/", "", $this->admin_model->genIDs())), // opsional hapus spasi depan
		     		"nama_siswa"=> $rowData[0][2],
		     		"foto_siswa"=> '-',
		     		"kelas"=> $rowData[0][3],
		     		"industri"=> $rowData[0][4],
		     		"kota"=> $rowData[0][5],
		     		"nama_guru_pembimbing"=> $rowData[0][6],
		     		"jenis_kelamin"=> $rowData[0][7],
		     		"no_telp_siswa"=> $rowData[0][8],
		     		"alamat_prakerin"=> $rowData[0][9],);
	   			$this->db->insert("tb_login",$login);
	   			$this->db->insert("tb_user_siswa",$data);
 			} 
   			unlink($inputFileName); // hapus file temp
   			// $count = $highestRow;
   			$this->session->set_flashdata('notif','Berhasil import data siswa'); 
   			redirect('admin/addsiswa');
 		}
	}

	public function importguru()
	{
		$fileName = $this->input->post('import', TRUE);

  		$config['upload_path'] = './uploads/import_guru/'; 
  		$config['file_name'] = $fileName;
  		$config['allowed_types'] = 'xlsx';
  		$config['encrypt_name']= TRUE;
  		$config['max_size'] = 10240;

  		$this->load->library('upload', $config);
  		$this->upload->initialize($config); 
  
  		if (!$this->upload->do_upload('import')) {
   			$this->session->set_flashdata('notif','Gagal import data guru'); 
   			redirect('admin/addguru'); 
 		} else {
   			$media = $this->upload->data();
   			$inputFileName = './uploads/import_guru/'.$media['file_name'];
   
   			try {
    			$inputFileType = IOFactory::identify($inputFileName);
    			$objReader = IOFactory::createReader($inputFileType);
    			$objPHPExcel = $objReader->load($inputFileName);
  			} catch(Exception $e) {
    			die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
  			}

  			$sheet = $objPHPExcel->getSheet(0);
  			$highestRow = $sheet->getHighestRow();
  			$highestColumn = $sheet->getHighestColumn();

  			for ($row = 2; $row <= $highestRow; $row++){  
   				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
     			NULL,
     			TRUE,
     			FALSE);
   				$login = array(
		     		"id_user"=> trim(preg_replace("/[^a-zA-Z0-9]/", "", $this->admin_model->genIDg())), // opsional hapus spasi depan
		     		"id_level"=> '2',
		     		"nama"=> $rowData[0][2],
		     		"username"=> $rowData[0][0],
		     		"password"=> $rowData[0][1]);
	     		$data = array(
		     		"id_user"=> trim(preg_replace("/[^a-zA-Z0-9]/", "", $this->admin_model->genIDg())), // opsional hapus spasi depan
		     		"nama_guru"=> $rowData[0][2],
		     		"jenis_kelamin"=> $rowData[0][3],
		     		"foto_guru"=> '-',
		     		"no_telp_guru"=> $rowData[0][4],
		     		"kota"=> $rowData[0][5],);
	   			$this->db->insert("tb_login",$login);
	   			$this->db->insert("tb_user_guru",$data);
 			} 
   			unlink($inputFileName); // hapus file temp
   			// $count = $highestRow;
   			$this->session->set_flashdata('notif','Berhasil import data guru'); 
   			redirect('admin/addguru');
 		}
	}

	public function importindustri()
	{
		$fileName = $this->input->post('import', TRUE);

  		$config['upload_path'] = './uploads/import_industri/'; 
  		$config['file_name'] = $fileName;
  		$config['allowed_types'] = 'xlsx';
  		$config['encrypt_name']= TRUE;
  		$config['max_size'] = 10240;

  		$this->load->library('upload', $config);
  		$this->upload->initialize($config); 
  
  		if (!$this->upload->do_upload('import')) {
   			$this->session->set_flashdata('notif','Gagal import data industri'); 
   			redirect('admin/addindustri'); 
 		} else {
   			$media = $this->upload->data();
   			$inputFileName = './uploads/import_industri/'.$media['file_name'];
   
   			try {
    			$inputFileType = IOFactory::identify($inputFileName);
    			$objReader = IOFactory::createReader($inputFileType);
    			$objPHPExcel = $objReader->load($inputFileName);
  			} catch(Exception $e) {
    			die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
  			}

  			$sheet = $objPHPExcel->getSheet(0);
  			$highestRow = $sheet->getHighestRow();
  			$highestColumn = $sheet->getHighestColumn();

  			for ($row = 2; $row <= $highestRow; $row++){  
   				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
     			NULL,
     			TRUE,
     			FALSE);
   				$login = array(
		     		"id_user"=> trim(preg_replace("/[^a-zA-Z0-9]/", "", $this->admin_model->genIDi())), // opsional hapus spasi depan
		     		"id_level"=> '4',
		     		"nama"=> $rowData[0][2],
		     		"username"=> $rowData[0][0],
		     		"password"=> $rowData[0][1]);
	     		$data = array(
		     		"id_user"=> trim(preg_replace("/[^a-zA-Z0-9]/", "", $this->admin_model->genIDi())), // opsional hapus spasi depan
		     		"nama_industri"=> $rowData[0][2],
		     		"kota"=> $rowData[0][3],
		     		"alamat_industri"=> $rowData[0][4],
		     		"no_telp_industri"=> $rowData[0][5],
		     		"nama_guru_pembimbing"=> $rowData[0][6],);
	   			$this->db->insert("tb_login",$login);
	   			$this->db->insert("tb_industri",$data);
 			} 
   			unlink($inputFileName); // hapus file temp
   			// $count = $highestRow;
   			$this->session->set_flashdata('notif','Berhasil import data industri'); 
   			redirect('admin/addindustri');
 		}
	}

	public function rekapdata()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/rekap_siswa_view';
			$data['title'] = 'Rekap Data Absen Siswa - Prakerin SMK Telkom Malang 2018';
			$data['absen'] = $this->admin_model->tidakmasuk();
			$data['foto'] = $this->admin_model->getFoto();
			//$data['masuk'] = $this->admin_model->get_masuk_per_hari();
			$data['countSiswaMasukPerbulan'] = $this->admin_model->siswaMasukPerBulan();
			$data['countSiswaIzinPerbulan'] = $this->admin_model->siswaIzinPerBulan();
			$data['countSiswaSakitPerbulan'] = $this->admin_model->siswaSakitPerBulan();
			$data['siswaMasukHariIni'] = $this->admin_model->siswaMasukHariIni();
			$data['siswaIzinHariIni'] = $this->admin_model->siswaIzinHariIni();
			$data['siswaSakitHariIni'] = $this->admin_model->siswaSakitHariIni();
			$this->load->view('template_view', $data);
		}
		else{
			redirect('login');
		}
	}

	public function rekap_siswa_bulan()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/rekap_siswa_bulan_view';
			$data['title'] = 'Rekap Data Absen Siswa - Prakerin SMK Telkom Malang 2018';
			$data['foto'] = $this->admin_model->getFoto();
			$data['absen'] = $this->admin_model->tidakMasukBulannya();
			$data['bulan'] = $this->admin_model->bulannya();
			$data['countSiswaMasukPerbulan'] = $this->admin_model->siswaMasukPerBulan();
			$data['countSiswaIzinPerbulan'] = $this->admin_model->siswaIzinPerBulan();
			$data['countSiswaSakitPerbulan'] = $this->admin_model->siswaSakitPerBulan();
			$data['siswaMasukBulannya'] = $this->admin_model->siswaMasukBulannya();
			$data['siswaIzinBulannya'] = $this->admin_model->siswaIzinBulannya();
			$data['siswaSakitBulannya'] = $this->admin_model->siswaSakitBulannya();
			$this->load->view('template_view', $data);
		}
		else{
			redirect('login');
		}	
	}

	public function addadmin()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='admin/add_admin_view';
			$data['title'] = 'Tambah Data Admin - Prakerin SMK Telkom Malang 2018';
			$data['foto'] = $this->admin_model->getFoto();
			$this->load->view('template_view', $data);
		} else {
			redirect('login');
		}
	}

	public function insertadmin()
	{
		if ($this->input->post('insert')) {
			$config['upload_path'] = './uploads/foto_admin/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '1024';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				if($this->admin_model->tambahadmin($this->upload->data()) == TRUE) {
					$data['main_view'] = 'admin/add_admin_view';
					$this->session->set_flashdata('notif', 'Berhasil menambah data admin');
					redirect('admin/addadmin');
				} else {
					$data['main_view'] = 'admin/add_admin_view';
					$this->session->set_flashdata('notif', 'Gagal menambah data admin');
					redirect('admin/addadmin');
				}
			} else {
				$data['main_view'] = 'admin/add_admin_view';
				$this->session->set_flashdata('notif', $this->upload->display_errors());
				redirect('admin/addadmin');
			}
		}
	}

	public function profil()
	{
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('role') == 1) {
			$data['main_view'] = 'admin/edit_admin_view';
			$data['title'] = 'Profil Admin - Prakerin SMK Telkom Malang 2017';
			$data['foto'] = $this->admin_model->getFoto();
			$data['nama'] = $this->admin_model->getNama();
			$data['user'] = $this->admin_model->getUser();
			$data['pass'] = $this->admin_model->getPass();
			$data['no'] = $this->admin_model->getNo();
			$this->load->view('template_view', $data);
		}
		else{
			redirect('admin');
		}
	}

	public function dataadmin()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view']='admin/data_admin_view';
			$data['title'] = 'Data Admin - Prakerin SMK Telkom Malang 2018';
			$data['foto'] = $this->admin_model->getFoto();
			$data['admin'] = $this->admin_model->getDataAdmin();
			$this->load->view('template_view', $data);
		} else {
			redirect('admin');
		}
	}

	public function lihatadmin()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			$data['main_view'] = 'admin/profil_admin_view';
			$data['title'] = 'Profil Admin - Prakerin SMK Telkom Malang 2018';
			//ambil data siswa
			$id_ad = $this->uri->segment(3);
			$data['foto'] = $this->admin_model->getFoto();
			$data['detil'] = $this->admin_model->get_admin_by_id($id_ad);

			$this->load->view('template_view', $data);
		}
		else{
			redirect('admin/dataadmin');
		}
	}

	public function updateprofil($id_ad)
	{
		$this->admin_model->editprofil($id_ad);
		$this->session->set_flashdata('notif', 'Berhasil mengubah profil');
		$id_sw = $this->uri->segment(3);
		redirect('admin/profil');
	}

	public function updatefotoadmin($id_ad)
	{
		$config['upload_path'] = './uploads/foto_admin/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_sizes'] = '10240';

		$this->load->library('upload', $config);

		$id_ad = $this->session->userdata('id_user');
		if ($this->upload->do_upload('foto')) {
			if($this->admin_model->editfotoadmin($this->upload->data()) == TRUE) {
				$this->session->set_flashdata('notif', 'Berhasil mengubah foto');
				redirect('admin/profil');
			} else {
				$this->session->set_flashdata('notif', 'Gagal mengubah foto');
				redirect('admin/profil');
			}
		} else {
			$this->session->set_flashdata('notif', 'Gagal mengubah foto');
			redirect('admin/profil');
		}
	}
}

/* End of file dashboard_admin.php */
/* Location: ./application/controllers/dashboard_admin.php */