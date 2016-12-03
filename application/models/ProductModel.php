<?php

class ProductModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function get_product(){
		$this->db->select('id,name,size_availability,price,description,material,image')->from('t_product')->order_by('name','asc')->limit(15);
		$result_data = array();
		$result = $this->db->get()->result();
		foreach ($result as $key => $value) {
			$result_data[$key] = $value;
		}
		return $result_data;
	} 
	public function replace_data($name,$size_availability,$price,$description,$material,$id='NULL')
	{
		
		$this->db->query("REPLACE INTO `t_product` (`id`, `name`, `size_availability`, `price`, `description`, `material`) VALUES (".$id.", '".$name."', '".$size_availability."', '".$price."', '".$description."', '".$material."');");
		redirect("ProductController");
	}
}


?>