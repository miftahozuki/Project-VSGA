<?php
include 'koneksi.php';
$id = $_GET['id'];
$kegiatan = mysqli_query($host, "SELECT * from kegiatan where id_kegiatan='$id'");
$row = mysqli_fetch_array($kegiatan);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Kegiatan</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="index.php"><button class="btn btn-danger">Kembali</button></a>
            </li>
          </ul>

          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <a href="login.php"> <button  role="button" class="btn btn-primary">Login</button>
      </a>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Post-->
      <section class="mt-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">

              <h2><?php echo $row['nama_kegiatan'];?></h2>
              <input type="hidden" value="<?php echo $row['tgl_kegiatan'];?>" id="tgl_kegiatan">
              <span id="day"></span>
              <img src="<?php echo $row['foto_kegiatan'];?>" class="img-fluid" alt="">

            </div>
            <!--/.Featured Image-->


            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">

                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['desc_kegiatan'];?></p>

              </div>

            </div>
            <!--/.Card-->

            <!-- author -->
            <!--Reply-->
            <div class="card mb-3 wow fadeIn">
              <!-- kosongin -->
            </div>
            <!--/.Reply-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card: Jumbotron-->
            <div class="card blue-gradient mb-4 wow fadeIn">

            </div>
            <!--Card: Jumbotron-->

            <!--Card : Dynamic content wrapper-->
            <div class="card mb-4 text-center wow fadeIn">

              <hr>
              <div class="card-header">Anda ingin mendapatkan informasi terbaru tentang website ini?</div>

              <!--Card content-->
              <div class="card-body">

                <!-- Default form login -->
                <form>

                  <!-- Default input email -->
                  <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                  <input type="email" id="defaultFormLoginEmailEx" class="form-control">

                  <br>

                  <!-- Default input password -->
                  <label for="defaultFormNameEx" class="grey-text">Your name</label>
                  <input type="text" id="defaultFormNameEx" class="form-control">

                  <div class="text-center mt-4">
                  </div>
                </form>
                <button class="btn btn-info btn-md">Subscribe</button>
                <!-- Default form login -->

              </div>

            </div>
            <!--/.Card : Dynamic content wrapper-->

            <!--Card-->
            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header font-weight-bold">
                <span>About&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span class="pull-right">
                  <a href="">
                    <i class="fab fa-facebook-f mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-twitter mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-instagram mr-2"></i>
                  </a>
                  <a href="">
                    <i class="fab fa-linkedin-in mr-2"></i>
                  </a>
                </span>
              </div>

              <!--Card content-->
              <div class="card-body">

                <div class="media d-block d-md-flex mt-3">
                  <img class="d-flex mb-3 mx-auto z-depth-1" src="img/miftahus.svg"
                    alt="Generic placeholder image" style="width: 100px;">
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <h5 class="mt-0 font-weight-bold">Author
                    </h5>
                    <p class=" text-left">
                    Halo, saya Miftahus asal Politeknik Negeri Jember. Salam kenal 👋 
                </div>

              </div>

            </div>
            <!--/.Card-->

            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->
  <footer class="bg-light text-lg-start">

    <hr>


    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 | Created with Love by Miftahus
      <!-- <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
    </div>
    <!-- Copyright -->
  </footer>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <script>
          function displayDayFromDate() {
              var tgl = document.getElementById("tgl_kegiatan").value;
              var inputDate = new Date(tgl); // Ganti dengan tanggal yang diinginkan
              var days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
              var dayName = days[inputDate.getDay()];

              document.getElementById("day").textContent = "🕓 " +dayName +", " + tgl;;

          }

          // Panggil fungsi displayDayFromDate saat halaman selesai dimuat
          window.onload = displayDayFromDate;
      </script>
</body>

</html>
