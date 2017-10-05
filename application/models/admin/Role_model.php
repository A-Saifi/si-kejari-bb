<?php
/**
 *
 */
class Role_model extends CI_Model
{

  function get_all()
  {
    return $this->db
      ->select('*')
      ->from('role')
      ->order_by('role.id_role', 'DESC')
      ->get()
      ->result();
  }
}

?>
