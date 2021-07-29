<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_lesson extends CI_Controller {


    function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('home');
            redirect($url);
        };
        $this->load->model('m_login');
		$this->load->model('m_kategori');
		$this->load->model('m_pengguna');
		$this->load->model('m_lesson');
		$this->load->library('upload');
		$this->load->library('pagination');
		
	
	}


	function index(){
		if($this->session->userdata('akses')=='admin'){
			$data['data']=$this->m_kategori-> get_category_lesson();
            $this->load->view('admin/pages/head_dashboard');
			$this->load->view('admin/add_lesson',$data);
            
		}else{
			redirect('home');
		}
    }

	function add(){


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
											$tittle=strip_tags($this->input->post('tittle'));
											$status=strip_tags($this->input->post('status'));
											$lesson=$this->input->post('lesson');
									
											$category=strip_tags($this->input->post('category'));
								
											
											$kode=$this->session->userdata('idadmin');
											$user=$this->m_pengguna->get_pengguna_login($kode);
											$p=$user->row_array();
											$user_id=$p['id_user'];
											$nama=$p['nama'];
											$this->m_lesson->add($tittle,$lesson,$category,$nama,$gambar,$status);
											echo $this->session->set_flashdata('msg','success');
											redirect('admin/add_lesson');
									}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/add_lesson');
			}
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
												$id_wiki=$this->input->post('kode');
												$tittle=strip_tags($this->input->post('tittle'));
												$status=strip_tags($this->input->post('status'));
												$lesson=$this->input->post('lesson');
										
												$category=strip_tags($this->input->post('category'));
									
												
												$kode=$this->session->userdata('idadmin');
												$user=$this->m_pengguna->get_pengguna_login($kode);
												$p=$user->row_array();
												$user_id=$p['id_user'];
												$nama=$p['nama'];
												$this->m_lesson->update($id_wiki,$tittle,$lesson,$category,$nama,$gambar,$status);
												echo $this->session->set_flashdata('msg','success');
												redirect('admin/my_lesson');
										}else{
					echo $this->session->set_flashdata('msg','warning');
					redirect('admin/my_lesson');
				}
			}
			}
		
 
}
