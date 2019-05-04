<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wholesale extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('ModelWholesale');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['result'] = $this->ModelWholesale->getStock();
		$this->load->view('wholesale/stockOfItems_view',$data);
	}


	// ---BEGINNING FUNCTION FOR INVENTORY IN--- //
	public function invenmasuk()
	{
		if ($this->input->get('q') == 'success') {
			$data['success'] = 1;
		}else {
			$data['success'] = 0;
		}
		$data['barang'] = $this->ModelWholesale->getIdBarang();
		$data['history'] = $this->ModelWholesale->getHistoryIn();
		$data['supplier'] = $this->ModelWholesale->getSupplier();
		$this->load->view('wholesale/invenmasuk',$data);
	}

	public function formInvenIN()
	{
		$flag = 0;
		foreach ($this->ModelWholesale->getIdBarang()->result() as $v){
			if ($v->idSupplier == $this->input->post('idSupplier') && $v->namaBarang == $this->input->post('namaBarang')){
				$idBarang = $v->idBarang;
				$namaBarang = $v->namaBarang;
				$currentStock = $v->stockBarang;
				$flag = 1;
				break;
			}
		}
		if ($flag == 1){
			$data['idBarang'] = $idBarang;
			$data['namaBarang'] = $namaBarang;
			$data['stockBarang'] = $currentStock + $this->input->post('stockBarang');
			$data['minstockBarang'] = $this->input->post('stockBarang');
			$data['keterangan'] = $this->input->post('keterangan');

			$this->ModelWholesale->updateInventoryOut($data);
			$this->ModelWholesale->addHistoryInventoryIn('historyinventoryin',$data);
			redirect(base_url('wholesale/invenmasuk?q=success'), 'refresh');
		}else{
			$id =  $this->ModelWholesale->getIdBarang()->num_rows()+1;
			$data['idBarang'] = 'INV0000'.$id;
			$data['idSupplier'] = $this->input->post('idSupplier');
			$data['namaBarang'] = $this->input->post('namaBarang');
			$data['stockBarang'] = $this->input->post('stockBarang');
			$data['keterangan'] = $this->input->post('keterangan');

			$data1['idBarang'] = 'INV0000'.$id;
			$data1['idSupplier'] = $this->input->post('idSupplier');
			$data1['namaBarang'] = $this->input->post('namaBarang');
			$data1['minstockBarang'] = $this->input->post('stockBarang');
			$data1['keterangan'] = $this->input->post('keterangan');

			$this->ModelWholesale->addInventory($data);
			$this->ModelWholesale->addHistoryInventoryIn('historyinventoryin',$data1);
			redirect(base_url('wholesale/invenmasuk?q=success'), 'refresh');
		}
	}
	// ---END FUNCTION FOR INVENTORY IN--- //

	// ---BEGINNING FUNCTION FOR INVENTORY OUT--- //
	public function invenkeluar()
	{
		$data['barang'] = $this->ModelWholesale->getIdBarang();
		$data['history'] = $this->ModelWholesale->getHistoryOut();
		$this->load->view('wholesale/invenkeluar', $data);
	}

	public function formInvenOUT()
	{
		$flag = 0;
		foreach ($this->ModelWholesale->getIdBarang()->result() as $v){
			if ($v->idBarang == $this->input->post('idBarang')){
				$currentStock = $v->stockBarang;
				$flag = 1;
				break;
			}
		}
		if ($flag == 1){
			$data['idBarang'] = $this->input->post('idBarang');
			$data['keterangan'] = $this->input->post('keterangan');
			$data['sisastockBarang'] = $currentStock - $this->input->post('stockBarang');
			$data['minstockBarang'] = $this->input->post('stockBarang');

			$this->ModelWholesale->updateInventory($data);
			$this->ModelWholesale->addHistoryInventory($data);
			redirect(base_url('wholesale/invenkeluar?q=success'), 'refresh');
		}
		
	}

	public function getBarang(){
	    $json = $this->ModelWholesale->getIdBarang()->result_array();
	    echo json_encode($json);
	}
	// ---END FUNCTION FOR INVENTORY OUT--- //

	public function stock() {
		$data['result'] = $this->ModelWholesale->getStock();
		$this->load->view('wholesale/stockOfItems_view',$data);
	}

	public function Supplier() {
		$data['title'] = 'CART';
		$no = (int)$this->ModelWholesale->getLenSupplier();
		$new = (int)$this->ModelWholesale->getLenSupplier()+1;
		$idSupplier = "SP000" .  $no;
		$idSupplierNew = "SP000" . $new;
		$data['idSupplierNew'] = $idSupplierNew;
		$data['idSupplier'] = $idSupplier;
		$data['resultJoin'] = $this->ModelWholesale->getLeftJoin('supplier','kategori');
 		$data['resultKategori'] = $this->ModelWholesale->getTable('kategori');

		$this->load->view('wholesale/supplier', $data);
	}


	public function addSupplier() {
		# Add supplier
		if(null !== $this->input->post('namaSupplier')){
			$no = (int)$this->ModelWholesale->getLenSupplier() + 1;
			$idSupplier = "SP000" .  $no;
			$namaSupplier = $this->input->post('namaSupplier');
			$deskripsi = $this->input->post('deskripsi');
			$idKategorifk = $this->input->post('sel1');


			$dataUser = array(
				'idSupplier' => $idSupplier,
		        'namaSupplier' => $namaSupplier,
		        'deskripsi' => $deskripsi,
		        'idKategori' => $idKategorifk,
		        'status' => 1,
			);
			$this->ModelWholesale->addSupplier($dataUser);
			$data['delete'] = null;
			$data['edit'] = null;
			$data['success'] = 1;

		# Update supplier
		}elseif(null != $this->input->post('namaSupplierEdit')){
			$idSupplier = $this->input->post('idSupplierEdit');
			$namaSupplier = $this->input->post('namaSupplierEdit');
			$deskripsi = $this->input->post('deskripsiEdit');
			$idKategorifk = $this->input->post('sel1edit');

			$dataUser = array(
		        'idSupplier' => $idSupplier,
		        'namaSupplier' => $namaSupplier,
		        'deskripsi' => $deskripsi,
		        'idKategori' => $idKategorifk,
		        'status' => 1,
			);
			$data['delete'] = null;
			$data['edit'] = 1;
			$data['success'] = null;
			$this->ModelWholesale->updateSupplier($dataUser);
			
		}elseif(null != $this->input->post('delete')){
			$idSupplier = $this->input->post('delete');
			$namaSupplier = $this->input->post('namaSupplierDelete');
			$deskripsi = $this->input->post('deskripsiDelete');
			$idKategorifk = $this->input->post('idKategoriDelete');
			$dataUser = array(
				'idSupplier' => $idSupplier,
				'namaSupplier' => $namaSupplier,
				'deskripsi' => $deskripsi,
				'idKategori' => $idKategorifk,
				'status' => 0,
			);
			$this->ModelWholesale->deleteSupplier($dataUser);
		}

		$no = (int)$this->ModelWholesale->getLenSupplier();
		$new = (int)$this->ModelWholesale->getLenSupplier()+1;
		$idSupplier = "SP000" .  $no;
		$idSupplierNew = "SP000" . $new;
		$data['idSupplierNew'] = $idSupplierNew;
		$data['idSupplier'] = $idSupplier;
		$data['resultJoin'] = $this->ModelWholesale->getLeftJoin('supplier','kategori');
 		$data['resultKategori'] = $this->ModelWholesale->getTable('kategori');
		$this->load->view('wholesale/supplier', $data);
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

		$this->ModelWholesale->updateBarang($dataUser);
		$data['result'] = $this->ModelWholesale->getStock();
		$this->load->view('Wholesale/stockOfItems_view',$data);
	}
}
