<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{

    public function getAllData()
    {
        $this->db->select('*');
        $this->db->from('tabel_data');
        $this->db->order_by('tabel_data.id', 'desc');
        return $this->db->get()->result();
    }
    public function getAllDataKeuangan()
    {
        $this->db->select('*');
        $this->db->from('tabel_keuangan');
        $this->db->order_by('tabel_keuangan.id', 'desc');
        return $this->db->get()->result();
    }

    public function getData($idCari)
    {
        $this->db->select('*');
        $this->db->from('tabel_data');
        $this->db->where('id', $idCari);
        return $this->db->get()->result();
    }
    public function getDataKeuangan($idCari)
    {
        $this->db->select('*');
        $this->db->from('tabel_keuangan');
        $this->db->where('id', $idCari);
        return $this->db->get()->result();
    }
    public function getGrafik($idCari)
    {
        $this->db->select('*');
        $this->db->from('tabel_data');
        $this->db->where('id', $idCari);
        return $this->db->get()->row();
    }


    public function getAllPeraturan()
    {
        $this->db->select('*');
        $this->db->from('tabel_peraturan');
        $this->db->order_by('tabel_peraturan.id', 'desc');
        return $this->db->get()->result();
    }

    public function getDataPeraturan($idCari)
    {
        $this->db->select('*');
        $this->db->from('tabel_peraturan');
        $this->db->where('id', $idCari);
        return $this->db->get()->result();
    }
    public function getPeraturan($idCari)
    {
        $this->db->select('*');
        $this->db->from('tabel_peraturan');
        $this->db->where('id', $idCari);
        return $this->db->get()->row();
    }
    public function getProfile($idCari)
    {
        $this->db->select('*');
        $this->db->from('tabel_data');
        $this->db->join('tabel_rumpun', 'tabel_rumpun.id_rumpun = tabel_data.id_rumpun', 'left');
        $this->db->where('id', $idCari);
        return $this->db->get()->result();
    }

    public function getDataProfileGrafik()
    {
        $this->db->select('*');
        $this->db->from('tabel_dataprofile');
        return $this->db->get()->result();
    }

    public function cariKeuangan()
    {
        $this->db->select('*');
        $this->db->from('tabel_keuangan');
        $this->db->join('tabel_rumpun', 'tabel_rumpun.id_rumpun = tabel_keuangan.id_rumpun', 'left');
        return $this->db->get()->result();
    }

    public function graphKeu($idCari)
    {
        $this->db->select('*');
        $this->db->from('tabel_keuangan');
        $this->db->join('tabel_rumpun', 'tabel_rumpun.id_rumpun = tabel_keuangan.id_rumpun', 'right');
        $this->db->where('tabel_keuangan.id', $idCari);
        return $this->db->get()->result();
    }

    public function allKeu()
    {
        $this->db->select('*');
        $this->db->from('tabel_allkeuangan');
        return $this->db->get()->result();
    }

    public function allProf()
    {
        $this->db->select('*');
        $this->db->from('tabel_alldataprofile');
        return $this->db->get()->result();
    }
    public function graphProfile($idCari)
    {
        $this->db->select('*');
        $this->db->from('tabel_dataprofile');
        $this->db->join('tabel_rumpun', 'tabel_rumpun.id_rumpun = tabel_dataprofile.id_rumpun', 'right');
        $this->db->where('tabel_dataprofile.id', $idCari);
        return $this->db->get()->result();
    }

    public function akunLogin()
    {
        $this->db->select('*');
        $this->db->from('tabel_users');
        $this->db->where('kode_blud', $this->session->userdata('kode_blud'));
        return $this->db->get()->row();
    }

    public function updateakun($data)
    {
        $this->db->where('kode_blud', $data['kode_blud']);
        $this->db->update('tabel_users', $data);
    }
}
