<?php
class modelbarang extends CI_Model{
    function list_barang(){
        $barang = $this->db->get('b');
        //ambil data barang dari tabel barang
        return $barang;
    }
    function product($kode_barang){
        return $this->db->get_where('b',array('kode_barang'=>$kode_barang));
    }
}