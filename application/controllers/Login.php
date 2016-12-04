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
	function sign_up(){
		$this->load->view('signup');
	}
	public function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		
		if($user_data=$this->UserModel->login($username,md5($password))){
			$this->session->set_userdata('logged_in', $user_data);
			if($user_data['level']==0)
				redirect('crud');
			else{
				redirect('Product');
			}

		}else{
			$data['pesan'] = 'Username atau Password Salah';
			$this->load->view('login', $data);
		}
		// echo "".$user_data['username'];
	}

	
	public function recover(){
		$this->load->view('recover');		
	}
	
	public function verify(){
		$username = $this->input->post('username');
		if($check=$this->UserModel->get_user($username)){
			$data = array(
			'pertanyaan' => $check[0]->sec_question,
			'username' => $check[0]->username
			);	
			$this->load->view('verify',$data);
		}
		else{
			$data['pesan'] = 'Username Tidak Terdaftar';
			$this->load->view('recover', $data);
		}
	}
	
	public function check_answer(){
		$answer = $this->input->post('answer');
		$newPwd = $this->input->post('pwd');
		$username = $this->input->post('username');
		
		$check=$this->UserModel->get_user($username);
		if($answer == $check[0]->sec_answer){
			
			$where['sec_answer']=$answer;
			$update = array(
				'password' => md5($newPwd)
			);

			$this-> UserModel->change_password($where,$update,'user');
				
			$data = array(
			'pesan' => "Password Anda Sudah Diperbaharui"
			);
	
			$this->load->view('login',$data);
		}
		else{
			$data = array(
				'pertanyaan' => $check[0]->sec_question,
				'username' => $check[0]->username,
				'pesan' => "Jawaban Anda Salah Password Anda Tidak Diperbaharui"
			);
			$this->load->view('verify', $data);
		}
	}

	public function daftar()
	{
		$username = $this->input->post('username');
		echo "".$username;
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$sec_question = $this->input->post('sec_que');
		$sec_answer = $this->input->post('sec_ans');
		$display_name = $this->input->post('display_name');
		$this->UserModel->addUser($username,2,md5($password),$display_name,$email,$sec_question,$sec_answer);
		redirect("login");
		
	}
	
	public function do_logout()
	{
		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('product');
   	}



}
?>