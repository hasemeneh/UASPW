<?php  
class Home extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	function index(){
		$data['user_data'] = $this->session->userdata('logged_in');
		$this->load->view('home',$data);
	}
}
?>