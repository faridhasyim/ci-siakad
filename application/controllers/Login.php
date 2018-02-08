<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model','m');
		$this->load->helper('form');
		$this->load->library('form_builder');
	}

	function index(){
		$this->load->view('login_form');
	}
	
	function validasi(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		if($this->m->validasi($u,$p)){
			$this->session->set_userdata(array(
				'admin_id' => $u
			));
			redirect('mahasiswa');
		}else{
			redirect('login');
		}
	}
	
	function logout(){
	}
}