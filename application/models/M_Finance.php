<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Finance extends CI_Model {

	public function Financeinput($data)
	{
		$this->db->insert('Finance',$data);
	    return;
	}


}

