<?php $session = session();?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="/assets/css/new_admin.css">
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
    <title>Admin Panel - Peer Group ID</title> 
</head>
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/assets/images/Logo Peer Group.jpg" alt="Logo Peer Group ID">
                    <h2>PEER GROUP <span class="warning">ID</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="/admin-panel" class="nav-link <?php if(uri_string() === 'admin-panel') echo 'active'; ?>">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="/artikel-admin" class="nav-link <?php if(uri_string() === 'artikel-admin') echo 'active'; ?>">
                    <span class="material-icons-sharp">text_snippet</span>
                    <h3>Artikel</h3>
                </a>
                <a href="/kegiatan-admin" class="nav-link <?php if(uri_string() === 'kegiatan-admin') echo "active"; ?>">
                    <span class="material-icons-sharp">workspaces</span>
                    <h3>Kegiatan</h3>
                    <!-- <span class="message-count">26</span> -->
                </a>
                <a href="/profile" class="nav-link <?php if(uri_string() === 'profile') echo "active"; ?>">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Profile</h3>
                </a>
                <a href="/dokumentasi" class="nav-link <?php if(uri_string() === 'profile') echo "active"; ?>">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>foto-dokumentasi</h3>
                </a>
                <a href="/quiz" class="nav-link <?php if(uri_string() === 'quiz') echo "active"; ?>">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Quiz</h3>
                </a>
                <a href="<?php echo base_url('logout')?>">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <?= $this->renderSection('content');?>
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b><?= session('username'); ?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="<?= base_url('/assets/images/profile/'.session('foto'));?>" alt="profile picture">
                    </div>
                </div>
            </div>
            <div class="analytics">
                <a href="#" id="add-item">
                    <div class="items add">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Add</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-modal" <?php if($validation->getErrors()) { echo 'style=display:flex;';}?>>
        <div class="modal-content">
            <div class="close" id="close-modal">
                <span class="material-icons-sharp">close</span>
            </div>
            <form action="<?php echo base_url('ArtikelController/simpan')?>" method="post" enctype="multipart/form-data">
                <?=csrf_field();?>
                <div>
                    <label for="judul">Judul</label>
                    <div class="input-group">
                        <input type="text" name="judul" id="judul" placeholder="Masukkan Judul" <?=$validation->hasError('judul')?> value="<?= old('judul')?>">
                        <p class="error"><?= $validation->getError('judul')?></p>
                    </div>
                </div>
                <div>    
                    <label for="kategori">Kategori</label>
                    <select name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <option value="self development">Self Development</option>
                        <option value="karir">Karir</option>
                        <option value="jurusan">Jurusan</option>
                        <option value="kegiatan">Kegiatan Kami</option>
                    </select>
                </div>
                <div>
                    <label for="cover">Upload Cover</label>
                    <div class="input-group">
                        <input type="file" name="cover" id="cover" required value="<?= old('cover')?>">
                        <p class="error"><?= $validation->getError('cover')?></p>
                    </div>
                </div>
                <div>
                    <label for="sumber_cover">Sumber Cover</label>
                    <div class="input-group">
                        <input type="text" name="sumber_cover" id="sumber_cover" placeholder="Masukkan sumber cover" required value="<?= old('sumber_cover')?>">
                        <p class="error"><?= $validation->getError('sumber_cover')?></p>
                    </div>
                </div>
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3" required><?= old('judul')?></textarea>
                </div>
                <div>
                    <label for="name">Nama Penulis</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan nama penulis" required value="<?= old('name')?>">
                    <p class="error"><?= $validation->getError('name')?></p>
                </div>
                <div>
                    <label for="content">Isi Konten</label>
                    <textarea name="content" id="content" rows="8" required><?= old('judul')?></textarea>
                </div>
                <div class="button-group">
                    <button type="reset">Reset</button>
                    <button type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <!-- JS -->
    <script src="/assets/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>