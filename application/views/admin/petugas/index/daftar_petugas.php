<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Daftar Petugas</h3>
    <ul class="panel-controls">
        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
        <!-- <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li> -->
    </ul>
  </div>
  <div class="panel-body">
    <?php $this->load->view($view.'petugas/index/tabel_petugas') ?>
  </div>
  <div class="panel-body">
    <a href="<?= base_url('admin/petugas/tambah/') ?>" class="btn btn-info pull-right"><span class="fa fa-plus-square"></span> Tambah Petugas</a>
  </div>
</div>
