<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{
    public function edit($id)
    {
        $data = array(
            'title' => 'Edit Informasi Umum',
            'data' => $this->m_admin->getDataProfile($id),
            'rumpun' => $this->m_admin->getRumpun(),

            'isi' => 'layout/backend/data/v_informasi',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }

    public function update($id)
    {

        $data = array(
            'id' => $id,
            'kode_blud' => $this->input->post('kode_blud'),
            'website' => $this->input->post('website'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'fax' => $this->input->post('fax'),
            'id_rumpun' => $this->input->post('id_rumpun'),
        );
        $this->m_profile->update($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
        redirect('adminprofile/pilihandata/' . $id);
    }
}
