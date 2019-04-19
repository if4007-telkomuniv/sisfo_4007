<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Finance extends CI_Model {

	public function financeinput($data)
	{
		$this->db->insert('finance',$data);
	    return;
	}
	public function laporanpemasukan($jenis,$tanggal){
		$this->db->select('*');
		$this->db->from('finance');
		$this->db->where('tipe',$jenis);
		$this->db->where('tanggal',$tanggal);
		$query = $this->db->get();
		return $query->result();
	}
	public function laporanpemasukanfull($jenis,$tanggal,$tanggal2){
		$this->db->select('*');
		$this->db->from('finance');
		$this->db->where('tipe',$jenis);
		$this->db->where('tanggal >=',$tanggal);
		$this->db->where('tanggal <=',$tanggal2);
		$query = $this->db->get();
		return $query->result();
	}

}

