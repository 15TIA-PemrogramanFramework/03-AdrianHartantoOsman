<?php
	/**
	* 
	*/
	class transaksi extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('login_model');
		}
		function index()
		{
			$data['penjualan']=$this->login_model->ambil_data_penjualan_user($this->session->userdata('username'));
			$this->load->view('penjualan_home',$data);
		}
	}
?>