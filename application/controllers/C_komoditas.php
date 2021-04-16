<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Komoditas extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_Komoditas');
       
		
	}

	public function index()
	{
    $data['komoditas']= $this->M_Komoditas->get();
	$this->load->view('Admin/Komoditas/index',$data);
	}

	public function simpan()
	{
		
		$kd_komoditas = $this->input->post('kd_komoditas');
		$kode_sektor = $this->input->post('kode_sektor');
		$nama_sektor = $this->input->post('nama_sektor');
		$nama_komoditas = $this->input->post('nama_komoditas');
		$kode_sub_komoditas = $this->input->post('kode_sub_komoditas');
		$name_sub_komoditas = $this->input->post('name_sub_komoditas');
		
 
		$data = array(
			
			'kd_komoditas' => $kd_komoditas,
			'kode_sektor' => $kode_sektor,
			'nama_sektor' => $nama_sektor,
			'nama_komoditas' => $nama_komoditas,
			'kode_sub_komoditas' => $kode_sub_komoditas,
			'name_sub_komoditas' => $name_sub_komoditas,
		
			
			);
		$this->M_Komoditas->input_data($data,'komoditas');
		redirect('C_komoditas');
	
	}
}
