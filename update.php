<?php
include 'koneksi.php';

$id_daftar = $_GET['id_daftar'];
$status_ajuan = $_GET['status_ajuan'];

if ($status_ajuan == "Belum Diverifikasi") {
  $pesan = mysqli_query($db, "UPDATE uji_kompetensi SET status_ajuan='Terverifikasi' WHERE id_daftar='$id_daftar'");
} else if ($status_ajuan == "Terverifikasi") {
  $pesan = mysqli_query($db, "UPDATE uji_kompetensi SET status_ajuan='Belum Diverifikasi' WHERE id_daftar='$id_daftar'");
}

echo $status_ajuan;
if ($pesan) {
  echo "<script> alert ('Data Berhasil Disimpan')</script>";
} else {
  echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
  echo mysqli_error($db);
}

header("location:tabel.php");