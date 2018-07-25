<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Penulis_m
		$this->load->model('kategori_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/penulis" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Penulis_m */
		$data['getData'] = $this->kategori_m->getData();
		// memanggil view 'penulis/penulis.php' dan diberi variable $data
		$this->load->view('kategori/kategori.php',$data);
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
		$this->form_validation->set_rules('nama','nama','required|is_unique[kategori.nama]');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'penulis/tambah.php'
			$this->load->view('kategori/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			$this->kategori_m->insertData();
			//redirect / pergi ke halaman 'penulis'
			redirect('kategori');
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
		$this->form_validation->set_rules('nama','nama','required|is_unique[kategori.nama]');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->kategori_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'penulis/ubah.php'
			$this->load->view('kategori/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			if ($_FILES['foto']['name'] == "")
			{
				//memanggil fungsi insertData pada model
				$this->kategori_m->updateData($id);
			//redirect / pergi ke halaman 'penulis'
				redirect('kategori');
			}
			else
			{
				$upload = $this->kategori_m->upload();
				if($upload['result'] == "success"){ 
					$this->kategori_m->updateData($id);
					redirect('kategori');
				}else{ 
					$data['error_upload'] = $upload['error'];
					$this->load->view('kategori/ubah',$data);
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
		$this->kategori_m->hapusData($id);
		redirect('kategori');
	}
}
