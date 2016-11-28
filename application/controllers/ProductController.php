<?php  
class LoginController extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->helper('url');
	}

	function index(){
		// $this->load->view('LoginView');
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