<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
  public function getAllSdm(){
    return json_decode($this->curl->simple_get(API_BASE_URL."/dashboard/index_get?param=get_sdm"));
   }

   public function getPemesanan(){
    return json_decode($this->curl->simple_get(API_BASE_URL."/dashboard/index_get?param=get_pemesanan&limit=5"));
	}

  public function getTagihan(){
    return json_decode($this->curl->simple_get(API_BASE_URL."/dashboard/index_get?param=get_tagihan&limit=5"));
  }

  public function getInventory(){
    return json_decode($this->curl->simple_get(API_BASE_URL."/dashboard/index_get?param=get_inventory&limit=5"));
  }

  public function getStatus(){
    return json_decode($this->curl->simple_get(API_BASE_URL."/dashboard/index_get?param=get_status_pemasangan&limit=5"));
  }

}
