<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class finance extends CI_Controller {
	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_Finance');
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
		$data = array('input' => 0);		
		$this->load->view('finance/index.php',$data);
	}

	public function inputfinance()
	{
		$tipe = $this->input->post('tipe');
		$blanko = $this->input->post('blanko');
		$tanggal = $this->input->post('tanggal');
		$keperluan = $this->input->post('keperluan');
		$debit = $this->input->post('debit');
		$kredit = $this->input->post('kredit');
		if ($tipe == "M1"){
			$kredit = 0;
		}else{
			$debit = 0 ;
		}
		$data = array(
			'tipe' => $tipe,
			'blanko' => $blanko,
			'tanggal' => $tanggal,
			'keperluan' => $keperluan,
			'debit' => $debit,
			'kredit' => $kredit
		);
		$this->M_Finance->financeinput($data);
		$data = array('input' => 1);		
		$this->load->view('finance/index.php',$data);
	}	
	public function laporanpemasukan()
	{
		$tanggal1 = $this->input->post('tanggal1');
		$tanggal2 = $this->input->post('tanggal2');
		if ($tanggal2 == null){
			$data['pemasukan'] = $this->M_Finance->laporanpemasukan('M1',$tanggal1);
		}else{
			$data['pemasukan'] = $this->M_Finance->laporanpemasukanfull('M1',$tanggal1,$tanggal2);
		}
		$this->load->view('finance/laporanpemasukan.php',$data);
	}

	public function laporanpengeluaran()
	{
		$tanggal1 = $this->input->post('tanggal1');
		$tanggal2 = $this->input->post('tanggal2');
		if ($tanggal2 == null){
			$data['pemasukan'] = $this->M_Finance->laporanpemasukan('K1',$tanggal1);
		}else{
			$data['pemasukan'] = $this->M_Finance->laporanpemasukanfull('K1',$tanggal1,$tanggal2);
		}
		$this->load->view('finance/laporanpengeluaran.php',$data);
	}

	public function cashbank()
	{
		$tanggal1 = $this->input->post('tanggal1');
		$data['cashbank'] = $this->M_Finance->cashbank($tanggal1);
		$data['gaji'] = $this->M_Finance->gaji();
		$this->load->view('finance/cashbank.php',$data);
	}
	
	public function tahunan()
	{
		$tanggal1 = $this->input->post('tanggal1');
		$data['cashbank'] = $this->M_Finance->tahunan($tanggal1);
		$data['gaji'] = $this->M_Finance->gaji();
		$this->load->view('finance/laporantahunan.php',$data);
	}

	
}
