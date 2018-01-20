<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_c extends CI_Controller {

	public function index(){
		$data['pil']='tambah';
		$this->load->view('admin/templates/header');
		$this->load->view('admin/form', $data);
		$this->load->view('admin/templates/footer');

}
}