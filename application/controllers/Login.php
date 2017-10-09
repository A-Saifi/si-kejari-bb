<?php
/**
 *
 */
class Login extends Base
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->model('admin/Role_model');
    $role = $this->Role_model->get_all();

    foreach ($role as $role) {
      if (!empty($this->session->userdata($role->nama_role))) {
        $this->go_to(base_url(strtolower($role->nama_role)));
      }
    }

      $this->layout->login([
        'title' => 'Login',
      ]);

      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      if (!empty($username) && !empty($password)) {
        $this->auth([
          'username' => $username,
          'password' => $password
        ]);
      }

  }

  function auth($data)
  {
    if (!empty($data)) {
      $this->load->model('Pegawai_model');
      $petugas = $this->Pegawai_model->get_login($data);

      if (!empty($petugas)) {
        if ($petugas->password == $data['password']) {
          $this->session->set_userdata(strtolower($petugas->nama_role), $petugas);
          $this->go_to(base_url(strtolower($petugas->nama_role)));
        }else {
          $this->messageBox(
            'warning',
            'Password Salah',
            'Password yang anda gunakan salah, silahkan coba kembali.'
          );
        }
      }else {
        $this->messageBox(
          'warning',
          'Peringatan',
          'Username dan Password yang anda gunakan tidak terdaftar, silahkan coba kembali.'
        );
      }

    }else {
      $this->go_to(base_url('login'));
    }
  }

}

?>
