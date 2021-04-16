<?php 
 
class M_Produksi extends CI_Model{
	
	function get(){
		$this->db->select('*');
        $this->db->from('produksi');
        $query = $this->db->get();
        return $query->result();
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
