<?php 
$this->load->view('templates/header');
?>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>Username</th>
			<th>Password</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>No HP</th>
			<th>Alamat</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($user as $key => $value){ ?>
			<tr>
				<td><?php echo $value->username; ?></td>
				<td><?php echo $value->password; ?></td>
				<td><?php echo $value->first_name; ?></td>
				<td><?php echo $value->last_name; ?></td>
				<td><?php echo $value->email; ?></td>
				<td><?php echo $value->no_hp; ?></td>
				<td><?php echo $value->alamat; ?></td>
				
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