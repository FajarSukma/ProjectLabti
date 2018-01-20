<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_about');
		$this->load->model('m_berita');
	}

	public function view()
	{
		$data['about']=$this->m_about->getabout();
		$data['stat']=$this->m_about->getstat();
		$data['berita']=$this->m_berita->getberita();
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('pages/about',$data);
		$this->load->view('pages/berita',$data);
		$this->load->view('templates/footer');
	}
}
