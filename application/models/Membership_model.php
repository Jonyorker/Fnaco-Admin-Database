<?php

class Membership_model extends CI_Model
{

// the database interfaces for Membership info
	
	function create($data)
	{
		$this->db->insert('wp_kapn_users', $data);
		return;
	}
	
	function edit($data)
	{

		$query = $this->db->get_where('OLD_Membership', array('ID'=> $ID));
		return $query->row_array();
		
	}

	function update($data)
	{
		
	}
	
}
