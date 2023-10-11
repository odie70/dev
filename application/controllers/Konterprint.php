<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konterprint extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Produk_mdl");
		$this->load->model("Menu_mdl");
		$this->load->model("Setting_mdl");
		$this->load->model("konterprint_mdl");
		$this->load->model('Auth_mdl');
		if(!$this->Auth_mdl->current_user())
		{
			redirect('login/index');
		}
	}

	public function index()
	{
		$data["title"] = "Konterprint";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Overview";
		$data["data_produk"] = $this->Produk_mdl->getAll();
		$data["data_pos"] = $this->konterprint_mdl->getAll();
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('konterprint/index', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/responsive');
		$this->load->view('script/datatables');
		$this->load->view('script/select');
		$this->load->view('bootstrap/bottom');
	}
}