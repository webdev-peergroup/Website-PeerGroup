<?php $session = session();?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/assets/css/admin.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="path-to/bootstrap.min.css">
  <!-- Bootstrap DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="path-to/dataTables.bootstrap.css">
  <!-- Jquery -->
  <script type="text/javascript" language="javascript" src="path-to/jquery-1.10.2.min.js"></script>
  <!-- Jquery DataTables -->
  <script type="text/javascript" language="javascript" src="path-to/jquery.dataTables.min.js"></script>
  <!-- Bootstrap Javascript -->
  <script type="text/javascript" language="javascript" src="path-to/dataTables.bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!--Ini untuk icon di Tab. Jangan dihapus-->
  <link rel="shortcut icon" href="/assets/images/Logo Peer Group.jpg" type="image/x-icon">
  <title><?=$title?></title>
</head>
<body>
  <div class="sidenav">

    <div class="img-sidebar">
      <img src="/assets/images/Logo Peer Group Transparan.png" alt="" class="img">
    </div>

    <ul class="nav">
      <li class="menuTitle"><a href="<?php echo base_url('artikel-admin'); ?>">Artikel</a></li>
      <li class="menuTitle"><a href="<?php echo base_url('kegiatan-admin'); ?>">Kegiatan</a></li>
      <li class="menuTitle"><a href="<?php echo base_url('profile'); ?>">#CeritaMereka</a></li>
      <li class="menuTitle"><a href="<?php echo base_url('profile'); ?>">Review</a></li>
      <li class="menuTitle"><a href="<?php echo base_url('profile'); ?>">Profil</a></li>
      <li class="menuTitle"><a href="<?php echo base_url(); ?>">Beranda</a></li>
    </ul>

  </div>

  <div class="main">
      <div class="header">
          <p><?php echo $session->name?></p>
          <img src="/assets/images/profile/<?=$session->foto?>" alt="profile" class="img-user">
          <a href="<?php echo base_url('logout')?>"><img src="/assets/images/sign-out.svg" alt="" class="img-input"></a>
      </div>

      <?= $this->renderSection('content');?>  
  </div>
    <!-- Panggil Fungsi -->
  <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
    $('.table-paginate').dataTable();
  } );
  
 $(".nav a").on("click", function() {
    $(".nav ").find(".active").removeClass("active");
    $(this).parent().addClass("active");
  });
  </script>
</body>
</html> 
