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
    $data['password'] = md5($data['password']);
    $this->db->insert('pegawai',$data);
  }

  function delete($NIP)
  {
    $this->db->where('NIP', $NIP)->delete('pegawai');
  }

  function check_username($username)
  {
    return $this->db->get_where('pegawai', ['username' => $username])->row();
  }

  function get($NIP)
  {
    return $this->db
      ->join('role', 'pegawai.role_pegawai = role.id_role')
      ->get_where('pegawai',
        [
          'NIP' => $NIP,
        ]
        )->row();
  }

  function update($data)
  {
    $data['password'] = md5($data['password']);
    $this->db->where('id_pegawai',$data['id_pegawai']);
    $this->db->update('pegawai',$data);
  }

}

?>
