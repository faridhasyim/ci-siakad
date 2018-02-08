<?php

class Makul_model extends CI_Model{
    function get(){
        return $this->db->get('makul')->result_array();
        //optional manggil db
        //return $this->db->query('select * from makul')->resul_array();
    }
    function save($data){
        $this->db->insert('makul',$data);
    }
    function find($kode_makul){
        return $this->db->where(['kode_makul' => $kode_makul])->get('makul')->row_array();
    }
    function update($kode_makul,$data){
        $this->db->where(['kode_makul' => $kode_makul])->update('makul',$data);
    }
    function delete($kode_makul){
        $this->db->where(['kode_makul' => $kode_makul])->delete('makul');
    }
}
