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
    if(register_user($nama, $pass)){
        header('Location: index.php');
    }else{
        $error = 'ada masalah saat daftar';
    }

  }else{
    $error = 'nama dan password wajib diisi';
  }
}
 require_once "view/header.php";
 ?>

 <html>
   <head>
     <title>Halaman Daftar Blog Sistem Informasi</title>
     <link rel="stylesheet" href="style.css">
   </head>
 <body>
   <div class="konten">
       <div class="kepala">
           <div class="lock"></div>
           <h2 class="judul">Daftar Jadi Member ?</h2>
       </div>
   <div class="artikel">
     <form action="" method="post">
       <div class="grup">
         <label for ="nama">Username</label>
         <input type="text" name="nama" placeholder="Masukkan Username">
       </div>

       <div class="grup">
         <label for="password">Password</label><br>
         <input type="password" name="password" placeholder="Masukkan Password">
       </div>

       <div id="error"><?=$error ?></div>

     <div class="grup">
     <input type="submit" name="submit" value="Daftar">
     <div id="sign">
     <a href="login.php">Sudah jadi member ?</a>
    </div>

    </div>
   </form>
 </body>
 </html>
