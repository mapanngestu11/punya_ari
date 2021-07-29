<?php
class M_lesson extends CI_Model{

	
	function add($tittle,$lesson,$category,$nama,$gambar,$status){
		$hsl=$this->db->query("INSERT into lesson (id_lesson,tittle,category,image,lesson,author,status) 
                                values (Null,'$tittle','$category','$gambar','$lesson','$nama','$status')");
		return $hsl;
	}

	function get_my_lesson($kode){
		$hsl=$this->db->query("SELECT * from lesson Where author ='$kode' ");
		return $hsl;
	}

	function get_lesson_all(){
		$hsl=$this->db->query("SELECT * from lesson Where status ='published' ");
		return $hsl;
	}

    function lesson($kode){
		$hsl=$this->db->query("SELECT lesson.*,DATE_FORMAT(time_post,'%d/%m/%Y') AS tanggal FROM lesson ORDER BY id_lesson DESC ");
		return $hsl;
	}
    function delete_my_lesson($kode){
		$hsl=$this->db->query("DELETE from lesson where id_lesson='$kode'");
		return $hsl;
	}
	function get_my_lesson_kode($kode){
		$hsl=$this->db->query("SELECT* FROM lesson where id_lesson ='$kode'");
		return $hsl;
	}
	function update($id_lesson,$tittle,$lesson,$category,$nama,$gambar,$status){
		$hsl=$this->db->query("UPDATE `lesson` SET `tittle` = '$tittle', `category` = '$category', `image` = '$gambar', `lesson` = '$lesson', `author` = '$nama', `status` = '$status' WHERE `lesson`.`id_lesson` = '$id_lesson';");
		return $hsl;
	}


}