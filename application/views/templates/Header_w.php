<html>
	<head>
		<title>Metro Kopi Tiam</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url();?>/Asset/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="<?=site_url('welcome');?>">Metro<span> Kopi Tiam</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="<?= site_url('welcome'); ?>">Home</a></li>
					<?php if(!$this->session->userdata('owner') && !$this->session->userdata('admin') && !$this->session->userdata('user')){echo anchor(site_url('login'),'<li>Login<a></a></li>');
												   echo anchor(site_url('signup'),'<li>Sign Up<a></a></li>');}?>

					<?php if($this->session->userdata('owner') ){echo anchor(site_url('admin'),'<li>Profile<a></a></li>');}?>
					<?php if( $this->session->userdata('admin')){echo anchor(site_url('user'),'<li>Profile<a></a></li>');}?>
					<?php if( $this->session->userdata('user')){echo anchor(site_url('menu_metro'),'<li>Menu<a></a></li>');
					echo anchor(site_url('carts'),'<li>Carts<a></a></li>');
						echo anchor(site_url('transaksi'),'<li>Transaksi<a></a></li>');}?>
					<?php if($this->session->userdata('owner') || $this->session->userdata('admin') || $this->session->userdata('user')){echo anchor(site_url('login/logout'),'<li>Log Out<a></a></li>');}?>	
				</ul>
			</nav>