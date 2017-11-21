<?php

	/**
	* 
	*/
	class pesanan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('login_model');
		}
		function index()
		{
			$data['pesanan']=$this->login_model->ambil_data_pesanan();
			$this->load->view('pesanan_home',$data);
		}
		function terima($id)
		{
			$data=$this->login_model->ambil_data_pesanan_id($id);
			$pesanan= array(
				'username'=>$data->username,
				'menu'=>$data->menu,
				'jumlah'=> $data->jumlah,
				'harga'=>$data->harga,
				'total'=>$data->total,
				'status'=>'[ACCEPTED]',
			);
			$this->login_model->add_penjualan($pesanan);
			$this->login_model->hapus_pesanan($id);
			redirect('carts');
		}
	}
?>