<?php $this->load->view("templates/header_home"); ?>

<br><br><br>

<!-- Begin page content -->
<main role="main" class="container">
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Tulis Jurnal</h1>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					
				
					<?php echo validation_errors(); ?>
					<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
					<?php echo form_open_multipart( 'Penulis/Penulis_page', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
					<div class="form-group">
						<label for="title">Judul Jurnal</label>
						<input type="text" class="form-control" name="title" value="<?php echo set_value('title') ?>" required>
					</div>

					<div class="form-group">
						<label for="text">Konten</label>
						<textarea class="form-control" name="text" rows="3" required><?php echo set_value('text') ?></textarea>	
					</div>
					
					<div class="form-group">
						<label for="thumbnail">File Jurnal</label>
						<input type="file" class="form-control-file" name="thumbnail">
					</div>
					<button id="submitBtn" type="submit" class="btn btn-primary">Upload Jurnal</button>
				</form>
			</div>
		</div>
	</div>
</section>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
// (function() {
//   'use strict';
//   window.addEventListener('load', function() {
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.getElementsByClassName('needs-validation');
//     // Loop over them and prevent submission
//     var validation = Array.prototype.filter.call(forms, function(form) {
//       form.addEventListener('submit', function(event) {
//         if (form.checkValidity() === false) {
//           event.preventDefault();
//           event.stopPropagation();
//         }
//         form.classList.add('was-validated');
//       }, false);
//     });
//   }, false);
// })();
</script>
</main>

<?php     $this->load->view("templates/footer_home");?>
