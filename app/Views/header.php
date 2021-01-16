<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/logo.svg">

  <title>Performance System Management</title>

  <!-- vendor css -->
  <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">
  <link href="../lib/prismjs/themes/prism-vs.css" rel="stylesheet">
  <link href="../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
  <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

  <!-- DashForge CSS -->

  <link rel="stylesheet" type="text/css" href="../assets/css/dashforge.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/dashforge.dashboard.css">

  <link rel="stylesheet" href="../assets/css/siap.css">
  <link rel="stylesheet" href="../assets/css/dashforge.css">
  <link rel="stylesheet" href="../assets/css/dashforge.dashboard.css">
  <link rel="stylesheet" href="../assets/css/dashforge.auth.css">
   
</head>


<body>

  <header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
        <a href="#" class="df-logo">P<span>M</span>S</a>
    </div>


    <!-- NAVBAR MENU -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
      
    </div>

    <!-- USER PROFILE -->
    <div class="navbar-right">
      <div class="dropdown dropdown-profile">
        <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
          <div class="avatar avatar-sm"><img src="../assets/img/profil.png" class="rounded-circle" alt=""></div>
          <i class="fa fa-chevron-down ml-2" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right tx-13">
          <div class="avatar avatar-lg mg-b-15"><img src="../assets/img/profil.png" class="rounded-circle" alt=""></div>
          <h6 class="tx-semibold mg-b-5"><?php echo session()->get('name'); ?></h6>
          <a href="<?php echo base_url('login/logout'); ?>" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
        </div>
      </div>
    </div>

  </header>