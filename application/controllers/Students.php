<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

	public function index()
	{
		$this->load->view('parts/header.php');
		$this->load->view('index_view');
		$this->load->view('parts/footer.php');
	}

	public function get_students()
	{

	}

	public function get_student()
	{

	}
}
