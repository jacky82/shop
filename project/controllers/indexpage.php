<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IndexPage extends CI_Controller{
	public function index($page='home'){
			//echo $page;
			$this->load->view('include/header');
			$this->load->view('include/footer');
	}		
	public function login(){
		echo 'aaa';
	}

}

?>