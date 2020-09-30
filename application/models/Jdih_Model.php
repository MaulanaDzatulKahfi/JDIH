<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jdih_Model extends CI_Model
{
    public function tampil($table)
    {
        return $this->db->get($table)->result();
    }
    public function tambah($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    public function hapus($table, $id_key, $id)
    {
        return $this->db->delete($table, [$id_key => $id]);
    }
    public function detail($table, $id_key, $id)
    {
        return $this->db->get_where($table, [$id_key => $id])->result();
    }
    public function formedit($table, $id_key, $id)
    {
        return $this->db->get_where($table, [$id_key => $id])->row();
    }
    public function edit($nama_table, $idkey, $id, $data)
    {
        return $this->db->where($idkey, $id)->update($nama_table, $data);
    }
}
