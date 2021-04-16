<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Hasil_bumi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_Hasil_bumi');
		$this->load->library('form_validation');
       
		
	}

	public function index()
	{
		$data['Hasil_bumi']= $this->M_Hasil_bumi->getData();
	$this->load->view('Admin/Hasil_bumi/index',$data);
	}
	public function Add()
	{
	$data['komoditas']= $this->M_Hasil_bumi->get();

	$this->load->view('Admin/Hasil_bumi/add',$data);
	}
	public function Simpan()
	{
		$kd_provinsi = $this->input->post('kd_provinsi');
		$kd_kota = $this->input->post('kd_kota');
		$nam_desa = $this->input->post('nam_desa');
		$nama_petani = $this->input->post('nama_petani');
		$swadaya = $this->input->post('swadaya');
		$alamat_petani = $this->input->post('alamat_petani');
		$hp_pic = $this->input->post('hp_pic');
		$email_pic = $this->input->post('email_pic');
		$luas_lahan = $this->input->post('luas_lahan');
		$kd_komoditas = $this->input->post('kd_komoditas');
		$kd_subkomoditas = $this->input->post('kd_subkomoditas');
		$tgl_tanam = $this->input->post('tgl_tanam');
		$estimasi_tgl_panen = $this->input->post('estimasi_tgl_panen');
		$estimasi_hasil_panen = $this->input->post('estimasi_hasil_panen');
		$hasil_produksi = $this->input->post('hasil_produksi');
		$durasi = $this->input->post('durasi');
		$perusahaan_binaan = $this->input->post('perusahaan_binaan');
		$alamat_perusahaan_binaan = $this->input->post('alamat_perusahaan_binaan');
		$hp_pic_perusahaan = $this->input->post('hp_pic_perusahaan');
		$email_pic_perusahaan = $this->input->post('email_pic_perusahaan');
 
		$data = array(
			'kd_provinsi' => $kd_provinsi,
			'kd_kota' => $kd_kota,
			'nam_desa' => $nam_desa,
			'nama_petani' => $nama_petani,
			'swadaya' => $swadaya,
			'alamat_petani' => $alamat_petani,
			'hp_pic' => $hp_pic,
			'email_pic' => $email_pic,
			'luas_lahan' => $luas_lahan,
			'kd_komoditas' => $kd_komoditas,
			'kd_subkomoditas' => $kd_subkomoditas,
			'tgl_tanam' => $tgl_tanam,
			'estimasi_tgl_panen' => $estimasi_tgl_panen,
			'estimasi_hasil_panen' => $estimasi_hasil_panen,
			'hasil_produksi' => $hasil_produksi,
			'durasi' => $durasi,
			'perusahaan_binaan' => $perusahaan_binaan,
			'alamat_perusahaan_binaan' => $alamat_perusahaan_binaan,
			'hp_pic_perusahaan' => $hp_pic_perusahaan,
			'email_pic_perusahaan' => $email_pic_perusahaan,
			
			);
		$this->M_Hasil_bumi->input_data($data,'hasil_bumi');
		redirect('C_Hasil_bumi');
	
		
	}
	public function Update()
	{
		$id = $this->input->post('id');
		$kd_provinsi = $this->input->post('kd_provinsi');
		$kd_kota = $this->input->post('kd_kota');
		$nam_desa = $this->input->post('nam_desa');
		$nama_petani = $this->input->post('nama_petani');
		$swadaya = $this->input->post('swadaya');
		$alamat_petani = $this->input->post('alamat_petani');
		$hp_pic = $this->input->post('hp_pic');
		$email_pic = $this->input->post('email_pic');
		$luas_lahan = $this->input->post('luas_lahan');
		$kd_komoditas = $this->input->post('kd_komoditas');
		$kd_subkomoditas = $this->input->post('kd_subkomoditas');
		$tgl_tanam = $this->input->post('tgl_tanam');
		$estimasi_tgl_panen = $this->input->post('estimasi_tgl_panen');
		$estimasi_hasil_panen = $this->input->post('estimasi_hasil_panen');
		$hasil_produksi = $this->input->post('hasil_produksi');
		$durasi = $this->input->post('durasi');
		$perusahaan_binaan = $this->input->post('perusahaan_binaan');
		$alamat_perusahaan_binaan = $this->input->post('alamat_perusahaan_binaan');
		$hp_pic_perusahaan = $this->input->post('hp_pic_perusahaan');
		$email_pic_perusahaan = $this->input->post('email_pic_perusahaan');
 
		$data = array(
			'id' =>$id,
			'kd_provinsi' => $kd_provinsi,
			'kd_kota' => $kd_kota,
			'nam_desa' => $nam_desa,
			'nama_petani' => $nama_petani,
			'swadaya' => $swadaya,
			'alamat_petani' => $alamat_petani,
			'hp_pic' => $hp_pic,
			'email_pic' => $email_pic,
			'luas_lahan' => $luas_lahan,
			'kd_komoditas' => $kd_komoditas,
			'kd_subkomoditas' => $kd_subkomoditas,
			'tgl_tanam' => $tgl_tanam,
			'estimasi_tgl_panen' => $estimasi_tgl_panen,
			'estimasi_hasil_panen' => $estimasi_hasil_panen,
			'hasil_produksi' => $hasil_produksi,
			'durasi' => $durasi,
			'perusahaan_binaan' => $perusahaan_binaan,
			'alamat_perusahaan_binaan' => $alamat_perusahaan_binaan,
			'hp_pic_perusahaan' => $hp_pic_perusahaan,
			'email_pic_perusahaan' => $email_pic_perusahaan,
			
			);
		$this->M_Hasil_bumi->update_data($data,'hasil_bumi');
		redirect('C_Hasil_bumi');
	
		
	}
	function edit($id){
		$where = array('id' => $id);
		$data['hasil_bumi'] = $this->M_Hasil_bumi->edit_data($where,'hasil_bumi')->result();
		$this->load->view('Admin/Hasil_bumi/edit',$data);
	}
}
