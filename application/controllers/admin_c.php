<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_c extends CI_Controller {

	public function __construct(){ 
  parent::__construct(); 
  // $this->load->model('m_mhs'); 
  
 } 
	public function index(){
		if($this->session->userdata('logged_in')==TRUE){
			$this->load->view('admin/templates/header');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/templates/footer');

		}else{
			redirect('login_c');
		}
	}

	
}
