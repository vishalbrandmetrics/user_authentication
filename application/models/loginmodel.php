<?php
class loginmodel extends CI_model{
		public function isvalidate($email,$pass){
	
	$q = $this->db->where(['email'=>$email,'password'=>$pass])->get('user');
	// echo "<pre>";
	// print_r($q);
if($q->num_rows()){
	return $q->row()->id;
}
else{
	return false;
}
}
	public function user_name($loginid){
		$q = $this->db->where(['id'=>$loginid])->get('user');
		if($q->num_rows()){
	return $q->row()->name;
}
else{
	return false;
}
	}
	
	public function userlist(){
	$this->load->library('session');
	$id = $this->session->userdata('id');

	$q = $this->db->get('user');
	return $q->result();
	}
		
	public function add_user($array){
	return $this->db->insert('user',$array);
	}



}
?>