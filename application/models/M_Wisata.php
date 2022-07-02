<?php
class M_Wisata extends CI_Model 
{
	public function get_wisata($table){
		return $this->db->get($table);
	}
	function save_post_data($table,$data){
		return $this->db->insert($table, $data);
	}
	function get_post_edit($id){
        $query = $this->db->where('id_wisata',$id)->get('wisata')->row();
        return $query;
    }
	function updated_data($id,$table,$data){
		return $this->db->where('id_wisata', $id)
			->update($table, $data);
	}
	public function deleted_wisata($id,$table){
		return $this->db->where('id_wisata',$id)->delete($table);
	}
}

