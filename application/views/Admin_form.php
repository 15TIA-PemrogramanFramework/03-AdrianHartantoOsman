<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Username</label>
		<input type="text" placeholder="Masukkan username" value="<?php echo $username; ?>" class="form-control" name="username">
	</div>	<div class="form-group">
		<label>Password</label>
		<input type="password" placeholder="Masukkan password" value="<?php echo $password; ?>" class="form-control" name="password">
	</div>	
	<div class="form-group">
		<label>Nama</label>
		<input type="text" placeholder="Masukkan nama" value="<?php echo $nama; ?>" class="form-control" name="nama">
	</div>	
	<div class="form-group">
		<label>Nomor HP</label>
		<input type="text" placeholder="Masukkan Nomor HP" value="<?php echo $no_hp; ?>" class="form-control" name="no_hp">
	</div>	
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan alamat" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a>	
</form>
<?php $this->load->view('templates/footer'); ?>