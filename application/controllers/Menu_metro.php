<?php
	
	/**
	* 
	*/
	class menu_metro extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('login_model');
		}

		function index()
		{
			$this->load->view('menu_home');
		}
		function add_to_carts()
		{

			$total=(((int)$_POST['jum'])*((int)$_POST['harga']));
			echo $this->session->userdata('username');
			$data=array(
			'username'=>$this->session->userdata('username'),
			'menu'=>$_POST['menu'],
			'jumlah'=>$_POST['jum'],
			'harga'=>$_POST['harga'],
			'total'=>$total,
				); 
			$this->login_model->add_to_carts($data);
			redirect(site_url('menu_metro'));

		}
	}
?>