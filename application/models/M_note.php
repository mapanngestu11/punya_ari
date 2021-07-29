<?php
class M_note extends CI_Model{

	
	function add($tittle,$category,$nama,$file,$status){
		$hsl=$this->db->query("INSERT into note (id_note,tittle,category,note,author,status) 
                                values (Null,'$tittle','$category','$file','$nama','$status')");
		return $hsl;
	}


	function get_note_byid($id){
		$hsl=$this->db->query("SELECT* FROM note where id_note ='$id'");
		return $hsl;
	}

	function get_my_note($kode){
		$hsl=$this->db->query("SELECT * from note Where author ='$kode' ");
		return $hsl;
	}
	function get_list_note($kode){
		$hsl=$this->db->query("SELECT * from note Where status ='published' ");
		return $hsl;
	}
    function hapus_file($kode){
		$hsl=$this->db->query("DELETE FROM note WHERE id_note ='$kode'");
		return $hsl;
	}

}