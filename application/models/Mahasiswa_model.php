<?php

class Mahasiswa_model extends CI_Model{
    function get(){
        return $this->db->get('mahasiswa')->result_array();
        //optional manggil db
        //return $this->db->query('select * from mahasiswa')->resul_array();
    }
    function save($data){
        $this->db->insert('mahasiswa',$data);
    }
    function find($nim){
        return $this->db->where(['nim' => $nim])->get('mahasiswa')->row_array();
    }
    function update($nim,$data){
        $this->db->where(['nim' => $nim])->update('mahasiswa',$data);
    }
    function delete($nim){
        $this->db->where(['nim' => $nim])->delete('mahasiswa');
    }
}
