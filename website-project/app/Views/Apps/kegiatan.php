<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="kegiatankami.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/IMG_20220512_092342.png" alt="" width="50" height="50" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Our Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- first page -->
    <div class="first">
      <div class="title">
        <h1>Event yang diadakan</h1>
        <h1>PeerGroup</h1>
      </div>

      <img class="img" src="img/img1.png" alt="" />
    </div>

    <!-- event page -->
    <div class="event">
      <div class="title2">
        <h1>Event</h1>
      </div>

      <div class="container">
        <div class="card">
          <div class="head"></div>
          <div class="body">
            <h2>Judul</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="fot">
            <p>22 Januari 2022</p>
          </div>
        </div>
        <div class="card">
          <div class="head"></div>
          <div class="body">
            <h2>Judul</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="fot">
            <p>22 Januari 2022</p>
          </div>
        </div>
        <div class="card">
          <div class="head"></div>
          <div class="body">
            <h2>Judul</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="fot">
            <p>22 Januari 2022</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Dokumentasi page -->
    <div class="dokumentasi">
      <div class="title3">
        <h1>Dokumentasi</h1>
      </div>

      <div class="slider">
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="dokumen/dok1.jpg" /></div>
            <div class="swiper-slide"><img src="dokumen/dok1.jpg" /></div>
            <div class="swiper-slide"><img src="dokumen/dok1.jpg" /></div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>

    <!-- Contact page -->
    <div class="kontak">
      <div class="logo2"><img src="img/IMG_20220512_092342.png" alt="" /></div>

      <div class="data">
        <div class="alamat">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <p>Velit exercitationem ab consectetur debitis qui</p>
        </div>

        <div class="sosmed">
          <h2>Contact Us</h2>

          <ul class="icon">
            <li>
              <a href=""><img src="icon/Vector.svg" alt="" /></a>
            </li>
            <li>
              <a href=""><img src="icon/Vector-1.svg" alt="" /></a>
            </li>
            <li>
              <a href=""><img src="icon/Vector-2.svg" alt="" /></a>
            </li>
            <li>
              <a href=""><img src="icon/Vector-3.svg" alt="" /></a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
      <div class="copy">
        <h3>Copyright © Peergroup.id</h3>
        <h3>2022</h3>
      </div>
    </div>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
      const swiper = new Swiper(".swiper", {
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        // Optional parameters

        loop: true,

        speed: 1500,

        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
