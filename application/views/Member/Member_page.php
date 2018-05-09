<?php $this->load->view("templates/header_home"); ?>

<div class="container">
	<div class="row">

		<?php foreach ($Jurnal as $key => $value): ?>
			<div class="col-md-4">
			<div class="card" style="">
 				 <img class="card-img-top" src="<?php echo base_url() ?>/uploads/fotopenulis/<?php echo $value['foto'] ?>" alt="Card image cap">
  				<div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
		</div>
		<?php endforeach ?>
		
	</div>
	
</div>
<?php $this->load->view("templates/footer_home");?>