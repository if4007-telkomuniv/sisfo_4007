<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pegawai extends CI_Controller {

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
		$this->load->view('employeeData');
	}
	public function addEmployee()
    {
			define('DB_SERVER', 'localhost');
	    define('DB_USERNAME', 'krocolab_telkom');
	    define('DB_PASSWORD', 'hanzerudesu99');
	    define('DB_DATABASE', 'krocolab_main');
   		$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   		if(isset($_POST['eid']) && isset($_POST['ename']) && isset($_POST['egender']) && isset($_POST['eemail']))
        $id = $_POST['eid'];
        $nama = $_POST['ename'];
        $gender = $_POST['egender'];
        $email = $_POST['eemail'];

        $query = "INSERT INTO pegawai VALUES ($id, '$nama', '$gender', '$email', 'On enrollment', 0)";

        if($result=mysqli_query($db,$query)) {
        	echo "<script> alert('Employee added succesfully.') </script>";
        	echo "<script type='text/javascript'> location.href = 'http://localhost/sisfo_4007/Data_pegawai/index';</script>";
        } else {
        	echo "<script> alert('Sorry, something goes wrong. Employee can not be added.') </script>";
        	echo "<script type='text/javascript'> location.href = 'http://localhost/sisfo_4007/Data_pegawai/index';</script>";
        }

    }
}
