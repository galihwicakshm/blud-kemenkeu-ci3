<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminuser extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'User',
            'dataProfile' => $this->m_user->dataProfile(),
            'isi' => 'layout/backend/data/v_user',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }

    public function add()
    {

        $data = array(
            'kode_blud' => $this->input->post('kode_blud'),
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'level' => 2,
        );

        $this->m_user->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
        redirect('adminuser');
    }

    public function delete($id)
    {
        $data = array('id' => $id);
        $this->m_user->delete($data);
        $this->session->set_flashdata('pesan', 'User berhasil dihapus!');
        redirect('adminuser');
    }

    public function edit($kode_blud)
    {

        // $kode_blud =  $this->m_user->dataProfile('kode_blud');
        $data = array(
            'kode_blud' => $kode_blud,
            // 'kode_blud' => $this->input->post('kode_blud'),
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
        );
        $this->m_user->edit($data);

        $datauser = array(
            'kode_blud' => $kode_blud,
            'nama' => $this->input->post('nama'),

        );
        $this->m_user->userdata($datauser);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
        redirect('adminuser');
    }
}
