<?= $this->extend('/Apps/sidebar');?>
<?= $this->section('content');?>
    <div class="title">
        <p>Profil</p>
    </div>
    <div>
        <form action="/Login/update_profile/<?php echo $id; ?>" method="post" enctype="multipart/form-data" class="content">
            <?=csrf_field();?>
            <div class="foto">
                <img src="/assets/images/profile/<?php echo $foto?>" alt="" class="img-profil">
                <div class="upload-foto">
                    <label for="foto">Upload</label>
                    <input type="file" name="foto" id="foto">
                </div>
            </div>
            <div class="form">
                <p>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username"class="form-input" value="<?php echo $username?>">
                </p>
                <p>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-input" value="<?php echo $password?>">
                </p>
                <p>
                    <label for="name">Nama</label>
                    <input type="text"  name="name" id="name" class="form-input" value="<?php echo $nama?>">
                </p>
                <p>
                    <label for="name">Gender</label>
                    <select name="gender" required class="form-input">
                        <option value="" >Pilih Gender</option>
                        <option value="pria" <?php if($gender == 'pria') echo 'selected="selected"'?>>Pria</option>
                        <option value="wanita" <?php if($gender == 'wanita') echo 'selected="selected"'?>>Wanita</option>
                    </select>
                </p>
                <p>
                    <button type="submit" class="button-update">Update</button>
                </p>
            </div>

        </form>
    </div>
<?= $this->endsection();?>