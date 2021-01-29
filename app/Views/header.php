<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bexel - Performance System Management</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/bexel-icon.ico"/>
  <!-- vendor css -->
  <link href="<?php echo base_url(); ?>/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/lib/jqvmap/jqvmap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/lib/prismjs/themes/prism-vs.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/lib/select2/css/select2.min.css" rel="stylesheet">

  <!-- DashForge CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/siap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashforge.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashforge.dashboard.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashforge.auth.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lib/quill/quill.core.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lib/quill/quill.snow.css">
  
</head>


<body>

  <header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
        <a href="<?php echo base_url("home"); ?>" class="df-logo">P<span>M</span>S</a>
    </div>


    <!-- NAVBAR MENU -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
      
    </div>

    <!-- USER PROFILE -->
    <div class="navbar-right">
      <div class="dropdown dropdown-profile">
        <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
          <div class="avatar avatar-sm"><img src="<?php echo base_url(); ?>/assets/img/profil.png" class="rounded-circle" alt=""></div>
          <i class="fa fa-chevron-down ml-2" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right tx-13">
          <div class="avatar avatar-lg mg-b-15"><img src="<?php echo base_url(); ?>/assets/img/profil.png" class="rounded-circle" alt=""></div>
          <h6 class="tx-semibold mg-b-5"><?php echo session()->get('name'); ?></h6>
          <a href="<?php echo base_url('login/logout'); ?>" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
        </div>
      </div>
    </div>

  </header>