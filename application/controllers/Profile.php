<?php  
class Profile extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('TransactionModel');
		$this->load->helper('url');
	}

	function index(){
		$user_data = $this->session->userdata('logged_in');
		$data['user_data'] = $user_data;
		$transaksi = $this->TransactionModel->get_transaction_by_user_id($user_data['id']);
		$data['transaction'] = $transaksi;
		$this->load->view('transaksi',$data);
	}

}
?>