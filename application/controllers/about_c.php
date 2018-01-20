<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_about');
	}

	public function index(){
		$data['about']=$this->m_about->getabout();
	}
}
