<?php
/**
 *
 */
class Pegawai_model extends CI_Model
{

  function get_login($data)
  {
    return $this->db
      ->join('role', 'pegawai.role_pegawai = role.id_role')
      ->get_where('pegawai',
        [
          'username' => $data['username'],
        ]
        )->row();
  }
}

?>
