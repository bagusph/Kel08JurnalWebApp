<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('login');
		$this->load->view('Member_page');
	}
	public function proses_login()
	{
		$this->load->model('Login_model');
		$username = $this->input->post('username');
		$validasi = $this->Login_model->validasi_login('admin','admin');
		if($validasi){
			$data = array(
				'username' => $username,
				"level" => $this->Login_model->getRole($username)
			);

			$this->session->set_userdata('login',$data);
			if($data['level'] == '1')
				redirect('admin_page','refresh');
			else if($data['level'] == '2')
				redirect('Penulis_page','refresh');
			else if($data['level'] == '3')
				redirect('Member_page','refresh');
			else
				redirect('Login','refresh');
		}else{
			redirect('Login','refresh');
		}

	}
	public function coba()
	{
		$this->load->model('Login_model');
		//var_dump($this->Login_model->getRole('admin'));

		var_dump($this->session->userdata('login'));

		// $a = $this->session->userdata('login');
		// echo $a['username'];

	

//		$this->session->userdata('login');

		
	}
	public function logout()
	{
		$this->session->unset_userdata('login');
		redirect('Landing_page','refresh');
	}
	public function proses_signup()
	{
		$this->load->model('Login_model');
		$this->Login_model->signup($this->input->post('username'),$this->input->post('password'));
		redirect('Landing_page');
	}
}
