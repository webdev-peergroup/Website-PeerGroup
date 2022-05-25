<?= $this->extend('/Apps/header-footer');?>
<?= $this->section('content')?>
    <main class="l-main">

        <!--Home-->
        <section class="home">
            <div class="home__container bd-grid">
                <div class="content">
                    <h1 class="title">Self-development bukan hanya pengetahuan, tetapi kebutuhan.</h1>
                    <p class="desc" id="header">Yuk, bergabung bersama pemuda lainnya untuk temukan potensimu, belajar fokus pada kelebihanmu, dan menjadi unik versi dirimu. Bersama kami, mari belajar menjadi pribadi yang cemerlang!</p>
                </div>
                <div class="home__img">
                    <img class="front" src="/assets/images/FAQ.svg" alt="FAQ">
                </div>
            </div>
        </section>

        <!--Siapa Kita-->
        <section class="about section " id="about">
            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="/assets/images/Siapakita.svg" alt="Siapa Kita ?">
                </div>
                <div class="about__desc">
                    <h1 class="about-title siapa" id="siapa-kita">Siapa Kita?</h1>
                    <p class="about__text" id="siapa">Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu.</p>     
                    <a href="about" class="button-link siapa">Kepoin Yuk <i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>     
                </div>                                   
            </div>
        </section>
        
        <!--Artikel-->
        <section class="artikel section" id="artikel">
            <h2 class="section-title" id="artikel-title">Artikel</h2>
            <div class= "artikel-container">
                <!--Get data from new artikel-->
                <?php
                    // Self Development
                    if($selfdev){
                        foreach($selfdev->getResult() as $self) {
                            $sslug =$self->slug;
                            $stitle = $self->judul;
                            $scover = $self->cover;
                            $sdeskripsi = $self->deskripsi;
                        }
                        if ($scover) {
                            echo "<div class='kategori'>
                                        <h3 class='text-artikel'>Self Development</h3>
                                    <div class='artikel-content'>
                                        <img src='/assets/images/artikel/$scover' alt='Cover postingan self development'>
                                        <p class='home-artikel-judul'>$stitle</p>
                                        <p class='text-isi-artikel'>$sdeskripsi</p>
                                    </div id='self'>
                                        <a href='/detail-artikel/$sslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                    </div>";
                        }else{
                            echo "<div class='kategori'>
                                        <h3 class='text-artikel'>Self Development</h3>
                                    <div class='artikel-content'>
                                        <img src='/assets/images/artikel/default.svg' alt='Cover postingan self development'>
                                        <p class='home-artikel-judul'>$stitle</p>
                                        <p class='text-isi-artikel'>$sdeskripsi</p>
                                    </div id='self'>
                                        <a href='/detail-artikel/$sslug' class='selengkapnya-artikel' >Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                    </div>";
                        }
                    }
                    // Jurusan
                    if ($jurusan) {
                        foreach($jurusan->getResult() as $j) {
                            $jslug =$j->slug;
                            $jtitle = $j->judul;
                            $jcover = $j->cover;
                            $jdeskripsi = $j->deskripsi;
                        }
                        if ($jcover) {
                            echo "<div class='kategori'>
                                        <h3 class='text-artikel' id='jurusan'>Jurusan</h3>
                                    <div class='artikel-content'>
                                        <img src='/assets/images/artikel/$jcover' alt='Cover postingan Jurusan'>
                                        <p class='home-artikel-judul'>$jtitle</p>
                                        <p class='text-isi-artikel'>$jdeskripsi</p>
                                    </div>
                                        <a href='/detail-artikel/$jslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                    </div>";  
                        }else {
                            echo "<div class='kategori'>
                                        <h3 class='text-artikel' id='jurusan'>Jurusan</h3>
                                    <div class='artikel-content'>
                                        <img src='/assets/images/artikel/default.svg' alt='Cover postingan Jurusan'>
                                        <p class='home-artikel-judul'>$jtitle</p>
                                        <p class='text-isi-artikel'>$jdeskripsi</p>
                                    </div>
                                        <a href='/detail-artikel/$jslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                    </div>"; 
                        } 
                    }
                    // Karir
                    if ($karir) {
                        foreach($karir->getResult() as $k) {
                            $kslug =$k->slug;
                            $ktitle = $k->judul;
                            $kcover = $k->cover;
                            $kdeskripsi = $k->deskripsi;
                        }
                        if ($kcover) {
                            echo "<div class='kategori'>
                                    <h3 class='text-artikel' id='karir'>Karir</h3>
                                <div class='artikel-content'>
                                    <img src='/assets/images/artikel/$kcover' alt='Cover postingan Karir'>
                                    <p class='home-artikel-judul'>$ktitle</p>
                                    <p class='text-isi-artikel'>$kdeskripsi</p>
                                </div>
                                    <a href='/detail-artikel/$kslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                </div>";
                        } else {
                            echo "<div class='kategori'>
                                    <h3 class='text-artikel' id='karir'>Karir</h3>
                                <div class='artikel-content'>
                                    <img src='/assets/images/artikel/default.svg' alt='Cover postingan Karir'>
                                    <p class='home-artikel-judul'>$ktitle</p>
                                    <p class='text-isi-artikel'>$kdeskripsi</p>
                                </div>
                                    <a href='/detail-artikel/$kslug' class='selengkapnya-artikel'>Selengkapnya<i class='bx bx-arrow-back bx-flip-horizontal' ></i></a>
                                </div>";
                        }
                        
                    }
                    
                ?>
            </div>
            <div class="artikel-mobile-container">
                <div class="self-def-mobile">
                    <h2 class="title-artikel-mobile">SELF DEVELOPMENT</h2>
                    <div class="box-artikel-mobile">
                        <div class="gambar-artikel-mobile">
                            <img src='/assets/images/artikel/<?=$scover?>' alt='Cover postingan self development'>
                        </div>
                        <div class="isi-artikel-mobile">
                            <div class="judul-artikel-mobile">
                                <a href="/detail-artikel/<?=$sslug?>"><?=$stitle?></a>
                            </div>
                            <div class="deskripsi-artikel-mobile">
                                <p><?=$sdeskripsi?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="artikel-mobile-container">
                <div class="self-def-mobile">
                    <h2 class="title-artikel-mobile">KARIR</h2>
                    <div class="box-artikel-mobile">
                        <div class="gambar-artikel-mobile">
                            <img src='/assets/images/artikel/<?=$kcover?>' alt='Cover postingan Karir'>
                        </div>
                        <div class="isi-artikel-mobile">
                            <div class="judul-artikel-mobile">
                                <a href="/detail-artikel/<?=$kslug?>"><?=$ktitle?></a>
                            </div>
                            <div class="deskripsi-artikel-mobile">
                                <p><?=$kdeskripsi?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="artikel-mobile-container">
                <div class="self-def-mobile">
                    <h2 class="title-artikel-mobile">JURUSAN</h2>
                    <div class="box-artikel-mobile">
                        <div class="gambar-artikel-mobile">
                            <img src='/assets/images/artikel/<?=$jcover?>' alt='Cover postingan Jurusan'>
                        </div>
                        <div class="isi-artikel-mobile">
                            <div class="judul-artikel-mobile">
                                <a href="/detail-artikel/<?=$jslug?>"><?=$jtitle?></a>
                            </div>
                            <div class="deskripsi-artikel-mobile">
                                <p><?=$jdeskripsi?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            
        <!-- KEGIATAN KAMI--> 
        <!-- <section class="kegiatan-kami section" id="kegiatan-kami">
        <h2 class="section-title">Kegiatan Kami</h2>
        <div class="activity-container">
            <div class="activity">
            <img src="/assets/images/gambar1.png" class="img-activity" alt="">
                <div class="activity-description">
                    <a href="#"><h3 class="title-activity">LOREM IPSUM</h3></a>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
                </div>
            </div>
            <div class="activity">
            <img src="/assets/images/gambar2.png" class="img-activity" alt="">
                <div class="activity-description">
                    <h3 class="title-activity">LOREM IPSUM</h3>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
                </div>
            </div>
        </div>
        <div class="activity-container">
            <div class="activity">
            <img src="/assets/images/gambar3.png" class="img-activity" alt="">
                <div class="activity-description">
                    <h3 class="title-activity">LOREM IPSUM</h3>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
                </div>
            </div>
            <div class="activity">
            <img src="/assets/images/gambar4.png" class="img-activity" alt="">
                <div class="activity-description">
                    <h3 class="title-activity">LOREM IPSUM</h3>
                    <p class="text-activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam</p>
                </div>
            </div>
        </div>
        </section> -->
    </main>
<?= $this->endsection();?>
<?= $this->section('js')?>
<!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!--GASP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="/assets/js/index.js"></script>
<?= $this->endsection();?>
