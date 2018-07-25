<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function validasi_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('user_admin');
		if($query->num_rows() == '1'){
			return true;
		}else{
			return false;
		}
	}

	public function getRole($username)
	{
		$this->db->select('fk_id_role');
		$this->db->where('username',$username);
		$query = $this->db->get('user_admin');
		if($query->num_rows() == 1){
			return $query->row(0)->fk_id_role;
		}else{
			return false;
		}
	}

	public function signup($username, $password){
		$data = array(
			'username' => $username,
			'password' => $password,
			'role' => '3'
 		);
		$this->db->insert('user_admin',$data);
	}
}
