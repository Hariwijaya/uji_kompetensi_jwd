<?php

include 'koneksi.php';

$uji_kompetensi = mysqli_query($db, "SELECT * FROM uji_kompetensi WHERE id_daftar = '$_GET[id_daftar]'");
$d = mysqli_fetch_object($uji_kompetensi);

?>

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

        #wisata {
            padding-top: 95px;
            margin-top: -95px;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        @media print {
            body * {
                visibility: hidden;
            }


            #cetak-tiket,
            #cetak-tiket * {
                visibility: visible;
            }

            #tombol-cetak {
                visibility: hidden;
            }

            #cetak-tiket {
                left: 0px;
                top: 0px;
                position: absolute;
            }

            p {
                page-break-before: always;
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
  </div>

    <main role="main">
        <div style="margin-top: 5rem;">
            <div id="cetak-tiket">
                <h2 align="center"><b>CEK HASIL BEASISWA</b></h2>
                <hr width="300"><br>
                <table align="center" cellpadding="3" align="center" width="400">
                    <tr>
                        <td>Nama</td>
                        <td>: <?php echo @$d->nama ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <?php echo @$d->masukkan_email ?></td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                        <td>: <?php echo @$d->no_hp ?></td>
                    </tr>
                    <tr>
                        <td>Semester saat ini</td>
                        <td>: <?php echo @$d->semester_saat_ini ?></td>
                    </tr>
                    <tr>
                        <td>IPK terakhir</td>
                        <td>: <?php echo @$d->ipk_terakhir ?> </td>
                    </tr>
                    <tr>
                        <td>Pilihan beasiswa</td>
                        <td> : <?php echo @$d->pilihan_beasiswa ?> </td>
                    </tr>
                    <tr>
                        <td>Upload berkas syarat</td>
                        <td>:  <?php echo @$d->pilih_file_untuk_upload ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:  <?php echo @$d->status_ajuan ?></td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-info mt-2" id="tombol-cetak" href="javascript:if(window.print)window.print()">Cetak</a>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
  
            <p>&copy; 2023 Kelompok 3 &middot; VSGA JWD</p>
        </footer>
    </main>

    <script src="script.js"></script>

    <script src="js/jquery.slim.min.js"></script>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>