<?php

function tampilkan(){
  global $link;

  $query = "SELECT * FROM t_blog";
  $result = mysqli_query($link, $query) or die ('Gagal Untuk Menampilkan Data');

  return $result;
}

function tampilkan_per_id($id){
  global $link;
  $query = "SELECT * FROM t_blog WHERE id=$id";
  $result = mysqli_query($link, $query) or die ('Gagal Untuk Menampilkan Data');

  return $result;
}
function hasil_cari($cari){
  $query  = "SELECT * FROM t_blog WHERE judul LIKE '%$cari%'";
  return result($query);
}

function result($query){
  global $link;
  if($result = mysqli_query($link, $query) or die('gagal menampilkan data')){
    return $result;
  }
}

function tambah_data($judul, $konten, $tag){
  $judul = escape($judul);
  $konten= escape($konten);
  $tag = escape($tag);
  $query = "INSERT INTO t_blog (judul, isi, tag) VALUES ('$judul', '$konten', '$tag')";
  return run($query);
}

function edit_data($judul, $konten, $tag, $id){
  $query = "UPDATE t_blog SET judul='$judul', isi='$konten', tag='$tag' WHERE id=$id";
  return run($query);
}

function hapus_data($id){
  $query = "DELETE FROM t_blog WHERE id=$id";
  return run($query);
}

function run ($query){
  global $link;

  if(mysqli_query($link, $query)) return true;
  else return false;
  }

function excerpt($string){
  $string = substr($string, 0, 13);
  return $string . "....";
}

function escape($data){
  global $link;
  return mysqli_real_escape_string($link, $data);
}
 ?>
