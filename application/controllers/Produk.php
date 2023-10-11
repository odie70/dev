<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Produk_mdl");
		$this->load->model("Menu_mdl");
		$this->load->model('Auth_mdl');
		if(!$this->Auth_mdl->current_user())
		{
			redirect('login/index');
		}
	}

	public function index()
	{
		$data["title"] = "Produk";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Produk";
		$data["data_produk"] = $this->Produk_mdl->getAll();
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar', $data);
		$this->load->view('bootstrap/menu', $data);
		$this->load->view('produk/index', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/responsive');
		$this->load->view('script/datatables');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function detail($id = null)
	{
		$data["title"] = "Detail Produk";
		$data["company"] = "ROOT IT";
		$data["breadcrumb"] = "Detail";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_produk"] = $this->Produk_mdl->getById($id);
		$data["current_user"] = $this->Auth_mdl->current_user();
		if (!$data["data_produk"]) show_404();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('produk/detail', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function data()
	{
		$data["title"] = "Produk Database";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Data";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_produk"] = $this->Produk_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('produk/data', $data);
		$this->load->view('script/datatables');
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function input()
	{
		$Produk = $this->Produk_mdl;
		$validation = $this->form_validation;
		$validation->set_rules($Produk->rules());
		if ($validation->run())
		{
			$Produk->save();
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Service Baru disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          	</button></div>');
			// Get the last ID
			$lastid = $this->db->insert_id();
			
			redirect("produk/detail/$lastid");
		}
		$data["title"] = "Input Data Produk";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Input";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('produk/input', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}

	public function delete()
	{
		$id = $this->input->get('id');
		if (!isset($id)) show_404();
		$this->Produk_mdl->delete($id);
		$msg['success'] = true;
		$this->session->set_flashdata('message', 'class="swalDefaultError"');
		$this->output->set_output(json_encode($msg));
	}

	public function ubah($id = null)
	{
		if (!isset($id)) redirect ('produk');

		$Produk = $this->Produk_mdl;
		$validation = $this->form_validation;
		$validation->set_rules($Produk->rules());

		if ($validation->run())
		{
			$Produk->update();
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
            redirect("produk/data");
		}
		$data["title"] = "Ubah Data";
		$data["company"] = "ROOT IT";
		$data["breadcrumb"] = "Ubah";
		$data["data_produk"] = $Produk->getById($id);
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		if (!$data["data_produk"]) show_404();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('bootstrap/navbar');
		$this->load->view('bootstrap/menu');
		$this->load->view('produk/ubah', $data);
		$this->load->view('script/responsive');
		$this->load->view('bootstrap/footer');
		$this->load->view('bootstrap/bottom');
	}
}
