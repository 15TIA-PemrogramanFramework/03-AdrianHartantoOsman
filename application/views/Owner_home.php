<?php 
$this->load->view('templates/header');
?>
<div class="row">
	<div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
		<?php echo anchor(site_url("admin/tambah_admin"), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary"'); ?>
	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th>No HP</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($admin as $key => $value){ ?>
			<tr>
				<td><?php echo $value->id; ?></td>
				<td><?php echo $value->username; ?></td>
				<td><?php echo $value->password; ?></td>
				<td><?php echo $value->nama; ?></td>
				<td><?php echo $value->no_hp; ?></td>
				<td><?php echo $value->alamat; ?></td>
				<td>
					<?php  echo anchor(site_url('admin/delete/'.$value->id),
						'<i class="fa fa-trash"></i>',
						'class="btn btn-danger"'); ?>
				</td>
			</tr>
			<?php }?>
		</tbody>
	</table>
	</div>
	<?php 
	$this->load->view('templates/footer');
	?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable();
		} );
	</script>