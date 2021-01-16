
  $(document).ready(function() {
    //jtm
    jtmTable = $('#jtmTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#jtmTable tbody').on('click', 'tr', function() {
      if ($(this).hasClass('selected')) {
        $(this).removeClass('selected');
        $('#deleteJtm').prop('disabled', true);
        $('#editJtm').prop('disabled', true);
      } else {
        jtmTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        $('#deleteJtm').prop('disabled', false);
        $('#editJtm').prop('disabled', false);
      }
      console.log($(this).attr('id'));
    });

    $('#deleteJtm').click(function() {
      var asetId = $('#jtmTable .selected').attr('id');
      $("#asetId").val(asetId);
      $("#asetName").val("jtm");
    });

    //jtr
    jtrTable = $('#jtrTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#jtrTable tbody').on('click', 'tr', function() {
      if ($(this).hasClass('selected')) {
        $(this).removeClass('selected');
        $('#deleteJtr').prop('disabled', true);
        $('#editJtr').prop('disabled', true);
      } else {
        jtrTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
        $('#deleteJtr').prop('disabled', false);
        $('#editJtr').prop('disabled', false);
      }
    //   console.log($(this).attr('id'));
    });
  
    $('#deleteJtr').click(function() {
        var asetId = $('#jtrTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("jtr");
        console.log(asetId);
    });

    //jointing
    jointingTable = $('#jointingTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#jointingTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
          $(this).removeClass('selected');
          $('#deleteJointing').prop('disabled', true);
          $('#editJointing').prop('disabled', true);
        } else {
          jointingTable.$('tr.selected').removeClass('selected');
          $(this).addClass('selected');
          $('#deleteJointing').prop('disabled', false);
          $('#editJointing').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });

    $('#deleteJointing').click(function() {
        var asetId = $('#jointingTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("jointing");
        console.log(asetId);
    });

    //tiang
    tiangTable = $('#tiangTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#tiangTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
          $(this).removeClass('selected');
          $('#deleteTiang').prop('disabled', true);
          $('#editTiang').prop('disabled', true);
        } else {
          tiangTable.$('tr.selected').removeClass('selected');
          $(this).addClass('selected');
          $('#deleteTiang').prop('disabled', false);
          $('#editTiang').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });

    $('#deleteTiang').click(function() {
        var asetId = $('#tiangTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("tiang");
        console.log(asetId);
    });

    //kotakapp
    kotakappTable = $('#kotakappTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#kotakappTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteKotakapp').prop('disabled', true);
            $('#editKotakapp').prop('disabled', true);
        } else {
            kotakappTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteKotakapp').prop('disabled', false);
            $('#editKotakapp').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });

    $('#deleteKotakapp').click(function() {
        var asetId = $('#kotakappTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("kotakapp");
        console.log(asetId);
    });

    //Gardu Distribusi
    garduDistTable = $('#garduDistTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#garduDistTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteGardudist').prop('disabled', true);
            $('#editGardudist').prop('disabled', true);
        } else {
            garduDistTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteGardudist').prop('disabled', false);
            $('#editGardudist').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });

    $('#deleteGardudist').click(function() {
        var asetId = $('#garduDistTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("gardu_ditribusi");
        console.log(asetId);
    });


    //Terminasi
    terminasiTable = $('#terminasiTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#terminasiTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteTerminasi').prop('disabled', true);
            $('#editTerminasi').prop('disabled', true);
        } else {
            terminasiTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteTerminasi').prop('disabled', false);
            $('#editTerminasi').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });

    $('#deleteTerminasi').click(function() {
        var asetId = $('#terminasiTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("terminasi");
        console.log(asetId);
    });

    //Kubikel
    kubikelTable = $('#kubikelTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#kubikelTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteKubikel').prop('disabled', true);
            $('#editKubikel').prop('disabled', true);
        } else {
            kubikelTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteKubikel').prop('disabled', false);
            $('#editKubikel').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });

    $('#deleteKubikel').click(function() {
        var asetId = $('#kubikelTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("kubikel");
        console.log(asetId);
    });

    //ct
    ctTable = $('#ctTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });

    $('#ctTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteCt').prop('disabled', true);
            $('#editCt').prop('disabled', true);
        } else {
            ctTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteCt').prop('disabled', false);
            $('#editCt').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });

    $('#deleteCt').click(function() {
        var asetId = $('#ctTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("ct");
        console.log(asetId);
    });

    //pt
    ptTable = $('#ptTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#ptTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deletePt').prop('disabled', true);
            $('#editPt').prop('disabled', true);
        } else {
            ptTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deletePt').prop('disabled', false);
            $('#editPt').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deletePt').click(function() {
        var asetId = $('#ptTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("pt");
        console.log(asetId);
    });

    //rele
    releTable = $('#releTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#releTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteRele').prop('disabled', true);
            $('#editRele').prop('disabled', true);
        } else {
            releTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteRele').prop('disabled', false);
            $('#editRele').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deleteRele').click(function() {
        var asetId = $('#releTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("rele");
        console.log(asetId);
    });

    //arrester
    arresterTable = $('#arresterTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#arresterTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteArrester').prop('disabled', true);
            $('#editArrester').prop('disabled', true);
        } else {
            arresterTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteArrester').prop('disabled', false);
            $('#editArrester').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deleteArrester').click(function() {
        var asetId = $('#arresterTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("arrester");
        console.log(asetId);
    });

    //kwhgd
    kwhgdTable = $('#kwhgdTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#kwhgdTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteKwhgd').prop('disabled', true);
            $('#editKwhgd').prop('disabled', true);
        } else {
            kwhgdTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteKwhgd').prop('disabled', false);
            $('#editKwhgd').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deleteKwhgd').click(function() {
        var asetId = $('#kwhgdTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("kwhgd");
        console.log(asetId);
    });

    //fco
    fcoTable = $('#fcoTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#fcoTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteFco').prop('disabled', true);
            $('#editFco').prop('disabled', true);
        } else {
            fcoTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteFco').prop('disabled', false);
            $('#editFco').prop('disabled', false);
        }
        console.log($(this).attr('id'));
    });
 
    $('#deleteFco').click(function() {
        var asetId = $('#fcoTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("fco");
        console.log(asetId);
    });

    //lbs
    lbsTable = $('#lbsTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#lbsTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteLbs').prop('disabled', true);
            $('#editLbs').prop('disabled', true);
        } else {
            lbsTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteLbs').prop('disabled', false);
            $('#editLbs').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deleteLbs').click(function() {
        var asetId = $('#lbsTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("lbs");
        console.log(asetId);
    });

    //recloser
    recloserTable = $('#recloserTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#recloserTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteRecloser').prop('disabled', true);
            $('#editRecloser').prop('disabled', true);
        } else {
            recloserTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteRecloser').prop('disabled', false);
            $('#editRecloser').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deleteRecloser').click(function() {
        var asetId = $('#recloserTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("recloser");
        console.log(asetId);
    });

    //sectionalizer
    sectionalizerTable = $('#sectionalizerTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#sectionalizerTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteSectionalizer').prop('disabled', true);
            $('#editSectionalizer').prop('disabled', true);
        } else {
            sectionalizerTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteSectionalizer').prop('disabled', false);
            $('#editSectionalizer').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deleteSectionalizer').click(function() {
        var asetId = $('#sectionalizerTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("sectionalizer");
        console.log(asetId);
    });

    //trafo
    trafoTable = $('#trafoTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#trafoTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deleteTrafo').prop('disabled', true);
            $('#editTrafo').prop('disabled', true);
        } else {
            trafoTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deleteTrafo').prop('disabled', false);
            $('#editTrafo').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deleteTrafo').click(function() {
        var asetId = $('#trafoTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("trafo");
        console.log(asetId);
    });

    //phbtr
    phbtrTable = $('#phbtrTable').DataTable({
      language: {
        searchPlaceholder: 'Search...',
        sSearch: '',
        lengthMenu: '_MENU_ Baris',
      },
      dom: 'rtip',
      /* No ordering applied by DataTables during initialisation */
      "order": []
    });
 
    $('#phbtrTable tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            $('#deletePhbtr').prop('disabled', true);
            $('#editPhbtr').prop('disabled', true);
        } else {
            phbtrTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#deletePhbtr').prop('disabled', false);
            $('#editPhbtr').prop('disabled', false);
        }
        // console.log($(this).attr('id'));
    });
 
    $('#deletePhbtr').click(function() {
        var asetId = $('#phbtrTable .selected').attr('id');
        $("#asetId").val(asetId);
        $("#asetName").val("phbtr");
        console.log(asetId);
    });

  });

    $('.tambahAset').on("click",function() {
        var reportId = $(this).attr("data-reportId")
        console.log(reportId);
        changeForm2(reportId);
        $('#inputGroupSelect02 option[value!='+reportId+']').hide();
        $('#inputGroupSelect02').val(reportId);
        $('#modalTambahAset').modal("show");
    });

    $('.ubahAset').on("click",function() {
        var reportId = $(this).attr("data-reportId");
        $('#inputGroupSelect03 option[value!='+reportId+']').hide();
        $('#inputGroupSelect03').val(reportId);
        console.log(this.id)
        if(this.id == "editJtm"){
            var asetId = $('#jtmTable .selected').attr('id');   
        }else if(this.id == "editJtr"){
            var asetId = $('#jtrTable .selected').attr('id');   
        }else if(this.id == "editJointing"){
            var asetId = $('#jointingTable .selected').attr('id');   
        }else if(this.id == "editTiang"){
            var asetId = $('#tiangTable .selected').attr('id');   
        }else if(this.id == "editKotakapp"){
            var asetId = $('#kotakappTable .selected').attr('id');   
        }else if(this.id == "editGardudist"){
            var asetId = $('#garduDistTable .selected').attr('id');   
        }else if(this.id == "editTerminasi"){
            var asetId = $('#terminasiTable .selected').attr('id');   
        }else if(this.id == "editKubikel"){
            var asetId = $('#kubikelTable .selected').attr('id');   
        }else if(this.id == "editCt"){
            var asetId = $('#ctTable .selected').attr('id');   
        }else if(this.id == "editPt"){
            var asetId = $('#ptTable .selected').attr('id');   
        }else if(this.id == "editRele"){
            var asetId = $('#releTable .selected').attr('id');   
        }else if(this.id == "editArrester"){
            var asetId = $('#arresterTable .selected').attr('id');   
        }else if(this.id == "editKwhgd"){
            var asetId = $('#kwhgdTable .selected').attr('id');   
        }else if(this.id == "editFco"){
            var asetId = $('#fcoTable .selected').attr('id');   
        }else if(this.id == "editLbs"){
            var asetId = $('#lbsTable .selected').attr('id');   
        }else if(this.id == "editRecloser"){
            var asetId = $('#recloserTable .selected').attr('id');   
        }else if(this.id == "editSectionalizer"){
            var asetId = $('#sectionalizerTable .selected').attr('id');   
        }else if(this.id == "editTrafo"){
            var asetId = $('#trafoTable .selected').attr('id');   
        }else if(this.id == "editPhbtr"){
            var asetId = $('#phbtrTable .selected').attr('id');   
        }
        changeForm3(reportId,asetId);        
        $('#modalUbahAset').modal("show");
    });



  $('#searchTable').keyup(function() {
    jtmTable.search($(this).val()).draw();
    jtrTable.search($(this).val()).draw();
    jointingTable.search($(this).val()).draw();
    kotakappTable.search($(this).val()).draw();
    garduDistTable.search($(this).val()).draw();
    terminasiTable.search($(this).val()).draw();
    kubikelTable.search($(this).val()).draw();
    ctTable.search($(this).val()).draw();
    ptTable.search($(this).val()).draw();
    releTable.search($(this).val()).draw();
    arresterTable.search($(this).val()).draw();
    kwhgdTable.search($(this).val()).draw();
    fcoTable.search($(this).val()).draw();
    lbsTable.search($(this).val()).draw();
    recloserTable.search($(this).val()).draw();
    sectionalizerTable.search($(this).val()).draw();
    trafoTable.search($(this).val()).draw();
    phbtrTable.search($(this).val()).draw();
  })

  $('#lengthTable').change(function() {
    jtmTable.search($(this).val()).draw();
    jtrTable.search($(this).val()).draw();
    jointingTable.search($(this).val()).draw();
    kotakappTable.search($(this).val()).draw();
    garduDistTable.search($(this).val()).draw();
    terminasiTable.search($(this).val()).draw();
    kubikelTable.search($(this).val()).draw();
    ctTable.search($(this).val()).draw();
    ptTable.search($(this).val()).draw();
    releTable.search($(this).val()).draw();
    arresterTable.search($(this).val()).draw();
    kwhgdTable.search($(this).val()).draw();
    fcoTable.search($(this).val()).draw();
    lbsTable.search($(this).val()).draw();
    recloserTable.search($(this).val()).draw();
    sectionalizerTable.search($(this).val()).draw();
    trafoTable.search($(this).val()).draw();
    phbtrTable.search($(this).val()).draw();
  })


  $("#showAset").click(function() {
    $("#modalAset").modal("show")
  })

  $('.datepicker').datepicker();


  function changeForm(id) {
    //  1=JTM
    //  2=JTR
    //  3=JOINTING
    //  4=TIANG
    //  5=KOTAKAPP
    //  6=GARDU_DISTRIBUSI
    //  7=TERMINASI
    //  8=KUBIKEL
    //  9=CT
    //  10=PT
    //  11=RELE
    //  12=ARRESTER
    //  13=KWHGD
    //  14=FCO
    //  15=LBS
    //  16=RECLOSER
    //  17=SECTIONALIZER
    //  18=TRAFO
    //  19=PHBTR 

    switch (id) {
      case "1":
        hideOther("formJTM");
        break;
      case "2":
        hideOther("formJTR");
        break;
      case "3":
        hideOther("formJOINTING");
        break;
      case "4":
        hideOther("formTIANG");
        break;
      case "5":
        hideOther("formKOTAKAPP");
        break;
      case "6":
        hideOther("formGARDUDISTRIBUSI");
        break;
      case "7":
        hideOther("formTERMINASI");
        break;
      case "8":
        hideOther("formKUBIKEL");
        break;
      case "9":
        hideOther("formCT");
        break;
      case "10":
        hideOther("formPT");
        break;
      case "11":
        hideOther("formRELE");
        break;
      case "12":
        hideOther("formARRESTER");
        break;
      case "13":
        hideOther("formKWHGD");
        break;
      case "14":
        hideOther("formFCO");
        break;
      case "15":
        hideOther("formLBS");
        break;
      case "16":
        hideOther("formRECLOSER");
        break;
      case "17":
        hideOther("formSECTIONALIZER");
        break;
      case "18":
        hideOther("formTRAFO");
        break;
      case "19":
        hideOther("formPHBTR");
        break;
      default:
        hideAll();
    }
  }

  function hideOther(formName) {
    hideAll();

    $('#' + formName).show();
    $('#btnSimpan').prop('disabled', false);
  }

  function hideAll() {
    $('#formJTM').hide();
    $('#formJTR').hide();
    $('#formJOINTING').hide();
    $('#formTIANG').hide();
    $('#formKOTAKAPP').hide();
    $('#formGARDUDISTRIBUSI').hide();
    $('#formTERMINASI').hide();
    $('#formKUBIKEL').hide();
    $('#formCT').hide();
    $('#formPT').hide();
    $('#formRELE').hide();
    $('#formARRESTER').hide();
    $('#formKWHGD').hide();
    $('#formFCO').hide();
    $('#formLBS').hide();
    $('#formRECLOSER').hide();
    $('#formSECTIONALIZER').hide();
    $('#formTRAFO').hide();
    $('#formPHBTR').hide();
  }

  function changeForm2(id) {
    //  1=JTM
    //  2=JTR
    //  3=JOINTING
    //  4=TIANG
    //  5=KOTAKAPP
    //  6=GARDU_DISTRIBUSI
    //  7=TERMINASI
    //  8=KUBIKEL
    //  9=CT
    //  10=PT
    //  11=RELE
    //  12=ARRESTER
    //  13=KWHGD
    //  14=FCO
    //  15=LBS
    //  16=RECLOSER
    //  17=SECTIONALIZER
    //  18=TRAFO
    //  19=PHBTR 

    switch (id) {
      case "1":
        hideOther2("formJTM2");
        break;
      case "2":
        hideOther2("formJTR2");
        break;
      case "3":
        hideOther2("formJOINTING2");
        break;
      case "4":
        hideOther2("formTIANG2");
        break;
      case "5":
        hideOther2("formKOTAKAPP2");
        break;
      case "6":
        hideOther2("formGARDUDISTRIBUSI2");
        break;
      case "7":
        hideOther2("formTERMINASI2");
        break;
      case "8":
        hideOther2("formKUBIKEL2");
        break;
      case "9":
        hideOther2("formCT2");
        break;
      case "10":
        hideOther2("formPT2");
        break;
      case "11":
        hideOther2("formRELE2");
        break;
      case "12":
        hideOther2("formARRESTER2");
        break;
      case "13":
        hideOther2("formKWHGD2");
        break;
      case "14":
        hideOther2("formFCO2");
        break;
      case "15":
        hideOther2("formLBS2");
        break;
      case "16":
        hideOther2("formRECLOSER2");
        break;
      case "17":
        hideOther2("formSECTIONALIZER2");
        break;
      case "18":
        hideOther2("formTRAFO2");
        break;
      case "19":
        hideOther2("formPHBTR2");
        break;
      default:
        hideAll();
    }
  }

  function hideOther2(formName) {
    hideAll2();

    $('#' + formName).show();
  }

  function hideAll2() {
    $('#formJTM2').hide();
    $('#formJTR2').hide();
    $('#formJOINTING2').hide();
    $('#formTIANG2').hide();
    $('#formKOTAKAPP2').hide();
    $('#formGARDUDISTRIBUSI2').hide();
    $('#formTERMINASI2').hide();
    $('#formKUBIKEL2').hide();
    $('#formCT2').hide();
    $('#formPT2').hide();
    $('#formRELE2').hide();
    $('#formARRESTER2').hide();
    $('#formKWHGD2').hide();
    $('#formFCO2').hide();
    $('#formLBS2').hide();
    $('#formRECLOSER2').hide();
    $('#formSECTIONALIZER2').hide();
    $('#formTRAFO2').hide();
    $('#formPHBTR2').hide();
  }


  function changeForm3(id,asetId) {
    switch (id) {
      case "1":
        hideOther3("formJTM3");
        editJtm(asetId);
        break;
      case "2":
        hideOther3("formJTR3");
        editJtr(asetId);
        break;
      case "3":
        hideOther3("formJOINTING3");
        editJointing(asetId);
        break;
      case "4":
        hideOther3("formTIANG3");
        editTiang(asetId);
        break;
      case "5":
        hideOther3("formKOTAKAPP3");
        editKotakapp(asetId);
        break;
      case "6":
        hideOther3("formGARDUDISTRIBUSI3");
        editGarduDist(asetId);
        break;
      case "7":
        hideOther3("formTERMINASI3");
        editTerminasi(asetId);
        break;
      case "8":
        hideOther3("formKUBIKEL3");
        editKubikel(asetId);
        break;
      case "9":
        hideOther3("formCT3");
        editCt(asetId);
        break;
      case "10":
        hideOther3("formPT3");
        editPt(asetId);
        break;
      case "11":
        hideOther3("formRELE3");
        editRele(asetId);
        break;
      case "12":
        hideOther3("formARRESTER3");
        editArrester(asetId);
        break;
      case "13":
        hideOther3("formKWHGD3");
        editKwhgd(asetId);
        break;
      case "14":
        hideOther3("formFCO3");
        editFco(asetId);
        break;
      case "15":
        hideOther3("formLBS3");
        editLbs(asetId);
        break;
      case "16":
        hideOther3("formRECLOSER3");
        editRecloser(asetId);
        break;
      case "17":
        hideOther3("formSECTIONALIZER3");
        editSectionalizer(asetId);
        break;
      case "18":
        hideOther3("formTRAFO3");
        editTrafo(asetId);
        break;
      case "19":
        hideOther3("formPHBTR3");
        editPhbtr(asetId);
        break;
      default:
        hideAll3();
    }
  }

  function hideOther3(formName) {
    hideAll3();

    $('#' + formName).show();
  }

  function hideAll3() {
    $('#formJTM3').hide();
    $('#formJTR3').hide();
    $('#formJOINTING3').hide();
    $('#formTIANG3').hide();
    $('#formKOTAKAPP3').hide();
    $('#formGARDUDISTRIBUSI3').hide();
    $('#formTERMINASI3').hide();
    $('#formKUBIKEL3').hide();
    $('#formCT3').hide();
    $('#formPT3').hide();
    $('#formRELE3').hide();
    $('#formARRESTER3').hide();
    $('#formKWHGD3').hide();
    $('#formFCO3').hide();
    $('#formLBS3').hide();
    $('#formRECLOSER3').hide();
    $('#formSECTIONALIZER3').hide();
    $('#formTRAFO3').hide();
    $('#formPHBTR3').hide();
  }


  