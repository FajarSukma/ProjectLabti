<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('pages/detail_berita');
		$this->load->view('templates/footer');
	}

	public function selengkapnya(){
		$id = $this->uri->segment(3);
		$data['berita'] = $this->m_berita->getBeritaSingle($id);
		$this->load->view('templates/headerDetail');
		$this->load->view('pages/detail_berita',$data);
		$this->load->view('templates/footerDetail');
	}

	public function simpan(){
		$pil=$this->input->post('pil');
		$id=$this->input->post('id');
		$judul=$this->input->post('judul');
		$isi =$this->input->post('isi');
		$data=array(
			'judul'=>$judul,
			'isi'=>$isi);

		if ($pil=='tambah') {
			$this->m_berita->simpan($data);
		}else{
			$this->m_berita->update($id,$data);
		}
		redirect('admin_c');
		
	}


}
