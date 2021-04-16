<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Perintah_desa extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Perintah_desa');
 
	}

	public function index()
	{
    $data['Perintah']= $this->M_Perintah_desa->get();
	$this->load->view('Admin/Perintah_desa/index',$data);
	}

    public function simpan()
	{
		
		$kd_provinsi = $this->input->post('kd_provinsi');
		$kd_kota = $this->input->post('kd_kota');
		$desa = $this->input->post('desa');
		$hp_pic = $this->input->post('hp_pic');
		$email_pic = $this->input->post('email_pic');
		$pic = $this->input->post('pic');
		
 
		$data = array(
			
			'kd_provinsi' => $kd_provinsi,
			'kd_kota' => $kd_kota,
			'desa' => $desa,
			'hp_pic' => $hp_pic,
			'email_pic' => $email_pic,
			'pic' => $pic,
		
			
			);
		$this->M_Perintah_desa->input_data($data,'pemerintah_desa');
		redirect('C_Perintah_desa');
	
	}
}
