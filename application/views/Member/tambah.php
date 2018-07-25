<?php $this->load->view('templates/header_home') ?>
<main role="main" class="container">
	<div class="jumbotron">
		<h1>Tambah Member</h1>
	</div>

	<!-- load header -->
	<!-- action akan dilakukan ke controller product dengan fungsi tambah -->
	<!-- PS : 
	name pada input harus sama dengan table didatabase
	intinya hanya pada syntax input dan form saja lainnya dari bootstrap e
-->
<?php echo form_open_multipart('Member/tambah'); ?>
<div class="form-group row">
	<label for="username" class="col-sm-2 col-form-label">Username</label>
	<div class="col-sm-10">
		<input type="text" name="username" class="form-control" id="username" value="" placeholder="username">
		<?php echo form_error('username') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-sm-10">
		<input type="text" name="password" class="form-control" id="password" value="" placeholder="password">
		<?php echo form_error('password') ?> <!-- menampilkan error saat rule nama gagal -->
	</div>
</div>
<div class="form-group row">
	<label for="role" class="col-sm-2 col-form-label">Role</label>
	<div class="col-sm-10">
		<select name="fk_id_role" class="form-control">
			<?php foreach ($this->db->get('role')->result() as $key => $value): ?>
				<option value="<?php echo $value->id_role ?>"><?php echo $value->nama_role ?></option>
			<?php endforeach ?>
		</select>
	</div>
</div>
<?php echo validation_errors() ?>
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