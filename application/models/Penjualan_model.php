<?php

class Penjualan_model extends CI_Model{
    function get(){
        return $this->db->query("SELECT 
                p.*,
                b.nama,
                b.harga
               
               FROM 
                penjualan p,
                barang b
               WHERE
                p.kode_barang=b.kode_barang")->result_array() ;
        
        //return $this->db->get('penjualan')->result_array();
    }
    function save($data){
        $dbarang=$this->db->where(['kode_barang' => $data['kode_barang']])->get('barang')->row_array();
        $data['harga']=$dbarang['harga'];
        $data['total']=$dbarang['harga']*$data['qty'];
        $this->db->insert('penjualan',$data);
    }
    function find($kode_penjualan){
        return $this->db->where(['kode_penjualan' => $kode_penjualan])->get('penjualan')->row_array();
    }
    function update($kode_penjualan,$data){
        $dbarang=$this->db->where(['kode_barang' => $data['kode_barang']])->get('barang')->row_array();
        $data['harga']=$dbarang['harga'];
        $data['total']=$dbarang['harga']*$data['qty'];
        $this->db->where(['kode_penjualan' => $kode_penjualan])->update('penjualan',$data);
    }
    function delete($kode_penjualan){
        $this->db->where(['kode_penjualan' => $kode_penjualan])->delete('penjualan');
    }
}
