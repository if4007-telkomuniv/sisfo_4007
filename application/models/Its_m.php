<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Its_m extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function tambahPelanggan($data){
		return $this->db->insert('pelanggan', $data);
	}

	public function getPelanggan(){
		return json_decode(
    file_get_contents(API_BASE_URL."itsupport/index_get?param=get_pelanggan"));
		// return $this->db->get('pelanggan');
	}

	public function getStatusPemasangan(){
		return json_decode(
    file_get_contents(API_BASE_URL."itsupport/index_get?param=get_status"));
		// $this->db->join('pelanggan', 'status_pemasangan.id_pelanggan = pelanggan.id_pelanggan');
		// return $this->db->get('status_pemasangan');
	}

	public function getKomplain(){
		return json_decode(
    file_get_contents(API_BASE_URL."itsupport/index_get?param=get_komplain"));
		// return $this->db->get('komplain');
	}

	public function editKomplain($data, $id){
		$this->db->set($data);
		$this->db->where('id_komplain', $id);
		return $this->db->update('komplain');
	}

	public function hapusStatusPemasangan($id){
		$this->db->where('id_sp', $id);
		return $this->db->delete('status_pemasangan');
	}

	public function editPelanggan($data, $id){
		$this->db->set($data);
		$this->db->where('id_pelanggan', $id);
		return $this->db->update('pelanggan');
	}

	public function editStatusPemasangan($data, $id){
		$this->db->set($data);
		$this->db->where('id_sp', $id);
		return $this->db->update('status_pemasangan');
	}

	public function hapusPelanggan($id){
		$this->db->where('id_pelanggan', $id);
		return $this->db->delete('pelanggan');
	}

	public function tambahStatusPemasangan($data){
		return $this->db->insert('status_pemasangan', $data);
	}

	public function check_pelanggan($id){
		$this->db->where('id_pelanggan', $id);
		return $this->db->count_all_results('pelanggan');
	}

}
