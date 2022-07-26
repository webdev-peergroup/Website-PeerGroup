<?= $this->extend('Frontend/layout/master');?>
<?= $this->section('content')?>
<!--Code goes here-->
    <div class="l-main">
        <section class="artikel section">
            <div class="container__artikel">
                <!--Title Section-->
                <div class="title">
                    <h1 class="judul-konten"><span id ="artikel" class="kategori-artikel">Artikel</span> <span style="color: #EAA900"><?=$kategori?></span></h1>
                </div>
                <!--Content Section-->
                <div class="konten">
                    <!--Area artikel-->
                    <div class="artikel">
                        <?php foreach ($artikel->getResultArray() as $data) : ?>
                            <div class="box">
                                <div class="img-thumbnail">
                                    <img src="<?= base_url('assets/images/artikel/'.$data['cover'])?>" alt="">
                                </div>
                                <div class="text-list">
                                    <a href="/detail-artikel/<?php echo $data['slug']?>" class="title-thumbnail"><?php echo $data['judul']?></a>
                                    <div class="penulis">
                                        <p class="penulis-artikel-home"><?php echo $data['penulis']  ?></p>
                                    </div>
                                    <div class="thumbnail-description">
                                        <p><?php echo $data['deskripsi']?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!--Area Rekomendasi-->
                    <div class="Rekomendasi">
                        <div class="rekomendasi-container">
                            <div class="header-rekomendasi-home">
                                <h2>Rekomendasi</h2>
                            </div>
                            <div class="rekomen-fill">
                               <div class="rekomen-artikel">
                               <?php 
                               foreach ($rekomen->getResultArray() as $rekomendasi):
                               ?>
                                    <a href="/detail-artikel/<?php echo $rekomendasi['slug']?>">
                                     <div class="random">
                                        <div class="rekomen-img">
                                            <img src="/assets/images/artikel/<?php echo $rekomendasi['cover']?>" alt="thumnail">
                                        </div>
                                        <p class="text-rekomen"><?php echo $rekomendasi['judul']?></p>
                                        </div>
                                    </a>
                                    <?php endforeach?>
                                </div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>    
        </section>
    </div>
    
<?= $this->endsection();?>
<?= $this->section('js')?>
    <script src="/assets/js/kategori.js"></script>
<?= $this->endsection();?>
