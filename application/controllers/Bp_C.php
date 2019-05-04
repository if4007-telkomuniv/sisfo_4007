<!-- Karina Aulia Dini 1301164342 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bp_C extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('bp_M');
    }

	public function index()
	{
		$data = array(
            'title' => 'Blanko Pengeluaran',
            'pengeluaran' => $this->bp_M->get_data()
        );
        $this->load->view('BlankoP',$data);
	}
}
