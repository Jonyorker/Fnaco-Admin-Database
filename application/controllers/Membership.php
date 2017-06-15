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

	public function create()
	{
		$data['main_content'] = 'membership/membership_index_view';
        $this->load->view('template/body_view', $data);
	}

	public function store()
	{

		$salutations = $this->input->post('salutations');
		$first_name = $this->input->post('first_name');
    	$last_name = $this->input->post('last_name');

    	$display_name = $salutations.' '.$first_name.' '.$last_name;
    	$timestamp = date('Y-m-d H:i:s');

    	$data = array('display_name' => $display_name, 'user_registered' => $timestamp);

		$this->Membership_model->create($data);

		$data['main_content'] = 'membership/membership_index_view';
        $this->load->view('template/body_view', $data);
	}

	public function Retrieve()
	{

	}

	public function Update()
	{

	}

	public function Destroy()
	{

	}

}
