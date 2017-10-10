<?php
/**
 *
 */
class Lokasi_model extends CI_Model
{

  function get_all()
  {
    return $this->db->select('*')->from('lokasi')->get()->result();
  }
}

?>
