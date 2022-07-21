<?= $this->extend('Frontend/layout/master');?>
<?= $this->section('content')?>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->

<main class="l-main">
<section class="artikel section">
            <div class="container__artikel">
                <!--Title Section-->
                <div class="title">
                    <h1 class="judul-konten"><span id ="artikel" class="kategori-artikel">Quiz</span></h1>
                </div>
                <!--Content Section-->
                <div class="konten">
                    <!--Area artikel-->
                    <div class="artikel">
                        <?php foreach ($quiz->getResultArray() as $data) : ?>
                            <div class="box">
                                <div class="text-list">
                                    <p class="title-thumbnail"><?php echo $data['title']?></p>
                                    <?php foreach ($soal->getResultArray() as $dat) : ?>
                                        <?php if($data['id_title'] == $dat['id_title']) : ?>
                                            <?php echo $dat['id_soal'], '. ', $dat['soal'], '<br>'?>
                                            <?php foreach ($jwb->getResultArray() as $dt) : ?>
                                                <?php if(($dat['id_title'] == $dt['id_title']) and ($dat['id_soal'] == $dt['id_soal'])) : ?>
                                                    <li><?php echo $dt['id_jwb'], ' ', $dt['jwb'], '<br>';?></li>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                            <?php echo '<br>'?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <?php echo '<br>'?>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>    
        </section>
</main>

<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6s.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
<?= $this->endsection()?>