<?php
class Site_model extends ci_Model
{
	function get_records()
	{
		$query=$this->db->get('student');
		return $query->result();
		
	}
	function add_record($data){
		$this->db->insert('student',$data);
		return;
	}
	function update_record($data){
		$this->db->where('id',rand(0,10));
		$this->db->update('student',$data);
	}
	function delete_row(){
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('student');
	}
	
}
