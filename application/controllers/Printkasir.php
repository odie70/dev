<?php
defined('BASEPATH') OR exit('No Direct script access allowed');

class Printkasir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Printkasir_mdl");
		$this->load->model("Menu_mdl");
		$this->load->model('Auth_mdl');
		if(!$this->Auth_mdl->current_user())
		{
			redirect('login/index');
		}
	}

	public function index()
	{
		$data["title"] = "Print Kasir";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "print";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_printkasir"] = $this->Printkasir_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('printkasir/index', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function data()
	{
		$data["title"] = "Service Database";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Data";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_service"] = $this->Printkasir_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('printkasir/data', $data);
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function input()
	{
		$Printkasir = $this->Printkasir_mdl;
		$validation = $this->form_validation;
		$validation->set_rules($Printkasir->rules());
		if ($validation->run())
		{
			$Printkasir->save();
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
			
			redirect("printkasir/input");
		}
		$data["title"] = "Print Kasir";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "print";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_printkasir"] = $this->Printkasir_mdl->get_dumb();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('printkasir/input', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		if (!isset($id)) show_404();
		$this->Printkasir_mdl->delete($id);
		$msg['success'] = true;
		$this->session->set_flashdata('message', '<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
		<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
				<img src="..." class="rounded me-2" alt="...">
				<strong class="me-auto">Bootstrap</strong>
				<small>11 mins ago</small>
				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
				Hello, world! This is a toast message.
			</div>
		</div>
	</div>');
		$this->output->set_output(json_encode($msg));
	}
        
}