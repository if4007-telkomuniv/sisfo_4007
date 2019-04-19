<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Finance extends CI_Model {

	public function financeinput($data)
	{
		$this->db->insert('finance',$data);
	    return;
	}


}

