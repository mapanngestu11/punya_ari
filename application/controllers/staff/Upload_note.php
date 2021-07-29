<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_note extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
		$this->load->model('m_kategori');
		$this->load->model('m_pengguna');
		$this->load->model('m_note');
		$this->load->library('upload');
		$this->load->library('pagination');
        
		
	
	}


	function index(){
		if($this->session->userdata('akses')=='staff'){
			$data['data']=$this->m_kategori-> get_category_note();
            $this->load->view('staff/pages/head_dashboard');
			$this->load->view('staff/upload_note',$data);
            
		}else{
			redirect('home');
		}
    }

    function add(){
        $config['upload_path'] = './assets/files/'; //path folder
        $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                    $gbr = $this->upload->data();
                    $file=$gbr['file_name'];
                    $tittle=strip_tags($this->input->post('tittle'));
                    $status=strip_tags($this->input->post('status'));
                 
											$category=strip_tags($this->input->post('category'));
								
											
											$kode=$this->session->userdata('idadmin');
											$user=$this->m_pengguna->get_pengguna_login($kode);
											$p=$user->row_array();
											$user_id=$p['id_user'];
											$nama=$p['nama'];
                    $this->m_note->add($tittle,$category,$nama,$file,$status);
                    echo $this->session->set_flashdata('msg','success');
                    redirect('staff/upload_note');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('staff/upload_note');
            }
             
        }else{
            redirect('staff/Upload_document');
        }
        
}
		function update(){


			$config['upload_path'] = './assets/images/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
			
			$this->upload->initialize($config); 
			if(!empty($_FILES['filefoto']['name']))
			{
				if ($this->upload->do_upload('filefoto'))
				{
						$gbr = $this->upload->data();
						//Compress Image
						$config['image_library']='gd2';
						$config['source_image']='./assets/images/'.$gbr['file_name'];
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '60%';
						$config['width']= 710;
						$config['height']= 460;
						$config['new_image']= './assets/images/'.$gbr['file_name'];
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
			
						$gambar=$gbr['file_name'];
												$id_forum=$this->input->post('kode');
												$tittle=strip_tags($this->input->post('tittle'));
												$status=strip_tags($this->input->post('status'));
												$forum=$this->input->post('forum');
										
												$category=strip_tags($this->input->post('category'));
									
												
												$kode=$this->session->userdata('idadmin');
												$user=$this->m_pengguna->get_pengguna_login($kode);
												$p=$user->row_array();
												$user_id=$p['id_user'];
												$nama=$p['nama'];
												$this->m_forum->update($id_forum,$tittle,$forum,$category,$nama,$gambar,$status);
												echo $this->session->set_flashdata('msg','success');
												redirect('staff/my_thread');
										}else{
					echo $this->session->set_flashdata('msg','warning');
					redirect('staff/my_thread');
				}
			}
			}
		
 
}
