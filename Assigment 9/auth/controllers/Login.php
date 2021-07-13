<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('simple_login');
		$this->load->model('m_account');
	}

	public function index()
	{
		
		// Fungsi Login
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$valid->set_rules('username', 'Username', 'required');
		$valid->set_rules('password', 'Password', 'required');
		if ($valid->run()) {
			$this->simple_login->login(
				$username,
				$password,
				base_url('dashboard'),
				base_url('login')
			);
		}
		// End fungsi login 
		$this->load->view('loginv');
	}
	public function logout()
	{
		$this->simple_login->logout();
	}
}
