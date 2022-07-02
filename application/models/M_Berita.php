<?php
class M_Berita extends CI_Model 
{
	public function get_berita($table){
		return $this->db->get($table);
	}
	function save_post_data($table,$data){
		return $this->db->insert($table, $data);
	}
	function get_post_edit($id){
        $query = $this->db->where('id_berita',$id)->get('berita')->row();
        return $query;
    }
	function updated_data($id,$table,$data){
		return $this->db->where('id_berita', $id)
			->update($table, $data);
	}
	public function deleted_berita($id,$table){
		return $this->db->where('id_berita',$id)->delete($table);
	}
}

