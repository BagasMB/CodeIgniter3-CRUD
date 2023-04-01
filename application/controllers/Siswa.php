<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar | Siswa';

        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        if ($this->input->post('cari')) {
            $data['siswa'] = $this->Siswa_model->cariDataSiswa();
        }

        $this->load->view('template/header', $data);
        $this->load->view('siswa/daftar_siswa');
        $this->load->view('template/footer');
    }
    public function tambahSiswa()
    {
        $data['judul'] = 'Tambah | Siswa';
        $data['kelas'] = ['X RPL A', 'X RPL B', 'X RPL C'];

        $this->form_validation->set_rules('nis', 'Nis', 'trim|required|numeric|min_length[4]|max_length[4]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('siswa/tambah_siswa');
            $this->load->view('template/footer');
        } else {
            $this->Siswa_model->tambahDataSiswa();
            // $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('siswa');
        }
    }
    public function update($id)
    {
        $data['judul'] = 'Edit | Siswa';
        $data['siswa'] = $this->Siswa_model->getSiswaById($id);
        $data['kelas'] = ['X RPL A', 'X RPL B', 'X RPL C'];

        $this->form_validation->set_rules('nis', 'Nis', 'trim|required|numeric|min_length[4]|max_length[4]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header1', $data);
            $this->load->view('siswa/edit_siswa', $data);
            $this->load->view('template/footer');
        } else {
            $this->Siswa_model->updateDataSiswa();
            // $this->session->set_flashdata('flash', 'DiEdit');
            redirect('siswa');
        }
    }
    public function hapus($id)
    {
        $this->Siswa_model->hapusDataSiswa($id);
        redirect('siswa');
    }
}
