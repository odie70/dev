<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Produk_mdl");
		$this->load->model("Menu_mdl");
		$this->load->model("Setting_mdl");
		$this->load->model("Pos_mdl");
		$this->load->model('Auth_mdl');
		if(!$this->Auth_mdl->current_user())
		{
			redirect('login/index');
		}
	}

	public function index()
	{
		$data["title"] = "Point Of Sales System";
		$data["company"] = "ROOT";
		$data["breadcrumb"] = "Overview";
		$data["data_produk"] = $this->Produk_mdl->getAll();
		$data["data_pos"] = $this->Pos_mdl->getAll();
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["current_user"] = $this->Auth_mdl->current_user();
		$this->load->view('bootstrap/header', $data);
		$this->load->view('pos/index', $data);
		$this->load->view('script/dashboard');
		$this->load->view('script/responsive');
		$this->load->view('script/datatables');
		$this->load->view('script/select');
		$this->load->view('bootstrap/bottom');

	}

	public function detail($id = null)
	{
		$data["title"] = "Detail Produk";
		$data["company"] = "ROOT IT";
		$data["breadcrumb"] = "Detail";
		$data["data_menu"] = $this->Menu_mdl->getAll();
		$data["data_produk"] = $this->Produk_mdl->getById($id);
		$data["menu_active"] = "active";
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
		$data["data_setting"] = $this->Setting_mdl->getAll();
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
}
