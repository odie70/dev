<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Setting_mdl extends CI_Model
{
  private $table = 'user';

  public function profile_rules()
  {
    return
    [
      [
        'field' => 'username',
        'label' => 'username',
        'rules' => 'required|max_length[32]'
      ],
      [
        'field' => 'email',
        'label' => 'email',
        'rules' => 'required|max_length[32]'
      ],
    ];
  }

  public function password_rules()
  {
    return
    [
      [
        'field' => 'password',
        'label' => 'new password',
        'rules' => 'required'
      ],
      [
        'field' => 'password_confirm',
        'label' => 'password confirmation',
        'rules' => 'required|matches[password]'
      ],
    ];
  }

  public function udpate($data)
  {
    if (!$data['id_user'])
    {
      return;
    }
    return $this->db->update($this->_table, $data, ['id_user' => $data['id_user']]);
  }
}