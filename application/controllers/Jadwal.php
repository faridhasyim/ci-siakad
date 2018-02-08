<?php

class Jadwal extends CI_Controller {
    function __construct() {
        parent::__construct();
        //untuk load model mahasiswa
        $this->load->model('Jadwal_model','jadwal');
    }
    
    function index(){
        $this->load->model('Dosen_model','dosen');
        $this->load->model('Makul_model','makul');
        $this->load->view('template',[
            'judul' => 'Data Jadwal',
            'content' => $this->load->view('jadwal_list',[
                'jadwal' => $this->jadwal->get(),
                'dosen' => $this->dosen->get(),
                'makul' => $this->makul->get()
            ],TRUE)
        ]);
    }
    
    function form(){
        $this->load->model('Dosen_model','dosen');
        $this->load->model('Makul_model','makul');
        $this->load->view('template',[
            'judul' => 'Data Jadwal',
            'content' => $this->load->view('jadwal_form',[
                'dosen' => $this->dosen->get(),
                'makul' => $this->makul->get()
            ],TRUE)
        ]);
    }
    
    function save(){
        $data = $this->input->post();
        $this->jadwal->save($data);
        redirect('jadwal');
    }
    function edit($kode_jadwal){
        $this->load->view('template',[
             'judul' => 'Edit Jadwal Perkuliahan',
            'content' => $this->load->view('jadwal_form',[
                'data' => $this->jadwal->find($kode_jadwal)
            ],true)
        ]);
    }
    function update(){
        $nim = $this->input->post('kode_jadwal');
        $this->jadwal->update($kode_jadwal,$this->input->post());
        redirect('jadwal');
    }
    function delete($kode_jadwal){
        $this->jadwal->delete($kode_jadwal);
        redirect('jadwal');
    }
}
