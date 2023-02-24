<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Daftar</title>

  <link rel="stylesheet" type="text/css" href="style-form.css" />

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">

  <style>

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    #uji_kompetensi {
      padding-top: 95px;
      margin-top: -95px;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow fixed-top ">
    <h5 class="my-0 mr-md-auto font-weight-normal">Registrasi</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="index.php">Pilihan Beasiswa</a>
      <a class="p-2 text-dark" href="daftar.php">Daftar</a>
      <a class="p-2 text-dark" href="tampilandaftar.php">Hasil</a>
      <a class="p-2 text-dark" href="tabel.php">Tabel</a>
    </nav>
    </nav>
  </div>
<br>
<br>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
    <th>Nama</th>
      <th>Email</th>
      <th>Nomor HP</th>
      <th>Semester saat ini</th>
      <th>IPK Terakhir</th>
      <th>Pilihan beasiswa</th>
      <th>Berkas syarat</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    include 'koneksi.php';
    $query = "SELECT * FROM uji_kompetensi";
    $result = mysqli_query($db, $query);
    if (!$result) {
      die("Query Error: " . mysqli_errno($db) .
        " - " . mysqli_error($db));
    }
    while ($row = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td> <?= $row['nama']; ?></td>
        <td> <?= $row['masukkan_email']; ?></td>
        <td> <?= $row['no_hp']; ?></td>
        <td> <?= $row['semester_saat_ini']; ?></td>
        <td> <?= $row['ipk_terakhir']; ?></td>
        <td> <?= $row['pilihan_beasiswa']; ?></td>
        <td> <?= $row['pilih_file_untuk_upload']; ?></td>
        <td> <?= $row['status_ajuan']; ?></td>
        <td> <a href="update.php?id_daftar=<?php echo $row['id_daftar'];
                                                                                ?>&status_ajuan=<?php echo $row['status_ajuan']?>" class="btn btn-warning  btn-sm">
                                                        Verif
                                                    </a></td>
      </tr>

    <?php
    }
    ?>
  </tbody>
</table>


    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


  
    <!-- <footer class="container">
      <p>&copy; 2023 Kelompok 3 &middot; VSGA JWD</p>
    </footer>
  </main> -->
  <!-- Footer -->


  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Hari Wijaya</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  <script src="script.js"></script>

  <script src="js/jquery.slim.min.js"></script>

  <script src="js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <script>
    const ipk = 3.1;
    document.getElementById("ipk_terakhir").value = ipk;

    let formbeasiswaDiv = document.getElementById('formbeasiswa');
    let uploadDiv = document.getElementById('upload');
    let DaftarButton = document.getElementById('Daftar');
    

    let formBeasiswaHTML = '<div class="row"> <label for="pilihan_beasiswa" class="col-sm-3 col-form-label">Pilihan beasiswa</label><div class="col-sm-9"><select class="form-control" id="pilihan_beasiswa" name="pilihan_beasiswa" required><option value="">Pilih beasiswa</option><option value="Beasiswa Akademik">Beasiswa Akademik</option><option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option></select></div></div>';
    let uploadHTML = '<div class="row"> <label for="pilih_file_untuk_upload" class="col-sm-3 col-form-label">Upload Berkas Syarat</label><div class="col-sm-9"><input type="file" class="form-control" id="pilih_file_untuk_upload" name="pilih_file_untuk_upload" required></div></div>';

  if (ipk >= 3.0){

   formbeasiswaDiv.innerHTML = formBeasiswaHTML;
   uploadDiv.innerHTML = uploadHTML;
   DaftarButton.disabled= false;
  } else if (ipk <= 3.0) {
    DaftarButton.disabled= true;
  }
     


  </script>
</body>

</html>