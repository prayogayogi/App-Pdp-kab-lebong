<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPindahController extends CI_Controller
{
	// Model2 Untuk data
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AuthModel', 'SirkulasiModel']);
		if (!$this->session->userdata('email')) {
			redirect('authController');
		}
	}

	// View Data Pindah
	public function index()
	{
		$data['title'] = "Data Pindah";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getDataPindah'] = $this->SirkulasiModel->getDataPindah()->result_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/sirkulasiPenduduk/dataPindah', $data);
		$this->load->view('includes/footer');
	}

	// Store Data Pindah
	public function storeDataPindah()
	{
		$this->SirkulasiModel->storeDataPindah();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Pindah</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Sirkulasi/DataPindahController');
	}
}
