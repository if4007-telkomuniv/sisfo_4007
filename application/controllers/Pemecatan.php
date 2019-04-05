<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemecatan extends CI_Controller {

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
		$this->load->view('employeeDismissal');
	}
	public function IdCheck() {
   		define('DB_SERVER', 'localhost');
   		define('DB_USERNAME', 'root');
   		define('DB_PASSWORD', '');
   		define('DB_DATABASE', 'hrm');
   		$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  
		if(isset($_POST['eid'], $_POST['ereason'], $_POST['edeskripsi'])) {
        $id=$_POST['eid'];
        $reason=$_POST['ereason'];
        $desk=$_POST['edeskripsi'];

        
        
        $firstQuery = "SELECT idpegawai FROM pegawai WHERE idpegawai=$id";

        $eksekusi1 = mysqli_query($db,$firstQuery);
        $result1 = mysqli_num_rows($eksekusi1);

        if($result1<>0) {
        	$secondQuery = "DELETE FROM pegawai WHERE idpegawai=$id";
        	$thirdQuery = "INSERT INTO pemecatan VALUES ($id, '$reason', '$desk')";
        	$result2 = mysqli_query($db, $secondQuery);
            $result3 = mysqli_query($db, $thirdQuery);
            echo "<script> alert('Employee successfully fired!') </script>";
            echo "<script type='text/javascript'> location.href = 'http://localhost/sisfo_4007/Pemecatan/index';</script>";
        } else {
        	echo "<script> alert('Sorry, ID does not exist!') </script>";
        	echo "<script type='text/javascript'> location.href = 'http://localhost/sisfo_4007/Pemecatan/index';</script>";
        }
       
        // echo   "<script> if (confirm('Are you sure you want fire employee with ID : $id ? All changes cannot be undone. ')) {";
        //         	$result = mysqli_query($db, $query);
        //         	$result2 = mysqli_query($db, $sql);
        //         	//TAMBAHIN ERROR HANDLING BUAT ID NYA KALO GAK ADA, TINGGAL NGECEK HASIL ROW KALAU = 1
        //         	$this->load->view('employeeDismissal');
        //     echo "} else {
        //             alert('Dismissal Canceled.');
        //           } </script> ";
      }
	}
}
