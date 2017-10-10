<div class="panel-body">
    <!-- Field -->
  <div class="col-md-12">
    <h5 class="push-up-20">Pada</h5>
    <div class="form-group">
      <label class="col-md-3 col-xs-12 control-label">Pada Tanggal</label>
      <div class="col-md-6 col-xs-12">
          <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
              <input type="text" class="form-control datepicker" name="tanggal_ba_18" required>
          </div>
          <span class="help-block">Bertempat di Kejaksaan Negeri Sleman</span>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 col-xs-12 control-label">Jaksa</label>
      <div class="col-md-6 col-xs-12">
          <select class="form-control select" name="jaksa_ba_18" required>
              <?php foreach ($jaksa as $jaksa): ?>
                <option value="<?= $jaksa->id_jaksa ?>"><?= $jaksa->nama_jaksa ?></option>
              <?php endforeach; ?>
          </select>
          <span class="help-block">Tidak tersedia ? silahkan isi <a href="<?= base_url('petugas/jaksa/tambah') ?>">disini</a>  terlebih dahulu</span>
      </div>
    </div>
  </div>

  <div class="col-md-6">

      <h5 class="push-up-20">Saksi Pertama</h5>
      <div class="form-group">
        <label class="col-md-3 control-label">Nama</label>
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                <input type="text" class="form-control" name="saksi_1_nama_ba_18" required />
            </div>
            <span class="help-block">Nama lengkap saksi pertama</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">Pangkat</label>
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                <input type="text" class="form-control" name="saksi_1_pangkat_ba_18" required />
            </div>
            <span class="help-block">Pangkat saksi pertama</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">NIP</label>
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-barcode"></span></span>
                <input type="number" class="form-control" name="saksi_1_NIP_ba_18" required />
            </div>
            <span class="help-block">NIP saksi pertama</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">Jabatan</label>
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-sitemap"></span></span>
                <input type="text" class="form-control" name="saksi_1_jabatan_ba_18" required />
            </div>
            <span class="help-block">Jabatan saksi pertama</span>
        </div>
      </div>

  </div>

  <div class="col-md-6">
      <h5 class="push-up-20">Saksi Kedua</h5>
      <div class="form-group">
        <label class="col-md-3 control-label">Nama</label>
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                <input type="text" class="form-control" name="saksi_2_nama_ba_18" required />
            </div>
            <span class="help-block">Nama lengkap saksi kedua</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">Pangkat</label>
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                <input type="text" class="form-control" name="saksi_2_pangkat_ba_18" required />
            </div>
            <span class="help-block">Pangkat saksi kedua</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">NIP</label>
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-barcode"></span></span>
                <input type="number" class="form-control" name="saksi_2_NIP_ba_18" required />
            </div>
            <span class="help-block">NIP saksi kedua</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-3 control-label">Jabatan</label>
        <div class="col-md-9">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-sitemap"></span></span>
                <input type="text" class="form-control" name="saksi_2_jabatan_ba_18" required />
            </div>
            <span class="help-block">Jabatan saksi kedua</span>
        </div>
      </div>

  </div>
  <div class="col-md-12">
    <h5 class="push-up-20">Berdasarkan</h5>
    <div class="form-group">
      <label class="col-md-3 col-xs-12 control-label">Surat Perintah</label>
      <div class="col-md-2">
              <input type="text" class="form-control" value="Print/O.4.14/" disabled/>
      </div>
      <div class="col-md-2">
        <select class="form-control select" name="jenis_ba_18" required>
            <?php foreach ($jenis as $jenis): ?>
              <option value="<?= $jenis->id_jenis ?>"><?= ucwords(strtolower($jenis->nama_jenis)).'.' ?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <div class="col-md-2">
              <input type="text" class="form-control datepicker" name="sp_ba_18" required/>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 col-xs-12 control-label">Terdakwa</label>
      <div class="col-md-6 col-xs-12">
          <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-legal"></span></span>
              <input type="text" class="form-control" name="terdakwa_ba_18" required>
          </div>
          <span class="help-block">Nama lengkap terdakwa</span>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 col-xs-12 control-label">Melanggar Pasal</label>
      <div class="col-md-6 col-xs-12">
          <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-book"></span></span>
              <input type="text" class="form-control" name="pasal_ba_18" required>
          </div>
          <span class="help-block">Terdakwa melanggar pasal</span>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <h5 class="push-up-20">Barang Bukti</h5>
    <div class="form-group">
      <label class="col-md-3 col-xs-12 control-label">Jumlah Barang</label>
      <div class="col-md-6 col-xs-12">
          <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-copy"></span></span>
              <input type="number" class="form-control" name="jumlah" required>
          </div>
          <span class="help-block">Jumlah barang sitaan / barang bukti</span>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-3 col-xs-12 control-label">Register Barang Bukti</label>
      <div class="col-md-6 col-xs-12">
          <div class="input-group">
              <span class="input-group-addon"><span class="fa fa-copy"></span></span>
              <input type="text" class="form-control" value="<?= 'B-'.$this->display->ba_18_register() ?>" disabled>
              <input type="hidden" name="register_ba_18" value="<?= $this->display->ba_18_register() ?>">
          </div>
          <span class="help-block">Jumlah barang sitaan / barang bukti</span>
      </div>
    </div>
  </div>
  <!-- End Field  -->
</div>
