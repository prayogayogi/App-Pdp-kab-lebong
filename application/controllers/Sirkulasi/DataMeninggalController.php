<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMeninggalController extends CI_Controller
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

	// Get Data Meninggal
	public function index()
	{
		$data['title'] = "Data Lahir";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getAdmin'] = $this->AuthModel->getAdmin()->result_array();
		$data['dataMeninggal'] = $this->SirkulasiModel->GetDataMeniggal()->result_array();
		$data['dataPenduduk'] = $this->PendudukModel->join()->result_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/sirkulasiPenduduk/dataMeninggal', $data);
		$this->load->view('includes/footer');
	}

	// Store Data Meninggal
	public function storeDataMeninggal()
	{
		$this->SirkulasiModel->storeDataMeninggal();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Meninggal</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Sirkulasi/DataMeninggalController');
	}

	// Store Data Meninggal
	public function updateDataMeninggal($id)
	{
		$this->SirkulasiModel->updateDataMeninggal($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Meninggal</strong> Berhasil Di Ubah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Sirkulasi/DataMeninggalController');
	}
}
