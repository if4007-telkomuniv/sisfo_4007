<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nonmarketing extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Nonmarket_model');
    }

    public function komplain(){
        $data['komplain_nonmarket'] = $this->Nonmarket_model->getAllKomplain();
        $this->load->view('nonmarket/komplain',$data);
  	}

    public function pemesanan(){
        $data2['pemesanan'] = $this->Nonmarket_model->getAllPemesanan();
        $this->load->view('nonmarket/pemesanan',$data2);
    }

    public function dashboard(){
        $this->load->view('dashboard');
    }

    public function tambah(){
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('no_telp','No_Telp','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        if ($this->form_validation->run() == FALSE) {
           $this->load->view('nonmarket/tambah');
        } else {
            $this->Nonmarket_model->tambahDataKomplain();
            redirect('nonmarket/komplain');
        }
    }

    public function tambah_pemesanan(){
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('no_identitas','No_Identitas','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('no_telp','No_Telp','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        if ($this->form_validation->run() == FALSE) {
          $this->load->view('nonmarket/tambah_pemesanan');
        } else {
          $this->Nonmarket_model->tambahDataPemesanan();
          redirect('nonmarket/pemesanan');
        }
    }
}
