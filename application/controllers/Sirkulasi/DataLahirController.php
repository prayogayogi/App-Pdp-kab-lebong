<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataLahirController extends CI_Controller
{
	// Model2 Untuk Data di Mode
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AuthModel', 'SirkulasiModel']);
		if (!$this->session->userdata('email')) {
			redirect('authController');
		}
	}

	// Untuk View Data Lahir
	public function index()
	{
		$data['title'] = "Data Lahir";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['dataLahir'] = $this->SirkulasiModel->getDataLahir()->result_array();
		$data['getDataLahirJoin'] = $this->SirkulasiModel->getDataLahirJoin()->result_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/sirkulasiPenduduk/dataLahir', $data);
		$this->load->view('includes/footer');
	}

	// Untuk Store Data Lahir
	public function storeDataLahir()
	{
		$this->SirkulasiModel->storeDataLahir();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Lahir</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Sirkulasi/DataLahirController');
	}

	// Update Data Lahir
	public function updateDataLahir()
	{
		$this->SirkulasiModel->updateDataLahir();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Lahir</strong> Berhasil Di Ubah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Sirkulasi/DataLahirController');
	}

	// Destroy Data Lahir
	public function destroyDataLahir($id)
	{
		$this->SirkulasiModel->destroyDataLahir($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Lahir</strong> Berhasil Di Hapus.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Sirkulasi/DataLahirController');
	}
}
