<?php
class login extends MY_Controller{
public function index(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('pass','Password','required|max_length[100]');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$pass = md5($this->input->post('pass'));
			
			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->isvalidate($email,$pass);
			$login_name = $this->loginmodel->user_name($login_id);
			if($login_id){	
				$this->load->library('session');
				$this->session->set_userdata('id',$login_id);
				$this->session->set_userdata('name',$login_name);
				//$this->session->set_userdata('name',$login_id);
				//$this->load->view('admin/dashboard');
				return redirect('admin/welcome');	
			}
			else{
				$this->session->set_flashdata('login-failed','invalid-username or password');
				$this->load->view('admin/login');
			}
		}
		else{
			if(!$this->session->userdata('id')){
			$this->load->view('admin/login');
			}
		}
	}
}
	?>