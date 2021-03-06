<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    function index(){
        $this->load->view('Home');
    }
    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));
        $u=$username;
        $p=$password;
        $cadmin=$this->m_login->cekadmin($u,$p);
        json_encode($cadmin);
        if($cadmin->num_rows() > 0){
            $this->session->set_userdata('masuk',true);
            $this->session->set_userdata('user',$u);
            $xcadmin=$cadmin->row_array();
            if($xcadmin['level']=='admin'){
             $this->session->set_userdata('akses','admin');
             $idadmin=$xcadmin['id_user'];
             $user_nama=$xcadmin['nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
             redirect('admin/dashboard');
         }
         if($xcadmin['level']=='staff'){
            $this->session->set_userdata('akses','staff');
            $idadmin=$xcadmin['id_user'];
            $user_nama=$xcadmin['nama'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
            redirect('staff/dashboard');
       }else{
           $this->session->set_userdata('akses','super_admin');
           $idadmin=$xcadmin['id_user'];
            $user_nama=$xcadmin['nama'];
           $this->session->set_userdata('idadmin',$idadmin);
           $this->session->set_userdata('nama',$user_nama);
           redirect('super_admin/list_user');
       }

   }else{
        $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
       redirect('home');
   }

}

function logout(){
    $this->session->sess_destroy();
    redirect('home');
}
}
