<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    function cek_users($kode_blud, $password)
    {
        $kondisi = array(
            'kode_blud' => $kode_blud,
            'password' => $password
        );

        $this->db->select('*');
        $this->db->from('tabel_users');
        $this->db->where($kondisi);
        $this->db->limit(1);
        return $this->db->get();
    }
}
