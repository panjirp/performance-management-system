<?php include 'header.php';?>


  <!-- FORM INPUT -->
  <div class="content content-fixed content-auth">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <!-- <p class="text-dashboard-small mb-3">Record</p> -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="<?php echo base_url("employee"); ?>">Informasi Karyawan</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url("employee/new"); ?>"></a>Tambah Data Karyawan</li>
            </ol>
          </nav>
          <h3>Tambah Data Karyawan</h3>
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="card card bg-white w-75">
          <div class="card-body pb-2">
            <form class="needs-validation was-validated" novalidate action="<?php echo base_url("employee/input_process"); ?>" method="post">

              <div class="form-group">
                <p class="text-req">Nama<em>*</em></p>
                <input type="text" name="empName" class="form-control" placeholder="Masukkan Nama Karyawan" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req mt-4">No. Karyawan<em>*</em></p>
                <input type="text" name="empId" class="form-control" placeholder="Masukkan No. Karyawan" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req">Email <em>*</em></p>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              
              <div class="form-group">
                <p class="text-req">Tanggal Lahir<em>*</em></p>
                <input type="date" name="birthDate" class="form-control" placeholder="Masukkan Tanggal Lahir" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>

              <div class="form-group">
                <p class="text-req">Tanggal Masuk<em>*</em></p>
                <input type="date" name="entryDate" class="form-control" placeholder="Masukkan Tanggal Masuk" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>

              <div class="form-group">
                <label class="text-req">Password<em>*</em></label>
                  <input type="password" id="myInput" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
              </div>

              <div class="float-right">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

</body>

<?php include 'footer.php';?>
</html>