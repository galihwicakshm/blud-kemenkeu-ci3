<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function dataProfile()
    {
        $this->db->select('*');
        $this->db->from('tabel_users');
        $this->db->where('level', 2);
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tabel_users', $data);
    }

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tabel_users', $data);
    }
    public function edit($data)
    {
        $this->db->where('kode_blud', $data['kode_blud']);
        $this->db->update('tabel_users', $data);
    }

    public function userdata($datauser)
    {
        $this->db->where('kode_blud', $datauser['kode_blud']);
        $this->db->update('tabel_data', $datauser);
    }
}
