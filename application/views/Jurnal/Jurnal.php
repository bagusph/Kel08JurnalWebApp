<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron" style="padding: 20px 30px;">
		<h1>List Jurnal</h1>
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
				<th>Kategori</th>
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
					<td><?php echo $value['kategori_nama'] ?></td>
					<td><?php echo $value['foto'] ?></td>
					<td>
						<!-- --AKSI-- -->
						<?php if($this->session->userdata('login')['level'] == '2'){ 
							$a = $this->session->userdata('login');
								if($a['username']==$value['penulis']){	?>
									<div class="row">
									<a href="<?php echo base_url('Jurnal/ubah/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
									<a href="<?php echo base_url('Jurnal/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
									</div>

						<?php }}else if ($this->session->userdata('login')['level'] == '1') { ?>
							
							<a href="<?php echo base_url('Jurnal/ubah/'.$value['id']) ?>" class="btn btn-sm btn-success">Ubah</a>
							<a href="<?php echo base_url('Jurnal/hapus/'.$value['id']) ?>" class="btn btn-sm btn-danger">Hapus</a>
	
						<?php } ?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
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