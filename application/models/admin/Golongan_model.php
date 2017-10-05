<?php
/**
 *
 */
class Golongan_model extends CI_Model
{

  function get_all()
  {
    return $this->db
      ->select('*')
      ->from('golongan')
      ->get()
      ->result();
  }
}

?>
