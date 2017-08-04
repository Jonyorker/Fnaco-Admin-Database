<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['main_content'] = 'welcome_view';
        $this->load->view('template/body_view', $data);
	}

	public function Create()
	{
		$data['main_content'] = 'membership/membership_index_view';
        $this->load->view('template/body_view', $data);
	}

	public function Store()
	{

		$salutations = $this->input->post('salutations');
		$first_name = $this->input->post('first_name');
    	$last_name = $this->input->post('last_name');

    	$display_name = $salutations.' '.$first_name.' '.$last_name;
    	$timestamp = date('Y-m-d H:i:s');

    	$data = array('display_name' => $display_name, 'user_registered' => $timestamp);

		$id = $this->Membership_model->create($data);

		// Getting info
		$data = $this->Retrive_Usermeta($id);

		// Display info
		$data['main_content'] = 'membership/update_view';
        $this->load->view('template/body_view', $data);
	}

	public function Retrieve()
	{
		// Grabbing ID from form
		$id = $this->input->post('id');

		// Getting info
		$data = $this->Retrive_Usermeta($id);

		// Display info
		$data['main_content'] = 'membership/update_view';
        $this->load->view('template/body_view', $data);
	}

	public function Retrive_Usermeta($id)
	{
		$data['query'] = $this->Membership_model->retrieve_from_users($id);
		$data['address'] = $this->Membership_model->retrieve_from_usermeta($id, 'Address');
		$data['city'] = $this->Membership_model->retrieve_from_usermeta($id, 'City');
		$data['postal'] = $this->Membership_model->retrieve_from_usermeta($id, 'Postal');
		$data['email'] = $this->Membership_model->retrieve_from_usermeta($id, 'billing_email');
		$data['phone_1'] = $this->Membership_model->retrieve_from_usermeta($id, 'Phone 1');
		$data['phone_2'] = $this->Membership_model->retrieve_from_usermeta($id, 'Phone 2');
		$data['language'] = $this->Membership_model->retrieve_from_usermeta($id, 'Language');

		return $data;
	}

	public function Update()
	{
		$data['main_content'] = 'membership/membership_index_view';
        $this->load->view('template/body_view', $data);

	}

	public function Destroy($id)
	{
		$this->Membership_model->update_usermeta($data, $id);
	}

}
