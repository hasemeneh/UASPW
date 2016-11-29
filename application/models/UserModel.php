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
	   	$this -> db -> where('password', md5($password));
	 
	   	$query = $this -> db -> get();
	   	if($query -> num_rows() == 1)
	   	{
		   	$result = $query->result();
			$result_data = array();
			$result_data['id'] = $result[0]->id;
			$result_data['username'] = $result[0]->username;
			$result_data['level'] = $result[0]->level;
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
 	public function addUser($username,$level,$password,$display_name,$email,$sec_question,$sec_answer)
 	{
 		if($this->db->query("INSERT INTO `user` (`id`, `username`, `password`, `level`, `display_name`, `email`, `sec_question`, `sec_answer`) VALUES (NULL, '$username', '$password', b'1', '$display_name', '$email', '$sec_question', '$sec_answer');")){
 			return true;
 		}else{
 			return false;
 		}
 	}
}


?>