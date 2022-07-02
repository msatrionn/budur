<?php
class M_Login extends CI_Model 
{
    
	public function validasi_login($username,$password,$table){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($table);
	}
	public function save_registrasi_data($table,$data){
		return $this->db->insert($table, $data);
	}
}
