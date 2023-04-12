<?php
class admin extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->userdata('id')){
			$this->load->view('admin/login');
		}
	}
	public function welcome(){
		if($this->session->userdata('id')){
		// $this->load->model('loginmodel');
		// $articles = $this->loginmodel->articlelist();
		// $this->load->view('admin/dashboard',['articles'=>$articles]);
		$this->load->model('loginmodel');
		$user_list['user_list']=$this->loginmodel->userlist();
		$this->load->view('admin/dashboard',$user_list);
		
	}
	}
	public function uservalidation(){
		if($this->session->userdata('id')){
		$this->form_validation->set_rules('name','User Name','required');
		$this->form_validation->set_rules('email','User Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required|max_length[10]');
		$this->form_validation->set_rules('c_password','Confirm Password','required');

			if($this->form_validation->run()){
			
				$user_name = $this->input->post('name');
				$user_email = $this->input->post('email');
				$password=$this->input->post('password');
			
				$hash = md5($password);
				$array = ['name'=>$user_name,'email'=>$user_email,'password'=>$hash];
				
				$c_password = $this->input->post('c_password');
				
				if($password==$c_password){
					$this->session->set_flashdata('add_success','Add User successfully!!');
					$this->load->model('loginmodel');
					$this->loginmodel->add_user($array);
					return redirect('admin/welcome');
				}
				else{
					$this->session->set_flashdata('date_error','password should be same');
					return redirect('admin/add_user');
				}
				
			}
			else{
				$this->load->view('admin/add_user');
			}
		}
	}
	
	public function add_user(){
		if($this->session->userdata('id')){
		$this->load->view('admin/add_user');
	}
	}
	
}
?>