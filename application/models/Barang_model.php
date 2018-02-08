<?php

class Barang_model extends CI_Model{
    function get(){
        return $this->db->get('barang')->result_array();
    }
    function save($data){
        $this->db->insert('barang',$data);
    }
    function find($kode_barang){
        return $this->db->where(['kode_barang' => $kode_barang])->get('barang')->row_array();
    }
    function update($kode_barang,$data){
        $this->db->where(['kode_barang' => $kode_barang])->update('barang',$data);
    }
    function delete($kode_barang){
        $this->db->where(['kode_barang' => $kode_barang])->delete('barang');
    }
}
