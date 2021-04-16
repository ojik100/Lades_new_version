<?php 
 
class M_Hasil_bumi extends CI_Model{
   
	function get(){
		$this->db->select('*');
        $this->db->from('komoditas');
        $query = $this->db->get();
        return $query->result();
    }

    function getData(){
		$this->db->select('*');
        $this->db->from('hasil_bumi');
        $query = $this->db->get();
        return $query->result();
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
