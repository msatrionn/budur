<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Login','model');
	}
	public function login_post(){
		$username    = $this->input->post('username');
		$password 	 = md5($this->input->post('password'));
		$validate= $this->model->validasi_login($username,$password,'user');
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$name  = $data['username'];
			$sesdata = array(
							'id_user'=> $data['id_user'],
				'username'  => $name,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			redirect('admin/index');

		}else{
			echo $this->session->set_flashdata('msg','Username atau Password salah');
			redirect('admin/login');
		}
	}
	public function register_post(){
		if ($this->session->userdata('id_user') != null) {
			$data=[
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password')),
			];
			$this->model->save_registrasi_data('user', $data);
			echo $this->session->set_flashdata('msg','Registrasi berhasil');
			redirect('admin/login');
		}else{
			redirect('admin/login');
			
		}
  	}
	public function logout(){
		echo $this->session->set_flashdata('msg', '<p>Silahkan Login</p>' );
		$this->session->sess_destroy();
		redirect('home');
	}
}
