<?php

class CartModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function get_cart($transaction_id){
		$this->db->select('*')->from('t_cart a')->join('t_product b','b.id=a.item_id','inner')->where("transaction_id",$transaction_id);
		$result = $this->db->get()->result();
		return $result;
	} 
	public function insert_data($transaction_id,$item_id,$quantity,$size)
	{
		$this->db->query("INSERT INTO `t_cart` (`transaction_id`, `item_id`, `quantity`, `id`, `size`) VALUES ('$transaction_id', '$item_id', '$quantity', NULL, '$size');");

	}
}


?>