<?php include 'header.php';?>

    <div class="content content-fixed content-auth">
      <div class="container ht-100p tx-center">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
          <div>
            <h4 class="mg-b-0 tx-spacing--1">Pengaturan</h4>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-10 col-sm-6 col-md-3 col-lg-3 mg-t-40 mg-sm-t-0 d-flex flex-column">
          <a href="master/department">
            <div class="card border-0">
              <img src="<?php echo base_url(); ?>/assets/img/department.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h6 class="card-title">Master Department</h6>
              </div>
            </div>
          </a>
          </div><!-- col -->
          <div class="col-10 col-sm-6 col-md-3 col-lg-3 mg-t-40 mg-sm-t-0 d-flex flex-column">
            <a href="master/job_position">
              <div class="card border-0">
                <img src="<?php echo base_url(); ?>/assets/img/job-position.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h6 class="card-title">Master Jabatan</h6>
                </div>
              </div>
            </a>
          </div><!-- col -->
          
        </div><!-- row -->

        
      </div><!-- container -->
    </div><!-- content -->
  </body>

  <?php include 'footer.php';?>