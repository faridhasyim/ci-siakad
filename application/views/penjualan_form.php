<form class="form" method="post" action="<?= site_url() ?>/penjualan/<?= isset($data)?'update':'save';?>">
    <div class="form-group">
        <label>Kode Penjualan</label>
        <input type="text" name="kode_penjualan" value="<?= isset($data)?$data['kode_penjualan']:'';?>" 
               <?= isset($data)?'readonly':'';?> class="form-control"/>
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input type="text" name="tanggal" value="<?= isset($data)?$data['tanggal']:'';?>"class="form-control"/>
    </div>
    <div class="form-group">
        <label>Kode Barang</label>
        <select name="kode_barang" class="form-control">
            <?php foreach ($barang as $r) {?>
            <option value="<?= $r['kode_barang']?>">
                <?= $r['nama']?>
            </option>
            <?php }?>
        </select>
    </div>
    
   
    <div class="form-group">
        <label>QUANTITY</label>
        <input type="text" name="qty" value="<?= isset($data)?$data['qty']:'';?>"class="form-control"/>
    </div>
    <button type="submit" class="btn btn-success">SIMPAN</button>
    <button type="reset" class="btn btn-default">BATAL</button>
</form>
