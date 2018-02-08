<?php

class Dosen_model extends CI_Model{
    function get(){
        return $this->db->get('dosen')->result_array();
        //optional manggil db
        //return $this->db->query('select * from dosen')->resul_array();
    }
    function save($data){
        $this->db->insert('dosen',$data);
    }
    function find($nidn){
        return $this->db->where(['nidn' => $nidn])->get('dosen')->row_array();
    }
    function update($nidn,$data){
        $this->db->where(['nidn' => $nidn])->update('dosen',$data);
    }
    function delete($nidn){
        $this->db->where(['nidn' => $nidn])->delete('dosen');
    }
}
