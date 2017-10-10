<?php
/**
 *
 */
class Jenis_model extends CI_Model
{

  function get_all()
  {
    return $this->db->select('*')->from('jenis')->get()->result();
  }
}

?>
