<?php
defined('BASEPATH') OR exit('No Direct script access allowed');

class Printcounter extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Printcounter_mdl");
		$this->load->model("Menu_mdl");
		$this->load->model('Auth_mdl');
		if(!$this->Auth_mdl->current_user())
		{
			redirect('login/index');
		}
	}

	public function index()
	{
		$data["title"] = "Print Counter";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Print Counter";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_printcounter"] = $this->Printcounter_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('printcounter/index', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function data()
	{
		$data["title"] = "Print Counter Database";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Data";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_printcounter"] = $this->Printcounter_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('printcounter/data', $data);
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function input()
	{
		$Printcounter = $this->Printcounter_mdl;
		$validation = $this->form_validation;
		$validation->set_rules($Printcounter->rules());
		if ($validation->run())
		{
			$Service->save();
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			<div class="d-flex">
				<div>
					<!-- Download SVG icon from http://tabler-icons.io/i/check -->
					<svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
				</div>
				<div>
					Data berhasil Di input!
				</div>
			</div>
			<a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
		</div>');
			// Get the last ID
			$lastid = $this->db->insert_id();
			
			redirect("service/nota/$lastid");
		}
		$data["title"] = "Input Data Service";
		$data["company"] = "ROOT";
		$data["data_printcounter"] = $this->Printcounter_mdl->getAll();
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('Printcounter/input', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

}