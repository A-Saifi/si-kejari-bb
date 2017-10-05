<div class="panel panel-default">
    <div class="panel-heading ui-draggable-handle">
        <h3 class="panel-title"><strong>Formulir</strong> Petugas</h3>
        <ul class="panel-controls">

        </ul>
    </div>

    <?php $this->load->view($view.'petugas/tambah/keterangan') ?>

    <?php $this->load->view($view.'petugas/tambah/field') ?>

    <div class="panel-footer">
        <a href="<?= base_url('admin/petugas') ?>" class="btn btn-default">Kembali</a>
        <input type="reset" class="btn btn-default" value="reset">
        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
    </div>
</div>
