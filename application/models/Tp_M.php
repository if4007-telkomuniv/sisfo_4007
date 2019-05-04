<!-- Monica Dessy Amanda 1301164452 -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
*
*/
class Tp_M extends CI_Model
{
	public function get_data()
	{
		date_default_timezone_set("Asia/Jakarta");
        $this->db->select('*');
        $this->db->from('tagihan');
        $query = $this->db->get();
        return $query->result();
	}
}
