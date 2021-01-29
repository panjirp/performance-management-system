<?php include 'header.php';?>

    <div class="content content-fixed content-auth">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
          <div>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo base_url('kpi'); ?>">KPI</a></li>
                <li class="breadcrumb-item active" aria-current="page">KPI Achievement History</li>
              </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">KPI Achievement History</h4>
          </div>
        </div>

        <div class="row row-xs">
          <div class="col-sm-6 col-lg-12">
            <div class="card card-body">
              <div class="d-flex d-lg-block d-xl-flex align-items-end">
                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">KPI Name : </h3>
              </div>

              <div class="d-flex d-lg-block d-xl-flex align-items-end">
                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">Threshold/Target/Max : </h3>
              </div>
            </div>
          </div><!-- col -->
          


          <div class="col-md-12 col-xl-4 mg-t-10 order-md-1 order-xl-0">
            <div class="card ht-lg-100p">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h6 class="mg-b-0">KPI Achievement Graph</h6>
                    <ul class="list-inline d-flex mg-t-20 mg-sm-t-10 mg-md-t-0 mg-b-0">
                    <li class="list-inline-item d-flex align-items-center">
                        <span class="d-block wd-10 ht-10 bg-df-1 rounded mg-r-5"></span>
                        <span class="tx-sans tx-uppercase tx-10 tx-medium tx-color-03">Actual</span>
                    </li>
                    <li class="list-inline-item d-flex align-items-center mg-l-5">
                        <span class="d-block wd-10 ht-10 bg-df-2 rounded mg-r-5"></span>
                        <span class="tx-sans tx-uppercase tx-10 tx-medium tx-color-03">Average</span>
                    </li>
                    <li class="list-inline-item d-flex align-items-center mg-l-5">
                        <span class="d-block wd-10 ht-10 bg-df-3 rounded mg-r-5"></span>
                        <span class="tx-sans tx-uppercase tx-10 tx-medium tx-color-03">Plan</span>
                    </li>
                    </ul>
              </div><!-- card-header -->
              <div class="card-body pd-0">
                <div class="pd-y-25 pd-x-20">
                <div class="chart-one">
                  <div id="flotChart" class="flot-chart"></div>
                </div><!-- chart-one -->
                </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->

          <div class="col-lg-12 col-xl-8 mg-t-10">
            <div class="card mg-b-10">
              <div class="card-header pd-y-20 d-sm-flex align-items-start justify-content-between">
                <div>
                  <h6 class="mg-b-5">Problem Identification</h6>
                </div>
              </div><!-- card-header -->
              <div class="card-body pd-y-30">
                  <div class="pd-20 pd-lg-25 pd-xl-30 pd-t-0-f">
                    <div id="editor-container" class="">
                      Type here..
                    </div>
                    <div class="d-flex align-items-center justify-content-between mg-t-10">
                      <div id="toolbar-container" class="bd-0-f pd-0-f">
                        <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                        </span>
                      </div>
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
              </div><!-- card-body -->
            </div><!-- card -->

            <div class="card mg-b-10">
              <div class="card-header pd-y-20 d-sm-flex align-items-start justify-content-between">
                <div>
                  <h6 class="mg-b-5">Corrective Action</h6>
                </div>
              </div><!-- card-header -->
              <div class="card-body pd-y-30">
                  <div class="pd-20 pd-lg-25 pd-xl-30 pd-t-0-f">
                    <div id="editor-container2" class="">
                      Type here..
                    </div>
                    <div class="d-flex align-items-center justify-content-between mg-t-10">
                      <div id="toolbar-container2" class="bd-0-f pd-0-f">
                        <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                        </span>
                      </div>
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- content -->
  </body>
  <?php include 'footer.php';?>
  <script>
  var quill = new Quill('#editor-container', {
    modules: {
      toolbar: '#toolbar-container'
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
  });

  var quill = new Quill('#editor-container2', {
    modules: {
      toolbar: '#toolbar-container2'
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
  });

    var flot1 = $.plot('#flotChart', [{
        data: df3,
        color: '#69b2f8'
    },{
        data: df1,
        color: '#d1e6fa'
    },{
        data: df2,
        color: '#d1e6fa',
        lines: {
        fill: false,
        lineWidth: 1.5
        }
    }], {
        series: {
        stack: 0,
        shadowSize: 0,
        lines: {
            show: true,
            lineWidth: 0,
            fill: 1
        }
        },
        grid: {
        borderWidth: 0,
        aboveData: true
        },
        yaxis: {
        show: false,
        min: 0,
        max: 350
        },
        xaxis: {
        show: true,
        ticks: [[0,''],[8,'Jan'],[20,'Feb'],[32,'Mar'],[44,'Apr'],[56,'May'],[68,'Jun'],[80,'Jul'],[92,'Aug'],[104,'Sep'],[116,'Oct'],[128,'Nov'],[140,'Dec']],
        color: 'rgba(255,255,255,.2)'
        }
    });
  </script>
  
</html>
