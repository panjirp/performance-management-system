<?php include 'header.php';?>

      
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