<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SirkulasiModel extends CI_Model
{
	// DATA LAHIR
	// Get Data Lahir
	public function getDataLahir()
	{
		$this->db->where(['status' => 'DATA LAHIR']);
		return $this->db->get_where('data_penduduk');
	}

	// Get Data Lahir Join
	function getDataLahirJoin()
	{
		$this->db->select('*');
		$this->db->from('kartu_keluarga');
		$this->db->join('data_penduduk', 'data_penduduk.no_kk = kartu_keluarga.no_kk');
		$this->db->where('data_penduduk.status', 'DATA LAHIR');
		return $this->db->get();
	}

	// Store Data Lahir
	public function storeDataLahir()
	{
		$data = [
			'no_kk' => $this->input->post('no_kk'),
			'nama' => strtoupper(trim($this->input->post('nama'))),
			'tempat_tgl_lahir' => strtoupper(trim($this->input->post('tempat_tgl'))),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jenis_kelamin' => strtoupper($this->input->post('jenis_kelamin')),
			'alamat' => strtoupper(trim($this->input->post('alamat'))),
			'pekerjaan' => '-',
			'status_keluarga' => 'ANAK',
			'status' => 'DATA LAHIR',
			'tgl_masuk' => date('Y-m-d'),
		];
		$this->db->insert('data_penduduk', $data);
	}

	// Update Data Lahir
	function updateDataLahir()
	{
		$data = [
			'no_kk' => $this->input->post('no_kk'),
			'nama' => strtoupper(trim($this->input->post('nama'))),
			'tempat_tgl_lahir' => strtoupper(trim($this->input->post('tempat_tgl'))),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => strtoupper(trim($this->input->post('alamat'))),
		];
		$this->db->set($data);
		$this->db->where(['status' => 'DATA LAHIR']);
		$this->db->update('data_penduduk');
	}

	// Destroy Data Lahir
	function destroyDataLahir($id)
	{
		$this->db->where(['id' => $id]);
		$this->db->delete('data_penduduk');
	}

	// DATA MENINGGAL
	// Get Data Meninggal
	function GetDataMeniggal()
	{
		$this->db->where(['status' => 'MENINGGAL']);
		return $this->db->get_where('data_penduduk');
	}

	// Store Data Meninggal
	function storeDataMeninggal()
	{
		$nik = $this->input->post('no_nik');
		$data = [
			'status' => "MENINGGAL",
			'penyakit' => strtoupper($this->input->post('penyebab')),
			'tgl_masuk' => date('Y-m-d'),
		];
		$this->db->set($data);
		$this->db->where('no_nik', $nik);
		$this->db->update('data_penduduk');
	}

	// Updata Data Meninggal
	function updateDataMeninggal($id)
	{
		$data = [
			'nama' => strtoupper($this->input->post('nama')),
			'status' => "MENINGGAL",
			'penyakit' => strtoupper($this->input->post('penyebab'))
		];
		$this->db->set($data);
		$this->db->where(['id' => $id]);
		$this->db->update('data_penduduk');
	}


	// DATA PENDATANG
	// Get View Data Pendatan
	function getDataPendatang()
	{
		$this->db->select('*');
		$this->db->from('data_penduduk');
		$this->db->join('status', 'status.pekerjaan = data_penduduk.pekerjaan');
		$this->db->where('data_penduduk.status_penduduk', 'PENDATANG');
		return $this->db->get();
	}

	// Store Data Pendatang
	function storeDataPendatang()
	{
		$data = [
			'no_kk' => $this->input->post('no_kk'),
			'no_nik' => $this->input->post('no_nik'),
			'nama' => $this->input->post('nama'),
			'tempat_tgl_lahir' => $this->input->post('tempat_tgl'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' => $this->input->post('alamat'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'status_keluarga' => $this->input->post('status_keluarga'),
			'status' => "HIDUP",
			'status_penduduk' => "PENDATANG",
			'tgl_masuk' => date('Y-m-d'),
		];
		$this->db->set($data);
		$this->db->insert('data_penduduk');
	}

	// Update Data Pendatang
	function updateDataPendatang($no_nik)
	{
		$data = [
			'no_kk' => $this->input->post('no_kk'),
			'no_nik' => $this->input->post('no_nik'),
			'nama' => $this->input->post('nama'),
			'tempat_tgl_lahir' => $this->input->post('tempat_tgl'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'pekerjaan' => $this->input->post('pekerjaan'),
		];
		$this->db->set($data);
		$this->db->where(['no_nik' => $no_nik]);
		$this->db->update('data_penduduk');
	}

	// DATA PINDAH
	// Get Data Pindah
	function getDataPindah()
	{
		$this->db->select('*');
		$this->db->from('data_penduduk');
		$this->db->join('status', 'status.pekerjaan = data_penduduk.pekerjaan');
		$this->db->where('data_penduduk.status_penduduk', 'SUDAH PINDAH');
		return $this->db->get();
	}
	// Store Data Pindah
	function storeDataPindah()
	{
		$nik = $this->input->post('no_nik');
		$data = [
			'status_penduduk' => "SUDAH PINDAH",
			'status' => "SUDAH PINDAH",
			'tgl_masuk' => date('Y-m-d'),
		];
		$this->db->set($data);
		$this->db->where('no_nik', $nik);
		$this->db->update('data_penduduk');
	}
}
