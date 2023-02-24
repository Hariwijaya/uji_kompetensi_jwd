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

  <main role="main">
    <div style="margin-top: 5rem;">
      <form action="proses_daftar.php" method="POST" enctype="multipart/form-data">>

        <h2 class="mb-4">Registrasi Beasiswa</h2>
        <div class="row">
          <label for="nama" class="col-sm-3 col-form-label">Masukkan Nama</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
        </div>

        <div class="row">
          <label for="masukkan_email" class="col-sm-3 col-form-label">Masukkan Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="masukkan_email" name="masukkan_email" required>
          </div>
        </div>

        <div class="row">
          <label for="no_hp" class="col-sm-3 col-form-label">No. HP</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
          </div>
        </div>

        <div class="row">
          <label for="semester_saat_ini" class="col-sm-3 col-form-label">Semester saat ini</label>
          <div class="col-sm-9">
            <select class="form-control" id="semester_saat_ini" name="semester_saat_ini" required>
              <option value="">Pilih semester saat ini</option>
              <option value="Semester 1">Semester 1</option>
              <option value="Semester 2">Semester 2</option>
              <option value="Semester 4">Semester 4</option>
              <option value="Semester 5">Semester 5</option>
              <option value="Semester 6">Semester 6</option>
              <option value="Semester 7">Semester 7</option>
              <option value="Semester 8">Semester 8</option>
            </select>
          </div>
        </div>

        <div class="row">
          <label for="ipk_terakhir" class="col-sm-3 col-form-label">IPK Terakhir</label>
          <div class="col-sm-9">
            <input readonly type="text" class="form-control" id="ipk_terakhir" name="ipk_terakhir" required>
          </div>
        </div>

        <div id="formbeasiswa">
        </div>

        <div id="upload">

        </div>

            <button type="reset" id="Batal">Batal</button>
            <button type="submit" id="Daftar">Daftar</button>
          </div>
        </div>
      </form>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>&copy; 2023 Kelompok 3 &middot; VSGA JWD</p>
    </footer>
  </main>

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