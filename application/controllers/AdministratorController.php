<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdministratorController extends CI_Controller
{
	// Model2 Untuk data
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AuthModel', 'UserAppModel']);
		if (!$this->session->userdata('email')) {
			redirect('authController');
		}
	}

	// get data Administrator
	public function index()
	{
		$data['title'] = "Admin";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getAdmin'] = $this->AuthModel->getAdmin()->result_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/auth/viewAdmin', $data);
		$this->load->view('includes/footer');
	}

	// Tambah Data Admin
	public function tambahDataAdmin()
	{
		$this->UserAppModel->tambahDataAdmin();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Admin</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('AdministratorController');
	}

	// DATA CAMAT
	// get data camat
	public function camat()
	{
		$data['title'] = "Camat";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getCamat'] = $this->AuthModel->getCamat()->result_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/auth/viewCamat', $data);
		$this->load->view('includes/footer');
	}

	// get data petugas
	public function petugas()
	{
		$data['title'] = "Petugas";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getPetugas'] = $this->AuthModel->getPetugas()->result_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/auth/viewPetugas', $data);
		$this->load->view('includes/footer');
	}
}
