<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends  CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('CrudModel');
	}

	
	//      CRUD
	
	function index(){
		$user_data = $this->session->userdata('logged_in');
		if(isset($user_data)){
			if($user_data['level']==0){
				$data['user_data'] = $user_data;
				$data['t_product'] = $this-> CrudModel->tampil_data()->result();
				$this->load->view('crud/crud_view',$data);
			}else{
				redirect('Product');
			}
		}else{
			redirect('Product');
		}
	}
	
	
	function create(){
		$this->load->view('crud/crud_create');
	}

	function create_product(){
		$image = $this->input->post('image');
		$name = $this->input->post('name');
		$size_availability = $this->input->post('size_availability');
		$price = $this->input->post('price');
		$material = $this->input->post('material');
		$description = $this->input->post('description');
		$data = array(
			'image' => $image,
			'name' => $name,
			'size_availability' => $size_availability,
			'price' => $price,
			'material' => $material,
			'description' => $description
		);

		$this->CrudModel->input_data($data,'t_product');
		redirect('crud');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['t_product'] = $this-> CrudModel->edit_data($where,'t_product')->result();
		$this->load->view('crud/crud_update',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$image = $this->input->post('image');
		$name = $this->input->post('name');
		$size_availability = $this->input->post('size_availability');
		$price = $this->input->post('price');
		$material = $this->input->post('material');
		$description = $this->input->post('description');
		$data = array(
			'image' => $image,
			'name' => $name,
			'size_availability' => $size_availability,
			'price' => $price,
			'material' => $material,
			'description' => $description
		);

		$where = array(
			'id' => $id
		);

		$this-> CrudModel->update_data($where,$data,'t_product');
		redirect('crud');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this-> CrudModel->hapus_data($where,'t_product');
		redirect('crud');
	}
}		
?>










