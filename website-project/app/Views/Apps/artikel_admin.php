<?= $this->extend('/Apps/sidebar');?>
<?= $this->section('content');?>
<div class="title">
        <p>Artikel</p>
    </div>
    <div class="tambah">
      <a href="/tambah-data">Tambah</a>
    </div>
      <?php
          foreach ($artikel->getResultArray() as $data):
      ?>

    <div class="table">
      <div class="gambar">
          <?php
              if ($data['cover'] != NULL) {
                $cover = $data['cover'];
                echo "<img src='/assets/images/artikel/$cover' alt='' class='img-tabel'>";
              }else {
                echo "<img src='/assets/images/artikel/default.svg' alt='' class='img-tabel'>";
              }
          ?> 
      </div>
      <div class="isi">
          <a href="/detail-artikel/<?php echo $data['slug']?>"><h2><?php echo $data['judul']?></h2></a>
          <span style="color: #526260; font-style: italic; font-size: 14px; margin-bottom: 5px; text-transform: capitalize;"> <?php echo $data['penulis']?> </span> <span style="color: #526260; font-size: 14px; margin-bottom: 5px;">  &nbsp;  &nbsp;  <?php echo strftime('%e %b %Y', strtotime($data['created_at'])); ?> </span>
          <span style="color: #030402; font-size: 16px; display: flex; margin-bottom: 1rem; margin-top: 5px;"> <?php echo $data['deskripsi']?></span>
          <span style="color: #FFFFFF; font-size: 13px; background-color: #306181; padding: 8px 20px; border-radius: 5px; text-transform: capitalize;"> <?php echo $data['kategori']?> </span>
      </div>
      <div class="tombol">
            <form action="/admin-artikel/edit/<?=$data['slug']?>" method="post">
              <?csrf_field();?>
              <input type="hidden" name="_method" value="PUT">
              <button type="submit" class="button-delete"><img src="/assets/images/edit.svg" alt="" class="img-delete"></button>
            </form>
            <form action="/admin-artikel/hapus/<?=$data['id']?>" method="post">
              <?csrf_field();?>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="button-delete"><img src="/assets/images/hapus.svg" alt="" class="img-delete" onclick="return confirm('Apakah anda yakin ingin menghapus <?=$data['judul']?> ?')"></button>
            </form>
      </div>
    </div>
    <?php endforeach?>
    <!-- <table class="table-paginate">
      <tr>
        <td>
          
        </td>
        <td> 
            
        </td>
        <td>
            
        </td>
      </tr>
      
    </table> -->
<?= $this->endsection();?>