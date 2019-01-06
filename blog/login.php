<?php
require_once "core/init.php";

$login = false;
if(isset($_SESSION['user'])){
  $login = true;
}

$error ='';

if(isset($_POST['submit'])){
  $nama  = $_POST['nama'];
  $pass  = $_POST['password'];

  if(!empty(trim($nama)) && !empty(trim($pass))){
      $_SESSION['user'] = $nama;
    if(cek_data($nama, $pass)){
        header('Location: index.php');
    }else{
        $error = 'ada masalah saat login';
    }

  }else{
    $error = 'nama dan password wajib diisi';
  }
}
 require_once "view/header.php";
 ?>

 <html>
   <head>
     <title>Halaman Login Blog Sistem Informasi</title>
     <link rel="stylesheet" href="style.css">
   </head>
 <body>
   <div class="konten">
       <div class="kepala">
           <div class="lock"></div>
           <h2 class="judul">Login ke Blog ?</h2>
       </div>
   <div class="artikel">
     <form action="" method="post">
       <div class="grup">
         <label for ="nama">Nama</label>
         <input type="text" name="nama" placeholder="Masukkan Username">
       </div>

       <div class="grup">
         <label for="password">Password</label><br>
         <input type="password" name="password" placeholder="Masukkan Password">
       </div>

       <div id="error"><?=$error ?></div>

     <div class="grup">
     <input type="submit" name="submit" value="Sign In">
     <div id="sign">
     <a href="register.php">Sign Up ?</a>
    </div>

    </div>
   </form>
 </body>
 </html>
