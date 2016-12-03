<?php

class TransactionModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function get_Transaction($user_id){
		$this-> db -> query("SELECT a.* ,b.`username`,b.`id` FROM `t_transaction`  as a , `user` as b WHERE a.`user_id` = ".$user_id." and b.`id` = ".$user_id."");
	} 
	public function addData($nama_proker,$description,$badan,$tanggal)
	{
		$this->db->query("INSERT INTO `timeline` (`id_proker`, `nama_proker`, `description`, `badan`, `tanggal`) VALUES (NULL, '$nama_proker', '$description', '$badan', '$tanggal');");

	}
}


?>