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

  function get_by_ba_18($id_ba_18)
  {
    return $this->db->get_where('benda', ['ba_18_benda' => $id_ba_18])->result();
  }
}

?>
