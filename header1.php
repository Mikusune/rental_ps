<!doctype html>
<html lang="en">
  <head>
    <title>rental ps</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.css" >
    <link rel="stylesheet" href="assets/css_cia/style.css" >

    <style>
        .col-sm-8 {
            color: white;
        }
        .header {
            background-color: #4f4aa6 !important;
            padding: 15px;
            position: relative;
        }
        
    </style>
  </head>
  <body>
  <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                           <h2><b style="text-transform:uppercase;color:white;" ><?= $info_web->nama_rental;?> </b></h2>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="blog.php">Daftar PS</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="kontak.php">Kontak Kami</a>
                              </li>
                              <?php if(!empty($_SESSION['USER'])){?>
                              <li class="nav-item">
                                 <a class="nav-link" href="history.php">History</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="profil.php">Profil</a>
                              </li>
                              <?php }?>
                              <?php if(!empty($_SESSION['USER'])){?>
                              <li class="nav-item">
                                 <a class="nav-link" href="">
                                 <i class="fa fa-user"> </i> Hallo, <?php echo $_SESSION['USER']['nama_pengguna'];?>
                                 </a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" onclick="return confirm('Apakah anda ingin logout ?');" href="<?php echo $url;?>admin/logout.php">Logout</a>
                               </li>
                              <?php }?>
                              <?php if(empty($_SESSION['USER'])){?>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="<?php echo $url;?>login.php">Login</a>
                              </li>
                              <?php }?>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- Javascript files-->
      <script src="assets/css_cia/js/jquery.min.js"></script>
      <script src="assets/css_cia/js/js/popper.min.js"></script>
      <script src="assets/css_cia/js/js/bootstrap.bundle.min.js"></script>
      <script src="assets/css_cia/js/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="assets/css_cia/js/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="assets/css_cia/js/js/custom.js"></script>