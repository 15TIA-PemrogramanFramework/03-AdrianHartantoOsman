<?php
	/**
	* 
	*/
	if (!defined('BASEPATH'))
   	 exit('No direct script access allowed');

	class login extends CI_Controller
	{
		
		function __construct()
		{
		
			 parent::__construct();	
			 $this->load->model('login_model');
		}
		function index()
		{
			if($this->session->userdata('admin')==true)
			{
				redirect('user');
			}else if($this->session->userdata('user')==true)
			{
				redirect('/');
			}else if($this->session->userdata('owner')==true)
			{
				redirect('admin');
			}
			if(!$this->input->post())
			{
				$this->load->view('login');
			}else
			{
				$cek_login_user=$this->login_model->cek_login_user(
					$this->input->post('username'),
					$this->input->post('password')
					);
				$cek_login_admin=$this->login_model->cek_login_admin(
					$this->input->post('username'),
					$this->input->post('password')
					);
				$cek_login_owner=$this->login_model->cek_login_owner(
					$this->input->post('username'),
					$this->input->post('password')
				);
				if(!empty($cek_login_user))
				{
					$this->session->set_userdata('user', true);
					$this->session->set_userdata('username', $cek_login_user->username);
					redirect("/");
				}else if(!empty($cek_login_admin))
				{
					$this->session->set_userdata('admin',true);
					$this->session->set_userdata('username', $cek_login_admin->username);
					redirect("user");
				}else if(!empty($cek_login_owner))
				{

					$this->session->set_userdata('owner',true);
					$this->session->set_userdata('username', $cek_login_admin->username);
					redirect("admin");
				}
				else 
				{
					$this->session->set_flashdata('gagal',' <div class="alert alert-danger"><strong>Gagal Login!</strong> Username dan Password Anda Salah.</div>');
					redirect("login");
				}
			}

	
		}
			public function logout()
		    {
				$this->session->unset_userdata('user');
				$this->session->unset_userdata('admin');
				$this->session->unset_userdata('owner');
				redirect("/");
		    } 

		
	}
?>