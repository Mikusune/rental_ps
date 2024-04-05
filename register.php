<?php

require 'koneksi/koneksi.php';
if(empty($_SESSION['USER']))
{
    session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
.header {
  background: #4f4aa6;
}
.btn {
  background: #4f4aa6;
}
  </style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="koneksi/proses.php?id=daftar">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Nama Pengguna</label>
  	  <input type="text" name="nama" class="form-control" required>
  	</div>
  	<div class="input-group">
  	  <label>username</label>
  	  <input type="text" name="user" class="form-control" required placeholder="" aria-describedby="helpId">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="pass" class="form-control" required placeholder="" aria-describedby="helpId">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>