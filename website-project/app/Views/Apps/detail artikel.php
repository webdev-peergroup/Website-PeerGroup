<?php
    foreach($artikel->getResult() as $data) {
        $id =$data->id;
        $judul = $data->judul;
        $penulis = $data->penulis;
        $text = $data->text;
        $cover = $data->cover;
        $sumber_cover = $data->sumber_cover;
        $date = $data->created_at;
    }
?>
<?= $this->extend('/Apps/header-footer');?>
<?= $this->section('content')?>
<main class="l-main">
    <section class="artikel section">
        <div class="artikel__container detail">
            <!--Area artikel-->
            <article>
                <div class="artikel">
                    <div class="header-artikel">
                        <h1 class="title-artikel"><?=$judul?></h1>
                        <div class="author">
                            <div>
                                <span id="penulis" style="font-weight: var(--font-bold);">Penulis :</span>   
                                <span class="author-name"><?php echo $penulis?></span>  
                            </div>
                            <span class="date"><?php echo strftime('%e %B %G', strtotime($date)); ?></span>
                        </div>
                        <?php
                            if ($cover != NULL) {
                                echo "<div class='arti-image'>
                                            <img src='/assets/images/artikel/$cover' alt='cover $judul'>
                                    </div>
                                    <div class='sumber'>
                                        <p>Sumber: $sumber_cover</p>
                                    </div>";
                            }
                        ?>
                    </div>
                    <div class="text">
                        <?php echo $text?>
                        <!-- <div class="share">
                            <span>Share</span> 
                            <img src="/assets/images/facebook.svg" alt="facebook">
                            <img src="/assets/images/twitter.svg" alt="twitter">
                            <img src="/assets/images/whatsapp.svg" alt="whatsapp">
                            <img src="/assets/images/telegram-plane.svg" alt="telegram">
                        </div> -->
                    </div>
                    
                    <div class="animation">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_kmfssxfk.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                    </div>
                </div>
            </article>
            <aside>
                <!--Area Rekomendasi-->
                <div class="Rekomendasi">
                        <div class="rekomendasi-container">
                            <div class="header-rekomendasi-home">
                                <h2>Rekomendasi</h2>
                            </div>
                            <div class="rekomen-fill">
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
            </aside>
        </div>
    </section>
</main>
<script src="/assets/js/detailartikel.js"></script>
<?= $this->endsection();?>