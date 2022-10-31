<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function getAllPeraturan()
    {
        $this->db->select('*');
        $this->db->from('tabel_peraturan');
        return $this->db->get()->result();
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
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tabel_peraturan', $data);
    }

    public function getProfile()
    {
        $this->db->select('*');
        $this->db->from('tabel_data');
        return $this->db->get()->result();
    }
    public function getProfileDetail($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_data');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function getRumpun()
    {
        $this->db->select('*');
        $this->db->from('tabel_rumpun');
        return $this->db->get()->result();
    }
    public function getDataProfile($id)
    {
        $this->db->select('*');
        $this->db->from('tabel_data');
        $this->db->join('tabel_rumpun', 'tabel_rumpun.id_rumpun = tabel_data.id_rumpun', 'left');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
}
