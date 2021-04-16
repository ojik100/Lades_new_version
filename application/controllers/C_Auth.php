<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Auth extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Auth');
 
	}

	public function index()
	{
	$this->load->view('Admin/login');
	}
	public function Aksi_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_Auth->cek_login("tb_admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("C_Dashboard"));
 
		}else{
			redirect(base_url("C_Auth"));
		}
	}
}
