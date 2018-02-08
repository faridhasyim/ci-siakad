<form class="form-horizontal" method="post" action="<?= site_url() ?>/mahasiswa/<?= isset($data['nim']) ? 'update' : 'save' ?>">
    <div class="form-group">
        <label class="col-sm-2 control-label">NIM</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM Anda" value="<?= isset($data['nim']) ? $data['nim'] : '' ?>"
               <?= isset($data['nim']) ? 'readonly' : '' ?> required pattern="\d{2}\.\d{3}\.\d{4}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap Anda" value="<?= isset($data['nama']) ? $data['nama'] : '' ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Jenis Kelamin</label>
        <div class="col-sm-6">
        <select name="jnskel" class="form-control">
            <option value="Laki-laki" 
              <?= 
                isset($data['jnskel']) &&  $data['jnskel'] == 'L' ?
                'selected' : ''
              ?>>
              Laki-Laki
            </option>
            <option value="Perempuan" 
              <?= 
                isset($data['jnskel']) &&  $data['jnskel'] == 'P' ?
                'selected' : ''
              ?>>
              Perempuan
            </option>
        </select>
        </div>    
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">No. Handphone</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="telepon" placeholder="Masukkan No. Handphone Anda" value="<?= isset($data['telepon']) ? $data['telepon'] : '' ?>" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"> Simpan</span></button>
            <a href="<?= site_url() ?>/mahasiswa" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Batal</span></a>
        </div>
    </div>  
</form>
