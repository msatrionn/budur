<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Home','model');
		$this->load->model('M_Wisata','model_wisata');
		$this->load->model('M_Candi','model_candi');
		$this->load->library("pagination");
	}

	public function index(){
		$config['base_url'] = site_url('home/index'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->model->get_post_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
	
		$data["wisata"] = $this->model_wisata->get_wisata('wisata')->result();

		$data["candi"] = $this->model_candi->get_candi('candi')->result();

		$data['profil']=$this->model->get_all('profil_candi')->row();
		$this->load->view('layouts/header');
		$this->load->view('pages/index',$data);
		$this->load->view('layouts/footer');
	}
	public function about(){
		$data['profil']=$this->model->get_all('profil_candi')->row();
		$this->load->view('layouts/header');
		$this->load->view('pages/user/tentang_borobudur',$data);
		$this->load->view('layouts/footer');
	}
	public function berita(){
		$config['base_url'] = site_url('home/index'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
		$data["wisata"]=$this->model->get_wisata('wisata')->result();
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->model->get_post_list($config["per_page"], $data['page']);           
		
        $data['pagination'] = $this->pagination->create_links();
		$this->load->view('layouts/header');
		$this->load->view('pages/user/berita',$data);
		$this->load->view('layouts/footer');
	}
	public function berita_detail($id){
		$data["detail"]=$this->model->berita_detail('berita',$id)->row();
		$this->load->view('layouts/header');
		$this->load->view('pages/user/berita-detail',$data);
		$this->load->view('layouts/footer');
	}
	public function wisata(){
		$data["wisata"]=$this->model->get_wisata('wisata')->result();
		$this->load->view('layouts/header');
		$this->load->view('pages/user/wisata',$data);
		$this->load->view('layouts/footer');
	}
	public function wisata_detail($id){
		$data["detail"]=$this->model->wisata_detail('wisata',$id)->row();
		$this->load->view('layouts/header');
		$this->load->view('pages/user/wisata-detail',$data);
		$this->load->view('layouts/footer');
	}
	public function candi(){
		$data["candi"]=$this->model->get_candi('candi')->result();
		$this->load->view('layouts/header');
		$this->load->view('pages/user/candi',$data);
		$this->load->view('layouts/footer');
	}
	public function candi_detail($id){
		$data["detail"]=$this->model->candi_detail('candi',$id)->row();
		$this->load->view('layouts/header');
		$this->load->view('pages/user/candi-detail',$data);
		$this->load->view('layouts/footer');
	}
	
}

