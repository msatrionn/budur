
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candi extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Candi','model');
	}
public function index(){
	if ($this->session->userdata('id_user') != null) {
		$data["candi"] = $this->model->get_candi('candi')->result();
		$this->load->view('pages/admin/layouts/header');
		$this->load->view('pages/admin/candi/index',$data);
		$this->load->view('pages/admin/layouts/footer');
	}else{
		redirect('admin/login');
	}
}
	public function create(){
		if ($this->session->userdata('id_user') != null) {
		$this->load->view('pages/admin/layouts/header');
		$this->load->view('pages/admin/candi/create');
		$this->load->view('pages/admin/layouts/footer');
		}else{
			redirect('admin/login');
		}
	}
	public function simpan(){
	if ($this->session->userdata('id_user') != null) {
		$config['upload_path'] = './assets/file/candi';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 3000;
		$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);

		} else {
			$data = [
			'nama_candi' => $this->input->post('nama_candi'),
			'sejarah' => $this->input->post('sejarah'),
			'alamat' => $this->input->post('alamat'),
			'gambar' => $config['file_name'],
			];
			$this->model->save_post_data('candi', $data);

			array('image_metadata' => $this->upload->data());
			redirect('candi/index');
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
			$this->load->view('pages/admin/candi/edit',$data);
			$this->load->view('pages/admin/layouts/footer');
		}
		else{
			redirect('admin/login');
		}
	
	}
	public function update(){
		if ($this->session->userdata('id_user') != null) {
			$id=$this->input->post('id_candi');
			$config['upload_path'] = './assets/file/candi';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 3000;
			$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
			$data['post']=$this->model->get_post_edit($id);
			if ($_FILES['gambar']['name']) {
				$config['upload_path'] = './assets/file/candi';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 3000;
				$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
				$this->load->library('upload', $config);
	
				if(file_exists(FCPATH.'assets/file/candi/'.$data['post']->gambar)){
					unlink(FCPATH.'assets/file/candi/'.$data['post']->gambar);
					if (!$this->upload->do_upload('gambar')) {
						$error = array('error' => $this->upload->display_errors());
					} else {
						
						$data = [
							'nama_candi' => $this->input->post('nama_candi'),
							'sejarah' => $this->input->post('sejarah'),
							'alamat' => $this->input->post('alamat'),
							'gambar' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'candi', $data);
					}
	
				}
				else{
					$config['upload_path'] = './assets/file/candi/';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = 3000;
					$config['file_name'] = date('y-m-d:h:m:s').$_FILES['gambar']['name']; 
					$this->load->library('upload', $config);
	
					if (!$this->upload->do_upload('gambar')) {
						$error = array('error' => $this->upload->display_errors());
						var_dump($error);
					} else {
						
						$data = [
							'nama_candi' => $this->input->post('nama_candi'),
							'sejarah' => $this->input->post('sejarah'),
							'alamat' => $this->input->post('alamat'),
							'gambar' => $config['file_name'],
						];
						
						array('image_metadata' => $this->upload->data());
						$this->model->updated_data($id, 'candi', $data);
					}
				}
				
			}
			else{
				$data = [
					'nama_candi' => $this->input->post('nama_candi'),
					'sejarah' => $this->input->post('sejarah'),
					'alamat' => $this->input->post('alamat'),
				];
				$this->model->updated_data($id, 'candi', $data);
			}
			redirect('candi/index');
		}
		else{
			redirect('admin/login');
			
		}
	}
	public function deleted_candi($id){
		if ($this->session->userdata('id_user') != null) {
			$data['post']=$this->model->get_post_edit($id);
			if(file_exists($lok=FCPATH.'./assets/file/candi/'.$data['post']->gambar)){
				unlink(FCPATH.'/assets/file/candi/'.$data['post']->gambar);
				$this->model->deleted_candi($id,'candi');
			}

			else{
				$this->model->deleted_candi($id,'candi');
				
			}
			return redirect('candi/index/'.$id);
		}else{
			redirect('admin/login');
			
		}
	}
}
