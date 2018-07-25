<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Tambah Kategori</h1>
	</div>

	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
-->
<?php echo form_open_multipart('kategori/tambah'); ?>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Nama Kategori</label>
	<div class="col-sm-10">
		<input type="text" name="nama" class="form-control" id="nama" value="" placeholder="nama">
		<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="col-sm-2"></label>
	<input type="submit" class="btn btn-primary" value="Tambah">
</div>
</form>
<!-- load footer -->


</main>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php $this->load->view('templates/footer_home') ?>