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
	public function addtocart()
	{
		$this->load->model('CartModel');
		$user_data = $this->session->userdata('logged_in');
		$item_id = 0;
		$size = 0;
		$quantity = 0;
		if(isset($user_data)){
			$transaction = $this->get_current_transaction();
			$this->CartModel->insert_data($transaction[0]->id,$item_id,$quantity,$size);
			redirect('Product/cart');
		}else{
			redirect('Login');
		}
	}
	public function get_current_transaction()
	{
		$user_data = $this->session->userdata('logged_in');
		$this->load->model('TransactionModel');
		$transaction = $this->TransactionModel->get_current_transaction($user_data['id']);
		if($transaction->num_rows() == 0){
			$this->TransactionModel->addTransaction($user_data['id']);
			return $this->get_current_transaction();
		}
		else{
			return $transaction->result();
		}
	}

	public function cart()
	{
		$user_data = $this->session->userdata('logged_in');
		if(isset($user_data)){
			$data['user_data'] = $user_data;
			$this->load->model('CartModel');
			$this->load->model('TransactionModel');
			$this-> TransactionModel ->get_current_transaction($user_data['id']);
			$this->load->view('cart',$data);
		}else{
			redirect('Login');
		}	
	}
}
?>