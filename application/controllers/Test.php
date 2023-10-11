<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Service_mdl");
		$this->load->model("Produk_mdl");
		$this->load->model("Menu_mdl");
		$this->load->model("Setting_mdl");
		$this->load->model('Auth_mdl');
		if(!$this->Auth_mdl->current_user())
		{
			redirect('login/index');
		}
	}
	public function index()
	{
		$data["title"] = "Test";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Test Fields";
		$data["data_produk"] = $this->Produk_mdl->getAll();
		$data["data_service"] = $this->Service_mdl->getAll();
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('test/index', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}
}
