<?php


class MenuDivisi_model extends CI_Model{
    public function getAllKomplain(){
        return $this->db->get('komplain_nonmarket')->result_array();
    }

    public function getAllPemesanan(){
        return $this->db->get('pemesanan')->result_array();
    }

     public function getAllAbout(){
        return $this->db->get('about')->result_array();
    }

     public function getAllArticle(){
        return $this->db->get('article')->result_array();
    }

    public function getAllBanner(){
        return $this->db->get('banner')->result_array();
    }

    public function getAllAbsensi(){
         return $this->db->get('absensi')->result_array();
    }

    public function getAllGaji(){
         return $this->db->get('gaji')->result_array();
    }

    public function getAllKaryawan(){
         return $this->db->get('karyawan')->result_array();
    }

    public function getAllPegawai(){
         return $this->db->get('pegawai')->result_array();
    }

    public function getAllSdm(){
         return $this->db->get('sdm')->result_array();
    }

    public function getAllStatus(){
         return $this->db->get('status_karyawan')->result_array();
    }

    public function getAllKomplain_network(){
         return $this->db->get('komplain')->result_array();
    }

     public function getAllPelanggan(){
         return $this->db->get('pelanggan')->result_array();
    }


    public function getAllStatus_pemasangan(){
         return $this->db->get('status_pemasangan')->result_array();
    }

    public function getAllSKP(){
         return $this->db->get('skp')->result_array();
    }

    public function getAllTagihan(){
         return $this->db->get('tagihan')->result_array();
    }
    public function getAllHIO(){
         return $this->db->get('historyinventoryout')->result_array();
    }

    public function getAllInventori(){
         return $this->db->get('inventory')->result_array();
    }

    public function getAllKategori(){
         return $this->db->get('kategori')->result_array();
    }

    public function getAllSuplier(){
         return $this->db->get('supplier')->result_array();
    }

    public function getAllFinance(){
         return $this->db->get('finance')->result_array();
    }

}
