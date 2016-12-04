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
			$this->session->set_userdata($user_data);
			redirect('crud');
		}else{
			$data['gagal'] = 'Username atau Password Salah';
			$this->load->view('login', $data);
		}
		// echo "".$user_data['username'];
	}

	
	public function recover(){
		$username = $this->input->post('username');
		if($username == NULL){
			$var['cek'] = NULL;
			$this->load->view('recover',$var);
		}
		else{
			$data = $this->UserModel->get_user($username);
			if($data == NULL){
				$teks = array(
					'error_message' => "Username tidak ada",
					'cek' => NULL
				);				
				$this->load->view('recover',$teks);
			}
			else{
				$teks = array(
					'password'	=> $data[0]->password,
					'jawaban'	=> $data[0]->sec_answer,
					'pertanyaan' => $data[0]->sec_question,
					'cek' => "a"
				);
				$this->load->view('recover',$teks);
			}
			
		}
	}
	
	public function cek_recover(){
		
		$answer = $this->input->post('jawaban');
		$pwd = $this->input->post('password');
		$sec_answer = $this->input->post('sec_answer');
		
		if($answer == $sec_answer){
			$teks = array(
				'message' => "Jawaban anda benar, password Anda : ",
				'pwd' => $pwd
			);
			$this->load->view('login',$teks);
		}
		else{
			$teks = array(
					'message' => "Jawaban Anda salah",
					'pwd' =>""
				);
			$this->load->view('login',$teks);
		}
	}
	
	public function insert_user()
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
		
		$this->UserModel->insert($username,$password,$email);
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