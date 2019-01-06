<?php
require_once "core/init.php";
require_once "view/header.php";

$login = false;
if(isset($_SESSION['user'])){
$login = true;
}


$articles = tampilkan();

if(isset($_GET['cari'])){
  $cari     = $_GET['cari'];
  $articles = hasil_cari($cari);
}
require_once "view/header.php";
 ?>

 <form action="" method="get">
   <input type="search" name="cari" placeholder="Cari">
 </form>


<?php while($row = mysqli_fetch_assoc($articles)): ?>

  <div class="each_article">
    <h3><a href="single.php?id=<?= $row['id']; ?>"><?= $row['judul']; ?></a></h3>
    <p>
      <?= excerpt($row['isi']); ?>
    </p>
    <p class="waktu"><?= $row['waktu']; ?></p>
    <p class="tag">Tag : <?= $row['tag']; ?></p>

  <?php if($login): ?>
      <a href="edit.php?id=<?= $row['id']; ?>"> Edit </a>
      <a href="delete.php?id=<?= $row['id']; ?>"> Hapus </a>
  <?php endif; ?>
  </div>
<?php endwhile; ?>

 <?php
 require_once "view/footer.php";
  ?>
