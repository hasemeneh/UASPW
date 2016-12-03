<?php  
class Product extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->helper('url');
	}

	function index(){
		$product = $this->ProductModel->get_product();
		$data = array();
		$data['products'] = $product;
		$data['user_data'] = $this->session->userdata('logged_in');
		$this->load->view('product',$data);
	}
	function search($q){
		$product = $this->ProductModel->search($q);
		// var_dump($product);

		$data = array();
		$data['products'] = $product;
		$data['user_data'] = $this->session->userdata('logged_in');
		$this->load->view('product',$data);
	}
	public function addProduct()
	{
	}
	public function deleteProduct()
	{
	}
	public function updateProduct()
	{
	}




}
?>