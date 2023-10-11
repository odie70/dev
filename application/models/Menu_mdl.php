<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Menu_mdl extends CI_Model
{
  private $table = 'menu';

  public function getAll()
  {
    $this->db->from($this->table);
    $this->db->order_by("id_menu", "asc");
    $query = $this->db->get();
    return $query->result();
  }

  public function getById($id)
		{
			return $this->db->get_where($this->table, ["id_menu" => $id])->row();
		}

    public function update()
  {
    $data = array(
      "status" => $this->input->post('status')
    );
    return $this->db->update($this->table, $data, array('id_menu' => $this->input->post('id_menu')));
  }
}