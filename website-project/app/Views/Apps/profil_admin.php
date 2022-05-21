<?= $this->extend('/Apps/admin_template');?>
<?= $this->section('content');?>
    <main>
        <?= $title ?>
        <div>
            <form action="/Login/update_profile/<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <?=csrf_field();?>
                <div class="text-center">
                    <img src="<?= base_url('assets/images/profile/'. $foto )?>" width="50%" height="30%" alt="" class="rounded">
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">file input</label>
                    <input class="form-control" type="file" id="foto" require>
                </div>
                    <div class="mb-3 mt-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $username?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?=$password?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $nama?>">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="gender" require>
                            <option selected>Open this select gender</option>
                            <option value="pria" <?php if($gender == 'pria') echo 'selected="selected"'?>>Pria</option>
                            <option value="wanita"  <?php if($gender == 'wanita') echo 'selected="selected"'?>>Wanita</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
    </main>
<?= $this->endsection();?>