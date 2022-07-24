<?= $this->extend('Frontend/layout/master');?>
<?= $this->section('content')?>
<main class="l-main">
    <section class="artikel section">
        <div class="artikel__container detail">
            <!--Area artikel-->
            <article>
                <div class="artikel">
                    <?php foreach ($quiz->getResultArray() as $data) : ?>
                        <div class="header-artikel">
                            <h1 class="title-artikel"><?= $data['judul'] ?></h1>
                            <div class="author">
                                <div>
                                    <span id="penulis" style="font-weight: var(--font-bold);">Penulis :</span>   
                                    <span class="author-name"><?= $data['penulis'] ?></span>  
                                </div>
                                <span class="date"><?= strftime('%e %B %G', strtotime($data['created_at'])); ?></span>
                            </div>
                            <?php
                                if ( $data['cover'] != NULL) {
                                    echo "<div class='arti-image'>
                                        <img src=".base_url('assets/images/artikel/'.$data['cover'])." alt=''>
                                        </div>
                                        <div class='sumber'>
                                            <p>Sumber: ".$data['sumber_cover']." </p>
                                        </div>"
                                    ;
                                }
                            ?>
                        </div>
                    <?php endforeach; ?>
                    <!-- <img src='images/artikel/".$data['cover']."'alt='cover'> -->
                    <div class="text">
                        <?= $data['text'] ?>
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
                                <?php foreach ($artikel->getResultArray() as $data): ?>
                                    <a href="/detail-artikel/<?= $data['slug']?>">
                                    <div class="random">
                                        <div class="rekomen-img">
                                            <img src=<?= base_url('assets/images/artikel/'. $data['cover']) ?> alt="thumnail">
                                        </div>
                                        <p class="text-rekomen"><?= $data['judul']?></p>
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