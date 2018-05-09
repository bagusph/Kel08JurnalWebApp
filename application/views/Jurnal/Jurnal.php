<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>List Jurnal</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>List Jurnal</h1>
	<a href="<?php echo base_url('Jurnal/tambah') ?>" class="btn btn-primary mb-3">Tambah</a>

	<!-- File Header -->
	<table class="table table-striped table-bordered" width="100%" id="example">
		<thead>
			<tr>
				<!-- Sesuaikan Column Table -->
				<th>ID</th>
				<th>Juduk</th>
				<th>Penulis</th>
				<th>Abstract</th>
				<th>Keyword</th>
				<th>Referensi</th>
				<th>ISBN</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getData as $key => $value): ?>
				<tr>
					<!-- Sesuaikan Column Table -->
					<td><?php echo $value['id'] ?></td>
					<td><?php echo $value['judul'] ?></td>
					<td><?php echo $value['penulis'] ?></td>
					<td><?php echo $value['abstract'] ?></td>
					<td><?php echo $value['keyword'] ?></td>
					<td><?php echo $value['referensi'] ?></td>
					<td><?php echo $value['isbn'] ?></td>
					<td><?php echo $value['foto'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<a href="<?php echo base_url('Jurnal/ubah/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
						<a href="<?php echo base_url('Jurnal/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<?php var_dump($links) ?>
	<!-- File Footer -->
<?php 
        if(isset($links)){
          echo $links;
        } ?>
</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('templates/footer_home') ?>