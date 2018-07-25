<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<br><br><br>
	<div class="jumbotron" style="padding: 30px 20px;">
		<h1>Tambah Jurnal</h1>
	</div>

	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
-->
<?php echo form_open_multipart('Jurnal/tambah'); ?>
<?php   $a = $this->session->userdata('login');?>

<?php echo validation_errors(); ?>

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
		<input type="text" name="penulis" class="form-control" list="penulis-datalist" value="<?php echo $a['username']; ?>" readonly>
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
	<label for="nama" class="col-sm-2 col-form-label">kategori</label>
	<div class="col-sm-10">
		<select name="kategori" class="form-control">
			<?php foreach ($this->db->get('kategori')->result() as $key => $value): ?>
				<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
			<?php endforeach ?>
		</select>
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
<div>
	<div class="form-group row" style="width: 50px 50px;">
	<label for="col-sm-6"></label>
	<a href="<?php echo base_url('index.php/Penulis_page') ?>" class="btn btn-sm btn-success">Back</a>
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