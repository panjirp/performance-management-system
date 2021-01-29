<?php include 'header.php';?>

  <div class="content content-fixed content-auth">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="<?php echo base_url('kpi'); ?>">Key Performance Index</a></li>
            </ol>
          </nav>
          <h3>Performance Management System</h3>
        </div>
      </div>

      <!-- CONTENT -->
      <!-- Modal -->
      <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalDeleteLabel">Hapus Data KPI</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah kamu yakin untuk hapus data KPI?
            </div>
            <div class="modal-footer">  
              <form action="<?php echo base_url('kpi/delete'); ?>" method="post">            
                <input id="userId" name="userId" style="display:none">
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
              <a href="kpi/new">
                <button type="button" class="btn-input btn-sm">
                  <i class="fa fa-plus mr-1" aria-hidden="true"></i>
                  Tambah Data KPI
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
            <table class="table table-striped" id="userTable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">OBJECTIVE</th>
                  <th scope="col">KPI</th>
                  <th scope="col">TYPE</th>
                  <th scope="col">UOM</th>
                  <th scope="col">THR</th>
                  <th scope="col">TARGET</th>
                  <th scope="col">MAX</th>
                  <th scope="col">WEIGHT</th>
                  <th scope="col">YTD METHOD</th>
                  <th scope="col">MONTHLY TREND</th>
                  <th scope="col">STATUS</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($i = 0; $i < count($kpi); $i++) {
                ?>
                  <tr>
                    <td><?php echo $i + 1; ?></td>
                    <td><?php echo $kpi[$i]->objective; ?></td>
                    <td><?php echo $kpi[$i]->kpi; ?></td>
                    <td></td>
                    <td><?php echo $kpi[$i]->uom; ?></td>
                    <td><?php echo $kpi[$i]->threshold; ?></td>
                    <td><?php echo $kpi[$i]->target; ?></td>
                    <td><?php echo $kpi[$i]->max; ?></td>
                    <td><?php echo $kpi[$i]->weight; ?></td>
                    <td><?php echo $kpi[$i]->ytd_method; ?></td>
                    <td style="text-align: center;"><i data-feather="arrow-down-right"></i></td>
                    <td style="text-align: center;"><a href="<?php echo base_url('pica'); ?>" class="btn btn-danger" style="padding: 12px;border-radius: 50%;"></a></td>
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