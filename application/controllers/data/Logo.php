<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logo extends CI_Controller
{
    public function edit($id)
    {
        $this->form_validation->set_rules(
            'id',
            'id',

            array('required' => '%s Harus diisi !')
        );
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            $field_name = "logo";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Edit Barang',
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'layout/backend/data/v_umum',
                );
                $this->load->view('layout/backend/v_wrapper_backend', $data);
            } else {
                $umum = $this->m_profile->getdata($id);
                if ($umum->logo != "") {
                    unlink('./assets/img/' . $umum->logo);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id' => $id,
                    'logo' => $upload_data['uploads']['file_name'],
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
            'title' => 'Edit Logo',
            'isi' => 'layout/backend/data/v_logo',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }
}
