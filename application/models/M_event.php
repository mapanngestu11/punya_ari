<?php
class M_event extends CI_Model{

	
	function add($tittle,$category,$organizer,$location,$gambar,$date_start,$date_end,$time_start,$time_end,$description,$nama,$status){
		$hsl=$this->db->query("INSERT into event (id_event,tittle,category,organizer,location,image,date_start,date_end,time_start,time_end,description,author,status) 
                                values (Null,'$tittle','$category','$organizer','$location','$gambar','$date_start','$date_end','$time_start','$time_end','$description','$nama','$status')");
		return $hsl;
	}

	function get_my_event($kode){
		$hsl=$this->db->query("SELECT * from event Where author ='$kode' ");
		return $hsl;
	}

	function get_event_all(){
		$hsl=$this->db->query("SELECT * from event Where status ='published' ");
		return $hsl;
	}

    function event($kode){
		$hsl=$this->db->query("SELECT event.*,DATE_FORMAT(time_post,'%d/%m/%Y') AS tanggal FROM event ORDER BY id_event DESC ");
		return $hsl;
	}
    function delete_my_event($kode){
		$hsl=$this->db->query("DELETE from event where id_event='$kode'");
		return $hsl;
	}
	function get_my_event_kode($kode){
		$hsl=$this->db->query("SELECT* FROM event where id_event ='$kode'");
		return $hsl;
	}
	function update($id_event,$tittle,$category,$organizer,$location,$gambar,$date_start,$date_end,$time_start,$time_end,$description,$nama,$status){
		$hsl=$this->db->query("UPDATE `event` SET `tittle` = '$tittle', `category` = '$category', `organizer` = '$organizer', `location` = '$location', `image` = '$gambar', `date_start` = '$date_start', `date_end` = '$date_end', `time_start` = '$time_start', `time_end` = '$time_end', 
                                `description` = '$description', `author` = '$nama', `status` = '$status'  WHERE `event`.`id_event` = '$id_event';");
		return $hsl;
	}


}