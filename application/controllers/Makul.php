<?php

class Makul extends CI_Controller {
    function __construct() {
        parent::__construct();
        //untuk load model makul
        $this->load->model('Makul_model','makul');
    }
    
    function index(){
        $this->load->view('template',[
            'judul' => 'Data Mata Kuliah',
            'content' => $this->load->view('makul_list',[
                'makul' => $this->makul->get()
            ],TRUE)
        ]);
    }
    function form(){
        $this->load->view('template',[
            'judul' => 'Data Mata Kuliah',
            'content' => $this->load->view('makul_form','',TRUE)
        ]);
    }
    function save(){
        $data = $this->input->post();
        $this->makul->save($data);
        redirect('makul');
    }
    function edit($kode_makul){
        $this->load->view('template',[
             'judul' => 'Edit Data Mahasiswa',
            'content' => $this->load->view('makul_form',[
                'data' => $this->makul->find($kode_makul)
            ],true)
        ]);
    }
    function update(){
        $kode_makul = $this->input->post('kode_makul');
        $this->makul->update($kode_makul,$this->input->post());
        redirect('makul');
    }
    function delete($kode_makul){
        $this->makul->delete($kode_makul);
        redirect('makul');
    }
}

