<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Identitas Penulis</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>Identitas Penulis</h1>
	<a href="<?php echo base_url('Penulis/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>ID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>NoTelepon</th>
				<th>Status</th>
				<th>Lulusan</th>
				<th>Gelar</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['id'] ?></td>
					<td><?php echo $value['nama'] ?></td>
					<td><?php echo $value['alamat'] ?></td>
					<td><?php echo $value['notelp'] ?></td>
					<td><?php echo $value['status'] ?></td>
					<td><?php echo $value['lulusan'] ?></td>
					<td><?php echo $value['gelar'] ?></td>
					<td><?php echo $value['foto'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Penulis/ubah/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Penulis/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
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