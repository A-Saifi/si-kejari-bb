<div class="panel-body">
    <input type="hidden" name="id_pegawai" value="<?= $petugas->id_pegawai ?>">
    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">NIP</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                <input type="text" class="form-control" name="NIP" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required value="<?= $petugas->NIP ?>">
            </div>
            <span class="help-block">Diisi dengan NIP</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                <input type="text" class="form-control" name="nama_pegawai" required value="<?= $petugas->nama_pegawai ?>">
            </div>
            <span class="help-block">Tuliskan nama lengkap</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Username</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                <input type="text" class="form-control" name="username" required value="<?= $petugas->username ?>">
            </div>
            <span class="help-block">Pastikan username mudah diingat</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Password</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                <input type="password" class="form-control" name="password">
            </div>
            <span class="help-block">Isi dengan password baru</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Tempat Lahir</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                <input type="text" class="form-control" name="tempat_lahir_pegawai" required value="<?= $petugas->tempat_lahir_pegawai ?>">
            </div>
            <span class="help-block">Tuliskan tempat lahir</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                <input type="text" class="form-control datepicker" name="tanggal_lahir_pegawai" required value="<?= $petugas->tanggal_lahir_pegawai ?>">
            </div>
            <span class="help-block">Pilih tanggal lahir</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Alamat</label>
        <div class="col-md-6 col-xs-12">
            <textarea class="form-control" rows="5" name="alamat_pegawai" required><?= $petugas->alamat_pegawai ?></textarea>
            <span class="help-block">Default textarea field</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Golongan</label>
        <div class="col-md-6 col-xs-12">
            <select class="select" style="display: none;" name="golongan_pegawai" required>
                <?php foreach ($golongan as $golongan): ?>
                  <option value="<?= $golongan->id_golongan ?>"
                  <?php if ($petugas->golongan_pegawai == $golongan->id_golongan): ?>
                    selected
                  <?php endif; ?> >
                    <?= $golongan->golongan_golongan.' '.$golongan->ruang_golongan.' - '.$golongan->nama_pangkat_golongan ?>
                  </option>
                <?php endforeach; ?>
            </select>
            <span class="help-block">Pilih sesuai dengan golongan</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Tanggal Golongan</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                <input type="text" class="form-control datepicker" name="tmt_golongan_pegawai" required value="<?= $petugas->tmt_golongan_pegawai ?>">
            </div>
            <span class="help-block">Pilih tanggal mulai tugas golongan</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Tanggal CPNS</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                <input type="text" class="form-control datepicker" name="tmt_cpns_pegawai" required value="<?= $petugas->tmt_cpns_pegawai ?>">
            </div>
            <span class="help-block">Pilih tanggal mulai tugas CPNS</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Tanggal PNS</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                <input type="text" class="form-control datepicker" name="tmt_pns_pegawai" required value="<?= $petugas->tmt_pns_pegawai ?>">
            </div>
            <span class="help-block">Pilih tanggal mulai tugas PNS</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Tanggal Jabatan</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-briefcase"></span></span>
                <input type="text" class="form-control datepicker" name="tmt_jabatan_pegawai" required value="<?= $petugas->tmt_jabatan_pegawai ?>">
            </div>
            <span class="help-block">Pilih tanggal mulai tugas jabatan</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Pendidikan Terakhir</label>
        <div class="col-md-6 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-trophy"></span></span>
                <input type="text" class="form-control" name="pendidikan_terakhir_pegawai" required value="<?= $petugas->pendidikan_terakhir_pegawai ?>">
            </div>
            <span class="help-block">Tuliskan pendidikan terakhir</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Unit Kerja</label>
        <div class="col-md-6 col-xs-12">
            <textarea class="form-control" rows="2" name="unit_kerja_pegawai" required><?= $petugas->unit_kerja_pegawai ?></textarea>
            <span class="help-block">Tuliskan unit kerja</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Instansi Kerja</label>
        <div class="col-md-6 col-xs-12">
            <textarea class="form-control" rows="2" name="instansi_kerja_pegawai" required><?= $petugas->instansi_kerja_pegawai ?></textarea>
            <span class="help-block">Tuliskan instansi kerja</span>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Select</label>
        <div class="col-md-6 col-xs-12">
            <select class="select" style="display: none;" name="role_pegawai" required>
              <?php foreach ($role as $role): ?>
                <option value="<?= $role->id_role ?>"
                  <?php if ($role->id_role == $petugas->role_pegawai): ?>
                    selected
                  <?php endif; ?>
                  >
                  <?= ucwords($role->nama_role) ?></option>
              <?php endforeach; ?>
            </select>
            <span class="help-block">Pilih Peran</span>
        </div>
    </div>

    <!-- <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">File</label>
        <div class="col-md-6 col-xs-12">
              <input type="file" class="fileinput btn-primary" name="filename" id="filename" title="Browse file"></a>
            <span class="help-block">Input type file</span>
        </div>
    </div> -->

    <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label">Pastikan</label>
        <div class="col-md-6 col-xs-12">
          <label class="check"><input type="checkbox" class="icheckbox" required /> Saya memastikan bahwa data yang diubah adalah valid</label>
          <span class="help-block">Pastikan kembali data yang telah diubah</span>
          <input type="hidden" name="kedudukan_hukum_pegawai" value="aktif">
        </div>
    </div>

</div>
