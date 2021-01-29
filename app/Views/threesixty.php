<?php include 'header.php';?>

  <div class="content content-fixed content-auth">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="<?php echo base_url('employee'); ?>">360 Feedback Report</a></li>
            </ol>
          </nav>
          <h3>Performance Management System</h3>
        </div>
      </div>

      <!-- CONTENT -->
     
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-sm-row flex-column flex-sm-wrap mt-sm-1">
            <!-- Item Per Page -->
            <div class="col-auto pl-0">
              <select class="drp-item ml-3" id="lengthTbl1">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
              </select>
            </div>
            <p class="col-lg-5 col-md-3 pl-0 mt-2">baris</p>
            <!-- Search and Reset-->
            <div class="col pl-0">
              <div class="input-group">
                <input type="text" id="searchTbl1" class="form-control form-search" placeholder="Search">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- TABLE -->
      <div class="card mt-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="userTable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Karyawan</th>
                  <th scope="col">Divisi/Dept</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Role</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($i = 0; $i < count($stakeholder); $i++) {
                ?>
                  <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo $stakeholder[$i]->username; ?></td>
                    <td><?php echo $stakeholder[$i]->department; ?></td>
                    <td><?php echo $stakeholder[$i]->jabatan; ?></td>
                    <td><?php echo $stakeholder[$i]->role; ?></td>
                    <td>-</td>
                    <td>
                      <!-- Edit -->
                      <a href="<?php echo base_url('threesixty/edit/'.$stakeholder[$i]->userId); ?>">
                      <button type="button ml-2" class="btn-edit ml-3"><i class="fa fa-pen" aria-hidden="true"></i>
                        
                      </button>
                      </a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php';?>

<script>
  $(document).ready( function () {
    table1 = $('#userTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip'
    });
  });

  $('#searchTbl1').keyup(function(){
    table1.search($(this).val()).draw();
  })

  $('#lengthTbl1').change(function(){
    table1.page.len($(this).val()).draw();
  })

  $(document).on("click", ".openModalDelete", function () {
     var userId = $(this).data('id');
     $("#userId").val(userId);
  });

</script>