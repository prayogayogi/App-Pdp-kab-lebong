<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanModel extends CI_Model
{
	// Get Tahun Laporan
	function getTahun()
	{
		$query = 'SELECT YEAR(tgl_masuk) AS tahun FROM data_penduduk GROUP BY YEAR (tgl_masuk) ORDER BY YEAR (tgl_masuk) DESC';
		return $this->db->query($query)->result_array();
	}

	// Get data laporan jumlah data pendudul
	function numDataPenduduk($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat', $alamat);
		$this->db->where_not_in('status', 'MENINGGAL');
		$this->db->where_not_in('status', 'SUDAH PINDAH');
		return $this->db->get('data_penduduk');
	}

	// Get data laporan jumlah data desa
	function numDesa($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat', $alamat);
		$this->db->where('status_keluarga', 'KEPALA KELUARGA');
		return $this->db->get('data_penduduk');
	}


	// Get data laporan jumlah data lahir laki laki
	function numLahirLakilaki($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat', $alamat);
		$this->db->where('status', 'DATA LAHIR');
		$this->db->where('jenis_kelamin',  'LAKI-LAKI');
		return $this->db->get('data_penduduk');
	}


	// Get data laporan jumlah data lahir perempuan
	function numLahirPerempuan($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat', $alamat);
		$this->db->where('status', 'DATA LAHIR');
		$this->db->where('jenis_kelamin', 'PEREMPUAN');
		return $this->db->get('data_penduduk');
	}


	// Get data laporan jumlah data mati lakilaki
	function numMatiLakilaki($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat',  $alamat);
		$this->db->where('status',  'MENINGGAL');
		$this->db->where('jenis_kelamin', 'LAKI-LAKI');
		return $this->db->get('data_penduduk');
	}


	// Get data laporan jumlah data mati perempuan
	function numMatiPerempuan($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat', $alamat);
		$this->db->where('status', 'MENINGGAL');
		$this->db->where('jenis_kelamin', 'PEREMPUAN');
		return $this->db->get('data_penduduk');
	}


	// Get data laporan jumlah data datang laki-laki
	function numDatangLakilaki($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat',  $alamat);
		$this->db->where('status_penduduk', 'PENDATANG');
		$this->db->where('jenis_kelamin', 'LAKI-LAKI');
		return $this->db->get('data_penduduk');
	}

	// Get data laporan jumlah data datang perempaun
	function numDatangPerempuan($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat', $alamat);
		$this->db->where('status_penduduk', 'PENDATANG');
		$this->db->where('jenis_kelamin', 'PEREMPUAN');
		return $this->db->get('data_penduduk');
	}

	// Get data laporan jumlah data pindah laki-laki
	function numPindahLakilaki($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat', $alamat);
		$this->db->where('status_penduduk', 'SUDAH PINDAH');
		$this->db->where('jenis_kelamin', 'LAKI-LAKI');
		return $this->db->get('data_penduduk');
	}

	// Get data laporan jumlah data pindah laki-laki
	function numPindahPerempuan($tahun, $alamat)
	{
		$this->db->where('year(tgl_masuk)', $tahun);
		$this->db->where('alamat', $alamat);
		$this->db->where('status_penduduk', 'SUDAH PINDAH');
		$this->db->where('jenis_kelamin', 'PEREMPUAN');
		return $this->db->get('data_penduduk');
	}
}
