<?php

class Membership_model extends CI_Model
{

// the database interfaces for Membership info
	
	function create($data)
	{
		$this->db->insert('wp_kapn_users', $data);
		return;
	}
	
	function retrieve($data)
	{

		$this->db->select('*');
		$this->db->from('wp_kapn_users as u');
		$this->db->join('wp_kapn_usermeta as m', 'u.ID = m.user_id');
		$this->db->where('u.ID', $data['ID']);
		$query = $this->db->get();

		return $query->row_array();
		
	}

	function retrieve_test($data)
	{

		$this->db->select('m.meta_key, m.meta_value');
		$this->db->from('wp_kapn_users as u');
		$this->db->join('wp_kapn_usermeta as m', 'u.ID = m.user_id');
		$this->db->where('u.ID', $data['ID']);
		$query = $this->db->get();

		return $query->row_array();
		
	}

	function retrieve_from_users($id)
	{
		$query = $this->db->get_where('wp_kapn_users', array('ID' => $id ));
		return $query->row_array();
	}

	function retrieve_from_usermeta($id, $key)
	{	
		$this->db->select('meta_value');
		$query = $this->db->get_where('wp_kapn_usermeta', array('user_id' => $id, 'meta_key' => $key));
		$result = $query->row();
		return $result->meta_value;
	}

	function update_users($data)
	{
		
	}

	function update_usermeta($data)
	{
		
	}
	
}
