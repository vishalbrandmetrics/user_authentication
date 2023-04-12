<?php
class logout extends MY_controller{
public function index(){
		$this->session->unset_userdata('id');
		$this->load->view('admin/login');
	}
}
?>