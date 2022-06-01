<?php
    foreach ($tampil->getResult() as $data) {
        $id = $data->id;
        $judul = $data->judul;
        $kategori = $data->kategori;
        $penulis = $data->penulis;
        $deskripsi = $data->deskripsi;
        $text = $data->text;
        $cover = $data->cover;
        $sumber_cover = $data->sumber_cover;
    }
?>
<?= $this->extend('Backend/template/index') ?>
<?= $this->section('content')?>
<main>
    <h1><?=$title?></h1>

    <!-- <div class="date">
        <input type="date" name="date-filter" id="date-filter">
    </div> -->

    <!-- Recent Post -->
    <div class="recent-post" id="recent-post">
        <h2>Edit Post</h2>
        <div class="edit-container">
        <form action="/ArtikelController/update/<?php echo $id?>" method="post" enctype="multipart/form-data">
                <?=csrf_field();?>
                <div>
                    <label for="judul">Judul</label>
                    <div class="input-group">
                        <input type="text" name="judul" id="judul" placeholder="Masukkan Judul" <?=$validation->hasError('judul')?> value="<?php echo $judul; old('judul')?>">
                        <p class="error"><?= $validation->getError('judul')?></p>
                    </div>
                </div>
                <div>    
                    <label for="kategori">Kategori</label>
                    <select name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <option value="self development" <?php if($kategori == 'self development') echo 'selected="selected"'?>>Self Development</option>
                        <option value="karir" <?php if($kategori == 'karir') echo 'selected="selected"'?>>Karir</option>
                        <option value="jurusan" <?php if($kategori == 'jurusan') echo 'selected="selected"'?>>Jurusan</option>
                        <option value="kegiatan" <?php if($kategori == 'kegiatan') echo 'selected="selected"'?>>Kegiatan Kami</option>
                    </select>
                </div>
                <div>
                    <label for="cover">Upload Cover</label>
                    <div class="input-group">
                        <input type="file" name="cover" id="cover" value="<?php echo $cover; old('cover')?>">
                        <p class="error"><?= $validation->getError('cover')?></p>
                    </div>
                </div>
                <div>
                    <label for="sumber_cover">Sumber Cover</label>
                    <div class="input-group">
                        <input type="text" name="sumber_cover" id="sumber_cover" placeholder="Masukkan sumber cover" required value="<?php echo $sumber_cover; old('sumber_cover')?>">
                        <p class="error"><?= $validation->getError('sumber_cover')?></p>
                    </div>
                </div>
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" required><?=$deskripsi?></textarea>
                </div>
                <div>
                    <label for="name">Nama Penulis</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan nama penulis" required value="<?php echo $penulis; old('deskripsi');?>"penulis?>
                    <p class="error"><?= $validation->getError('name')?></p>
                </div>
                <div>
                    <label for="content">Isi Konten</label>
                    <textarea name="content" id="content" rows="8" required><?php echo $text; old('content'); ?></textarea>
                </div>
                <div class="button-group">
                    <button type="reset">Reset</button>
                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
        <!-- <a href="#">Show All</a> -->
    </div>
</main>
        <!-- End of the main section -->
<?= $this->endsection();?>