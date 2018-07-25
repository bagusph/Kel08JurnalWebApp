<?php $this->load->view("templates/header_home"); ?>

<div class="container" style="margin-top: 7rem;">
	<div class="row">
	   <div class="col-12">
      <h1><?php echo $jurnal['judul'] ?></h1> 
     </div>
     <div class="col-12">
       <img src="<?php echo base_url('uploads/fotopenulis/'.$jurnal['foto']) ?>" alt="">
     </div>
     <div class="col-6"> 
        <?php echo $jurnal['abstract'] ?>
     </div>
     <div class="col-6 text-success">
       <p>Keyword : <?php echo $jurnal['keyword'] ?></p>
     </div>
     <div class="col-6 text-primary">
       <p>Refrensi : <?php echo $jurnal['referensi'] ?></p>
     </div>
	</div>
</div>

<?php $this->load->view("templates/footer_home");?>