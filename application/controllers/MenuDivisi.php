<?php

class MenuDivisi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MenuDivisi_model');
    }

    public function home_coo(){
        $this->load->view('MenuDivisi/home_coo');
    }


    public function komplain(){

    $data['komplain_nonmarket'] = $this->MenuDivisi_model->getAllKomplain();
    $this->load->view('MenuDivisi/komplain',$data);


    }

    public function pemesanan(){
        $data2['pemesanan'] = $this->MenuDivisi_model->getAllPemesanan();
        $this->load->view('MenuDivisi/pemesanan',$data2);
    }

    public function marketing(){
        $data3['about'] = $this->MenuDivisi_model->getAllAbout();
        $data3['article'] = $this->MenuDivisi_model->getAllArticle();
        $data3['banner'] = $this->MenuDivisi_model->getAllBanner();
        $this->load->view('MenuDivisi/marketing', $data3);

    }

    public function absensi(){
        $data4['absensi'] = $this->MenuDivisi_model->getAllAbsensi();
        $this->load->view('MenuDivisi/absensi', $data4);

    }

    public function gaji(){
         $data5['gaji'] = $this->MenuDivisi_model->getAllGaji();
        $this->load->view('MenuDivisi/gaji', $data5);
    }

    public function karyawan(){
        $data6['karyawan'] = $this->MenuDivisi_model->getAllKaryawan();
        $this->load->view('MenuDivisi/karyawan', $data6);
    }

    public function pegawai(){
        $data7['pegawai'] = $this->MenuDivisi_model->getAllPegawai();
        $this->load->view('MenuDivisi/pegawai', $data7);
    }

    public function sdm(){
        $data8['sdm'] = $this->MenuDivisi_model->getAllSdm();
        $this->load->view('MenuDivisi/sdm', $data8);
    }


    public function status_karyawan(){
        $data9['status_karyawan'] = $this->MenuDivisi_model->getAllStatus();
        $this->load->view('MenuDivisi/status_karyawan', $data9);
    }

    public function komplain_network(){
        $data10['komplain'] = $this->MenuDivisi_model->getAllKomplain_network();
        $this->load->view('MenuDivisi/komplain_network', $data10);
    }

    public function pelanggan(){
        $data11['pelanggan'] = $this->MenuDivisi_model->getAllPelanggan();
        $this->load->view('MenuDivisi/pelanggan', $data11);
    }

    public function status_pemasangan(){
        $data12['status_pemasangan'] = $this->MenuDivisi_model->getAllStatus_pemasangan();
        $this->load->view('MenuDivisi/status_pemasangan', $data12);
    }

    public function skp(){
        $data13['skp'] = $this->MenuDivisi_model->getAllSKP();
        $this->load->view('MenuDivisi/skp',$data13);
    }

    public function tagihan(){
        $data14['tagihan'] = $this->MenuDivisi_model->getAllTagihan();
        $this->load->view('MenuDivisi/tagihan',$data14);
    }

    public function history_out(){
        $data16['historyinventoryout'] = $this->MenuDivisi_model->getAllHIO();
        $this->load->view('MenuDivisi/history_out',$data16);
    }
    public function inventori(){
        $data17['inventory'] = $this->MenuDivisi_model->getAllInventori();
        $this->load->view('MenuDivisi/inventori',$data17);
    }

    public function kategori(){
        $data18['kategori'] = $this->MenuDivisi_model->getAllKategori();
        $this->load->view('MenuDivisi/kategori',$data18);
    }

    public function suplier(){
        $data19['supplier'] = $this->MenuDivisi_model->getAllSuplier();
        $this->load->view('MenuDivisi/suplier',$data19);
    }

    public function finance(){
      $data20['finance'] = $this->MenuDivisi_model->getAllFinance();
      $this->load->view('MenuDivisi/finance',$data20);
    }

}
