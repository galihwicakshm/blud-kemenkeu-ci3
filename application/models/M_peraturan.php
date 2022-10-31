<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_peraturan extends CI_Model
{
    public function getAllPeraturan()
    {
        $this->db->select('*');
        $this->db->from('tabel_peraturan');
        return $this->db->get()->result();
    }

    public function getAllPeraturan1()
    {
        $this->db->select('*');
        $this->db->from('tabel_peraturan');
        return $this->db->get()->row();
    }

    public function getDataPeraturan($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_peraturan');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function add($data)
    {
        $this->db->insert('tabel_peraturan', $data);
    }

    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tabel_peraturan', $data);
    }
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tabel_peraturan', $data);
    }
}
