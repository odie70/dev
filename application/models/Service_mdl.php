<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Service_mdl extends CI_Model
{
    private $table = 'service';
    
		public function rules()
  {
    return [
      [
        'field' => 'nama_pelanggan',
        'label' => 'nama_pelanggan',
        'rules' => 'trim|required'
      ],
    ];
  }
    public function getAll()
    {
			$this->db->from($this->table);
			$this->db->order_by("id_service", "desc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getById($id)
		{
			return $this->db->get_where($this->table, ["id_service" => $id])->row();
		}

		public function save()
		{
			$data = array(
        "no_invoice" => $this->input->post('no_invoice'),
				"nama_pelanggan" => $this->input->post('nama_pelanggan'),
				"no_hp" => $this->input->post('no_hp'),
				"nama_device" => $this->input->post('nama_device'),
				"no_seri" => $this->input->post('no_seri'),
				"kelengkapan" => $this->input->post('kelengkapan'),
				"perbaikan" => $this->input->post('perbaikan'),
				"catatan" => $this->input->post('catatan'),
				"tgl_masuk" => $this->input->post('tgl_masuk'),
        "jam_masuk" => $this->input->post('jam_masuk'),
				"status" => $this->input->post('status')
			);
			return $this->db->insert($this->table, $data);
		}

		public function update()
    {
      $data = array(
      "nama_pelanggan" => $this->input->post('nama_pelanggan'),
      "no_hp" => $this->input->post('no_hp'),
      "nama_device" => $this->input->post('nama_device'),
      "no_seri" => $this->input->post('no_seri'),
      "kelengkapan" => $this->input->post('kelengkapan'),
      "perbaikan" => $this->input->post('perbaikan'),
      "catatan" => $this->input->post('catatan'),
      "status" => $this->input->post('status')
    );
    return $this->db->update($this->table, $data, array('id_service' => $this->input->post('id_service')));
  }

  public function selesai()
  {
    $data = array(
      "solusi" => $this->input->post('solusi'),
      "status" => $this->input->post('status'),
      "biaya" => $this->input->post('biaya')
    );
    return $this->db->update($this->table, $data, array('id_service' => $this->input->post('id_service')));
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("id_service" => $id));
  }
  
}