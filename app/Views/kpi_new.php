<?php include 'header.php';?>


  <!-- FORM INPUT -->
  <div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <!-- <p class="text-dashboard-small mb-3">Record</p> -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="<?php echo base_url("kpi"); ?>">Key Performance Index</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url("kpi/new"); ?>"></a>Tambah Data KPI</li>
            </ol>
          </nav>
          <h3>Tambah Data KPI</h3>
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <div class="card card bg-white w-75">
          <div class="card-body pb-2">
            <form class="needs-validation was-validated" novalidate action="<?php echo base_url("kpi/input_kpi"); ?>" method="post">

              <div class="form-group">
                <p class="text-req">Objective<em>*</em></p>
                <input type="text" name="objective" class="form-control" placeholder="Masukkan Objective" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req mt-4">KPI<em>*</em></p>
                <input type="text" name="kpi" class="form-control" placeholder="Masukkan KPI" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req">Unit Of Measure <em>*</em></p>
                <input type="text" name="uom" class="form-control" placeholder="Masukkan Unit Of Measure" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req">Threshold <em>*</em></p>
                <input type="text" name="thr" class="form-control" placeholder="Masukkan Threshold" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req">Target <em>*</em></p>
                <input type="text" name="target" class="form-control" placeholder="Masukkan Target" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req">Max <em>*</em></p>
                <input type="text" name="max" class="form-control" placeholder="Masukkan Max" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req">Weight <em>*</em></p>
                <input type="text" name="weight" class="form-control" placeholder="Masukkan Weight" required>
                <div class="invalid-feedback">Wajib Isi</div>
              </div>
              <div class="form-group">
                <p class="text-req">YTD Method <em>*</em></p>
                <input type="text" name="ytdMethod" class="form-control" placeholder="Masukkan YTD Method" required>
                <div class="invalid-feedback">Wajib Isi</div>
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