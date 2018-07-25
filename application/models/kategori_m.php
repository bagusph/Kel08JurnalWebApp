<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table penulis
		$this->db->from("kategori");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from penulis"

		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("kategori");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'nama' => $this->input->post('nama')
		);
		return $this->db->insert("kategori",$data);
	}

	public function updateData($id)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'id' yang dikiri harus sama seperti di table
			'id' yang dikanan harus menurut name inputnya */
			'nama' => $this->input->post('nama')
		);
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		$this->db->where('id',$id);
		/*eksekusi update penulis set $data from penulis where id=$id
		jika berhasil return berhasil */
		if($this->db->update("kategori",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->db->where('id',$id);
		/* eksekusi delete from penulis where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("kategori")){
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
