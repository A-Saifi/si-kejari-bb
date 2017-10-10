<?php
/**
 *
 */
class Jaksa_model extends CI_Model
{

  function get_all()
  {
    return $this->db->select('*')->from('jaksa')->get()->result();
  }
}

?>
