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
</table>
<br />
<button class="btn btn-primary" type="button">
    <a href="<?= site_url() ?>/shopping/selesai" style="color: white"><span class="glyphicon glyphicon-ok"> Selesai Belanja</span></a>
</button>