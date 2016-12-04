<?php

class TransactionModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function get_Transaction($user_id){
		$this-> db -> query("SELECT a.* ,b.`username`,b.`id` FROM `t_transaction`  as a , `user` as b WHERE a.`user_id` = ".$user_id." and b.`id` = ".$user_id."")->get();
		return $this-> db -> result();

	} 
	public function addTransaction($user_id)
	{
		$this-> db -> query("INSERT INTO `t_transaction` (`id`, `user_id`, `total`, `status_pembayaran`, `status_pengiriman`, `status_pemesanan`) VALUES (NULL, '3', '0', 'Not Checked Out', 'Not Checked Out', '0');");
	}
	
}


?>