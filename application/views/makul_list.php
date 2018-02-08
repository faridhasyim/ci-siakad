<a href="<?= site_url() ?>/makul/form" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Tambah Data</span></a><br /><br />
<table class="table table-striped table-bordered table-hover table-condensed">
    <thead style="background-color: #428bca">
        <tr style="color: white">
            <th><center>No</center></th>
            <th><center>Kode Makul</center></th>
            <th><center>Nama Makul</center></th>
            <th><center>Jumlah SKS</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php $no =0; foreach ($makul as $r) { ?>
        <tr>
            <td align="center"><?= ++$no?></td>
            <td align="center"><?= $r['kode_makul']?></td>
            <td><?= $r['makul']  ?></td>
            <td align="center"><?= $r['sks']?> SKS</td>
            <td align="center">
                <a href="<?= site_url('makul/edit/'.$r['kode_makul']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" title="Edit Data"></span></a>
                <a href="#" rel="<?= site_url('makul/delete/'.$r['kode_makul']) ?>" class="del btn btn-danger"><span class="glyphicon glyphicon-trash" title="Hapus Data"></span></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>