<?= $this->extend("Backend/template/index"); ?>
<?= $this->section('content');?>

<main>
  <h1>Table Quiz</h1>
  <div class="recent-post" id="recent-post">
    <table class="mt-5">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if ($title->getNumRows() == 0) {
                    echo "<tr>
                                <td colspan='6'>No Data</td>
                            </tr>";
                }else
                foreach ($title->getResultArray() as $data): ?>
            <tr>
                <td><?php echo $data['title']?></td>
                <td class="button-action">
                  <a href="/detail-quiz/<?= $data['id_title'];?>"><button type="submit" class="btn-btn primary">details</button></a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
  </div>
</main>

<?= $this->endsection();?>
