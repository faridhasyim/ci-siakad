<?php

class Login_model extends CI_Model{
	function validasi($u,$p){
		$row = $this->db->where(array(
			'username' => $u,
			'password' => md5($p)
		))->get('admin')->row_array();
		if($u==$row['username']){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}