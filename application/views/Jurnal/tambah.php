<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Tambah Jurnal</h1>
	</div>

	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
-->
<?php echo form_open_multipart('Jurnal/tambah'); ?>
<div class="form-group row">
	<label for="id" class="col-sm-2 col-form-label">ID</label>
	<div class="col-sm-10">
		<input type="text" name="id" class="form-control" id="id" value="" placeholder="id">
		<?php echo form_error('id') ?> <!-- menampilkan error saat rule id gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Judul</label>
	<div class="col-sm-10">
		<input type="text" name="judul" class="form-control" id="judul" value="" placeholder="judul">
		<?php echo form_error('judul') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Penulis</label>
	<div class="col-sm-10">
		<input type="text" name="penulis" class="form-control" id="penulis" value="" placeholder="penulis">
		<?php echo form_error('penulis') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Abstract</label>
	<div class="col-sm-10">
		<input type="text" name="abstract" class="form-control" id="abstract" value="" placeholder="abstract">
		<?php echo form_error('abstract') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Keyword</label>
	<div class="col-sm-10">
		<input type="text" name="Keyword" class="form-control" id="Keyword" value="" placeholder="Keyword">
		<?php echo form_error('Keyword') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Referensi</label>
	<div class="col-sm-10">
		<input type="text" name="referensi" class="form-control" id="referensi" value="" placeholder="referensi">
		<?php echo form_error('referensi') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">ISBN</label>
	<div class="col-sm-10">
		<input type="text" name="isbn" class="form-control" id="isbn" value="" placeholder="isbn">
		<?php echo form_error('isbn') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group">
	<label for="foto">foto</label>
	<input type="file" name="foto">
	<?php echo $message ?>
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