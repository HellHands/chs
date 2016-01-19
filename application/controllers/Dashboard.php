<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		@$user_info = $this->session->flashdata('info');
		$this->session->set_userdata($user_info);
		@$logged_in = $this->session->userdata('logged_in');
		
		if($logged_in)
		{
			echo $this->session->id; 
			echo $this->session->name;	
		}else{
			session_destroy();
			redirect(base_url());
		}
		
	}
}
