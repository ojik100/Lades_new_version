<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index()
	{
	$this->load->view('Admin/Dashboard');
	}
}