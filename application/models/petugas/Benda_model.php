<?php
/**
 *
 */
class Benda_model extends CI_Model
{

  function insert($data)
  {
    $this->db->insert('benda',$data);
  }
}

?>
