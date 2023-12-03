<?php

class Product extends CI_Model{
	
	public function insert($data)
	{
        $this->db->insert('products',$data);
	  	return true;
	}

	public function show($proid='')
	{
		$this->db->select('*');
		$this->db->from('products');
		if ($proid) {
			$this->db->where('id',$proid);
			$query=$this->db->get();
		    return $query->result_array();
		} else {
		    $query=$this->db->get();
		    return $query->result_array();
		}
		
		
		
	}

}