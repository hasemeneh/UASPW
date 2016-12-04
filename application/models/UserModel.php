<?php

class UserModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function login($username, $password)
	{
   		$this -> db -> select('id, username,level,display_name');
   		$this -> db -> from('user');
   		$this -> db -> where('username', $username);
	   	$this -> db -> where('password', $password);
	 
	   	$query = $this -> db -> get();
	   	if($query -> num_rows() == 1)
	   	{
		   	$result = $query->result();
			$result_data = array();
			$result_data['id'] = $result[0]->id;
			$result_data['username'] = $result[0]->username;
			$result_data['level'] = $result[0]->level;
			$result_data['dp'] = $result[0]->display_name;
			
			return $result_data;
		}
	   	else
	   	{
	   	  return false;
	   	}
 	}
	
	public function change_password($where,$data,$table)
 	{	
		$this->db->where($where);
		$this->db->update($table,$data);
 	}
	
	
 	public function get_user($username)
 	{
 		$this -> db -> select('id,username,password,level,sec_question,sec_answer');
 		$this -> db -> from('user');
   		$this -> db -> where('username', $username);
   		$query = $this -> db -> get();
   		if($query -> num_rows() == 1)
   		{
   			return $query->result();
   		}else{
   			return NULL;
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