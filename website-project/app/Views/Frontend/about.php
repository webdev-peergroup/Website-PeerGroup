<?= $this->extend('Frontend/layout/master');?>
<?= $this->section('content')?>
<main class="l-main">
    <div class="aboutcontent">
            <div class="abouttitle">
                <h1 class="aboutsiapa">Siapa <span style="color: rgb(182, 149, 41);">Kita ?</span></h1>
            </div>
            <div class="about-container">
                <div class="descContent">
                    <h2 style="color: rgb(182, 149, 41);">Peer Group ID</h2>
                    <p id="header">Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik berbasis pembinaan, pendampingan, dan konseling. Bersama kami, kamu bisa temukan, kembangkan, dan menjadi hebat dengan potensimu.</p>
                </div>
                <div class="imgContent">
                    <img class="imgsiapakita" src="/assets/images/Siapakita.svg" alt="Ilustrasi Siapa kita ?">
                </div>
            </div>
    </div>
        <div class="valueContent">
            <div class="vision">
                <h2 class="theader">VISI</h2>
                Menjadi wadah pengembangan potensi bagi generasi muda dalam menemukan bakat minat,
                serta tempat berbagai ilmu, pengalaman dan pelatihan bagi sesama.
            </div>
            <div class="mission">
                <h2 class="theader">MISI</h2>
                1. Mendorong remaja untuk mengeksplorasi skill <br>
                <br>
                2. Wadah pemuda mengembangkan skill <br>
                <br>
                3. Mengedukasi topik minat dan bakat serta manfaatnya <br>
                <br>
                4. Memberikan ruang remaja dalam berkreasi dan ekspresi sesuai minat atau bakat <br>
                <br>
                5. Memberikan pelatihan peer group courses <br>
                <br>
                6. Mencetak generasi yang cerdas dalam SQ, SE, dan IQ
            </div>
        </div>
</main>
    <?= $this->endsection();?>
    <?= $this->section('js')?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/assets/js/about.js"></script>
    <?= $this->endsection();?>