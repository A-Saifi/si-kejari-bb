<?php
/**
 *
 */
class Ba_18_model extends CI_Model
{

  function get_last()
  {
    return $this->db->select('*')->from('ba_18')->order_by('id_ba_18',"desc")->limit(1)->get()->row();
  }

  function insert($data)
  {
    $this->db->insert('ba_18',$data);
  }
}

?>
