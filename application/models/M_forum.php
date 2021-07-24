<?php
class M_forum extends CI_Model{

	
	function add($tittle,$forum,$category,$nama,$gambar,$status){
		$hsl=$this->db->query("INSERT into forum (id_forum,tittle,category,image,forum,author,status) 
                                values (Null,'$tittle','$category','$gambar','$forum','$nama','$status')");
		return $hsl;
	}

	function get_my_thread($kode){
		$hsl=$this->db->query("SELECT * from forum Where author ='$kode' ");
		return $hsl;
	}

	function get_article_all(){
		$hsl=$this->db->query("SELECT * from wiki Where status ='published' ");
		return $hsl;
	}

    function article($kode){
		$hsl=$this->db->query("SELECT wiki.*,DATE_FORMAT(time_post,'%d/%m/%Y') AS tanggal FROM wiki ORDER BY id_wiki DESC ");
		return $hsl;
	}
    function delete_my_article($kode){
		$hsl=$this->db->query("DELETE from wiki where id_wiki='$kode'");
		return $hsl;
	}
	function get_my_article_kode($kode){
		$hsl=$this->db->query("SELECT* FROM wiki where id_wiki ='$kode'");
		return $hsl;
	}


}