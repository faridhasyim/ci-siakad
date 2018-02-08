<a href="<?= site_url() ?>/jadwal/form" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Tambah Data</span></a><br /><br />
<table class="table table-striped table-bordered table-hover table-condensed">
    <thead style="background-color: #428bca">
        <tr style="color: white">
            <th><center>No</center></th>
            <th><center>Dosen</center></th>
            <th><center>Makul</center></th>
            <th><center>Kelas</center></th>
            <th><center>Ruang</center></th>
            <th><center>Mulai</center></th>
            <th><center>Selesai</center></th>
            <th><center>Action</center></th>
        </tr>
    </thead>
    <tbody>
        <?php $no =0; foreach ($jadwal as $r) { ?>
        <tr>
            <td align="center"><?= ++$no  ?></td>
            <td><?= $r['dosen']  ?></td>
            <td><?= $r['makul']  ?></td>
            <td align="center"><?= $r['kelas']  ?></td>
            <td align="center"><?= $r['ruang']  ?></td>
            <td align="center"><?= $r['mulai']  ?></td>
            <td align="center"><?= $r['selesai']  ?></td>
            <td align="center">
                <a href="<?= site_url('jadwal/edit/'.$r['kode_jadwal']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" title="Edit Data"></span></a>
                <a href="#" rel="<?= site_url('jadwal/delete/'.$r['kode_jadwal']) ?>" class="del btn btn-warning"><span class="glyphicon glyphicon-trash" title="Hapus Data"></span></a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>