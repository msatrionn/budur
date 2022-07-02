
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Wisata','model');
	}
public function index(){
	if ($this->session->userdata('id_user')!= null) {
		$data["wisata"] = $this->model->get_wisata('wisata')->result();
		$this->load->view('pages/admin/layouts/header');
		$this->load->view('pages/admin/wisata/index',$data);
		$this->load->view('pages/admin/layouts/footer');
	}else{
		redirect('admin/login');
		
		}
	}
	public function create(){
	if ($this->session->userdata('id_user')!= null) {
		$this->load->view('pages/admin/layouts/header');
		$this->load->view('pages/admin/wisata/create');
		$this->load->view('pages/admin/layouts/footer');
	}else{
		redirect('admin/login');
		
	}
	}
	public function simpan(){
	if ($this->session->userdata('id_user')!= null) {
		$config['upload_path'] = './assets/file/wisata';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 3000;
		$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);

		} else {
			$data = [
			'nama_wisata' => $this->input->post('nama_wisata'),
			'deskripsi_wisata' => $this->input->post('deskripsi_wisata'),
			'lokasi_wisata' => $this->input->post('lokasi_wisata'),
			'gambar' => $config['file_name'],
			];
			$this->model->save_post_data('wisata', $data);

			array('image_metadata' => $this->upload->data());
			redirect('wisata/index');
		}
		}
		else{
			redirect('admin/login');
		}
		
	}
	public function edit($id){
		if ($this->session->userdata('id_user')!= null) {
			$data['post']=$this->model->get_post_edit($id);
			$this->load->view('pages/admin/layouts/header');
			$this->load->view('pages/admin/wisata/edit',$data);
			$this->load->view('pages/admin/layouts/footer');
		}
		else{
			redirect('admin/login');
		}
	
	}
	public function update(){
		if ($this->session->userdata('id_user')!= null) {
			$id=$this->input->post('id_wisata');
			$config['upload_path'] = './assets/file/wisata';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 3000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
			$data['post']=$this->model->get_post_edit($id);
			if ($_FILES['gambar']['name']) {
				$config['upload_path'] = './assets/file/wisata';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 3000;
				$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
				$this->load->library('upload', $config);
	
				if(file_exists(FCPATH.'assets/file/wisata/'.$data['post']->gambar)){
					unlink(FCPATH.'assets/file/wisata/'.$data['post']->gambar);
					if (!$this->upload->do_upload('gambar')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						
						$data = [
							'nama_wisata' => $this->input->post('nama_wisata'),
							'deskripsi_wisata' => $this->input->post('deskripsi_wisata'),
							'lokasi_wisata' => $this->input->post('lokasi_wisata'),
							'gambar' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'wisata', $data);
					}
	
				}
				else{
					$config['upload_path'] = './assets/file/wisata/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 3000;
					$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
					$this->load->library('upload', $config);
	
					if (!$this->upload->do_upload('gambar')) {
						$error = array('error' => $this->upload->display_errors());
						var_dump($error);
					} else {
						
						$data = [
							'nama_wisata' => $this->input->post('nama_wisata'),
							'deskripsi_wisata' => $this->input->post('deskripsi_wisata'),
							'lokasi_wisata' => $this->input->post('lokasi_wisata'),
							'gambar' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'wisata', $data);
					}
				}
				
			}
			else{
				$data = [
					'nama_wisata' => $this->input->post('nama_wisata'),
					'deskripsi_wisata' => $this->input->post('deskripsi_wisata'),
					'lokasi_wisata' => $this->input->post('lokasi_wisata'),
				];
				$this->model->updated_data($id, 'wisata', $data);
			}
			redirect('wisata/index');
		}
		else{
			redirect('admin/login');
		}
	}
	public function deleted_wisata($id){
		if ($this->session->userdata('id_user')!= null) {
		$data['post']=$this->model->get_post_edit($id);
		if(file_exists($lok=FCPATH.'./assets/file/wisata/'.$data['post']->gambar)){
			unlink(FCPATH.'/assets/file/wisata/'.$data['post']->gambar);
			$this->model->deleted_wisata($id,'wisata');
		}

		else{
			$this->model->deleted_wisata($id,'wisata');
			
		}
		return redirect('wisata/index/'.$id);
		}else{
			redirect('admin/login');
		}
	}
}
