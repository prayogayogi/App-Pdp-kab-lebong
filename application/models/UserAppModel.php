<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserAppModel extends CI_Model
{
	public function tambahDataAdmin()
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './assets/assetGambar/administrator/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);
			} else {
				echo "error";
			}
		}

		$data = [
			'nama' => strtoupper($this->input->post('nama')),
			'email' => strtoupper($this->input->post('email')),
			'alamat' => strtoupper($this->input->post('alamat')),
			'foto' => $files,
			'roles' => $this->input->post('roles'),
			'password' => password_hash(('1234'), PASSWORD_DEFAULT)
		];
		$this->db->insert('userapp', $data);
	}
}
