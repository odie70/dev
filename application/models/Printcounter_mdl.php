<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Printcounter_mdl extends CI_Model
{
    private $table = 'printcounter';
    
		public function rules()
  {
    return [
      [
        'field' => 'invoice_print',
        'label' => 'invoice_print',
        'rules' => 'trim|required'
      ],
    ];
  }
    public function getAll()
    {
			$this->db->from($this->table);
			$this->db->order_by("id_print", "asc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getById($id)
		{
			return $this->db->get_where($this->table, ["id_print" => $id])->row();
		}

		public function save()
		{
			$data = array(
        "invoice_print" => $this->input->post('invoice_print')
			);
			return $this->db->insert($this->table, $data);
		}

		public function update()
    {
      $data = array(
				"jenis_print" => $this->input->post('jenis_print'),
				"harga_lembar" => $this->input->post('harga_lembar'),
				"qty" => $this->input->post('qty')
			);
    return $this->db->update($this->table, $data, array('invoice_print' => $this->input->post('invoice_print')));
    
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