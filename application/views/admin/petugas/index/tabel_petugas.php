<table class="table datatable">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Peran</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($petugas as $petugas): ?>
          <tr>
              <td><?= ucwords(strtolower($petugas->nama_pegawai)) ?></td>
              <td><?= $petugas->username ?></td>
              <td><?= ucwords(strtolower($petugas->nama_role)) ?></td>
              <td><?= $petugas->kedudukan_hukum_pegawai ?></td>
              <td>
                <div class="btn-group pull-right">
                  <a href="#" data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">Menu <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li role="presentation" class="dropdown-header">CRUD MENU</li>
                      <li><a href="<?= base_url('admin/petugas/detail/').$petugas->NIP ?>"><i class="fa fa-user"></i> Detail</a></li>
                      <li><a href="<?= base_url('admin/petugas/ubah/').$petugas->NIP ?>"><i class="fa fa-pencil-square-o"></i> Ubah</a></li>
                      <li><a href="<?= base_url('admin/petugas/hapus/').$petugas->NIP ?>"><i class="fa fa-trash-o"></i> Hapus</a></li>
                  </ul>
                </div>
              </td>
          </tr>
        <?php endforeach; ?>
    </tbody>
</table>
