<?php

class DataKkController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AuthModel', 'KartuKeluargaModel']);
		if (!$this->session->userdata('email')) {
			redirect('authController');
		}
	}

	// DATA KARTU KELUARGA
	// Untuk View data Kartu keluarga
	public function index()
	{
		$data['title'] = 'Data Kartu Keluarga';
		$data['no'] = 1;
		$data['getDataKk'] = $this->KartuKeluargaModel->getaDataKk()->result_array();
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/kartuKeluarga/viewDataKartuKeluarga');
		$this->load->view('includes/footer');
	}

	// untuk mengambil data angota Keluaga
	public function ViewAnggotaKeluarga($no_kk)
	{
		$data['title'] = 'Data Anggota Keluarga';
		$data['no'] = 1;
		$data['no_kk'] = $no_kk;
		$data['keluarga'] = $this->db->get_where('kartu_keluarga', ['no_kk' => $no_kk])->row_array();
		$data['getDataKk'] = $this->KartuKeluargaModel->join($no_kk)->result_array();
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/kartuKeluarga/viewAnggotaKeluarga', $data);
		$this->load->view('includes/footer');
	}

	// Untuk Store Data Kartu Keluarga
	public function storeKartuKeluarga()
	{
		$this->KartuKeluargaModel->storeKartuKeluarga();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Kartu Keluarga</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('DataKkController');
	}

	// Update Data Kartu Keluarga
	public function updateKartuKeluarga($no_kk)
	{
		$this->KartuKeluargaModel->updateKartuKeluarga($no_kk);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Kartu Keluarga</strong> Berhasil Di Ubah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('DataKkController');
	}
}
