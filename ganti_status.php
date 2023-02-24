<?php
include 'koneksi.php';

$id_daftar = $_GET['id_daftar'];
$status_ajuan = $_GET['status_ajuan'];

$pesan = mysqli_query($db, "UPDATE uji_kompetensi SET status_ajuan='$status_ajuan'");

if ($pesan) {
  echo "<script> alert ('Data Berhasil Disimpan')</script>";
  $last_id = mysqli_insert_id($db);
} else {
  echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
  echo mysqli_error($db);
}

header("location:tabel.php");