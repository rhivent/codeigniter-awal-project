<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class barang extends CI_Controller {
	
        function index (){
            $this->load->model('modelbarang'); 
	    $data['barang'] = $data['barang'] = $this->modelbarang->list_barang()->result();
	    $judul = "Daftar barang";
	    $data['judul'] = $judul;
	    $this->load->view('listbarang',$data);
        }
	function input(){
		$this->load->view('inputbarang');
	}
	function input_simpan(){
		$databarang = array(
			'kode_barang'	=>	$this->input->post('kode_barang'),
			'nama_barang'	=>	$this->input->post('nama_barang'),
			'harga'		=>	$this->input->post('harga_barang'));
		$this->db->insert('b',$databarang);
		redirect('barang');
	}
        function edit (){
		$this->load->model('modelbarang'); 
		$kode_barang = $this->uri->segment(3);
		$data ['product']= $this->modelbarang->product($kode_barang)->row_array();
		$this->load->view('editbarang',$data);
        }
	function edit_simpan(){
		$id 		= $this->input->post('id');
		$databarang = array(
			'kode_barang'	=>	$this->input->post('kode_barang'),
			'nama_barang'	=>	$this->input->post('nama_barang'),
			'harga'		=>	$this->input->post('harga_barang'));
		$this->db->where('kode_barang',$id);
		$this->db->update('b',$databarang);
		redirect('barang');
	}
	function delete(){
		$kode_barang = $this->uri->segment(3);
		$this->db->where('kode_barang',$kode_barang);
		$this->db->delete('b');
		redirect('barang');
	}
	
}