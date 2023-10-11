<?php
defined('BASEPATH') OR exit('No Direct script access allowed');

class Setting extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Service_mdl");
		$this->load->model("Menu_mdl");
		$this->load->model('Auth_mdl');
		if(!$this->Auth_mdl->current_user())
		{
			redirect('login/index');
		}
	}

	public function index()
	{
		$data["title"] = "Setting";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Service";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('setting/index', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function info()
	{
		$data["title"] = "Setting";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Service";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('setting/info', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function edit_profil()
	{
		$this->load->library('form_validation');
		$data["title"] = "Setting";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Service";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$this->load->model('Setting_mdl');
		$data['current_user'] = $this->Auth_mdl->current_user();
		if ($this->input->method() === 'post')
		{
			$rules = $this->setting_mdl->profile_rules();
			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run() === FALSE)
			{
				return
				$this->load->view('bootstrap/header', $data);
				$this->load->view('bootstrap/navbar');
				$this->load->view('bootstrap/menu');
				$this->load->view('setting/edit_profil', $data);
				$this->load->view('script/dashboard');
				$this->load->view('script/datatables');
				$this->load->view('script/responsive');
				$this->load->view('bootstrap/footer');
				$this->load->view('bootstrap/bottom');
			}
			$new_data =
			[
				'id_user' => $data['current_user']->id_user,
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
			];
			if ($this->setting_mdl->update($new_data))
			{
				$this->session->set_flashdata('message', 'Profil Diperbaharui');
				redirect(base_url('setting/index'));
			}
		}
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('setting/edit_profil', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}
        
}