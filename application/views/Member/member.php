<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron" style="padding: 20px 30px;">
		<h1>List Member</h1>
	</div>

<a href="<?php echo base_url('Member/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>
	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>Username</th>
				<th>Password</th>
				<th>Role</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['username'] ?></td>
					<td><?php echo $value['password'] ?></td>
					<td><?php echo $value['fk_id_role'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Member/ubah/'.$value['username']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Member/hapus/'.$value['username']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<!-- File Footer -->

</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('templates/footer_home') ?>