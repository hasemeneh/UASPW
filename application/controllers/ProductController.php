<?php  
class ProductController extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->helper('url');
	}

	function index(){
		$product = $this->ProductModel->get_product();
		$data = array();
		$data['product'] = $product;

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