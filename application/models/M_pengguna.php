<?php
class M_pengguna extends CI_Model{

	
	function get_pengguna_login($kode){
		$hsl=$this->db->query("SELECT * FROM user where id_user='$kode'");
		return $hsl;
	}


}