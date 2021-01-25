<?php include 'header.php';?>


  <!-- FORM INPUT -->
  <div class="content content-fixed content-auth">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <!-- <p class="text-dashboard-small mb-3">Record</p> -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="<?php echo base_url("master/department"); ?>">Master Data Department</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url("master/edit_department"); ?>"></a>Ubah Data Department</li>
            </ol>
          </nav>
          <h3>Ubah Data Department</h3>
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="card card bg-white w-75">
          <div class="card-body pb-2">
            <form class="needs-validation was-validated" novalidate action="<?php echo base_url("master/edit_process_department"); ?>" method="post">

              <div class="form-group">
                <p class="text-req">Nama<em>*</em></p>
                <input type="text" name="deptName" class="form-control" placeholder="Masukkan Nama Department" value="<?php echo $department[0]->name;?>" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="float-right">
                <input name="deptId" value="<?php echo $department[0]->id;?>" style="display:none">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

<?php include 'footer.php';?>
</html>