<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_profile extends CI_Model
{
    public function add($data)
    {
        $this->db->insert('tabel_data', $data);
    }
    public function adduser($data_user)
    {
        $this->db->insert('tabel_users', $data_user);
    }
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tabel_data', $data);
    }
    public function getdata($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_data');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tabel_data', $data);
    }
}
