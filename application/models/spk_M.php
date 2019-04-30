<!-- Haifa Salsabila 1301160170 -->
<?php 
defined('BASEPATH') or exit('No direct script access allowed');
/**
* 
*/
class spk_M extends CI_Model
{
	public function get_data()
	{
        $this->db->limit(1);
        $this->db->order_by('idSKP','desc');
        $query = $this->db->get('skp');
        return $query->result_array();
	}

	public function save_data($data)
	{
		$param = array(
					"NamaKaryawan"=>$data['nama'],
					"NIP"=>$data['nip'],
                    "Jabatan"=>$data['jabatan'],
                    "alamat"=>$data['alamat'],
                    "perintah"=>$data['pk'],
                    "start"=>$data['start'],
                    "end"=>$data['end']
		);
		$insert = $this->db->insert('skp', $param);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
	}
}