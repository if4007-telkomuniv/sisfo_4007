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
	        'stockBarang' => $data['sisastockBarang']
		);
		$this->db->where('idBarang', $data['idBarang']);
		$this->db->update('inventory', $dataUpdate);
    }

    public function updateInventoryOut($data){
        $dataUpdate = array(
            'stockBarang' => $data['stockBarang'],
            'keterangan' => $data['keterangan']
        );
        $this->db->where('namaBarang', $data['namaBarang']);
        $this->db->update('inventory', $dataUpdate);
    }

    public function addHistoryInventory($data){
        $dataInsert = array(
            'idBarang' => $data['idBarang'],
            'stockBarang' => $data['minstockBarang'],
            'keterangan' => $data['keterangan']
        );
		$this->db->insert('HistoryInventoryOut', $dataInsert);
    }

    public function addHistoryInventoryIn($table, $data){
        $dataInsert = array(
            'idBarang' => $data['idBarang'],
            'stockBarang' => $data['minstockBarang'],
            'keterangan' => $data['keterangan']
        );
        $this->db->insert($table, $dataInsert);
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
    
    public function updateBarang($data){
        return $this->db->replace('inventory', $data);
    }

    public function getHistoryOut(){
        $this->db->select('*');
        $this->db->from('historyinventoryout');
        return $this->db->get();
    }

    public function getHistoryIn(){
        $this->db->select('historyinventoryin.idBarang,historyinventoryin.stockBarang,historyinventoryin.keterangan,historyinventoryin.tanggal,supplier.namaSupplier');
        $this->db->join('inventory','idBarang');
        $this->db->join('supplier','idSupplier');
        $this->db->from('historyinventoryin');
        return $this->db->get();
    }
}
