<!-- Karina Aulia Dini 1301164342 -->
<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class bp_M extends CI_Model
{
	public function get_data()
	{
        $this->db->select('*');
        $this->db->from('pengeluaran');
        $query = $this->db->get();
        return $query->result();
	}
}