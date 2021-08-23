<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['PendudukModel', 'AuthModel', 'SirkulasiModel']);
		if (!$this->session->userdata('email')) {
			redirect('authController');
		}
	}
	// Untuk View Dashboard
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['penduduk'] = $this->PendudukModel->join()->result_array();
		$data['dataPenduduk'] = $this->PendudukModel->join()->num_rows();
		$data['dataKartuKeluarga'] = $this->PendudukModel->getDataKartuKeluarga()->num_rows();
		$data['dataLakilaki'] = $this->PendudukModel->getDataLakilaki()->num_rows();
		$data['dataPerempuan'] = $this->PendudukModel->getDataPerempuan()->num_rows();
		$data['dataLahir'] = $this->PendudukModel->getDataLahir()->num_rows();
		$data['dataMeninggal'] = $this->PendudukModel->getDataMeninggal()->num_rows();
		$data['dataPendatang'] = $this->SirkulasiModel->getDataPendatang()->num_rows();
		$data['dataPindah'] = $this->SirkulasiModel->getDataPindah()->num_rows();
		$this->load->view('includes/header', $data);
		$this->load->view('includes/sidebar', $data);
		$this->load->view('pages/dashboard/viewDashboard', $data);
		$this->load->view('includes/footer');
	}
}
