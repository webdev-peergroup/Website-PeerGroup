<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $deskripsi; ?>">
    <title>Login</title>
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">

    <style>
        * {
            box-sizing: border-box;
        }
    
        html, body, div, p, h1 {
            margin: 0;
            padding: 0;
        }

        *:focus {
            outline: none;
        }
    
        .wrapper {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            font-family: Montserrat;
        }
        
        .right{
            background-color: #1E435B;
        }

        form {
            width: 70%;
            margin: 5px auto 0 auto;
            padding: 8.5rem 10px;
        }
        
        label {
            display: block;
            padding: 10px 0;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .form-input, select {
            width: 100%;
            padding: 2% 1rem;
            border: 2px solid #1E435B;
            border-radius: 100px;
            margin-bottom: 10px;
        }

        .img{
            margin: 4.3rem 5.3rem;
            width:30rem;
            height:30rem;
        }
    
        .form-input:focus {
            border-color: #bbb;
            margin-bottom: 10px;
        }
    
        #username::-webkit-input-placeholder{
            margin: 10px;
            font-size: 12pt;
            padding: 10px;
        }

        #password::-webkit-input-placeholder{
            margin: 10px;
            font-size: 12pt;
            padding: 10px;
        }

        .beranda{
            position: absolute;
            padding: 8px 1rem;
            margin: 2rem 1rem auto 32rem;;
            font-size: 1rem;
            border: 2px solid #1E435B;
            border: 2px solid #1E435B;
            box-sizing: border-box;
            border-radius: 50px;
        }

        .link{
            text-decoration: none;
            color: #1E435B;
        }

        .button-login{
            padding: 8px 2rem;
            margin: 2rem 11rem auto 11rem;;
            font-size: 1.5rem;
            border: 2px solid #1E435B;
            background: #1E435B;
            border-radius: 50px;
            color: white;
        }

        button[type="submit"]:hover {
            background-color: white;
            color: #333;
        }

        .alert{
            background: #D6EAF8;
            padding: 20px 1rem;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <main class="form-signin">
    <div class="wrapper">
        <div class="right">
            <img src="/assets/images/Logo Peer Group Transparan.png" alt="Logo Peer Group ID" class="img">
        </div>
        <div class="left">
        <button class="beranda"> <a href="home" class="link"> Beranda </a></button>
        <form method="post" action="<?= base_url('process'); ?>">
        <?= csrf_field(); ?>
        <br>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <br>
          <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Username" class="form-input" required>
          </p>
          <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-input" required>
          </p>
          <p>
            <button type="submit" class="button-login">Login</button>
          </p>
          </form>
          </div>
    </div>
</body>
</html>