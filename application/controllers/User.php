<?php
	/**
	* 
	*/
	class user extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('login_model');		
		}
		function index()
		{
			$data['user']=$this->login_model->ambil_data_user();
			$this->load->view('user_home',$data);
		}
	}
?>