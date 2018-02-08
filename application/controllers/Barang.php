<?php
class Barang extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Barang_model','m');
    }
    function index(){
        $this->load->view('template',[
            'judul'=>'Data Barang',
            'content' => $this->load->view('barang_list',[
                'data' => $this->m->get()
            ],true)
        ]);
    }
    function form(){
        $this->load->view('template',[
            'judul'=>'Tambah Barang Baru',
            'content' => $this->load->view('barang_form','',true)
        ]);
    }
     function edit($kode_barang){
        $this->load->view('template',[
            'judul'=>'Edit Barang',
            'content' => $this->load->view('barang_form',[
                'data' => $this->m->find($kode_barang)
            ],true)
        ]);
    }
    function save(){
        $this->m->save($this->input->post());
        redirect('barang');
    }
    function update(){
        $kode_barang = $this->input->post('kode_barang');
        $this->m->update($kode_barang,$this->input->post());
        redirect('barang');
    }
    function delete($kode_barang){
        $this->m->delete($kode_barang);
        redirect('barang');
    }
}
