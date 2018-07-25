<?php $this->load->view("templates/header_home"); ?>
<div class="jumbotron text-center">
  <h1>Journal Application</h1> 
  <p>Your Private Online Journal</p> 
  <form>
    <div class="input-group">
  <!--  	<img src="/Application/image/home/home.jpg"> -->

    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="jurnal" class="container-fluid">
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
<?php endforeach ?>
  </div>
</div>
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Tentang Jurnal Aplikasi</h2><br>
      <h4>Jurnal aplikasi ini adalah Karya anak bangsa dan bla bla blaa,</h4><br>
      <p>Semoga Jurnal ini bermanfaan bagi kita semua ,,,, yeee</p>

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<!-- Container (About Section)
<div id="penulis" class="jumbotron text-center">
  <p class="text-center">Penulis</p>
  <h3 class="text-center">Jika Anda ingin mengupload jurnal silahkan klik di sini</h3>
  <div class="row">
      <center><a class="btn btn-primary" href="<?php echo site_url('login') ?>" role="button">Link</a></center>
    </div>
  </div>
</div>-->



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>
Hubungi kami Apabila ada yang perlu di tanyakan.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Jl. Sokarno Hatta, Jatimulyo Malang</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Sukasuka@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
      </div>
      <div class="row">
      </div>
    </div>
  </div>
</div>





<?php     $this->load->view("templates/footer_home");?>
