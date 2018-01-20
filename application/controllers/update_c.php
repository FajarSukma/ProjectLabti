<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_berita');
		$this->load->model('m_about');
	}

	public function index(){
		$data['berita']=$this->m_berita->getberitaasc();
		$data['stat']=$this->m_about->getstat();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/update',$data);
		$this->load->view('admin/templates/footer');
	}

	public function edit($id){
		$data['pil']='edit';
		$data['berita']=$this->m_berita->edit($id);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/form', $data);
		$this->load->view('admin/templates/footer');
	}

	public function delete($id){
		$this->m_berita->delete($id);
		redirect('update_c');

	}

	public function editstat($id){
		$data['pil']='edit';
		$data['stat']=$this->m_about->editstat($id);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/formstat', $data);
		$this->load->view('admin/templates/footer');
	}

	public function updatestat(){
		$pil=$this->input->post('pil');
		$id=$this->input->post('id');
		$gol=$this->input->post('gol');
		$assist=$this->input->post('assist');
		$trofi=$this->input->post('trofi');
		$penghargaan=$this->input->post('penghargaan');
		$rasiogol=$this->input->post('rasiogol');
		$kakikiri=$this->input->post('kakikiri');
		$kakikanan=$this->input->post('kakikanan');
		$pinalti=$this->input->post('pinalti');
		$pertandingan=$this->input->post('pertandingan');
		$menang=$this->input->post('menang');
		$seri=$this->input->post('seri');
		$kalah=$this->input->post('kalah');

		$data=array(
			'gol'=>$gol,
			'assist'=>$assist,
			'trofi'=>$trofi,
			'penghargaan'=>$penghargaan,
			'rasiogol'=>$rasiogol,
			'kakikiri'=>$kakikiri,
			'kakikanan'=>$kakikanan,
			'pinalti'=>$pinalti,
			'pertandingan'=>$pertandingan,
			'menang'=>$menang,
			'seri'=>$seri,
			'kalah'=>$kalah);

		if ($pil=='edit') {
			$this->m_about->updatestat($id,$data);
		}else{
			$this->m_about->updatestat1($data);
		}

		redirect('admin_c');
	}

}