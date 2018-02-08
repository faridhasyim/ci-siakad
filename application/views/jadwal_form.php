<form class="form-horizontal" action="<?= site_url()?>/jadwal/save" method="post">
    <div class="form-group">
        <label class="col-sm-2 control-label">NIDN</label>
        <div class="col-sm-6">
            <select name="nidn" class="form-control">
                <?php foreach ($dosen as $r) { ?>
                <option value="<?= $r['nidn'] ?>">
                    <?= $r['nama'] ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Makul</label>
        <div class="col-sm-6">
            <select name="kode_makul" class="form-control">
                <?php foreach ($makul as $r) { ?>
                <option value="<?= $r['kode_makul'] ?>">
                    <?= $r['makul'] ?>
                </option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Kelas</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas" value="<?= isset($data['kelas']) ? $data['kelas'] : '' ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ruang</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="ruang" placeholder="Masukkan Ruang" value="<?= isset($data['ruang']) ? $data['ruang'] : '' ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Mulai</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="mulai" placeholder="Contoh 07:00" value="<?= isset($data['mulai']) ? $data['mulai'] : '' ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Selesai</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="selesai" placeholder="Contoh 17:00" value="<?= isset($data['selesai']) ? $data['selesai'] : '' ?>" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"> Simpan</span></button>
            <a href="<?= site_url() ?>/jadwal" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Batal</span></a>
        </div>
    </div>  
</form>
