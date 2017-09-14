<?php

class Course_model extends CI_Model {
    
	private $table = "Course";
	
	// Constructor
	public function __construct(){
		parent::__construct();
	}	
	
	
	// READ
	public function read($where=null){	
		
		$this->db->select("*");
		$this->db->from($this->table);
		
		// $this->db->select("*")
			// ->from($this->table)
			// ->join('','','')
			// ->group_by('','')
			// ->order_by('','');
		
		if( isset($where) )
			$this->db->where($where);
		
		$query=$this->db->get();
		
		return $query->result_array();
	}
	
    // C R E A T E
	public function create_course($data)
	{
		$this->db->insert($this->table, $data);
		return TRUE;
	}
        
    // R E A D
	public function check_course()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		
			
		$query=$this->db->get();
		
		if($query->result_array()){
			return true;
		}
		else return false;
	}
        
    // U P D A T E
    public function update_people($data)
	{
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;
	}
    
	//DELETE
	public function delete_people($data)
	{
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;
	}
}
