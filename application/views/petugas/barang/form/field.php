<div class="panel-body">
  <?php for ($i=1; $i <= $jumlah; $i++) { ?>
    <div class="col-md-12">
      <h5 class="push-up-20">Barang Ke-<?= $i ?></h5>
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Banyak Barang</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-copy"></span></span>
                <input type="number" class="form-control" name="jumlah_benda_<?= $i ?>" required>
            </div>
            <span class="help-block">Kuantitas barang</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Satuan</label>
        <div class="col-md-6 col-xs-12">
            <select class="form-control select" name="satuan_benda_<?= $i ?>" required>
                <?php foreach ($satuan as $satuan[$i]): ?>
                  <option value="<?= $satuan[$i]->id_satuan ?>"><?= $satuan[$i]->nama_satuan ?></option>
                <?php endforeach; ?>
            </select>
            <span class="help-block">Satuan tidak tersedia ? silahkan isi <a href="<?= base_url('petugas/satuan/tambah') ?>">disini</a>  terlebih dahulu</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Nama Barang</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-tag"></span></span>
                <input type="text" class="form-control" name="nama_benda_<?= $i ?>" required>
            </div>
            <span class="help-block">Merk dan nama barang bukti</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Lokasi Penitipan</label>
        <div class="col-md-6 col-xs-12">
            <select class="form-control select" name="lokasi_benda_<?= $i ?>" required>
                <?php foreach ($lokasi as $lokasi[$i]): ?>
                  <option value="<?= $lokasi[$i]->id_lokasi ?>"><?= $lokasi[$i]->nama_lokasi ?></option>
                <?php endforeach; ?>
            </select>
            <span class="help-block">Lokasi tidak tersedia ? silahkan isi <a href="<?= base_url('petugas/lokasi/tambah') ?>">disini</a>  terlebih dahulu</span>
        </div>
      </div>

    </div>
  <?php } ?>
</div>
