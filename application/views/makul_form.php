<form class="form-horizontal" method="post" action="<?= site_url() ?>/makul/<?= isset($data['makul']) ? 'update' : 'save' ?>">
    <div class="form-group">
        <label class="col-sm-2 control-label">Kode Makul</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="kode_makul" placeholder="Masukkan Kode Makul" value="<?= isset($data['kode_makul']) ? $data['kode_makul'] : '' ?>"
               <?= isset($data['kode_makul']) ? 'readonly' : '' ?> required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Makul</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="makul" placeholder="Masukkan Nama Makul"  value="<?= isset($data['makul']) ? $data['makul'] : '' ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Jumlah SKS</label>
        <div class="col-sm-6">
            <input type="number" class="form-control" name="sks" placeholder="Masukkan Jumlah SKS" value="<?= isset($data['sks']) ? $data['sks'] : '' ?>" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"> Simpan</span></button>
            <a href="<?= site_url() ?>/makul" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Batal</span></a>
        </div>
    </div>  
</form>
