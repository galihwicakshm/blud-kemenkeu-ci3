
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminperaturan extends CI_Controller
{

    public function index()
    {

        $data = array(
            'title' => 'Peraturan',
            'getAllPeraturan' => $this->m_peraturan->getAllPeraturan(),
            'isi' => 'peraturan/v_admin_peraturan',

        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }


    public function edit($id)
    {
        $this->form_validation->set_rules(
            'modul_peraturan',
            'Modul Peraturan',
            'required',
            array('required' => '%s Harus diisi !')
        );

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/pdf';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = '2000';
            $this->upload->initialize($config);
            $field_name = "pdf";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'getPeraturan' => $this->m_peraturan->getDataPeraturan($id),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'peraturan/v_edit_data',
                );
                $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
            } else {
                $peraturan = $this->m_peraturan->getDataPeraturan($id);
                if ($peraturan->pdf != "") {
                    unlink('./assets/pdf/' . $peraturan->pdf);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/pdf' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id' => $id,
                    'modul_peraturan' => $this->input->post('modul_peraturan'),
                    'pdf' => $upload_data['uploads']['file_name'],
                );
                $this->m_peraturan->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
                redirect('adminperaturan');
            }

            $data = array(
                'id' => $id,
                'modul_peraturan' => $this->input->post('modul_peraturan'),
                'tautan_kumpulan_peraturan' => $this->input->post('tautan_kumpulan_peraturan'),

            );
            $this->m_peraturan->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
            redirect('adminperaturan');
        }

        $data = array(
            'title' => 'Edit Peraturan',
            'getDataPeraturan' => $this->m_peraturan->getDataPeraturan($id),
            'isi' => 'peraturan/v_edit_data',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }

    public function delete($id)
    {
        $peraturan = $this->m_peraturan->getDataPeraturan($id);
        if ($peraturan->pdf != "") {
            unlink('./assets/pdf/' . $peraturan->pdf);
        }

        $data = array('id' => $id);
        $this->m_peraturan->delete($data);
        $this->session->set_flashdata('pesan', 'Peraturan berhasil dihapus!');
        redirect('adminperaturan');
    }
}
