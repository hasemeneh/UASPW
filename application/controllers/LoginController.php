<?php  
class LoginController extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('LoginView');
	}
	function signup(){
		$this->load->view('DaftarView');
	}
	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// echo "".$username;
		// $user_data=$this->UserModel->login($username,$password);
		if($user_data=$this->UserModel->login($username,$password)){
			$this->session->set_userdata('logged_in', $user_data);
			redirect("crud");
		}else{
			echo "failed to login please re-login to <a href='".base_url()."index.php/Login'>login</a>";
		}
		// echo "".$user_data['username'];
	}
	public function daftar()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$this->UserModel->insert($username,$password,$email);
		redirect("crud");
	}
	
	public function do_logout()
	{
		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('crud');
   	}



}
?>