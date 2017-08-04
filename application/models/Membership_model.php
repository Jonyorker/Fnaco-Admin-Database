<?php

class Membership_model extends CI_Model
{

// the database interfaces for Membership info
	
	function create($data)
	{
		$this->db->insert('wp_kapn_users', $data);
		$new_id = $this->db->insert_id();
		return $new_id;
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

	function update_usermeta($data, $id)
	{
		foreach ($data as $key => $value) {
			$this->db->where('user_id', $id);
			$this->db->where('meta_key', $key);
			$this->db->update('wp_kapn_usermeta', array('meta_value' => $value));
		}	
	}

	function destroy($id)
	{
		$this->db->delete('wp_kapn_users', array('ID' => $id));
		$this->db->delete('wp_kapn_usermeta', array('user_id' => $id));
	}
	
}
