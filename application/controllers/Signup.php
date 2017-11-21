<?php

/**
* 
*/
class signup extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	function index()
	{
		if(!$this->input->post())
		{
			$this->load->view('signup');
		}else
		{
			$data=array(
				'username'=>$this->input->post('username'),
				'first_name'=>$this->input->post('first_name'),
				'last_name'=>$this->input->post('last_name'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'alamat'=>$this->input->post('alamat'),
				'no_hp'=>$this->input->post('no_hp'),
			);
			$this->login_model->sign_up_member($data);
			$this->session->set_userdata('user',true);
			$this->session->set_userdata('username', $data->username);
			redirect("/");

		}
	}
}
?>