
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formstat_c extends CI_Controller {

	public function index(){
		$data['pil']='update';
		$this->load->view('admin/templates/header');
		$this->load->view('admin/formstat', $data);
		$this->load->view('admin/templates/footer');

}
}