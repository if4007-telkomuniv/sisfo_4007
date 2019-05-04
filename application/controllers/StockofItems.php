<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stockOfItems extends CI_Controller {
	public function __construct(){
		
		parent::__construct();
		$this->load->model('stockOfitems_model');	
	}
	public function index()
	{
		$data['result'] = $this->stockOfitems_model->getStock();
		$this->load->view('stockOfItems_view',$data);
	}

	public function itemEdit(){

		$idBarang = $this->input->post('idBarangEdit');
		$namaBarang = $this->input->post('namaBarangEdit');
		$stockBarang = $this->input->post('stockBarangEdit');
		$idSupplier = $this->input->post('idSupplierEdit');
		$keterangan = $this->input->post('keteranganEdit');

		$dataUser = array(
		    'idBarang' => $idBarang,
		    'namaBarang' => $namaBarang,
		    'stockBarang' => $stockBarang,
		    'idSupplier' => $idSupplier,
		    'keterangan' => $keterangan
		);

		$this->stockOfitems_model->updateBarang($dataUser);
		$data['result'] = $this->stockOfitems_model->getStock();
		$this->load->view('stockOfItems_view',$data);
	}
}