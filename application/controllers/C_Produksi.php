<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Produksi extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Produksi');
 
	}

	public function index()
	{
    $data['produksi']= $this->M_Produksi->get();
	$this->load->view('Admin/Produksi/index',$data);
	}

    public function simpan()
	{
		
		$kd_komoditas = $this->input->post('kd_komoditas');
		$nama_komoditas = $this->input->post('nama_komoditas');
		$usia = $this->input->post('usia');
		$hasil = $this->input->post('hasil');
		$durasi = $this->input->post('durasi');
		
 
		$data = array(
			
			'kd_komoditas' => $kd_komoditas,
			'nama_komoditas' => $nama_komoditas,
			'usia' => $usia,
			'hasil' => $hasil,
			'durasi' => $durasi,
		
			
			);
		$this->M_Produksi->input_data($data,'produksi');
		redirect('C_Produksi');
	
	}
}
