<?php $this->load->view("templates/header_home"); ?>

<div class="container" style="margin-top: 7rem;">
  <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="<?php echo base_url("Member_page/index") ?>">All</a></li>
  <?php foreach ($this->db->get('kategori')->result() as $key => $value): ?>
    <li role="presentation"><a href="<?php echo base_url("Member_page/index/".$value->nama) ?>"><?php echo $value->nama ?></a></li>
  <?php endforeach ?>
</ul>
	<div class="row">
<?php foreach ($Jurnal as $key => $value): ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="background-color: #dcdee2;">
      <img src="<?php echo base_url() ?>/uploads/fotopenulis/<?php echo $value['foto'] ?>" alt="..." style="max-height: 200px;min-height: 200px;">
      <div class="caption">
        <h3 class="text-center"><?php echo $value['judul'] ?></h3>
        <p class="text-justify"><?php echo substr($value['abstract'], 0,200) ?></p>
        <div class="row">
          <div class="col-md-6">
          <p class="text-primary"><?php echo $this->db->where("id",$value['kategori'])->get('kategori')->row(0)->nama; ?></p>
        </div>
        <div class="col-md-6">
          <p class="text-right"><a href="<?php echo base_url('Member_page/jurnal/'.$value['id']) ?>" class="btn btn-primary" role="button">Lihat </a></p>
        </div>
        </div>
      </div>
    </div>
  </div>  
	<!-- <div class="media" style="margin-top: 3rem;">
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
</div> -->
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