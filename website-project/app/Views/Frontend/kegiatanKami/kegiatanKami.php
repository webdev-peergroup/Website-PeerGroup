<?= $this->extend('Frontend/layout/master');?>
<?= $this->section('content')?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js" crossorigin="anonymous"></script>
  <main class="l-main">
    <!-- first page -->
    <div class="first">
      <div class="title">
        <h1>Event yang diadakan</h1>
        <h1>PeerGroup</h1>
      </div>

      <img class="img title" src="/assets/images/work.png" alt="work" />
    </div>

    <!-- event page -->
    <div class="event">
      <div class="title2 title">
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
      <div class="btn">
        <a href="/artikel/event" class="button-link" target=”_blank”>Lihat Event Lainnya</a>
      </div>
    </div>

    <!-- dokumentasi -->
    <div class="dokumentasi">
      <div class="title3 title">
        <h1>Dokumentasi</h1>
      </div>
      <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <img class="gallery-cell" src="/assets/images/artikel/Logo Peer Group.jpg" ></img>
        <img class="gallery-cell" src="/assets/images/artikel/Logo Peer Group.jpg" ></img>
        <img class="gallery-cell" src="/assets/images/artikel/Logo Peer Group.jpg" ></img>
        <img class="gallery-cell" src="/assets/images/artikel/Logo Peer Group.jpg" ></img>
      </div>
  </main>
<?= $this->endsection();?>
<?= $this->section('js')?>
<!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--GASP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="/assets/js/index.js"></script>
<?= $this->endsection();?>