<?= $this->extend('Backend/template/index') ?>
<?= $this->section('content'); ?>
  <main>
      <h1><?=$title?></h1>
      <!-- <h5 class="label-date-filter">Filter tanggal</h5>
        <div class="date">
            <input type="date" name="date-filter" id="date-filter">
        </div> -->
    <!-- Recent Post -->
      <div class="recent-post" id="recent-post">
          <h2>Recent Post</h2>
          <table>
              <thead>
                  <tr>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Penulis</th>
                      <th>Tanggal Post</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                      if ($artikel->getNumRows() == 0) {
                          echo "<tr>
                                      <td colspan='6'>No Data</td>
                                  </tr>";
                      }else
                      foreach ($artikel->getResultArray() as $data): ?>
                  <tr>
                      <td><a href="/detail-artikel/<?php echo $data['slug']?>"><?php echo $data['judul']?></a></td>
                      <td><?php echo $data['kategori']?></td>
                      <td><?php echo $data['penulis']?></td>
                      <td><?php echo strftime('%e %b %Y', strtotime($data['created_at'])); ?></td>
                      <td class="button-action">
                          <form action="/artikel-admin/edit/<?=$data['slug']?>" method="post">
                              <?csrf_field();?>
                              <input type="hidden" name="_method" value="PUT">
                              <button type="submit" class="button" id="edit">Edit</button>
                          </form>
                          <form action="/artikel-admin/hapus/<?=$data['id']?>" method="post">
                              <?csrf_field();?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="button" onclick="return confirm('Apakah anda yakin ingin menghapus <?=$data['judul']?> ?')">Hapus</button>
                          </form>
                      </td>
                  </tr>
                  <?php endforeach?>
              </tbody>
          </table>
      </div>
  </main>
<?= $this->endsection(); ?>