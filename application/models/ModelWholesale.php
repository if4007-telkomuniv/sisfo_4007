<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelWholesale extends CI_Model{
    public function getSupplier(){
        return $this->db->get('supplier');
    }

    public function getIdBarang(){
		return $this->db->get('inventory');
    }

    public function getKategori(){
		return $this->db->get('kategori');
    }

    public function addInventory($data){
		$this->db->insert('inventory', $data);
    }

    public function updateInventory($data){
    	$dataUpdate = array(
	        'stockBarang' => $data['stockBarang']
		);
		$this->db->where('idBarang', $data['idBarang']);
		$this->db->update('inventory', $dataUpdate);
    }

    public function addHistoryInventory($data){
		$this->db->insert('historyinventoryout', $data);
    }

    public function getLenSupplier(){
        return $this->db->get('supplier')->num_rows();
    }

    public function getTable($table){
        $this->db->select('*')->from($table);
        return $this->db->get();
    }

    public function getLeftJoin($table,$table2){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, 'idKategori' , 'left');
        $this->db->where('status',1);
        return $this->db->get();
    }

    public function addSupplier($dataUser){
        $this->db->insert('supplier',$dataUser);
    }

    public function updateSupplier($data){
        return $this->db->replace('supplier' , $data);
    }

    public function deleteSupplier($data){
            //$this->db->delete('supplier', array('idSupplier' => $id));
        return $this->db->replace('supplier' , $data);
    }

    public function getIdKategori($table,$namaKategori){
        $this->db->select('idKategori')->from($table)->where('namaKategori',$namaKategori);
        return $this->db->get();
    }

    public function getStock(){
        $this->db->select('*');
        $this->db->from('inventory');
        $this->db->join('supplier','idSupplier');
        return $this->db->get();
    }
}
