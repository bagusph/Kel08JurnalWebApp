<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Jurnal_m
		$this->load->model('Jurnal_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/penulis" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Jurnal_m */
		$data['getData'] = $this->Jurnal_m->getData();
		// memanggil view 'penulis/penulis.php' dan diberi variable $data
		$this->load->view('Jurnal/Jurnal.php',$data);
	}

	public function myjurnal()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Jurnal_m */
		$data['getData'] = $this->Jurnal_m->getDataPenulis();

		// memanggil view 'penulis/penulis.php' dan diberi variable $data
		$this->load->view('Jurnal/myjurnal.php',$data);
	}

	public function tambah()
	{
		$data['message'] = "";
	 	$data['penulis'] = $this->db->get('penulis')->result();
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('abstract','abstract','required');
		$this->form_validation->set_rules('Keyword','yword','required');
		$this->form_validation->set_rules('referensi','referensi','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'penulis/tambah.php'
			$this->load->view('Jurnal/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			$upload = $this->Jurnal_m->upload();
			if($upload['result'] == "success"){ // Jika proses upload sukses
				//memanggil fungsi insertData pada model
				$this->Jurnal_m->insertData($upload['file']['file_name']);
				//redirect / pergi ke halaman 'penulis'
				redirect('Jurnal/myjurnal');
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error'];
				$this->load->view('Jurnal/tambah.php',$data); 
			}
		}
	}

	/*$id adalah parameter
	contoh penggunakan penulis/ubah/1 
	*/ 
	public function ubah($id)
	{
		$data['message'] = "";
		$data['penulis'] = $this->db->get('penulis')->result();
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('penulis','penulis','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->Jurnal_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'penulis/ubah.php'
			$this->load->view('Jurnal/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			if ($_FILES['file']['name'] == "")
			{
				//memanggil fungsi insertData pada model
				$this->Jurnal_m->updateData($id);
			//redirect / pergi ke halaman 'penulis'
				redirect('Jurnal');
			}
			else
			{
				$upload = $this->Jurnal_m->upload();
				if($upload['result'] == "success"){ 
					$this->Jurnal_m->updateData($id,$upload['file']['file_name']);
					redirect('Jurnal');
				}else{ 
					$data['error_upload'] = $upload['error'];
					$this->load->view('Jurnal/ubah',$data);
				}
			}
		}
	}

	/*$id adalah parameter
	contoh penggunakan penulis/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->Jurnal_m->hapusData($id);
		redirect('Jurnal');
	}
}
