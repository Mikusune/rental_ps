<?php

require 'koneksi/koneksi.php';
if(empty($_SESSION['USER']))
{
    session_start();
}
include 'header_home.php';
if($_GET['cari'])
{
    $cari = strip_tags($_GET['cari']);
    $query =  $koneksi -> query('SELECT * FROM playstation WHERE j_ps LIKE "%'.$cari.'%" ORDER BY id_ps DESC')->fetchAll();
}else{
    $query =  $koneksi -> query('SELECT * FROM playstation ORDER BY id_ps DESC')->fetchAll();
}

?>
<head>
<link rel="stylesheet" href="assets/css_cia/style.css">
<link rel="stylesheet" href="assets/css_1/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<style> 
.slider_section .slider_container {
  background-color: #4f4aa6 !important;
  padding: 100px !important;
}
.slider_section .detail-box a{
  background-color: #48ca95 !important;
}
.slider_section .img-box img {
    width: 400px !important;
}
.slider_section .detail-box h1 {
    margin-left: 20%;
    color: white;
}
.slider_section p {
    margin-left: 20%;
}
.slider_section .detail-box a {
    margin-left: 20%;
}
.laptop {
    padding: 48px 0;
}
element.style {
    height: 100% !important;
}
.card-body {
    padding-top: 50px;
}
</style>

</head>
      <!-- banner -->
       <!-- slider section -->
    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome To Our <br>
                        Rental PS
                      </h1>
                      <p>
                      Hiburan Tanpa Batas, PS Rental Menyediakan Kesenangan Sesuai Keinginanmu!
                      </p>
                      <a href="blog.php">
                        Sewa Disini
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="assets/image/console.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- shop section -->

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          console yang di sewakan
        </h2>
      </div>
      <div class="container">
<div class="row">
    <div class="col-sm-12">
        <?php 
            if($_GET['cari'])
            {
                echo '<h4> Keyword Pencarian : '.$cari.'</h4>';
            }else{
                echo '<h4> </h4>';
            }
        ?>
        <div class="row mt-3">
        <?php 
            $no =1;
            foreach($query as $isi)
            {
        ?>
            <div class="col-sm-4">
                <div class="card">
                <img src="assets/image/<?php echo $isi['gambar'];?>" class="card-img-top" style="height:200px;object-fit:cover;">
                    <div class="card-body" style="background:#ddd">
                        <h5 class="card-title"><?php echo $isi['j_ps'];?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php if($isi['status'] == 'Tersedia'){?>
                            <li class="list-group-item bg-primary text-white">
                                <i class="fa fa-check"></i> Available
                            </li>
                        <?php }else{?>
                            <li class="list-group-item bg-danger text-white">
                                <i class="fa fa-close"></i> Not Available
                            </li>
                        <?php }?>
                        <li class="list-group-item bg-info text-white"><i class="fa fa-check"></i> Free voucher</li>
                        <li class="list-group-item bg-dark text-white">
                            <i class="fa fa-money"></i> Rp. <?php echo number_format($isi['harga']);?>/ day
                        </li>
                    </ul>
                    <div class="card-body">
                        <center>
                            <a href="booking.php?id=<?php echo $isi['id_ps'];?>" class="btn btn-success">Booking now!</a>
                            <a href="detail.php?id=<?php echo $isi['id_ps'];?>" class="btn btn-info">Detail</a>
                        </center>
                    </div>
                </div>
            </div>
            <?php $no++;}?>
        </div>
    </div>
</div>
</div>
      <div class="btn-box">
        <a href="blog.php">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->
    <!-- end slider section -->    
                        </br>
<div class="laptop">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                     <p>gratis voucher setiap penyewaan</p>
                     <h2>Up to 40% off !</h2>
                     <a class="read_more" href="blog.php">Shop Now</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="laptop_box">
                     <figure><img src="assets/image/voucher.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
                        </br>
      <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Contact Us
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Universitas+Bina+Sarana+Informatika+Kampus+Margonda+(UBSI+Margonda)" width="900" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
        <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">Nama Rental</div>
                        <div class="col-sm-8"><?= $info_web->nama_rental;?></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-4">Telp</div>
                        <div class="col-sm-8"><?= $info_web->telp;?></div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">Alamat</div>
                        <div class="col-sm-8"><?= $info_web->alamat;?></div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">Email</div>
                        <div class="col-sm-8"><?= $info_web->email;?></div>
                    </div>
                
                    <div class="row mt-3">
                        <div class="col-sm-4">No Rekening</div>
                        <div class="col-sm-8"><?= $info_web->no_rek;?></div>
                    </div>
      </div>
      </div>
    </div>
  </section>
              </br>
<?php
include 'footer.php';
?>