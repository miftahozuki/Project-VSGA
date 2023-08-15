<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Portal BPSDMP</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sb-admin-2.css" />

    <style>
      .content {
        display: none;
      }

      .content.active {
        display: block;
      }

      @keyframes shake {
        0%,
        100% {
          transform: translateX(0);
        }
        10%,
        30%,
        50%,
        70%,
        90% {
          transform: translateX(-10px);
        }
        20%,
        40%,
        60%,
        80% {
          transform: translateX(10px);
        }
      }

      .shaking-text {
        display: inline-block;
        animation: shake 5s infinite;
      }
    </style>
  </head>
  <body>
    <header>
      <!-- Intro settings -->
      <style>
        #intro {
          /* Margin to fix overlapping fixed navbar */
          margin-top: 58px;
        }
        @media (max-width: 991px) {
          #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 45px;
          }
        }
      </style>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="#">
            <img
              src="img/logo.png"
              height="30"
              alt=""
              loading="lazy"
              style="margin-top: -3px"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about" rel="nofollow">About</a>
              </li>
            </ul>

            <ul class="navbar-nav d-flex flex-row">
              <!-- Icons -->
              <a href="login.php">
                <button role="button" class="btn btn-primary">Login</button>
              </a>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

      <!-- Jumbotron -->
      <div id="intro" class="p-5 text-center bg-light">
        <h1 class="mb-3 h2">BERANDA</h1>
        <hr />
        <p><span class="shaking-text">SELAMAT DATANG</span></p>
        <p>
          Silakan jelajahi situs web kami, temukan informasi yang Anda butuhkan,
          dan jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan
          atau ingin berkolaborasi.
        </p>
        <p>
          Kami sangat menghargai partisipasi Anda dalam menjadikan komunikasi
          dan informatika sebagai sumber daya yang kuat dan berdampak positif.
        </p>
      </div>
      <!-- Jumbotron -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="my-1">
      <div class="container">
        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-1"><strong>KEGIATAN TERKINI</strong></h4>
          <hr />

          <div class="row">
            <?php
        include 'koneksi.php';
         $kegiatan = mysqli_query($host, "SELECT * FROM `kegiatan` ORDER BY tgl_kegiatan desc;");
        $no=1;
                                
        foreach ($kegiatan as $row) {
          echo '
            <div class="col-lg-4 col-md-12 mb-2">
              <div class="card content">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="'.$row["foto_kegiatan"].'" class="img-fluid" />

                  <a href="page.php?id='.$row["id_kegiatan"].'">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">'.$row["nama_kegiatan"].'</h5>
                  <p class="text-center"><i>&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
              <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
            </svg></i>&nbsp;'.$row["tgl_kegiatan"].'</p>
                  <a href="page.php?id='.$row["id_kegiatan"].'" class="btn btn-primary">Baca</a>
                </div>
              </div>
            </div>';

          }
          ?> 
          </div>
        </section>
        <!--Section: Content-->

        <!-- Pagination -->
        <nav class="my-4" aria-label="...">
          <div class="pagination justify-content-center">
            <a href="#" class="prev-page"><< Previous&nbsp;&nbsp;</a>
            <p>|</p>
            <a href="#" class="next-page">&nbsp;&nbsp;Next >></a>
          </div>
        </nav>
      </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
      <hr class="m-0" />

      <div id="about" class="text-center py-4 align-items-center">
        <h2>About</h2>
        <p>
          Balai Pengembangan Sumber Daya Manusia dan Penelitian Komunikasi dan
          Informatika Surabaya <br />Badan Penelitian dan Pengembangan Sumber
          Daya Manusia - Kementerian Komunikasi dan Informatika Republik
          Indonesia
        </p>
        <p>
          Alamat: Jl. Raya Ketajen No.36, Ketajen, Kec. Gedangan,
          <br />Kabupaten Sidoarjo, Jawa Timur 61254
          <br />
          Telepon: (031) 8011944
          <br />
          Provinsi: Jawa Timur
        </p>
        <a class="btn btn-primary m-1" role="button" rel="nofollow">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn btn-primary m-1" role="button" rel="nofollow">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="btn btn-primary m-1" role="button" rel="nofollow">
          <i class="fab fa-github"></i>
        </a>
      </div>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 | Created with Love by Miftahus
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function () {
        const itemsPerPage = 3;
        let currentPage = 1;

        function showItems() {
          $(".content").removeClass("active");
          const startIndex = (currentPage - 1) * itemsPerPage;
          const endIndex = startIndex + itemsPerPage - 1;
          $(".content")
            .slice(startIndex, endIndex + 1)
            .addClass("active");
        }

        showItems();

        $(".prev-page").on("click", function (e) {
          e.preventDefault();
          if (currentPage > 1) {
            currentPage--;
            showItems();
          }
        });

        $(".next-page").on("click", function (e) {
          e.preventDefault();
          const totalItems = $(".content").length;
          const totalPages = Math.ceil(totalItems / itemsPerPage);
          if (currentPage < totalPages) {
            currentPage++;
            showItems();
          }
        });
      });
    </script>
  </body>
</html>
