<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Berita','model');
	}
	public function index(){
		if ($this->session->userdata('id_user') != null) {
			$data["berita"] = $this->model->get_berita('berita')->result();
			$this->load->view('pages/admin/layouts/header');
			$this->load->view('pages/admin/berita/index',$data);
			$this->load->view('pages/admin/layouts/footer');
		}else{
			redirect('admin/login');
		}
	}
	
	public function create(){
		if ($this->session->userdata('id_user') != null) {
			$this->load->view('pages/admin/layouts/header');
			$this->load->view('pages/admin/berita/create');
			$this->load->view('pages/admin/layouts/footer');
		}
		else{
			redirect('admin/login');
		}
	}
	public function simpan(){
	if ($this->session->userdata('id_user') != null) {
		$config['upload_path'] = './assets/file/berita';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 3000;
		$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);

		} else {
			$data = [
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'gambar' => $config['file_name'],
			];
			$this->model->save_post_data('berita', $data);

			array('image_metadata' => $this->upload->data());
			redirect('berita/index');
		}
		}
		else{
			redirect('admin/login');
		}
		
	}
	public function edit($id){
		if ($this->session->userdata('id_user') != null) {
			$data['post']=$this->model->get_post_edit($id);
			$this->load->view('pages/admin/layouts/header');
			$this->load->view('pages/admin/berita/edit',$data);
			$this->load->view('pages/admin/layouts/footer');
		}
		else{
			redirect('admin/login');
		}
	
	}
	public function update(){
		if ($this->session->userdata('id_user') != null) {
			$id=$this->input->post('id_berita');
			$config['upload_path'] = './assets/file/berita';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 3000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
			$data['post']=$this->model->get_post_edit($id);
			if ($_FILES['gambar']['name']) {
				$config['upload_path'] = './assets/file/berita';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 3000;
				$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
				$this->load->library('upload', $config);
	
				if(file_exists(FCPATH.'assets/file/berita/'.$data['post']->gambar)){
					unlink(FCPATH.'assets/file/berita/'.$data['post']->gambar);
					if (!$this->upload->do_upload('gambar')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						
						$data = [
							'judul' => $this->input->post('judul'),
							'isi' => $this->input->post('isi'),
							'gambar' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'berita', $data);
					}
	
				}
				else{
					$config['upload_path'] = './assets/file/berita/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 3000;
					$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
					$this->load->library('upload', $config);
	
					if (!$this->upload->do_upload('gambar')) {
						$error = array('error' => $this->upload->display_errors());
						var_dump($error);
					} else {
						
						$data = [
							'judul' => $this->input->post('judul'),
							'isi' => $this->input->post('isi'),
							'gambar' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'berita', $data);
					}
				}
				
			}
			else{
				$data = [
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),
				];
				$this->model->updated_data($id, 'berita', $data);
			}
			redirect('berita/index');
		}
		else{
			redirect('admin/login');
		}
	}
	public function deleted_berita($id){
		if ($this->session->userdata('id_user') != null) {
			$data['post']=$this->model->get_post_edit($id);
			if(file_exists($lok=FCPATH.'./assets/file/berita/'.$data['post']->gambar)){
				unlink(FCPATH.'/assets/file/berita/'.$data['post']->gambar);
				$this->model->deleted_berita($id,'berita');
			}

			else{
				$this->model->deleted_berita($id,'berita');
				
			}
			return redirect('berita/index/'.$id);
		}
		else{
			redirect('admin/login');
		}
	}
}

