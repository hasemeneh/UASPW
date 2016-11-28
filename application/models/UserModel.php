<?php

class UserModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function login($username, $password)
	{
   		$this -> db -> select('id, username,level');
   		$this -> db -> from('user');
   		$this -> db -> where('username', $username);
	   	$this -> db -> where('password', $password);
	 
	   	$query = $this -> db -> get();
	   	if($query -> num_rows() == 1)
	   	{
		   	$result = $query->result();
			$result_data = array();
			$result_data['username'] = $result[0]->username;
			$result_data['role'] = $result[0]->role;
			return $result_data;
		}
	   	else
	   	{
	   	  return false;
	   	}
 	}

 	public function get_user($username)
 	{
 		$this -> db -> select('id,username,level');
 		$this -> db -> from('user');
   		$this -> db -> where('username', $username);
   		$query -> db -> get();
   		if($query -> num_rows() == 1)
   		{
   			return $query->result();
   		}else{
   			return false;
   		}
 	}
}


?>