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

  function get_all()
  {
    return $this->db->select('*')
      ->from('ba_18')
      ->order_by('id_ba_18',"desc")
      ->join('jaksa', 'jaksa.id_jaksa = ba_18.jaksa_ba_18')
      ->join('jenis', 'jenis.id_jenis = ba_18.jenis_ba_18')
      ->get()->result();
  }

  function get_by_id($id_ba_18)
  {
    return $this->db->select('*')->from('ba_18')->where('id_ba_18', $id_ba_18)->get()->row();
  }

  function insert($data)
  {
    $this->db->insert('ba_18',$data);
  }
}

?>
