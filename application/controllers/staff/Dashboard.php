<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
        $this->load->model('m_forum');
	
	}
 

	function index(){
		if($this->session->userdata('akses')=='staff'){
            $data['data']=$this->m_forum-> get_thread_all();
            $this->load->view('admin/pages/head_dashboard');
			$this->load->view('staff/dashboard',$data);
            
		}else{
			redirect('home');
		}
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
