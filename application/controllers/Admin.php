<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Home','model');
		$this->load->library("pagination");
	}
	public function login(){
		$this->load->view('login/login');
	}
	
	public function register(){
		if ($this->session->userdata('id_user') != null) {
			$this->load->view('login/register');
		}else{
			redirect('admin/login');
		}
	}

	public function index(){
		if ($this->session->userdata('id_user') != null) {
			$data['post']=$this->model->get_all('profil_candi')->row();
			$this->load->view('pages/admin/layouts/header');
			$this->load->view('pages/admin/index',$data);
			$this->load->view('pages/admin/layouts/footer');
		}else{
			redirect('admin/login');
		}
	}
	public function edit($id){
		if ($this->session->userdata('id_user') != null) {
			$data['post']=$this->model->get_post_edit($id);
			$this->load->view('pages/admin/layouts/header');
			$this->load->view('pages/admin/edit',$data);
			$this->load->view('pages/admin/layouts/footer');
		}else{
			redirect('admin/login');
		}
	
	}
	public function update(){
		if ($this->session->userdata('id_user') != null) {
			$id=$this->input->post('id_profil');
			$config['upload_path'] = './assets/file/profil';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 3000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
			$data['post']=$this->model->get_post_edit($id);
			if ($_FILES['gambar']['name']) {
				$config['upload_path'] = './assets/file/profil';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 3000;
				$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
				$this->load->library('upload', $config);
	
				if(file_exists(FCPATH.'assets/file/profil/'.$data['post']->gambar)){
					unlink(FCPATH.'assets/file/profil/'.$data['post']->gambar);
					if (!$this->upload->do_upload('gambar')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						
						$data = [
							'profil_candi' => $this->input->post('profil_candi'),
							'gambar' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'profil_candi', $data);
					}
	
				}
				else{
					$config['upload_path'] = './assets/file/profil/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 3000;
					$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
					$this->load->library('upload', $config);
	
					if (!$this->upload->do_upload('gambar')) {
						$error = array('error' => $this->upload->display_errors());
						var_dump($error);
					} else {
						
						$data = [
							'profil_candi' => $this->input->post('profil_candi'),
							'gambar' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'profil_candi', $data);
					}
				}
				
			}
			else{
				$data = [
					'profil_candi' => $this->input->post('profil_candi'),
				];
				$this->model->updated_data($id, 'profil_candi', $data);
			}
			redirect('admin/index');
		}
		else{
			redirect('admin/login');
		}
	}
	
}
