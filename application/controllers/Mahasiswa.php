<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    function __construct() {
        parent::__construct();
        //untuk load model mahasiswa
        $this->load->model('Mahasiswa_model','mhs');
    }
    function index(){
        $this->load->view('template',[
            'judul' => 'Data Mahasiswa',
            'content' => $this->load->view('mhs_list',[
                'mhs' => $this->mhs->get()
            ],TRUE)
        ]);
    }
    function form(){
        $this->load->view('template',[
            'judul' => 'Data Mahasiswa',
            'content' => $this->load->view('mhs_form','',TRUE)
        ]);
    }
    function save(){
        $data = $this->input->post();
        $this->mhs->save($data);
        redirect('mahasiswa');
    }
    function edit($nim){
        $this->load->view('template',[
             'judul' => 'Edit Data Mahasiswa',
            'content' => $this->load->view('mhs_form',[
                'data' => $this->mhs->find($nim)
            ],true)
        ]);
    }
    function update(){
        $nim = $this->input->post('nim');
        $this->mhs->update($nim,$this->input->post());
        redirect('mahasiswa');
    }
    function delete($nim){
        $this->mhs->delete($nim);
        redirect('mahasiswa');
    }
}
