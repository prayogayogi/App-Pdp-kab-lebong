<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPendatangController extends CI_Controller
{
	// Model2 Untuk Data
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AuthModel', 'SirkulasiModel', 'PendudukModel']);
		if (!$this->session->userdata('email')) {
			redirect('authController');
		}
	}

	// View Data Pendatang
	public function index()
	{
		$data['title'] = "Data Pendatang";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['pekerjaan'] = $this->PendudukModel->pekerjaan()->result_array();
		$data['getDataPendatang'] = $this->SirkulasiModel->getDataPendatang()->result_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/sirkulasiPenduduk/dataPendatang', $data);
		$this->load->view('includes/footer');
	}

	// Store Data Pendatang
	public function storeDataPendatang()
	{
		$this->SirkulasiModel->storeDataPendatang();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Pendatang</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Sirkulasi/DataPendatangController');
	}

	// Update Data Pendatang
	public function updateDataPendatang($no_nik)
	{
		$this->SirkulasiModel->updateDataPendatang($no_nik);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Pendatang</strong> Berhasil Di Ubah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Sirkulasi/DataPendatangController');
	}
}
