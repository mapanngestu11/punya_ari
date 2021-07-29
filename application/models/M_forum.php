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

	function get_thread_all(){
		$hsl=$this->db->query("SELECT * from forum Where status ='published' ");
		return $hsl;
	}

    function article($kode){
		$hsl=$this->db->query("SELECT wiki.*,DATE_FORMAT(time_post,'%d/%m/%Y') AS tanggal FROM wiki ORDER BY id_forum DESC ");
		return $hsl;
	}
    function delete_my_thread($kode){
		$hsl=$this->db->query("DELETE from forum where id_forum='$kode'");
		return $hsl;
	}
	function get_my_thread_kode($kode){
		$hsl=$this->db->query("SELECT* FROM forum where id_forum ='$kode'");
		return $hsl;
	}
	function update($id_forum,$tittle,$forum,$category,$nama,$gambar,$status){
		$hsl=$this->db->query("UPDATE `forum` SET `tittle` = '$tittle', `category` = '$category', `image` = '$gambar', `forum` = '$forum', `author` = '$nama', `status` = '$status' WHERE `forum`.`id_forum` = '$id_forum';");
		return $hsl;
	}


}