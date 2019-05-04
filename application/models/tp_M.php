<!-- Monica Dessy Amanda 1301164452 -->
<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class tp_M extends CI_Model
{
	public function get_data()
	{
        $this->db->select('*');
        $this->db->from('tagihan');
        $query = $this->db->get();
        return $query->result();
	}
}