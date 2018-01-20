<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model{

	public function getabout(){
		$about=$this->db->query("select*from aboutleo;");
		return $about;
	}

	public function getstat(){
		$stat=$this->db->query('select*from statistik;');
		return $stat;
	}

	public function editstat($id){
		$this->db->where('id', $id);
 	return $this->db->get('statistik');
	}

	public function updatestat($id, $data){
 	$this->db->where('id', $id);
 	$this->db->update('statistik', $data);
 }
 	public function updatestat1($data){
 	$this->db->where('id', 1);
 	$this->db->update('statistik', $data);
 }
}
