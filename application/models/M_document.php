<?php
class M_document extends CI_Model{

	
	function add($tittle,$category,$nama,$file,$status){
		$hsl=$this->db->query("INSERT into dokumen (id_dokumen,tittle,category,dokumen,author,status) 
                                values (Null,'$tittle','$category','$file','$nama','$status')");
		return $hsl;
	}


	function get_dokumen_byid($id){
		$hsl=$this->db->query("SELECT* FROM dokumen where id_dokumen ='$id'");
		return $hsl;
	}

	function get_my_document($kode){
		$hsl=$this->db->query("SELECT * from dokumen Where author ='$kode' ");
		return $hsl;
	}
	function get_list_document($kode){
		$hsl=$this->db->query("SELECT * from dokumen Where status ='published' ");
		return $hsl;
	}
	function hapus_file($kode){
		$hsl=$this->db->query("DELETE FROM dokumen WHERE id_dokumen ='$kode'");
		return $hsl;
	}


}