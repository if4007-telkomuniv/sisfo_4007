<!-- Monica Dessy Amanda 1301164452 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tp_C extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('tp_M');
    }

	public function index()
	{
		$data = array(
            'title' => 'Tagihan Pelanggan',
            'tagihan' => $this->tp_M->get_data()
        );
        $this->load->view('tagihanP',$data);
	}
}
