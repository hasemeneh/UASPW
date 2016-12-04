<?php  
class Login extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('login');
	}
	function signup(){
		$this->load->view('signup');
	}
	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// echo "".$username;
		// $user_data=$this->UserModel->login($username,$password);
		if($user_data=$this->UserModel->login($username,$password)){
			$this->session->set_userdata('logged_in', $user_data);
			redirect("Product");
		}else{
			$data['gagal'] = 'Invalid Username or Password';
			$this->load->view('login', $data);
		}
		// echo "".$user_data['username'];
	}
	public function daftar()
	{
		$username = $this->input->post('username');
		echo "".$username;
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$sec_question = $this->input->post('sec_question');
		$sec_answer = $this->input->post('sec_answer');
		$display_name = $this->input->post('display_name');
		$this->UserModel->addUser($username,0,md5($password),$display_name,$email,$sec_question,$sec_answer);
		// redirect("Product");
	}
	
	public function do_logout()
	{
		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('Product');
   	}



}
?>