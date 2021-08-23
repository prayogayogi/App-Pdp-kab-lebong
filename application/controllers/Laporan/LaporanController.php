<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanController extends CI_Controller
{
	// Model2 Untuk data
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['authModel', 'PendudukModel', 'SirkulasiModel', 'LaporanModel']);
		if (!$this->session->userdata('email')) {
			redirect('authController');
		}
	}

	// LAPORAN DATA PENDUDUK
	// untuk get data penduduk
	public function index()
	{
		$data['title'] = "Laporan Data Penduduk";
		$data['penduduk'] = $this->PendudukModel->join()->num_rows();
		$data['userLogin'] = $this->authModel->getUserLogin()->row_array();
		$data['dataPenduduk'] = $this->PendudukModel->getDataPenduduk()->num_rows();
		$data['laporan'] = $this->LaporanModel->getTahun();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/KelolaLaporan/dataPenduduk', $data);
		$this->load->view('includes/footer');
	}

	// LAPORAN DATA KARTU KELUARGA
	// Untuk laporan Data Kartu Keluarga
	public function dataKk()
	{
		$data['title'] = "Laporan Data Kartu Keluarga";
		$data['userLogin'] = $this->authModel->getUserLogin()->row_array();
		$data['dataPenduduk'] = $this->PendudukModel->getDataPenduduk()->num_rows();
		$data['laporan'] = $this->LaporanModel->getTahun();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/KelolaLaporan/dataKartuKeluarga', $data);
		$this->load->view('includes/footer');
	}

	// Untuk laporan dataLahir
	public function dataLahir()
	{
		$data['title'] = "Laporan Data Lahir";
		$data['userLogin'] = $this->authModel->getUserLogin()->row_array();
		$data['dataPenduduk'] = $this->PendudukModel->getDataPenduduk()->num_rows();
		$data['laporan'] = $this->LaporanModel->getTahun();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/KelolaLaporan/dataLahir', $data);
		$this->load->view('includes/footer');
	}

	// Untuk laporan Data Menginggal
	public function dataMeningal()
	{
		$data['title'] = "Laporan Data Menginggal";
		$data['userLogin'] = $this->authModel->getUserLogin()->row_array();
		$data['dataPenduduk'] = $this->PendudukModel->getDataPenduduk()->num_rows();
		$data['laporan'] = $this->LaporanModel->getTahun();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/KelolaLaporan/dataMeningal', $data);
		$this->load->view('includes/footer');
	}

	// Untuk laporan  Data Pendatang
	public function dataPendatang()
	{
		$data['title'] = "Laporan Data Pendatang";
		$data['userLogin'] = $this->authModel->getUserLogin()->row_array();
		$data['dataPenduduk'] = $this->PendudukModel->getDataPenduduk()->num_rows();
		$data['laporan'] = $this->LaporanModel->getTahun();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/KelolaLaporan/dataPendatang', $data);
		$this->load->view('includes/footer');
	}

	// Untuk laporan data Data Pindah
	public function dataPindah()
	{
		$data['title'] = "Laporan Data Pindah";
		$data['userLogin'] = $this->authModel->getUserLogin()->row_array();
		$data['dataPenduduk'] = $this->PendudukModel->getDataPenduduk()->num_rows();
		$data['laporan'] = $this->LaporanModel->getTahun();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/KelolaLaporan/dataPindah', $data);
		$this->load->view('includes/footer');
	}
}
