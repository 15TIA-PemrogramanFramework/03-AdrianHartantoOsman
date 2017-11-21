<?php 
$this->load->view('templates/header');
?>

<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Alamat</th>
			<th>Menu</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Total</th>
			<th>Status</th>
			<th>Aksi</th>

		</tr>
	</thead>
	<tbody>
		<?php foreach ($pesanan as $key => $value){ ?>
			<tr>
				<td><?php echo $value->id; ?></td>
				<td><?php echo $value->username; ?></td>
				<td><?php echo $value->alamat; ?></td>
				<td><?php echo $value->menu; ?></td>
				<td><?php echo $value->jumlah; ?></td>
				<td><?php echo $value->harga; ?></td>
				<td><?php echo $value->total; ?></td>
				<td><?php echo $value->status; ?></td>
				<td><?php echo anchor(site_url("pesanan/terima/".$value->id), '<i class="fa fa-plus"></i> Terima', 'class="btn btn-primary"'); ?></td>
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