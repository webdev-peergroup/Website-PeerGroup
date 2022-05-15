<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $deskripsi; ?>">
        <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="/assets/css/login.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Login Admin Peer Group ID</title>  
    </head>
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="/assets/images/authentication.svg" alt="" class="form__img">

                <form method="post" action="<?= base_url('process'); ?>" class="form__content">
                    <?=csrf_field();?>
                    <h1 class="form__title">Welcome</h1>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <div>
                        <div class="form__div form__div-one">
                            <div class="form__icon">
                                <i class='bx bx-user-circle'></i>
                            </div>
    
                            <div class="form__div-input">
                                <label for="username" class="form__label">Username</label>
                                <input type="text" class="form__input" name="username" id="username">
                            </div>
                        </div>
    
                        <div class="form__div">
                            <div class="form__icon">
                                <i class='bx bx-lock' ></i>
                            </div>
    
                            <div class="form__div-input">
                                <label for="password" class="form__label">Password</label>
                                <input type="password" name="password" id="password" class="form__input">
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="form__forgot">Forgot Password?</a> -->

                    <input type="submit" class="form__button" value="Login">

                    <!-- <div class="form__social">
                        <span class="form__social-text">Our login with</span>

                        <a href="#" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div> -->
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="/assets/js/login.js"></script>
    </body>
</html>