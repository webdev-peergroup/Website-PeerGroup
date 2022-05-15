<?php $session = session();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/new_admin.css">
    <title>Admin Panel - Peer Group ID</title> 
</head>
<body>
    <div class="container">
        <!-- SideBar -->
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
                <a href="<?php echo base_url('logout')?>">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Aside -->
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
                        <p>Hey, <b><?php echo $session->panggilan?></b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="/assets/images/profile/<?=$session->foto?>" alt="profile picture">
                    </div>
                </div>
            </div>
            <!-- End of top -->

            <!-- <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    Use from here to repeat
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/assets/images/profile/latar-belakang-keluarga-mina-twice-ramai-dibicarakan-ini-alasannya_171.jpeg" alt="profile image">
                        </div>
                        <div class="message">
                            <p><b>Mina</b> post new artikel</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    end of repeat
                    Use from here to repeat
                    <div class="update">
                        <div class="profile-photo">
                            <img src="/assets/images/profile/profile.jpg" alt="profile image">
                        </div>
                        <div class="message">
                            <p><b>Eko</b> post new artikel</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    end of repeat
                </div>
            </div> -->
            <!-- End of Recent Updates -->

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
            <form action="<?php echo base_url('Login/simpan')?>" method="post" enctype="multipart/form-data">
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
    <script src="/assets/js/admin.js"></script>
    
</body>
</html>