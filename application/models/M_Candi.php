<?php
class M_Candi extends CI_Model 
{
	public function get_candi($table){
		return $this->db->get($table);
	}
	function save_post_data($table,$data){
		return $this->db->insert($table, $data);
	}
	function get_post_edit($id){
        $query = $this->db->where('id_candi',$id)->get('candi')->row();
        return $query;
    }
	function updated_data($id,$table,$data){
		return $this->db->where('id_candi', $id)
			->update($table, $data);
	}
	public function deleted_candi($id,$table){
		return $this->db->where('id_candi',$id)->delete($table);
	}
}

