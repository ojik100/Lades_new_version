<?php 
 
class M_Perintah_desa extends CI_Model{
	
	function get(){
		$this->db->select('*');
        $this->db->from('pemerintah_desa');
        $query = $this->db->get();
        return $query->result();
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
