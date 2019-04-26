<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_model extends CI_Model {
  public function getAllSdm(){
        return $this->db->get('sdm')->result_array();
   }
   public function getPemesanan(){
    $this->db->limit(5);
		$this->db->order_by('id_pemesanan','DESC');
		return $this->db->get('pemesanan')->result_array();
	}
  public function getTagihan(){
    $this->db->limit(5);
		$this->db->order_by('idTagihan','DESC');
		return $this->db->get('tagihan')->result_array();
  }
  public function getInventory(){
    $this->db->limit(5);
		$this->db->order_by('idBarang','DESC');
		return $this->db->get('inventory')->result_array();
  }
  public function getStatus(){
    $this->db->limit(5);
		$this->db->order_by('id_sp','DESC');
    $this->db->where('status_pemasangan', 'Sedang Dalam Proses Pemasangan');
		return $this->db->get('status_pemasangan')->result_array();
  }
}
