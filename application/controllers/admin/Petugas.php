<?php
/**
 *
 */
class Petugas extends admin
{

  function index()
  {
    $this->load->model('admin/Pegawai_model');
    $petugas = $this->Pegawai_model->get_all();

    $this->layout->admin('petugas/index',
      [
        'title' => 'Admin - Petugas',
        'sidebar' => 2,
        'page_title' => 'Petugas',
        'breadcrumb' => [
                          ['page' => 'Petugas', 'url' => base_url('admin/petugas')],
                        ],
        'data_tables' => 'yes',
        'petugas' => $petugas,
      ]
    );
  }

  function detail($NIP)
  {
    $this->load->model('admin/Pegawai_model');
    $petugas = $this->Pegawai_model->get($NIP);

    $this->layout->admin('petugas/detail',
      [
        'title' => 'Admin - Petugas',
        'sidebar' => 2,
        'page_title' => 'Detail Petugas',
        'breadcrumb' => [
                          ['page' => 'Petugas', 'url' => base_url('admin/petugas')],
                          ['page' => 'Detail', 'url' => base_url('admin/petugas/detail/').$NIP],
                        ],
        'petugas' => $petugas,
      ]
    );
  }

  function ubah($NIP)
  {
    $this->load->model(['admin/Golongan_model', 'admin/Role_model', 'admin/Pegawai_model']);
    $petugas = $this->Pegawai_model->get($NIP);
    $golongan = $this->Golongan_model->get_all();
    $role = $this->Role_model->get_all();

    $this->layout->admin('petugas/ubah',
      [
        'title' => 'Admin - Petugas',
        'sidebar' => 2,
        'breadcrumb' => [
                          ['page' => 'Petugas', 'url' => base_url('admin/petugas')],
                          ['page' => 'Detail', 'url' => base_url('admin/petugas/detail/').$NIP],
                        ],
        'form' => 'yes',
        'petugas' => $petugas,
        'golongan' => $golongan,
        'role' => $role
      ]
    );

    $NIP = $this->input->post('NIP');
    $password = $this->input->post('password');
    if (!empty($NIP)) {
      if (!empty($pasword)) {
        $this->simpan_ubah($_POST);
      }else {
        $_POST['password'] = $petugas->password;
        $this->simpan_ubah($_POST);
      }
    }
  }

  function simpan_ubah($data)
  {
    $this->load->model('admin/Pegawai_model');
    $username = $this->Pegawai_model->check_username($data['username']);

    if (empty($username) || $username->id_pegawai == $data['id_pegawai']) {
      $this->Pegawai_model->update($data);

      $this->messageBox(
        'success',
        'Berhasil',
        'Perubahan datas berhasil disimpan.'
      );
    }else {
      $this->messageBox(
        'danger',
        'Gagal',
        'Username telah digunakan, gunakan username lainnya'
      );
    }
  }

  function tambah()
  {
    $this->load->model(['admin/Golongan_model', 'admin/Role_model']);

    $golongan = $this->Golongan_model->get_all();
    $role = $this->Role_model->get_all();

    $this->layout->admin('petugas/tambah',
      [
        'title' => 'Admin - Form Petugas',
        'sidebar' => 2,
        'breadcrumb' => [
                          ['page' => 'Petugas', 'url' => base_url('admin/petugas')],
                          ['page' => 'Form Petugas', 'url' => base_url('admin/petugas/tambah')],
                        ],
        'form' => 'yes',
        'golongan' => $golongan,
        'role' => $role
      ]
    );

    $NIP = $this->input->post('NIP');
    if (!empty($NIP)) {
      $this->simpan($_POST);
    }
  }

  private function simpan($data)
  {
    $this->load->model('admin/Pegawai_model');
    $username = $this->Pegawai_model->check_username($data['username']);

    if (empty($username)) {
      $this->Pegawai_model->insert($data);

      $this->messageBox(
        'success',
        'Berhasil',
        'Data yang telah diisi berhasil disimpan.'
      );
    }else {
      $this->messageBox(
        'danger',
        'Gagal',
        'Username telah digunakan, gunakan username lainnya'
      );
    }


  }

  function hapus($NIP)
  {
    $this->load->model('admin/Pegawai_model');
    $this->Pegawai_model->delete($NIP);

    $this->go_to(base_url('admin/petugas'));
  }
}

?>
