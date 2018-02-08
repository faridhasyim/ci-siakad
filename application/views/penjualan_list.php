<a href="<?= site_url() ?>/penjualan/form" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Tambah Data</span></a><br /><br />
<table class="table table-striped table-bordered table-hover table-condensed">
    <thead style="background-color: #428bca">
        <tr style="color: white">
            <th>No</th>
            <th>Kode Penjualan</th>
            <th>Tanggal</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>QTY</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $tot = 0;
            foreach ($data as $r){
            $tot += $r['total'];
        ?>
            <tr>
                <td><?= isset($no) ? ++$no : $no=1 ?></td>
                <td><?= $r['kode_penjualan']?></td>
                <td><?= $r['tanggal']?></td>
                <td><?= $r['kode_barang']?></td>
                <td><?= 
                    info('barang', [
                        'kode_barang' => $r['kode_barang']
                    ])['nama']
                ?>
                </td>
                <td><?= rp($r['harga'],2)?></td>
                <td align="center"><?= $r['qty']?></td>
                <td><?= rp($r['total'],2)?></td>
                <td>
                    <a href="<?= site_url('penjualan/edit/'.$r['kode_penjualan']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" title="Edit Data"></span></a>
                     <a href="#" rel="<?= site_url('penjualan/delete/'.$r['kode_penjualan']) ?>" class="del btn btn-warning"><span class="glyphicon glyphicon-trash" title="Hapus Data"></span></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="alert alert-success" align="center">
    Total Penjualan: <?= rp($tot) ?> <br>
    Terbilang <?= terbilang($tot) ?> rupiah
</div>