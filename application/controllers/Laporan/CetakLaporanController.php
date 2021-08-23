<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CetakLaporanController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['LaporanModel', 'AuthModel']);
		if (!$this->session->userdata('email')) {
			redirect('authController');
		}
	}

	public function index()
	{
		$data['tahun'] = $this->input->post('tahun');
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['title'] = "Cetak Laporan Data Penduduk";

		// Untuk laporan desa SUNGAI GERONG
		$data['numSungaiSerongDataPenduduk'] = $this->LaporanModel->numDataPenduduk($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongDesa'] = $this->LaporanModel->numDesa($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongLahirLakilaki'] = $this->LaporanModel->numLahirLakilaki($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongLahirPerempuan'] = $this->LaporanModel->numLahirPerempuan($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongMatiLakilaki'] = $this->LaporanModel->numMatiLakilaki($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongMatiPerempuan'] = $this->LaporanModel->numMatiPerempuan($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongDatangLakilaki'] = $this->LaporanModel->numDatangLakilaki($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongDatangPerempuan'] = $this->LaporanModel->numDatangPerempuan($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongPindahLakilaki'] = $this->LaporanModel->numPindahLakilaki($data['tahun'], 'SUNGAI GERONG')->num_rows();
		$data['numSungaiSerongPindahPerempuan'] = $this->LaporanModel->numPindahPerempuan($data['tahun'], 'SUNGAI GERONG')->num_rows();
		// Akhir laporan desa SUNGAI GERONG

		// Untuk laporan desa Selebar jaya
		$data['numSelebarDataPenduduk'] = $this->LaporanModel->numDataPenduduk($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarDesa'] = $this->LaporanModel->numDesa($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarLahirLakilaki'] = $this->LaporanModel->numLahirLakilaki($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarLahirPerempuan'] = $this->LaporanModel->numLahirPerempuan($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarMatiLakilaki'] = $this->LaporanModel->numMatiLakilaki($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarMatiPerempuan'] = $this->LaporanModel->numMatiPerempuan($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarDatangLakilaki'] = $this->LaporanModel->numDatangLakilaki($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarDatangPerempuan'] = $this->LaporanModel->numDatangPerempuan($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarPindahLakilaki'] = $this->LaporanModel->numPindahLakilaki($data['tahun'], 'SELEBAR JAYA')->num_rows();
		$data['numSelebarPindahPerempuan'] = $this->LaporanModel->numPindahPerempuan($data['tahun'], 'SELEBAR JAYA')->num_rows();
		// Akhir laporan desa selebar jaya

		// Untuk laporan desa Selebar jaya
		$data['numTalangbDataPenduduk'] = $this->LaporanModel->numDataPenduduk($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbDesa'] = $this->LaporanModel->numDesa($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbLahirLakilaki'] = $this->LaporanModel->numLahirLakilaki($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbLahirPerempuan'] = $this->LaporanModel->numLahirPerempuan($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbMatiLakilaki'] = $this->LaporanModel->numMatiLakilaki($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbMatiPerempuan'] = $this->LaporanModel->numMatiPerempuan($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbDatangLakilaki'] = $this->LaporanModel->numDatangLakilaki($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbDatangPerempuan'] = $this->LaporanModel->numDatangPerempuan($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbPindahLakilaki'] = $this->LaporanModel->numPindahLakilaki($data['tahun'], 'TALANG BUNUT')->num_rows();
		$data['numTalangbPindahPerempuan'] = $this->LaporanModel->numPindahPerempuan($data['tahun'], 'TALANG BUNUT')->num_rows();
		// Akhir laporan desa selebar jaya
		// var_dump($data['numTalangbMatiLakilaki']);
		// die;
		$this->load->view('pages/dashboard/KelolaLaporan/cetakLaporan/cetak', $data);
	}
}
