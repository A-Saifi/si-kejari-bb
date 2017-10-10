<?php
/**
 *
 */
class Satuan_model extends CI_Model
{

  function get_all()
  {
    return $this->db->select('*')->from('satuan')->get()->result();
  }
}

?>
