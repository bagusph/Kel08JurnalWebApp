<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table penulis
		$this->db->from("jurnal");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from penulis"

		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("jurnal");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData($upload_name)
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'brand' => $this->input->post('brand')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		$data['foto'] = $upload_name;
		/* eksekusi query insert into "penulis" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("jurnal",$data);
	}

	public function updateData($id,$upload_name=null)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'brand' => $this->input->post('brand')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();

		if($upload_name!=null)
			$data['foto'] = $upload_name;
		//mengeset where id=$id
		$this->db->where('id',$id);
		/*eksekusi update penulis set $data from penulis where id=$id
		jika berhasil return berhasil */
		if($this->db->update("jurnal",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->db->where('id',$id);
		/* eksekusi delete from penulis where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("jurnal")){
			return "Berhasil";
		}
	}
        public function upload(){
        $config['upload_path'] = './uploads/fotopenulis/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(),
            'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' =>
            $this->upload->display_errors());
            return $return;
        }
    }
}
