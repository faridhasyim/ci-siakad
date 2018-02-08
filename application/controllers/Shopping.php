<?php

class Shopping extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Barang_model','m');
    }
    function index(){
        //membuat sesi untuk cart agar sebelum selesai bayar tetap utuh
        if ($this->session->userdata('kode_penjualan') == '') {
            $this->session->set_userdata('kode_penjualan',time()); //time() untuk kode unik 
        }
        
        $this->load->view('template',[
            'judul'=>'Shopping Cart',
            'content' => $this->load->view('cart',[
                'data' => $this->m->get(),
                //untuk menampilkan keranjang belanja
                    'cart' => $this->db->where([
                        'kode_penjualan' => $this->session->userdata('kode_penjualan')
                    ])->get('cart')->result_array()
            ],true)
        ]);
    }
    function add(){
        $data = $this->db->where([
            'kode_penjualan' => $_POST['kode_penjualan'],
            'kode_barang' => $_POST['kode_barang'],
        ])->get('cart')->row_array();
        //cek barang jika belum dibeli maka barang akan ditampung, jika barang sudah ada maka qty bertambah 
        if (count($data) == 0) {
            //untuk menghitung total bayar
            $_POST['total'] = $_POST['harga']*$_POST['qty'];
            $this->db->insert('cart', $this->input->post());
        }else{
            $this->db->where([
                'kode_penjualan' => $_POST['kode_penjualan'],
                'kode_barang' => $_POST['kode_barang'],
            ])->update('cart',[
                'qty' => $data['qty']+$_POST['qty'],
                'total' => ($data['qty']+$_POST['qty'])*$_POST['harga']
            ]);
        }
        redirect('shopping');
    }
    function bayar(){
        $this->load->view('template',[
            'judul' => 'Detail Pemesanan',
            'content' => $this->load->view('detail_pesan',[
                'data' => $this->m->get(),
                //untuk menampilkan keranjang belanja
                    'cart' => $this->db->where([
                        'kode_penjualan' => $this->session->userdata('kode_penjualan')
                    ])->get('cart')->result_array()
            ],true)
        ]);
    }
    function selesai(){
        $kode_penjualan = $this->session->userdata('kode_penjualan');
        $sql = "INSERT INTO penjualan (SELECT * FROM cart WHERE kode_penjualan='$kode_penjualan')";
        $this->db->query($sql);
        $this->db->where([kode_penjualan => $kode_penjualan])->delete('cart');
        $this->session->unset_userdata('kode_penjualan');
        redirect('penjualan');
    }
}
