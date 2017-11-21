<?php
	/**
	* 
	*/
	class carts extends CI_Controller
	{
		
		function __construct()
		{

			parent::__construct();
			$this->load->model('login_model');
		}
		function index()
		{
			$data['carts']=$this->login_model->ambil_data_cart_user($this->session->userdata('username'));
			$this->load->view('carts_menu',$data);
		}
		function pesan($id)
		{
			$data=$this->login_model->ambil_data_penjualan_id($id);
			$pesanan= array(
				'username'=>$data->username,
				'menu'=>$data->menu,
				'jumlah'=> $data->jumlah,
				'harga'=>$data->harga,
				'total'=>$data->total,
				'status'=>'[PENDING]',
			);
			$this->login_model->add_pesanan($pesanan);
			$this->login_model->hapus_carts($id);
			redirect('carts');
		}
	}
?>