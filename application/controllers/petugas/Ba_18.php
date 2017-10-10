<?php
/**
 *
 */
class Ba_18 extends Petugas
{

  function index()
  {
    $this->layout->petugas('ba_18/index',
      [
        'title' => 'Admin - BA-18',
        'sidebar' => 2,
        'page_title' => 'Berita Acara Penerimaan dan Penelitian Benda Sitaan / Barang Bukti',
        'breadcrumb' => [
                          ['page' => 'Berita Acara', 'url' => base_url('b_18')],
                        ],
        'form' => 'yes',
      ]
    );
  }

  function buat()
  {
    $this->load->model(['petugas/Jaksa_model', 'petugas/Jenis_model']);

    $jaksa = $this->Jaksa_model->get_all();
    $jenis = $this->Jenis_model->get_all();

    $this->load->library('petugas/display');

    $this->layout->petugas('ba_18/buat',
      [
        'title' => 'Admin - BA-18',
        'sidebar' => 2,
        'breadcrumb' => [
                          ['page' => 'Berita Acara', 'url' => base_url('petugas/b_18')],
                          ['page' => 'Formulir B-18', 'url' => base_url('petugas/b_18/buat')]
                        ],
        'form' => 'yes',
        'jaksa' => $jaksa,
        'jenis' => $jenis
      ]
    );

    if (!empty($_POST)) {
      $jumlah = $_POST['jumlah'];
      unset($_POST['jumlah']);
      $this->simpan_ba($_POST, $jumlah);
    }
  }

  private function simpan_ba($data, $jumlah)
  {
    $data['id_ba_18'] = strtotime('now');
    $this->load->model('petugas/Ba_18_model');
    $this->Ba_18_model->insert($data);
    redirect(base_url('petugas/barang/form/').$data['id_ba_18'].'/'.$jumlah);
  }
}

?>
