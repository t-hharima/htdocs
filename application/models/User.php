<?php

class User extends CI_Model{

	public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getUser(){
    	$sql = "SELECT * FROM personal";
    	$query = $this->db->query($sql);
    	if($query->num_rows() > 0) {
    		foreach ($query->result() as $row)
    		{
    			$id[]	=	$row->id;
    			$name[]	=	$row->name;
    		}
    	}
    	return $name;
    }
}