<table class="table datatable">
    <thead>
        <tr>
            <th>Nomor Register</th>
            <th>Pada Tanggal</th>
            <th>Jaksa PU</th>
            <th>S.Print. Kepala Kejari</th>
            <th>Jumlah Barang</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($berita_acara as $ba): ?>
          <tr>
              <td>B-<?= $ba->register_ba_18 ?>/SLMAN/<?= ucwords(strtolower($ba->nama_jenis)) ?>.<?= date('d/m/Y', strtotime($ba->sp_ba_18)) ?></td>
              <td><?= date('d M, Y', strtotime($ba->tanggal_ba_18)) ?></td>
              <td><?= strtoupper($ba->nama_jaksa)  ?></td>
              <td>Print/O.4.14/<?= ucwords(strtolower($ba->nama_jenis)) ?>.<?= date('d/m/Y', strtotime($ba->sp_ba_18)) ?></td>
              <td><?= $this->display->benda_counter($ba->id_ba_18) ?> Barang bukti</td>
              <td>
                <div class="btn-group pull-right">
                  <a href="#" data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">Menu <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li role="presentation" class="dropdown-header">CRUD MENU</li>
                      <li><a href="<?= base_url('admin/petugas/detail/').$ba->id_ba_18 ?>"><i class="fa fa-user"></i> Detail</a></li>
                      <li><a href="<?= base_url('admin/petugas/ubah/').$ba->id_ba_18 ?>"><i class="fa fa-pencil-square-o"></i> Ubah</a></li>
                      <li><a href="<?= base_url('admin/petugas/hapus/').$ba->id_ba_18 ?>" onclick="return confirm('Yakin ingin menghapus data berita acara ini ?')"><i class="fa fa-trash-o"></i> Hapus</a></li>
                  </ul>
                </div>
              </td>
          </tr>
        <?php endforeach; ?>
    </tbody>
</table>
