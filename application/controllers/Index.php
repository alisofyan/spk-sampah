<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
//  Controller for Main
*/

class Index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('alternatif');
        $this->load->library('session');
    }

    public function index(){
        $data['daerah'] = $this->alternatif->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function simpan()
    {
        $simpan_alternatif = $this->alternatif->simpan();

        if ($simpan_alternatif) {
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan.');
            redirect('index');
        } else {
            $this->session->set_flashdata('danger', 'Data Gagal di Simpan.');
            redirect('index');
        }
    }

    public function hapusItem($id)
    {
        $this->alternatif->delete($id);
        redirect('index');
    }
}