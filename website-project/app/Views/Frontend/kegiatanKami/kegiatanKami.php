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
      <img class="img" src="/assets/images/work.png" alt="work" />
    </div>

    <!-- event page -->
    <?php 
      $count = 1;
      foreach ($rekomen->getResultArray() as $rekomendasi)
      {
        if($count == 1)
          $event1 = $rekomendasi;
        elseif($count == 2)
          $event2 = $rekomendasi;
        elseif($count == 3)
          $event3 = $rekomendasi;
        $count++;
      }
    ?>
    <div class="event">
      <div class="title2 title">
        <h1>Artikel Kegiatan</h1>
      </div>

      <div class="container">
        <div class="card">
          <div class="head">
            <div class="rekomen-img">
                <img src="/assets/images/artikel/<?php echo $event1['cover']?>" alt="thumnail">
            </div>
          </div>
          <div class="body">
            <h2>
              <a href="/home/detevent/<?php echo $event1['slug']?>"><?php echo $event1['judul']?></a>
            </h2>
          </div>
        </div>
        <div class="card">
          <div class="head">
            <div class="rekomen-img">
                <img src="/assets/images/artikel/<?php echo $event2['cover']?>" alt="thumnail">
            </div>
          </div>
          <div class="body">
            <h2>
              <a href="/home/detevent/<?php echo $event2['slug']?>"><?php echo $event2['judul']?></a>
            </h2>
          </div>
        </div>
        <div class="card card3">
          <div class="head">
            <div class="rekomen-img">
                <img src="/assets/images/artikel/<?php echo $event3['cover']?>" alt="thumnail">
            </div>
          </div>
          <div class="body">
            <h2>
              <a href="/home/detevent/<?php echo $event3['slug']?>"><?php echo $event3['judul']?></a>
            </h2>
          </div>
        </div>
      </div>
      <div class="btn">
        <a href="/home/event" class="button-link" target=”_blank”>Lihat Kegiatan Lainnya</a>
      </div>
    </div>

    <!-- dokumentasi -->
    <!-- <div class="dokumentasi">
      <div class="title3 title">
        <h1>Dokumentasi</h1>
      </div>
      <div class="gallery js-flickity" data-flickity-options='{ "contain": true, "wrapAround": true, "autoPlay": 2000 }'>
        <img class="gallery-cell" src="/assets/images/artikel/Logo Peer Group.jpg" ></img>
        <img class="gallery-cell" src="/assets/images/artikel/Logo Peer Group.jpg" ></img>
        <img class="gallery-cell" src="/assets/images/artikel/Logo Peer Group.jpg" ></img>
        <img class="gallery-cell" src="/assets/images/artikel/Logo Peer Group.jpg" ></img>
      </div> -->
  </main>
<?= $this->endsection();?>
<?= $this->section('js')?>
<!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--GASP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="/assets/js/index.js"></script>
<?= $this->endsection();?>