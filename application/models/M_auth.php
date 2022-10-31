<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{

    public function login_admin($username_admin, $password)
    {
        $this->db->select('*');
        $this->db->from('tabel_admin');
        $this->db->where(array(
            'username_admin' => $username_admin,
            'password' => $password
        ));
        return $this->db->get()->row();
    }

    public function login_user($username, $password)
    {
        $this->db->select('*');
        $this->db->from('tabel_user');
        $this->db->where(array(
            'username' => $username,
            'password' => $password
        ));
        return $this->db->get()->row();
    }
}

/* End of file ModelName.php */
