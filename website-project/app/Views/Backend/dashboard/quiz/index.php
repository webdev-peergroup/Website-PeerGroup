<?= $this->extend("Backend/template/index"); ?>
<?= $this->section('content');?>

<main>
  <h1>Table Quiz</h1>
  <button type="button" class="btn btn-primary">
    <div>
        <span class="material-icons-sharp">add</span>
    </div>
  </button>
  <table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">Number</th>
        <th scope="col">Title</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      
      <?php 
        if ($title->getNumRows() == 0 ) {
          echo "<tr>
                    <td colspan='6'>No Data</td>
                </tr>";
        }else
        foreach ($title->getResultArray() as $data) : ?>
          <tr>
            <th scope="row"><?= $data['id']; ?></th>
            <td><?= $data['title']; ?></td>
            <td><a href="/detail-quiz/<?= $data['id']; ?>"><button type="button" class="btn btn-primary">Detail</button></a></td>
          </tr>
        <?php endforeach?>
    </tbody>
</table>

</main>

<?= $this->endsection();?>