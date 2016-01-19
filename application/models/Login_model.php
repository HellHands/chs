<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('parts/header.php');
		$this->load->view('index_view');
		$this->load->view('parts/footer.php');
	}

	public function login_check()
	{
		$id   = $this->input->post('id');
		$pass = $this->input->post('password');

		$array = array(
			'username' => $id, 
			'password' => $pass
			);

		$query = $this->db->get_where('users', $array);

		return $query->row_array();

	}


}
