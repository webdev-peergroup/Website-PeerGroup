<?= $this->extend("Backend/template/index"); ?>
<?= $this->section('content');?>

<main>
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
                                <li><?php echo $dt['id_jwb'], '. ', $dt['jwb'], '<br>';?></li>
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
</main>

<!-- <h1>ini detail quiz</h1> -->
<?= $this->endsection();?>