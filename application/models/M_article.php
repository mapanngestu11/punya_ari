<?php
class M_article extends CI_Model{

	
	function add($tittle,$article,$category,$nama,$gambar,$status){
		$hsl=$this->db->query("INSERT into wiki (id_wiki,tittle,category,image,article,author,status) 
                                values (Null,'$tittle','$category','$gambar','$article','$nama','$status')");
		return $hsl;
	}

	function get_my_article($kode){
		$hsl=$this->db->query("SELECT * from wiki Where author ='$kode' ");
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


}