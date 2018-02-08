<?php
    if ($this->session->userdata('username')=='') {
        redirect('portal');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.css" />
        <link rel="stylesheet" href="<?= base_url('assets/datatables/datatables.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/sweetalert/sweetalert.css" />
        <link rel="icon" href="<?= base_url() ?>assets/img/logo.png" />

        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?= base_url('assets/datatables/datatables.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/sweetalert/sweetalert.min.js') ?>"></script>
        <title>SIAKAD - <?= $judul ?></title>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                   <a class="navbar-brand" href="#">
                       <img alt="Brand" src="<?= base_url() ?>assets/img/logo.png" style="width: 40px; height: 40px; margin-top: -10px;">
                  </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="#" style="color: white;">SIAKAD NEWBIE :)</a>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Cari disini">
                    </div>
                    <button type="submit" class="btn btn-default">Cari</button>
               </form>
                  <span class="glyphicon glyphicon-user" style="color:white; margin-left:600px; margin-top:15px;"> <b><a href="<?= site_url('portal/logout')?>" style="color: white;">
                           <?= $this->session->userdata('nama') ?>
                       </a></b></span>
<!--               <ul class="nav navbar-right">
                   <li>
                       <a href="<?= site_url('portal/logout')?>">
                           Logout <?= $this->session->userdata('nama') ?>
                       </a>
                   </li>
               </ul>-->
              </div>
            </div><!-- /.container-fluid -->
          </nav>
        <br />
        <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Menu Utama
                </div>
                <div class="panel-body">
                    <ul class="nav nav-stacked">
                        <li  class="active"><a href="<?= site_url() ?>/mahasiswa/"><span class="glyphicon glyphicon-education"> Mahasiswa</span></a></li>
                        <li><a href="<?= site_url() ?>/dosen/"><span class="glyphicon glyphicon-user"> Dosen</span></a></li>
                        <li><a href="<?= site_url() ?>/makul/"><span class="glyphicon glyphicon-file"> Mata Kuliah</span></a></li>
                        <li><a href="<?= site_url() ?>/jadwal/"><span class="glyphicon glyphicon-list-alt"> Jadwal</span></a></li><hr>
                        <li><a href="<?= site_url() ?>/barang/"><span class="glyphicon glyphicon-briefcase"> Barang</span></a></li>
                        <li><a href="<?= site_url() ?>/penjualan/"><span class="glyphicon glyphicon-tags"> Penjualan</span></a></li><hr>
                        <li><a href="<?= site_url() ?>/shopping/"><span class="glyphicon glyphicon-gift"> Produk</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><?= $judul?></center>
                </div>
                <div class="panel-body">
                   <?= $content?>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('.table').DataTable({
                //responsive: true,
                //dom:'Bfrtip',
                //buttons:[
                //    'excel','csv','copy','pdf','print'
                //]
                  responsive: true,
                  buttons: [
                      'excel','csv','copy','pdf','print'
                  ],
                  dom: "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                          "<'row'<'col-sm-12'tr>>" +
                          "<'row'<'col-sm-6'Bi><'col-sm-6'p>>",
                  lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
                  language: {
                      "processing": "Sedang memproses...",
                      "lengthMenu": "Menampilkan _MENU_ baris",
                      "zeroRecords": "Tidak ditemukan data yang sesuai",
                      "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                      "infoEmpty": "Menampilkan 0 sampai 0 dari entri 0",
                      "infoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                      "infoPostFix": "",
                      "search": "Cari :",
                      "Url": "",
                      "paginate": {
                          "first": "&laquo;",
                          "previous": "&lsaquo;",
                          "next": "&rsaquo;",
                          "last": "&raquo;"
                      }
                  }
            });
            //sweatalert
            $(document).on('click','.del', function(){
             var href = $(this).attr('rel');
             swal({
                 title: "Hapus Data?",
                 text: "Data yang telah dihapus tidak dapat dikembalikan!",
                 type: "warning",
                 showCancelButton: true,
                 cancelButtonText: "Batalkan",
                 confirmButtonClass: "btn-danger",
                 confirmButtonText: "Ya, Saya yakin!",
                 closeOnConfirm: false
             },
             function(){
                 swal({
                     title: "Terhapus!",
                     text: "Data berhasil dihapus!",
                     confirmButtonClass: "btn-success",
                     type: "success"
                 },
                 function(){
                     window.location = href;
                 });
             });
             return false;
          });  
        </script>
    </body>
</html>

