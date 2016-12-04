<?php  
class Product extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->helper('url');
	}

	function index(){
		$q = $this->input->get('q');
		if(!isset($q)){
			$product = $this->ProductModel->get_product();
		}else{
			$product = $this->ProductModel->search($q);
		}
		$data = array();
		$data['products'] = $product;
		$data['user_data'] = $this->session->userdata('logged_in');
		$this->load->view('product',$data);
	}
	// function search($q){
	// 	// var_dump($product);
	// 	$product = $this->ProductModel->search($q);

	// 	$data = array();
	// 	$data['products'] = $product;
	// 	$data['user_data'] = $this->session->userdata('logged_in');
	// 	$this->load->view('product',$data);
	// }
	// public function addProduct()
	// {
	// }
	// public function deleteProduct()
	// {
	// }
	// public function updateProduct()
	// {
	// }




}
?>