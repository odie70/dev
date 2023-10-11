<?php
defined('BASEPATH') OR exit('No Direct script access allowed');

class Service extends CI_Controller
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
		$data["title"] = "Service";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Service";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_service"] = $this->Service_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('service/index', $data);
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
		$data["data_service"] = $this->Service_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('service/data', $data);
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function input()
	{
		$Service = $this->Service_mdl;
		$validation = $this->form_validation;
		$validation->set_rules($Service->rules());
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
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('service/input', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function detail($id = null)
	{
		$data["title"] = "Detail Service";
		$data["company"] = "ROOT IT";
		$data["breadcrumb"] = "Detail";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_service"] = $this->Service_mdl->getById($id);
		$data["current_user"] = $this->Auth_mdl->current_user();
		if (!$data["data_service"]) show_404();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('service/detail', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function invoice($id = null)
	{
		$data["title"] = "Invoice";
		$data["company"] = "ROOT IT";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_service"] = $this->Service_mdl->getById($id);
		$data["current_user"] = $this->Auth_mdl->current_user();
		if (!$data["data_service"]) show_404();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('service/invoice', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function nota($id = null)
	{
		$data["title"] = "Nota";
		$data["company"] = "ROOT IT";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_service"] = $this->Service_mdl->getById($id);
		$data["current_user"] = $this->Auth_mdl->current_user();
		if (!$data["data_service"]) show_404();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('service/nota', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function ubah($id = null)
	{
		if (!isset($id)) redirect ('service');

		$Service = $this->Service_mdl;
		$validation = $this->form_validation;
		$validation->set_rules($Service->rules());

		if ($validation->run())
		{
			$Service->update();
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
																									<div class="d-flex">
																										<div>
																										<i class="ti ti-check d-sm-inline-block"></i>
																										</div>
																										<div>
																											Data Berhasil diubah!
																										</div>
																									</div>
																									<a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
																								</div>');
            redirect("service/detail/$id");
		}
		$data["title"] = "Ubah Data";
		$data["company"] = "ROOT IT";
		$data["data_service"] = $Service->getById($id);
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		if (!$data["data_service"]) show_404();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('service/ubah', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function selesai($id = null)
	{
		if (!isset($id)) redirect ('service');

		$Service = $this->Service_mdl;
		$validation = $this->form_validation;
		$validation->set_rules($Service->rules());

		if ($validation->run())
		{
			$Service->selesai();
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Service berhasil diubah.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          	</button></div>');
            redirect("service/invoice/$id");
		}
		$data["title"] = "Selesaikan Order";
		$data["company"] = "ROOT IT";
		$data["data_service"] = $Service->getById($id);
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		if (!$data["data_service"]) show_404();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('service/selesai', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		if (!isset($id)) show_404();
		$this->Service_mdl->delete($id);
		$msg['success'] = true;
		$this->session->set_flashdata('message', 'class="swalDefaultError"');
		$this->output->set_output(json_encode($msg));
	}
        
}