<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Printkasir_mdl extends CI_Model
{
    private $table = 'printkasir';
    
		public function rules()
  {
    return [
      [
        'field' => 'qty',
        'label' => 'qty',
        'rules' => 'trim|required'
      ],
    ];
  }
    public function getAll()
    {
			$this->db->from($this->table);
			$this->db->order_by("tgl_print", "asc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getById($id)
		{
			return $this->db->get_where($this->table, ["id_service" => $id])->row();
		}
    
    public function get_dumb()
	  {
		$this->db->from($this->table);
			$this->db->order_by("id_print", "asc");
			$query = $this->db->get();
			return $query->result();
	  }

    public function get_solo()
	  {
      $this->db->from($this->table);
			$this->db->order_by("id_print");
			$query = $this->db->get();
			return $query->limit('1');
    
	  }

		public function save()
		{
			$data = array(
				"nama_pelanggan" => $this->input->post('nama_pelanggan'),
        "invoice_print" => $this->input->post('invoice_print'),
				"jenis_print" => $this->input->post('jenis_print'),
				"harga_lembar" => $this->input->post('harga_lembar'),
				"qty" => $this->input->post('qty')
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
    return $this->db->delete($this->table, array("id_print" => $id));
  }
  
}