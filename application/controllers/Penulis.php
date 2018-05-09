<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Penulis_m
		$this->load->model('Penulis_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/penulis" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Penulis_m */
		$data['getData'] = $this->Penulis_m->getData();
		// memanggil view 'penulis/penulis.php' dan diberi variable $data
		$this->load->view('penulis/penulis.php',$data);
	}

	public function tambah()
	{
		$data['message'] = "";
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('id','ID','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'penulis/tambah.php'
			$this->load->view('penulis/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			$upload = $this->Penulis_m->upload();
			if($upload['result'] == "success"){ // Jika proses upload sukses
				//memanggil fungsi insertData pada model
				$this->Penulis_m->insertData($upload['file']['file_name']);
				//redirect / pergi ke halaman 'penulis'
				redirect('penulis');
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error'];
				$this->load->view('penulis/tambah.php',$data); 
			}
		}
	}

	/*$id adalah parameter
	contoh penggunakan penulis/ubah/1 
	*/ 
	public function ubah($id)
	{
		$data['message'] = "";
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('id','ID','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->Penulis_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'penulis/ubah.php'
			$this->load->view('penulis/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			if ($_FILES['foto']['name'] == "")
			{
				//memanggil fungsi insertData pada model
				$this->Penulis_m->updateData($id);
			//redirect / pergi ke halaman 'penulis'
				redirect('penulis');
			}
			else
			{
				$upload = $this->Penulis_m->upload();
				if($upload['result'] == "success"){ 
					$this->Penulis_m->updateData($id,$upload['file']['file_name']);
					redirect('penulis');
				}else{ 
					$data['error_upload'] = $upload['error'];
					$this->load->view('penulis/ubah',$data);
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
		$this->Penulis_m->hapusData($id);
		redirect('penulis');
	}
}
