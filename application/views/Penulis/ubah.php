<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Update Penulis</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>Table</h1>
	<!-- load header -->
	<!-- action akan dilakukan ke controller Penulis dengan fungsi ubah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e -->
	<?php echo form_open_multipart('Penulis/ubah/'.$getData['id']); ?>
	<div class="form-group row">
		<label for="id" class="col-sm-2 col-form-label">id</label>
		<div class="col-sm-10">
			<input type="text" name="id" class="form-control" id="id"  value="<?php echo $getData['id'] ?>" placeholder="id">
			<?php echo form_error('id') ?> <!-- menampilkan error saat rule id gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">nama</label>
		<div class="col-sm-10">
			<input type="text" name="nama" class="form-control" id="nama"  value="<?php echo $getData['nama'] ?>" placeholder="nama">
			<?php echo form_error('nama') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Alamat</label>
		<div class="col-sm-10">
			<input type="text" name="alamat" class="form-control" id="alamat"  value="<?php echo $getData['alamat'] ?>" placeholder="alamat">
			<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">NoTelepon</label>
		<div class="col-sm-10">
			<input type="text" name="notelp" class="form-control" id="notelp"  value="<?php echo $getData['notelp'] ?>" placeholder="notelp">
			<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Status</label>
		<div class="col-sm-10">
			<input type="text" name="status" class="form-control" id="status"  value="<?php echo $getData['status'] ?>" placeholder="status">
			<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Lulusan</label>
		<div class="col-sm-10">
			<input type="text" name="lulusan" class="form-control" id="lulusan"  value="<?php echo $getData['lulusan'] ?>" placeholder="lulusan">
			<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Gelar</label>
		<div class="col-sm-10">
			<input type="text" name="gelar" class="form-control" id="gelar"  value="<?php echo $getData['gelar'] ?>" placeholder="gelar">
			<?php echo form_error('alamat') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group">
		<label for="foto">foto</label>
		<input type="file" name="foto">
		<?php echo $message ?>
	</div>
	<div class="form-group row">
		<label for="col-sm-2"></label>
		<input type="submit" class="btn btn-success" value="Ubah">
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