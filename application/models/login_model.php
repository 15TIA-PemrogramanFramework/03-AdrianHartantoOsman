<?php
	/**
	* 
	*/
	class login_model extends CI_Model
	{
		
		public $nama_table1='admin';
		public $nama_table2='member';
		public $nama_table3='owner';
		public $nama_table4='penjualan';
		public $nama_table5='pesanan';
		public $nama_table6='carts';
		function __construct()
		{
			parent::__construct();
		}
		function ambil_data_admin()
		{
			return $this->db->get($this->nama_table1)->result();
		}
		function ambil_data_user()
		{
			return $this->db->get($this->nama_table2)->result();
		}
		function ambil_data_penjualan()
		{
			return $this->db->get($this->nama_table4)->result();
		}
		function ambil_data_pesanan()
		{
			return $this->db->get($this->nama_table5)->result();
		}
		function cek_login_admin($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			return $this->db->get($this->nama_table1)->row();
		}
		function cek_login_user($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			return $this->db->get($this->nama_table2)->row();
		}
		function cek_login_owner($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			return $this->db->get($this->nama_table3)->row();
		}
		function ambil_data_penjualan_user($nama)
		{
			$this->db->where('username',$nama);
			return $this->db->get($this->nama_table4)->result();
		}
		function ambil_data_cart_user($nama)
		{
			$this->db->where('username',$nama);
			return $this->db->get($this->nama_table6)->result();
		}
		function add_to_carts($data)
		{
			return $this->db->insert($this->nama_table6,$data);
		}
		function ambil_data_penjualan_id($id)
		{
			$this->db->where('id',$id);
			return $this->db->get($this->nama_table6)->row();
		}
		function ambil_data_pesanan_id($id)
		{
			$this->db->where('id',$id);
			return $this->db->get($this->nama_table5)->row();
		}
		function add_penjualan($data)
		{
			return $this->db->insert($this->nama_table4,$data);
		}

		function add_pesanan($data)
		{
			return $this->db->insert($this->nama_table5	,$data);
		}
		function hapus_carts($id)
		{
				$this->db->where('id',$id);
				$this->db->delete($this->nama_table6);

		}
		function hapus_pesanan($id)
		{
				$this->db->where('id',$id);
				$this->db->delete($this->nama_table5);

		}
		function sign_up_member($data)
		{
			return $this->db->insert($this->nama_table2	,$data);
		}
		function add_admin($data)
		{
			return $this->db->insert($this->nama_table1	,$data);
		}
		function hapus_admin($id)
		{
			$this->db->where('id',$id);
			$this->db->delete($this->nama_table1);
		}
	}
?>