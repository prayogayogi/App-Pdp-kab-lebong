<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AuthModel extends CI_Model
{
  // Untuk mengambil data User yang Login
  function getUserLogin()
  {
    return $this->db->get_where('userapp', ['email' => $this->session->userdata('email')]);
  }

  // untuk mengambil data admin dengan Roles [1]
  function getAdmin()
  {
    return $this->db->get('userapp');
  }

  // untuk mengambil data camat dengan Roles [2]
  function getCamat()
  {
    return $this->db->get_where('userapp', ['roles' => 2]);
  }

  // untuk mengambil data petugas dengan Roles [3]
  function getPetugas()
  {
    return $this->db->get_where('userapp', ['roles' => 3]);
  }

  // Untuk Ubah Password
  function ubahPassword($id, $passwordBaru)
  {
    $data = ['password' => password_hash(($passwordBaru), PASSWORD_DEFAULT)];
    $this->db->set($data);
    $this->db->where(['id' => $id]);
    $this->db->update('userapp');
  }
}
