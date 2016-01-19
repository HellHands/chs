<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		session_destroy();
		$this->load->view('parts/header.php');
		$this->load->view('index_view');
		$this->load->view('parts/footer.php');
	}
}
