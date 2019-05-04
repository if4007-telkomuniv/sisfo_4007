<!-- Karina Aulia Dini 1301164342 -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
*
*/
class Bp_M extends CI_Model
{
	public function get_data()
	{
		date_default_timezone_set("Asia/Jakarta");
        $this->db->select('*');
        $this->db->from('pengeluaran');
        $query = $this->db->get();
        return $query->result();
	}
}
