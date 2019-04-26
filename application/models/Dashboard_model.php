<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
  public function getAllSdm(){
    // return $this->db->get('sdm')->result_array();
    return json_decode(
    file_get_contents(API_BASE_URL."/dashboard/index_get?param=get_sdm"));
   }

   public function getPemesanan(){
    return json_decode(
    file_get_contents(API_BASE_URL."/dashboard/index_get/?param=get_pemesanan&limit=5"));
		// $this->db->order_by('id_pemesanan','DESC');
		// return $this->db->get('pemesanan')->result_array();
	}

  public function getTagihan(){
    return json_decode(
    file_get_contents(API_BASE_URL."/dashboard/index_get/?param=get_tagihan&limit=5"));
    // $this->db->limit(5);
		// $this->db->order_by('idTagihan','DESC');
		// return $this->db->get('tagihan')->result_array();
  }

  public function getInventory(){
    return json_decode(
    file_get_contents(API_BASE_URL."/dashboard/index_get/?param=get_inventory&limit=5"));
    // $this->db->limit(5);
		// $this->db->order_by('idBarang','DESC');
		// return $this->db->get('inventory')->result_array();
  }

  public function getStatus(){
    return json_decode(
    file_get_contents(API_BASE_URL."/dashboard/index_get/?param=get_status_pemasangan&limit=5"));
    // $this->db->limit(5);
		// $this->db->order_by('id_sp','DESC');
    // $this->db->where('status_pemasangan', 'Sedang Dalam Proses Pemasangan');
		// return $this->db->get('status_pemasangan')->result_array();
  }

}
