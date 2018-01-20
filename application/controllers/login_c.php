<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_c extends CI_Controller {

	function __construct(){ 
  parent::__construct(); 
  $this->load->model('m_login'); 
 
 } 

	public function index(){
	if($this->session->userdata('logged_in')==TRUE){
		redirect('admin_c');
	}else{
		$this->load->view('admin/login');
	}
}


	public function do_login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$cek = $this->m_login->cek_user($username, $password);

		if (count($cek) == 1) {
			$this->session->set_userdata(array(
				'logged_in'=>TRUE,
				'username'=> $username,
			));
			redirect('admin_c');
		}else{

			$this->load->view('admin/login');
		}
	}

}