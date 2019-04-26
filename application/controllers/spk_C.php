<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class spk_C extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('spk_M');
    }

	public function index()
	{
		$data["value"] = $this->spk_M->get_data();
		// print_r($data);
        $this->load->view('suratPK',$data);
	}
	public function add()
	{
		$data = $this->input->post(null,TRUE);
		$insert = $this->spk_M->save_data($data);
        if($insert){
            $this->session->set_flashdata('alert', 'sukses_insert');
            redirect('spk_C/index');
        }else{
            echo "<script>alert('Gagal Menambahkan Data');</script>";
        }

	}
}
