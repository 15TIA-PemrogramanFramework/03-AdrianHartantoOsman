	



<?php
		class welcome extends CI_Controller
		{
			
			function __construct()
			{
				 parent::__construct();		
			}
			function index()
			{
				$this->load->view('index');
			}
			function generic()
			{
				$this->load->view('generic');
			}
			function elementss()
			{
				$this->load->view('elements');
			}
		}
?>