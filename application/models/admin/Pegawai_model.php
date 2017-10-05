<?php
/**
 *
 */
class Pegawai_model extends CI_Model
{

  function get_all()
  {
    return $this->db
      ->select('*')
      ->from('pegawai')
      ->join('role', 'pegawai.role_pegawai = role.id_role')
      ->get()
      ->result();
  }

  function insert($data)
  {
    $this->db->insert('pegawai',$data);
  }

  function delete($NIP)
  {
    $this->db->where('NIP', $NIP);
    $this->db->delete('pegawai');
  }
}

?>
