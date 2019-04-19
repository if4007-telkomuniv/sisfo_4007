<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
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
		$data['sdm'] = $this->dashboard_model->getAllSdm();
		$data['pemesanan'] = $this->dashboard_model->getPemesanan();
		$data['tagihan'] = $this->dashboard_model->getTagihan();
		$data['inventory'] = $this->dashboard_model->getInventory();
		$data['status_pemasangan'] = $this->dashboard_model->getStatus();
		$this->load->view('dashboard', $data);


	}





}
