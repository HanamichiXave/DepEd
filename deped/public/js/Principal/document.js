
       $(document).ready(function(){
         var oTable = $('#myTable').DataTable({
           "orderCellsTop": false,
           "searchHighlight" : true,
         });
         $('#search').keyup(function(){
               oTable.search($(this).val()).draw() ;
         });
         $(".dataTables_filter").hide();
         oTable.on('order.dt search.dt', function(){
           oTable.column(0, {search:'applied', order:'applied'}).nodes().each(
            function (cell, i) {
             cell.innerHTML = i+1;
             } );
         }).draw();


       });

      $(document).ready(function () {
            $('#1st').on('change', function () {
               $('#view1').attr('href', $('#1st').val());
            });
        });


      $(document).ready(function () {
            $('#2nd').on('change', function () {
               $('#view2').attr('href', $('#2nd').val());
            });
        });


      $(document).ready(function () {
            $('#3rd').on('change', function () {
               $('#view3').attr('href', $('#3rd').val());
            });
        });

