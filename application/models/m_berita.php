<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model{

	public function getberita(){
		$berita=$this->db->query("select*from berita order by id desc;");
		return $berita;
	}

	public function getberitaasc(){
		$berita=$this->db->query("select*from berita;");
		return $berita;
	}



	public function getBeritaSingle($id){
		$single = $this->db->select('*')
							->from('berita')
							->where('id', $id)
							->get();
		return $single;
	}

	public function simpan($data){
		return $this->db->insert('berita',$data);
	}
	
	public function edit($id){
		$this->db->where('id', $id);
 	return $this->db->get('berita');
	}

	

	public function update($id, $data){
 	$this->db->where('id', $id);
 	$this->db->update('berita', $data);
 }

 

 	public function delete($id){
 		$this->db->where('id', $id);
 		$this->db->delete('berita');
 	}

	
}
