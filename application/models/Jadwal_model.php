<?php

class Jadwal_model extends CI_Model{
    function get(){
        //query join 3 table
        $sql = "SELECT j.*,
                       m.makul AS makul,
                       d.nama AS dosen
                FROM
                       jadwal j,
                       makul m,
                       dosen d
                WHERE
                       j.nidn=d.nidn AND
                       j.kode_makul=m.kode_makul";
        
        return $this->db->query($sql)->result_array();
        
        //return $this->db->get('jadwal')->result_array();
        //optional manggil db
        //return $this->db->query('select * from mahasiswa')->resul_array();
    }
    
    function save($data){
        $this->db->insert('jadwal',$data);
    }
    function find($kode_jadwal){
        return $this->db->where(['kode_jadwal' => $kode_jadwal])->get('jadwal')->row_array();
    }
    function update($kode_jadwal,$data){
        $this->db->where(['kode_jadwal' => $kode_jadwal])->update('jadwal',$data);
    }
    function delete($kode_jadwal){
        $this->db->where(['kode_jadwal' => $kode_jadwal])->delete('jadwal');
    }
}
