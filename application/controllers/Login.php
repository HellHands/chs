<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('parts/header.php');
		$this->load->view('index_view');
		$this->load->view('parts/footer.php');
	}

	public function authenticate()
	{
		$data['user'] = $this->login_model->login_check();
		$fname        = $data['user']['fname'];
		$lname        = $data['user']['lname'];
		$name         = $fname . ' ' . $lname;
		$id           = $data['user']['username'];

		$info = array(
			'id' => $id, 
			'fname' => $fname,
			'lname' => $lname,
			'name' => $name,
			'logged_in' => TRUE
			);

		$this->session->set_flashdata('info', $info);
		redirect(base_url('dashboard'));
		//$this->session->set_userdata($info);
	}


}
