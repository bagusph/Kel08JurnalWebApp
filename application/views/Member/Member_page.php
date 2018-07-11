<?php $this->load->view("templates/header_home"); ?>

<div class="container" style="margin-top: 7rem;">
	<div class="row">
<?php foreach ($Jurnal as $key => $value): ?>
	<div class="media" style="margin-top: 3rem;">
  <div class="media-left">
    <a href="#">
      <img class="media-object" src="<?php echo base_url() ?>/uploads/fotopenulis/<?php echo $value['foto'] ?>" alt="..." width="150px">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php echo $value['judul'] ?></h4>
    <?php echo $value['abstract'] ?>
    <a href="<?php echo base_url('Member_page/jurnal/'.$value['id']) ?>">Detail</a>
  </div>
</div>
<?php endforeach ?>
		<div class="container">
	<center><?php 
        if(isset($links)){
          echo $links;
        } ?></center>
</div>
	</div>
</div>

<?php $this->load->view("templates/footer_home");?>