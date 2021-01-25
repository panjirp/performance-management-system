<?php include 'header.php';?>

  <div class="content content-fixed content-auth">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
          <div>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo base_url('operational'); ?>">Pengaturan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Master Data Department</li>
              </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Master Data Jabatan</h4>
          </div>
        </div>

      <!-- CONTENT -->
      <!-- Modal -->
      <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalDeleteLabel">Hapus Data Jabatan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah kamu yakin untuk hapus data jabatan?
            </div>
            <div class="modal-footer">  
              <form action="<?php echo base_url('master/delete_job_position'); ?>" method="post">            
                <input id="jobId" name="jobId" style="display:none">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary">Ya, Hapus</button>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-sm-row flex-column flex-sm-wrap mt-sm-1">
            <!-- Tambah Pengguna Button -->
            <div class="col-auto pl-0 mb-2 mb-sm-0">
              <a href="new_job_position">
                <button type="button" class="btn-input btn-sm">
                  <i class="fa fa-plus mr-1" aria-hidden="true"></i>
                  Tambah Data Jabatan
                </button>
              </a>
            </div>
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
            <table class="table table-striped" id="jabatanTable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Jabatan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($i = 0; $i < count($jobPosition); $i++) {
                ?>
                  <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo $jobPosition[$i]->name; ?></td>
                    <td>
                      <!-- Edit -->
                      <a href="<?php echo base_url('master/edit_job_position/'.$jobPosition[$i]->id); ?>">
                      <button type="button ml-2" class="btn-edit ml-3"><i class="fa fa-cog" aria-hidden="true"></i>
                        Edit
                      </button>
                      </a>
                      <!-- Delete -->
                      <button type="button ml-2" data-id="<?php echo $jobPosition[$i]->id; ?>" data-toggle="modal" data-target="#modalDelete" class="openModalDelete btn-delete ml-3"><i class="fa fa-trash" aria-hidden="true"></i>
                        Hapus
                      </button>
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
    table1 = $('#jabatanTable').DataTable({
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
     var jobId = $(this).data('id');
     $("#jobId").val(jobId);
  });

</script>