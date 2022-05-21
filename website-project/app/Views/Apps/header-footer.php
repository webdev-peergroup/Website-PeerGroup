<?php $session = session();?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="robots" content="follow"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/<?=$css?>"> 
    <!--  Essential META Tags -->
    <meta name="application-name" content="Web Peer Group ID">
    <meta name="author" content="Web Development Team Peer Group ID">
    <meta name="keywords" content="Self Development, Karir, Jurusan">
    <meta rel="canonical" herf="http://peergroup.id/">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">
    <meta name="google-site-verification" content="0QO1JmqZq4tNNzNcwnlL0yQVebCiuxjR2o9le5VCRE8" />
    <meta name="msvalidate.01" content="BDA00100746935BFDB906DB88A70A01D" />
    <!--  Non-Essential, But Recommended -->
    <!-- <meta property="og:site_name" content="European Travel, Inc.">-->
    <!-- Non-Essential, But Required for Analytics -->
    <!-- <meta property="fb:app_id" content="your_app_id" />
    <meta name="twitter:site" content="@website-username"> -->
    
    <!-- Primary Meta Tags -->
    <title><?=$title?></title>
    <meta name="title" content="<?=$title?>">
    <meta name="description" content="<?php echo $deskripsi; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://peergroup.id/">
    <meta property="og:title" content="<?= $title?>">
    <meta property="og:description" content="<?=$deskripsi?>">
    <!-- Note : ukuran thumbnail 256x256 -->
    <meta property="og:image" content="http://peergroup.id/assets/images/Logo Peer Group.jpg">
    <!-- <meta property="og:site_name" content="Peer Group ID"> -->
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://peergroup.id/">
    <meta property="twitter:title" content="<?=$title?>">
    <meta property="twitter:description" content="<?=$deskripsi?>">
    <meta property="twitter:image" content="http://peergroup.id/assets/images/Logo Peer Group.jpg">
    <!-- <meta name="twitter:image:alt" content="Alt text for image"> -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5386817970723352"
     crossorigin="anonymous"></script>
    <!-- Clarity tracking code for http://peergroup.id/ -->
    <script>    
        (function(c,l,a,r,i,t,y){        
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};        
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";        
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);    
            })(window, document, "clarity", "script", "a2xfnv1ela");
    </script>
</head>
<body>
    <!--Header-->
    <header>
        <div class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="/" class="nav__logo"><img src="/assets/images/Logo Peer Group Transparan.png" alt="Logo Peer Group ID"></a> 
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item"><a href="/home" class="nav__link">Beranda</a></li>
                        <li class="nav__item"><a href="/about" class="nav__link">Siapa Kita</a></li>
                        <li class="nav__item dropdown" >
                            <a href="#" class="nav__link dropdown__link" id="dropdown">Artikel <i class='bx bx-chevron-down dropdown__icon' id="drop-icon"></i></a>
                            <ul class="dropdown__menu" id="dropdown-menu">
                                <li class="dropdown__item"><a href="/artikel/self" class="nav__link">Self Development</a></li>
                                <li class="dropdown__item"><a href="/artikel/jurusan" class="nav__link">Jurusan</a></li>
                                <li class="dropdown__item"><a href="/artikel/karir" class="nav__link">Karir</a></li>
                            </ul>
                        </li>
                        <li class="nav__item dropdown" >
                            <a href="#" class="nav__link dropdown__link" id="dropdown">Kegiatan <i class='bx bx-chevron-down dropdown__icon' id="drop-icon"></i></a>
                            <ul class="dropdown__menu" id="dropdown-menu">
                                <li class="dropdown__item"><a href="/" class="nav__link">Kegiatan Kami</a></li>
                                <li class="dropdown__item"><a href="/" class="nav__link">Volunteer</a></li>>
                            </ul>
                        </li>
                        <!-- <li class="nav__item"><a href="/home/landing" class="nav__link">Landing</a></li> -->
                        <?php
                            if ($session->logged_in == true) {
                                $logout = base_url('logout');
                                $admin_page = base_url('admin-panel');
                                echo "<li class='nav__item dropdown' >
                                        <a href='#' class='nav__link dropdown__link' id='dropdown'>$session->username <i class='bx bx-chevron-down dropdown__icon' id='drop-icon'></i></a>
                                        <ul class='dropdown__menu' id='dropdown-menu'>
                                            <li class='dropdown__item'><a href='$admin_page' class='nav__link'>Admin</a></li>
                                            <li class='dropdown__item'><a href='$logout' class='nav__link'>Logout</a></li>
                                        </ul>
                                    </li>";
                            }else {
                                echo '<li class="nav__item"><a href="/login" class="nav__link">Login</a></li> ';
                            }
                        ?>
                        <li class="nav__item">
                            <div>
                                <input type="checkbox" class="checkbox" id="chk" />
                                <label class="label" for="chk">
                                    <i class='bx bxs-moon' ></i>
                                    <i class='bx bxs-sun' ></i>
                                    <div class="ball"></div>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <?= $this->renderSection('content');?>
    <div class="footer">
        <small>Copyright &copy; Peergroup.id 2021</small>
    </div>
    <!--Main JS-->
    <script src="/assets/js/main.js"></script>
    <?=$this->renderSection('js');?>
</body>
</html>