<?php
Class Mdl_user extends CI_Model
{
  function login($username, $password)
  {
    $this -> db -> select('*');
    $this -> db -> from('user');
    $this -> db -> where('username', $username);
    $this -> db -> where('password', MD5($password));
    $this -> db -> limit(1);
  
    $query = $this -> db -> get();
  
    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
  }
}