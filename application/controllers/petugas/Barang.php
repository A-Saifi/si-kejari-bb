<?php
/**
 *
 */
class Barang extends Petugas
{

  function form($id_ba_18, $jumlah)
  {
    $this->load->model(['petugas/Satuan_model', 'petugas/Lokasi_model']);

    $satuan = $this->Satuan_model->get_all();
    $lokasi = $this->Lokasi_model->get_all();

    $this->layout->petugas('barang/index',
      [
        'title' => 'Admin - Barang Bukti',
        'sidebar' => 2,
        'breadcrumb' => [
                          ['page' => 'Berita Acara', 'url' => base_url('b_18')],
                          ['page' => 'Barang Bukti', 'url' => base_url('barang/form')],
                        ],
        'form' => 'yes',
        'jumlah' => $jumlah,
        'satuan' => $satuan,
        'lokasi' => $lokasi
      ]
    );

    if (!empty($_POST)) {
      $this->simpan($_POST, $jumlah, $id_ba_18);
    }
  }

  private function simpan($data, $jumlah, $ba_18_benda)
  {
    $this->load->model('petugas/Benda_model');
    for ($i=1; $i <= $jumlah; $i++) {
      $barang = [
        'jumlah_benda' => $data['jumlah_benda_'.$i],
        'satuan_benda' => $data['satuan_benda_'.$i],
        'nama_benda' => $data['nama_benda_'.$i],
        'lokasi_benda' => $data['lokasi_benda_'.$i],
        'ba_18_benda' => $ba_18_benda,
      ];

      $this->Benda_model->insert($barang);
    }

    $this->alert('Berhasil', base_url('petugas/ba_18'));
  }
}

?>
