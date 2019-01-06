<?php
$login = false;
if(isset($_SESSION['user'])){
$login = true;
}
  ?>


<head>
  <title>Sistem Informasi Widyatama </title>
  <link rel="stylesheet" href="view/style.css">
</head>

<center><h1> Blog Sistem Informasi</h1></center>
<div id="menu">
<a href="index.php" class="tlacidlo">Home</a>
  <?php if($login): ?>
  <a href="add.php"  class="tlacidlo">Tambah</a>
  <a href="logout.php" class="tlacidlo">Logout</a>
<?php else: ?>
  <a href="logout.php"  class="tlacidlo">Login</a>
<?php endif; ?>
</div>
