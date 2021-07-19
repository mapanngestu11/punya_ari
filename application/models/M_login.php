<?php
class M_login extends CI_Model{
    function cekadmin($u,$p){
        $hasil=$this->db->query("SELECT * FROM user WHERE username='$u' AND pengguna_password =md5('$p')");
        return $hasil;
    }

}
