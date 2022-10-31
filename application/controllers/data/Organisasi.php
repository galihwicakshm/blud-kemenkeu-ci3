<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Organisasi extends CI_Controller
{
    public function edit($id)
    {
        $data = array(
            'data' => $this->m_admin->getDataProfile($id),
            'rumpun' => $this->m_admin->getRumpun(),
            'title' => 'Edit Organisasi',
            'isi' => 'layout/backend/data/v_organisasi',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }


    public function update($id)
    {
        $data = array(
            'id' => $id,
            'motto' =>  $this->input->post('motto'),
            'visi' =>  $this->input->post('visi'),
            'misi' => $this->input->post('misi'),
            'tujuan' => $this->input->post('tujuan'),
            'sejarah' => $this->input->post('sejarah'),
        );
        $this->m_profile->update($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
        redirect('adminprofile/pilihandata/' . $id);
    }
}
