<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Update Jurnal</h1>
		<p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
	</div>
	<h1>Table</h1>
	<!-- load header -->
	<!-- action akan dilakukan ke controller Penulis dengan fungsi ubah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e -->
	<?php echo form_open_multipart('Jurnal/ubah/'.$getData['id']); ?>
	<div class="form-group row">
		<label for="id" class="col-sm-2 col-form-label">id</label>
		<div class="col-sm-10">
			<input type="text" name="id" class="form-control" id="id"  value="<?php echo $getData['id'] ?>" placeholder="id">
			<?php echo form_error('id') ?> <!-- menampilkan error saat rule id gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Judul</label>
		<div class="col-sm-10">
			<input type="text" name="judul" class="form-control" id="judul"  value="<?php echo $getData['judul'] ?>" placeholder="judul">
			<?php echo form_error('judul') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Penulis</label>
		<div class="col-sm-10">
			<select class="form-control" name="fk_penulis">
			<?php foreach ($penulis as $key => $value): ?>
				<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
			<?php endforeach ?>
		</select>
		<script type="text/javascript">$('select[name="fk_penulis"]').val("<?php echo $getData['fk_penulis'] ?>")</script>
			<?php echo form_error('penulis') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Abstract</label>
		<div class="col-sm-10">
			<input type="text" name="abstract" class="form-control" id="abstract"  value="<?php echo $getData['abstract'] ?>" placeholder="abstract">
			<?php echo form_error('abstract') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Keyword</label>
		<div class="col-sm-10">
			<input type="text" name="keyword" class="form-control" id="keyword"  value="<?php echo $getData['keyword'] ?>" placeholder="keyword">
			<?php echo form_error('keyword') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">Referensi</label>
		<div class="col-sm-10">
			<input type="text" name="referensi" class="form-control" id="referensi"  value="<?php echo $getData['referensi'] ?>" placeholder="referensi">
			<?php echo form_error('referensi') ?> <!-- menampilkan error saat rule nama gagal -->
		</div>
	</div>
	<div class="form-group row">
		<label for="nama" class="col-sm-2 col-form-label">ISBN</label>
		<div class="col-sm-10">
			<input type="text" name="isbn" class="form-control" id="isbn"  value="<?php echo $getData['isbn'] ?>" placeholder="isbn">
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