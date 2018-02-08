<a href="<?= site_url() ?>/barang/form" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Tambah Data</span></a><br /><br />
<table class="table table-striped table-bordered table-hover table-condensed">
    <thead style="background-color: #428bca">
        <tr style="color: white">
            <th><center>No</center></th>
            <th>Kode Barang</th>
            <th>Nama</th>
            <th>Harga</th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $r){ ?>
            <tr>
                <td align="center"><?= isset($no) ? ++$no : $no=1 ?></td>
                <td><?= $r['kode_barang']?></td>
                <td><?= $r['nama']?></td>
                <td><?= rp($r['harga'],2)?></td>
                <td align="center">
                    <a href="<?= site_url('barang/edit/'.$r['kode_barang']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" title="Edit Data"></span></a>
                    <a href ="#" rel="<?= site_url('barang/delete/'.$r['kode_barang']) ?>" class="del btn btn-warning"><span class="glyphicon glyphicon-trash" title="Hapus Data"></span></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>