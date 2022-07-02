<?php
class M_Home extends CI_Model 
{ 
	protected $table = 'berita';
    public function __construct() {
        parent::__construct();
    }

	function get_post_list($limit, $start){
        $query = $this->db->get('berita', $limit, $start);
        return $query;
    }

	public function get_all($table){
        return $this->db->get($table);
	}

    public function get_count() {
        return $this->db->count_all($this->table);
    }

    public function get_wisata($table) {
        return $this->db->get($table);
    }

    public function get_candi($table) {
        return $this->db->get($table);
    }

    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }

	public function berita_detail($table,$id) {
        return $this->db->where('id_berita',$id)->get($table);
    }
	
	public function wisata_detail($table,$id) {
        return $this->db->where('id_wisata',$id)->get($table);
    }
	
	function get_post_edit($id){
        $query = $this->db->where('id_profil',$id)->get('profil_candi')->row();
        return $query;
    }

	public function candi_detail($table,$id) {
        return $this->db->where('id_candi',$id)->get($table);
    }
	function updated_data($id,$table,$data){
		return $this->db->where('id_profil', $id)
			->update($table, $data);
	}
} 
