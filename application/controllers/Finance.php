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
}
