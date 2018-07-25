<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($kategori = null)
	{
		$this->load->model('Jurnal_m');
		$data['Jurnal'] = $this->Jurnal_m->getData();
		if($kategori != null){
			$id_kategori = $this->db->where('nama',$kategori)->get('kategori')->row(0)->id;
			$data['Jurnal'] = $this->db->where('kategori',$id_kategori)->get('jurnal')->result_array();
		} 
		$this->load->view('Member/Member_page',$data);		
	}
	public function jurnal($id)
	{
		$this->load->model('Jurnal_m');
		$data['jurnal'] = $this->Jurnal_m->getDataWhereId($id)[0];
		$this->load->view('Member/Jurnal', $data);
	}
	public function pagination() { 
		$this->load->model('Jurnal_m');
		$limit_per_page=5;
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total_records= $this->Jurnal_m->get_total();

		if($total_records > 0 ){
			$data['Jurnal'] = $this->Jurnal_m->get_all_artikel($limit_per_page,$start_index);
			$config['base_url'] = base_url().'index.php/Member_page/pagination';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config['uri_segment'] = 3;

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();
		}
		$this->load->view('Member/Member_page',$data);

	}
}

