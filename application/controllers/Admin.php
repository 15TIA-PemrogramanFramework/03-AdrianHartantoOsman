<?php
	/**
	* 
	*/
	class admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('login_model');
		}
		function index()
		{
			$data['admin']=$this->login_model->ambil_data_admin();
			$this->load->view('owner_home',$data);	
		}
		function tambah_admin()
		{
			$data=array(
				'username'=>set_value('username'),
				'password'=>set_value('password'),
				'nama'=>set_value('nama'),
				'no_hp'=>set_value('no_hp'),
				'alamat'=>set_value('alamat'),
				'id'=>set_value('id'),
				'button'=>'Tambah',
				'action'=>site_url('admin/tambah_admin_aksi'),
			);
			$this->load->view('admin_form',$data);

		}
		function tambah_admin_aksi()
		{
				$data =array(
					'username'=>$this->input->post('username'),
					'password'=>$this->input->post('password'),
					'nama'=>$this->input->post('nama'),
					'no_hp'=>$this->input->post('no_hp'),
					'alamat'=>$this->input->post('alamat'),
				);
				$this->login_model->add_admin($data);
				redirect('admin');
		}
		function delete($id)
		{
			$this->login_model->hapus_admin($id);
			redirect('admin');
		}
	}
?>