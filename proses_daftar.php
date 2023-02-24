<?php
//koneksi ke database
include 'koneksi.php';

$nama = $_POST['nama'];
$masukkan_email = $_POST['masukkan_email'];
$no_hp = $_POST['no_hp'];
$semester_saat_ini = $_POST['semester_saat_ini'];
$ipk_terakhir = $_POST['ipk_terakhir'];
$pilihan_beasiswa = $_POST['pilihan_beasiswa'];
// $pilih_file_untuk_upload = $_POST['pilih_file_untuk_upload'];
$status = 'Belum Diverifikasi';


// ambil data file
$namaFile = $_FILES['pilih_file_untuk_upload']['name'];
$namaSementara = $_FILES['pilih_file_untuk_upload']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "berkas/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

$uji_kompetensi = mysqli_query($db, "INSERT INTO uji_kompetensi VALUES ('', '$nama','$masukkan_email','$no_hp','$semester_saat_ini','$ipk_terakhir','$pilihan_beasiswa','$namaFile','$status')");
if ($uji_kompetensi) {
  echo "<script> alert ('Data Berhasil Disimpan')</script>";
  $last_id = mysqli_insert_id($db);
  header("refresh:0;tampilandaftar.php?id_daftar=" . $last_id);
} else {
  echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
  echo mysqli_error($db);
}
