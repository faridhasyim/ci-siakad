<?php

class Dosen extends CI_Controller {
    function __construct() {
        parent::__construct();
        //untuk load model dosen
        $this->load->model('Dosen_model','dosen');
    }
    
    function index(){
        $this->load->view('template',[
            'judul' => 'Data Dosen',
            'content' => $this->load->view('dosen_list',[
                'dosen' => $this->dosen->get()
            ],TRUE)
        ]);
    }
    
    function form(){
        $this->load->view('template',[
            'judul' => 'Data Dosen',
            'content' => $this->load->view('dosen_form','',TRUE)
        ]);
    }
    
    function save(){
        $data = $this->input->post();
        $this->dosen->save($data);
        redirect('dosen');
    }
    function edit($nidn){
        $this->load->view('template',[
             'judul' => 'Edit Data Dosen',
            'content' => $this->load->view('dosen_form',[
                'data' => $this->dosen->find($nidn)
            ],true)
        ]);
    }
    function update(){
        $nidn = $this->input->post('nidn');
        $this->dosen->update($nidn,$this->input->post());
        redirect('dosen');
    }
    function delete($nidn){
        $this->dosen->delete($nidn);
        redirect('dosen');
    }
}
