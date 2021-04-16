<?php 
 
class M_Komoditas extends CI_Model{
	
	function get(){
		$this->db->select('*');
        $this->db->from('komoditas');
        $query = $this->db->get();
        return $query->result();
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
