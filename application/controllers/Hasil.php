<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
//  Controller for Hasil
*/

class Hasil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('wp');
        $this->load->model('alternatif');
        $this->load->library('session');
    }

    public function index(){
        $data['vektor'] = $this->wp->hitung();
        $this->load->view('templates/header', $data);
        $this->load->view('home/hasil', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambahHitung()
    {
        $simpan_alternatif = $this->alternatif->simpan();

        if ($simpan_alternatif) {
            $this->session->set_flashdata('success', 'Data Berhasil di Simpan.');
            $this->wp->hitung();
            redirect('hasil');
        } else {
            $this->session->set_flashdata('danger', 'Data Gagal di Simpan.');
            redirect('hasil');
        }


    }
}