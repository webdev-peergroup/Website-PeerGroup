<?= $this->extend("Backend/template/index") ?>
<?= $this->section('content');?>

<main>
    <?php foreach ($detail->getResultArray() as $data) : ?>
        <p>
            <?= $data['soal']; ?>
        </p>
    <?php endforeach?>
    <?php foreach ($jawaban->getResultArray() as $data) : ?>
        <li>
            <?= $data['jawaban']; ?>
        </li>
    <?php endforeach?>
</main>
<?= $this->endsection()?>