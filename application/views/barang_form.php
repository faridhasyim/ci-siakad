<form class="form" method="post" action="<?= site_url() ?>/barang/<?= isset($data)?'update':'save';?>">
    <div class="form-group">
        <label>Kode Barang</label>
        <input type="text" name="kode_barang" value="<?= isset($data)?$data['kode_barang']:'';?>" 
               <?= isset($data)?'readonly':'';?> class="form-control"/>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= isset($data)?$data['nama']:'';?>"class="form-control"/>
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" value="<?= isset($data)?$data['harga']:'';?>"class="form-control"/>
    </div>
    <button type="submit" class="btn btn-success">SIMPAN</button>
    <button type="reset" class="btn btn-default">BATAL</button>
</form>
