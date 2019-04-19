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

	public function Pemasukan()
	{
		$notps = $this->input->post('blanko');
		$suarap = $this->input->post('tanggal');
		$suaraj = $this->input->post('keperluan');
		$suaraj = $this->input->post('debit');
		$data = array(
			'tipe' => "M",
			'blanko' => $notps,
			'tanggal' => $suarap,
			'keperluan' => $keperluan,
			'debit' => $debit,
			'kredit' => 0
		);
		$this->M_Finance->Financeinput($data);
		$data = array('input' => 1);		
		$this->load->view('finance/index.php',$data);
	}	
}
