<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Pos_mdl extends CI_Model
{
    private $table = 'produkdummy';
    
		public function rules()
  {
    return [
      [
        'field' => 'nama_produk',
        'label' => 'nama_produk',
        'rules' => 'trim|required'
      ],
    ];
  }
    public function getAll()
    {
			$this->db->from($this->table);
			$this->db->order_by("id_produk", "asc");
			$query = $this->db->get();
			return $query->result();
		}

		public function getById($id)
		{
			return $this->db->get_where($this->table, ["id_produk" => $id])->row();
		}

		public function save()
		{
			$data = array(
				"id_produk" => $this->input->post('id_produk'),
        "kode_produk" => $this->input->post('kode_produk'),
				"nama_produk" => $this->input->post('nama_produk'),
				"merk" => $this->input->post('merk'),
				"stok" => $this->input->post('stok'),
				"diskon" => $this->input->post('diskon'),
				"harga_beli" => $this->input->post('harga_beli'),
				"harga_jual" => $this->input->post('harga_jual'),
				"tgl_stok" => $this->input->post('tgl_stok')
			);
			return $this->db->insert($this->table, $data);
		}

		public function update()
  {
    $data = array(
      "nama" => $this->input->post('nama'),
      "hp" => $this->input->post('hp'),
      "device" => $this->input->post('device'),
      "noserial" => $this->input->post('noserial'),
      "kelengkapan" => $this->input->post('kelengkapan'),
      "note" => $this->input->post('note'),
      "solusi" => $this->input->post('solusi'),
      "status" => $this->input->post('status'),
      "tglkeluar" => $this->input->post('tglkeluar'),
      "biaya" => $this->input->post('biaya')
    );
    return $this->db->update($this->table, $data, array('id_produk' => $this->input->post('id_produk')));
  }

  public function selesai()
  {
    $data = array(
      "solusi" => $this->input->post('solusi'),
      "status" => $this->input->post('status'),
      "tglkeluar" => $this->input->post('tglkeluar'),
      "biaya" => $this->input->post('biaya')
    );
    return $this->db->update($this->table, $data, array('id_produk' => $this->input->post('id_produk')));
  }

  public function delete($id)
  {
    return $this->db->delete($this->table, array("id_produk" => $id));
  }
  
}