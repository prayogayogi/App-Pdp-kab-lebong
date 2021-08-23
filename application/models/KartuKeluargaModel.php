<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KartuKeluargaModel extends CI_Model
{
	// Get Data Penduduk
	public function getaDataKk()
	{
		return $this->db->get('kartu_keluarga');
	}

	// Unutk Detail Kartu Keluarga
	public function join($id)
	{
		$this->db->select('*');
		$this->db->from('kartu_keluarga');
		$this->db->join('data_penduduk', 'data_penduduk.no_kk = kartu_keluarga.no_kk');
		$this->db->where('kartu_keluarga.no_kk', $id);
		return $this->db->get();
	}

	// Untuk Store Kartu Keluarga
	public function storeKartuKeluarga()
	{
		$data = [
			'no_kk' => $this->input->post('no_kk'),
			'no_nik' => $this->input->post('no_nik'),
			'nama_kk' => strtoupper($this->input->post('nama_kk')),
		];
		$this->db->set($data);
		$this->db->insert('kartu_keluarga');
	}

	// Update Data Kartu Keluarga
	public function updateKartuKeluarga($no_kk)
	{
		$dataKartuKeluarga = [
			'no_nik' => $this->input->post('no_nik'),
			'nama_kk' => strtoupper($this->input->post('nama_kk')),
		];
		$this->db->set($dataKartuKeluarga);
		$this->db->where(['no_nik' => $no_kk]);
		$this->db->update('kartu_keluarga');

		$dataDataPenduduk = [
			'no_nik' => $this->input->post('no_nik'),
			'nama' => strtoupper($this->input->post('nama_kk')),
		];
		$this->db->set($dataDataPenduduk);
		$this->db->where(['no_nik' => $no_kk]);
		$this->db->update('data_penduduk');
	}
}
