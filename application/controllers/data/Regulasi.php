<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Regulasi extends CI_Controller
{
    public function edit($id)
    {
        $data = array(
            'data' => $this->m_admin->getDataProfile($id),
            'title' => 'Edit Regulasi',
            'rumpun' => $this->m_admin->getRumpun(),
            'isi' => 'layout/backend/data/v_regulasi',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }


    public function update($id)
    {
        $data = array(
            'id' => $id,
            'peraturan_tarif' => $this->input->post('peraturan_tarif'),
            'peraturan_pengelolaan' => $this->input->post('peraturan_pengelolaan'),
            'peraturan_penetapan' => $this->input->post('peraturan_penetapan'),
            'peraturan_kerjasama' => $this->input->post('peraturan_kerjasama'),
            'peraturan_pengadaan' => $this->input->post('peraturan_pengadaan'),
            'peraturan_lainnya' => $this->input->post('peraturan_lainnya'),
        );
        $this->m_profile->update($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
        redirect('adminprofile/pilihandata/' . $id);
    }
}
