<?php
class IndexPage extends CI_Controller{
	public function index(){
		$this->load->view('include/header');
			$this->load->view('include/footer');
	}
}
?>