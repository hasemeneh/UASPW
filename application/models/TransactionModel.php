<?php

class TransactionModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function get_transaction(){
		$result = $this-> db -> select('*') -> from('t_transaction')->get()->result();
		return $result;
	} 
	public function get_transaction_by_user_id($user_id){
		$result = $this-> db -> select('*') -> from('t_transaction') -> where('user_id',$user_id)->get()->result();
		return $result;
	} 
	public function get_current_transaction($user_id){
		// $sql = "SELECT a.* ,b.`username`,b.`id` FROM `t_transaction`  as a , `user` as b WHERE a.`user_id` = ".$user_id." and b.`id` = ".$user_id." and a.`status_pemesanan` = 0";

		// $this-> db -> query($sql);
		$this-> db -> select('*') -> from('t_transaction') -> where('user_id',$user_id) -> where('status_pemesanan',0);
		$query = $this-> db ->get();
		if($query -> num_rows() == 1){
			return $query->result();
		}else{
			return NULL;			
		}
	} 
	public function addTransaction($user_id)
	{
		$this-> db -> query("INSERT INTO `t_transaction` (`id`, `user_id`, `total`, `status_pembayaran`, `status_pengiriman`, `status_pemesanan`) VALUES (NULL, '$user_id', '0', 'Not Checked Out', 'Not Checked Out', '0');");
	}
	public function verifytransaction($id,$alamat_pengiriman)
	{
		$this->db->query("UPDATE `t_transaction` SET `status_pembayaran` = 'Waiting For Payemnt', `status_pemesanan` = '1', `alamat_pengiriman` = '$alamat_pengiriman' WHERE `t_transaction`.`id` = ".$id.";");
	}
	public function update_payment($id)
	{
		$this->db->query("UPDATE `t_transaction` SET `status_pembayaran` = 'Payment Received', `status_pemesanan` = '1' WHERE `t_transaction`.`id` = ".$id.";");
	}
	public function update_shipped($id)
	{
		$this->db->query("UPDATE `t_transaction` SET `status_pengiriman` = 'Shipped', `status_pemesanan` = '1' WHERE `t_transaction`.`id` = ".$id.";");
	}
	
}


?>