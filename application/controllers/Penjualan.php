<?php
class Penjualan extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Penjualan_model','m');
         $this->load->model('Barang_model','b');
    }
    function index(){
        $this->load->view('template',[
            'judul'=>'Data Penjualan',
            'content' => $this->load->view('penjualan_list',[
                'data' => $this->m->get()
            ],true)
        ]);
    }
    function form(){
        $this->load->view('template',[
            'judul'=>'Tambah Penjualan Baru',
            'content' => $this->load->view('penjualan_form',['barang'=>$this->b->get()],true)
        ]);
    }
     function edit($kode_penjualan){
        $this->load->view('template',[
            'judul'=>'Edit Penjualan',
            'content' => $this->load->view('penjualan_form',[
                'data' => $this->m->find($kode_penjualan)
            ],true)
        ]);
    }
    function save(){
        $this->m->save($this->input->post());
        redirect('penjualan');
    }
    function update(){
        $kode_penjualan = $this->input->post('kode_penjualan');
        $this->m->update($kode_penjualan,$this->input->post());
        redirect('penjualan');
    }
    function delete($kode_penjualan){
        $this->m->delete($kode_penjualan);
        redirect('penjualan');
    }
}
