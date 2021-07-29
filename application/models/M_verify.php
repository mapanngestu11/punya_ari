<?php
class M_verify extends CI_Model{

	
	function add($tittle,$forum,$category,$nama,$gambar,$status){
		$hsl=$this->db->query("INSERT into forum (id_forum,tittle,category,image,forum,author,status) 
                                values (Null,'$tittle','$category','$gambar','$forum','$nama','$status')");
		return $hsl;
	}

	function get_my_thread($kode){
		$hsl=$this->db->query("SELECT * from forum Where author ='$kode' ");
		return $hsl;
	}

	function get_wiki_all(){
		$hsl=$this->db->query("SELECT * from wiki ");
		return $hsl;
	}
    function get_forum_all(){
		$hsl=$this->db->query("SELECT * from forum ");
		return $hsl;
	}
    function get_document_all(){
		$hsl=$this->db->query("SELECT * from dokumen ");
		return $hsl;
	}
	function get_note_all(){
		$hsl=$this->db->query("SELECT * from note ");
		return $hsl;
	}
	function get_lesson_all(){
		$hsl=$this->db->query("SELECT * from lesson ");
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
	function update_wiki($kode,$tittle,$article,$status){
		$hsl=$this->db->query("UPDATE `wiki` SET `tittle` = '$tittle',`article` = '$article', `status` = '$status' WHERE `wiki`.`id_wiki` = '$kode';");
		return $hsl;
	}
    function update_forum($kode,$tittle,$forum,$status){
		$hsl=$this->db->query("UPDATE `forum` SET `tittle` = '$tittle',`forum` = '$forum', `status` = '$status' WHERE `forum`.`id_forum` = '$kode';");
		return $hsl;
	}
    function update_document($kode,$tittle,$status){
		$hsl=$this->db->query("UPDATE `dokumen` SET `tittle` = '$tittle', `status` = '$status' WHERE `dokumen`.`id_dokumen` = '$kode';");
		return $hsl;
	}
	function update_note($kode,$tittle,$status){
		$hsl=$this->db->query("UPDATE `note` SET `tittle` = '$tittle', `status` = '$status' WHERE `note`.`id_note` = '$kode';");
		return $hsl;
	}
	function update_lesson($kode,$tittle,$lesson,$status){
		$hsl=$this->db->query("UPDATE `lesson` SET `tittle` = '$tittle',`lesson` = '$lesson', `status` = '$status' WHERE `lesson`.`id_lesson` = '$kode';");
		return $hsl;
	}



}