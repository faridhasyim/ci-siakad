<a href="<?= site_url() ?>/mahasiswa/form" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Tambah Data</span></a><br /><br />
<table class="table table-striped table-bordered table-hover table-condensed">
    <thead style="background-color: #428bca">
        <tr style="color: white">
            <th><center>No</center></th>
<th><center>NIM</center></th>
<th><center>Nama</center></th>
<th><center>Jenis Kelamin</center></th>
<th><center>No. Handphone</center></th>
<th><center>Action</center></th>
</tr>
</thead>
<tbody>
    <?php $no = 0;
    foreach ($mhs as $r) {
        ?>
        <tr>
            <td align="center"><?= ++$no ?></td>
            <td align="center"><?= $r['nim'] ?></td>
            <td><?= $r['nama'] ?></td>
            <td  align="center"><?= $r['jnskel'] ?></td>
            <td align="center"><?= $r['telepon'] ?></td>
            <td align="center">
                <a href="<?= site_url('mahasiswa/edit/' . $r['nim']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" title="Edit Data"></span></a>
                <a href="#" rel="<?= site_url('mahasiswa/delete/' . $r['nim']) ?>" class="del btn btn-danger"><span class="glyphicon glyphicon-trash" title="Hapus Data"></span></a>
            </td>
        </tr>
<?php } ?>
</tbody>
</table>