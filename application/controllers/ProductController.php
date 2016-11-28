<?php  
class ProductController extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		// $this->load->model('ProductModel');
		$this->load->helper('url');
	}

	function index(){
		echo "titit";
		$this->load->view('product');
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