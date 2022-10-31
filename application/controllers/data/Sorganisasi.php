<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sorganisasi extends CI_Controller
{
    public function edit($id)
    {
        $this->form_validation->set_rules(
            'id',
            'id',
            array('required' => '%s Harus diisi !')
        );
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/pdf';
            $config['allowed_types'] = 'jpg|png|jpeg|pdf';
            $config['max_size']     = '20000';
            $this->upload->initialize($config);
            $field_name = "strukturpdf";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'layout/backend/data/v_struktur',
                );
                $this->load->view('layout/backend/v_wrapper_backend', $data);
            } else {
                $umum = $this->m_profile->getdata($id);
                if ($umum->strukturpdf != "") {
                    unlink('./assets/pdf/' . $umum->strukturpdf);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/pdf' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id' => $id,
                    'strukturpdf' => $upload_data['uploads']['file_name'],
                );
                $this->m_profile->update($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
                redirect('adminprofile/pilihandata/' . $id);
            }

            $data = array(
                'id' => $id,

            );
            $this->m_profile->update($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
            redirect('adminprofile/pilihandata/' . $id);
        }
        $data = array(
            'data' => $this->m_admin->getDataProfile($id),
            'title' => 'Edit Struktur Organisasi',
            'isi' => 'layout/backend/data/v_struktur',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }
}
