<?php

class Login extends CI_Controller
{
	// public function index()
	// {
	// 	show_404();
	// }

	public function index()
	{
		$this->load->model('Auth_mdl');
		$this->load->library('form_validation');

		$rules = $this->Auth_mdl->rules();
		$this->form_validation->set_rules($rules);
		$data["title"] = "Login";
		$data["company"] = "ROOT";

		if($this->form_validation->run() == FALSE){
			return 
      
      $this->load->view('login/index', $data);
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->Auth_mdl->login($username, $password)){
			redirect('dashboard');
		} else {
			$this->session->set_flashdata('message_login_error', 'Email atau username dan password tidak cocok');
		}

		$this->load->view('login/index', $data);
	}

	public function logout()
	{
		$this->load->model('Auth_mdl');
		$this->Auth_mdl->logout();
		redirect(site_url());
	}

}