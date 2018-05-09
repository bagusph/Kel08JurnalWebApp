<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Tambah Penulis</h1>
	</div>

	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
-->
<?php echo form_open_multipart('Penulis/tambah'); ?>
<div class="form-group row">
	<label for="id" class="col-sm-2 col-form-label">ID</label>
	<div class="col-sm-10">
		<input type="text" name="id" class="form-control" id="id" value="" placeholder="id">
		<?php echo form_error('id') ?> <!-- menampilkan error saat rule id gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">nama</label>
	<div class="col-sm-10">
		<input type="text" name="nama" class="form-control" id="nama" value="" placeholder="nama">
		<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Alamat</label>
	<div class="col-sm-10">
		<input type="text" name="alamat" class="form-control" id="alamat" value="" placeholder="alamat">
		<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">NoTelepon</label>
	<div class="col-sm-10">
		<input type="text" name="notelp" class="form-control" id="notelp" value="" placeholder="notelp">
		<?php echo form_error('notelp') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Status</label>
	<div class="col-sm-10">
		<input type="text" name="status" class="form-control" id="status" value="" placeholder="status">
		<?php echo form_error('status') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Lulusan</label>
	<div class="col-sm-10">
		<input type="text" name="lulusan" class="form-control" id="lulusan" value="" placeholder="lulusan">
		<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Gelar</label>
	<div class="col-sm-10">
		<input type="text" name="gelar" class="form-control" id="gelar" value="" placeholder="gelar">
		<?php echo form_error('gelar') ?> <!-- menampilkan error saat rule nama gagal -->
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