<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/assets/img/favicon.png"> -->

    <title>Performance Management System</title>

    <!-- vendor css -->
    <link href="<?php echo base_url(); ?>/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashforge.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashforge.auth.css">
  </head>
  <body>

    <div class="content content-fixed content-auth-alt">
      <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
          <div class="media-body align-items-center d-none d-lg-flex">
            <div class="mx-wd-600">
              <!-- <img src="<?php echo base_url(); ?>/assets/img/karabha.png" class="img-fluid" alt=""> -->
            </div>
          </div><!-- media-body -->
          <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
            <div class="wd-100p">
              <h3 class="tx-color-01 mg-b-5">Sign In</h3>
              <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>

            
              <form action="<?php echo 'login/login_process'; ?>" method="post">
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" class="form-control" placeholder="yourname@yourmail.com" name="email" required>
                </div>

                <div class="form-group">
                  <div class="d-flex justify-content-between mg-b-5">
                    <label class="mg-b-0-f">Password</label>
                    <a href="<?php echo base_url("login/forgot_password"); ?>" class="tx-13">Forgot password?</a>
                  </div>
                  <input type="password" class="form-control" placeholder="Enter your password" name="password" required>
                </div>
                <button class="btn btn-brand-02 btn-block">Sign In</button>
              </form>
              <div class="tx-13 mg-t-20 tx-center">Don't have an account? <a href="<?php echo base_url("signup"); ?>">Create an Account</a></div>
            </div>
          </div><!-- sign-wrapper -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->
  </body>
  
  <?php include 'footer.php';?>

</html>
