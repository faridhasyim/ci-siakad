<button class="btn btn-primary" type="button">
    <a href="<?= site_url() ?>/shopping/bayar" style="color: white"><span class="glyphicon glyphicon-shopping-cart"> Keranjang Belanja <span class="badge"><?= cart_badge()?></span></span></a>
</button>
<br/><br />
<?php foreach ($data as $r) { ?>
<div class="col-sm-3">
    <div class="panel panel-primary">
        <div class="panel-body">
            <b><?= $r['nama'] ?></b><br />
            <?= rp($r['harga'],0)?>
        </div>
        <div class="panel-footer">
            <form method="post" action="<?= site_url('shopping/add')?>">
                <input type="hidden" name="kode_penjualan" value="<?= $this->session->userdata('kode_penjualan') ?>" />
                <input type="hidden" name="kode_barang" value="<?= $r['kode_barang'] ?>" />
                <input type="hidden" name="harga" value="<?= $r['harga'] ?>" />
                <input type="hidden" name="qty" value="1" />
                <input type="hidden" name="tanggal" value="<?= date('Y-m-d')?>" />
                <button type="submit" class="btn btn-success">Beli</button>
                <button type="#" class="btn btn-primary">Detail</button>
            </form>    
        </div>
    </div>
</div>
<?php } ?>
<!--<hr>
<table class="table">
    <thead>
        <tr>
            <th>Barang</th>
            <th>Harga</th>
            <th>QTY</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $tot = 0;
        foreach ($cart as $r) { 
        $tot +=$r['total'] ?>
        <tr>
            <td><?= info('barang',[
                'kode_barang' => $r['kode_barang']
            ])['nama'] ?></td>
            <td><?= $r['harga']?></td>
            <td><?= $r['qty']?></td>
            <td><?= number_format($r['total'])?></td>
        </tr>
        <?php } ?>
    </tbody>
    <thead>
        <th colspan="3" class="text-right">Total Bayar</th>
        <th><?= number_format($tot)?></th>
    </thead>
</table>-->


