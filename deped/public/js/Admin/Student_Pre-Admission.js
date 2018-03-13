
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
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


	        $('#select-religion').on('change', function () {
	            var optionSelected = $("option:selected", this);
	            var valueSelected = this.value;
	            if (valueSelected == 1) {
	                $("#protestant").show();
	                $("#others").hide();
	            }
	            else if (valueSelected == 2) {
	                $("#protestant").hide();
	                $("#others").show();
	            }
	            else {
	                $("#protestant").hide();
	                $("#others").hide();
	            }
	        });


	        $(document).ready(function () {
	            $('#religion-select').on('change', function () {
	                var optionSelected = $("option:selected", this);
	                var valueSelected = this.value;
	                if (valueSelected == 1) {
	                    $('#protest').show();
	                    $('#other').hide();
	                }
	                else if (valueSelected == 2) {
	                    $('#protest').hide();
	                    $('#other').show();
	                }
	                else {
	                    $('#protest').hide();
	                    $('#other').hide();
	                }
	            });
	        });


	        function printDiv() {
	            var divToPrint = document.getElementById('AppForm');
	            var newWin = window.open('', 'Print-Window');
	            newWin.document.open();
	            newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
	            newWin.document.close();
	            setTimeout(function () { newWin.close(); }, 10);
	        }


	        $(document).ready(function () {
	            $("#mrmrs").hide();
	            $("#mr").hide();
	            $("#mrs").hide();
	            $("#ms").hide();
	        })
	        $("#childApplications").change(function () {
	            if ($(this).val() == "Mr_Mrs") {
	                $("#mrmrs").show();
	                $("#mr").hide();
	                $("#mrs").hide();
	                $("#ms").hide();
	            } else if ($(this).val() == "Mr") {
	                $("#mrmrs").hide();
	                $("#mr").show();
	                $("#mrs").hide();
	                $("#ms").hide();
	            } else if ($(this).val() == "Mrs") {
	                $("#mrmrs").hide();
	                $("#mr").hide();
	                $("#mrs").show();
	                $("#ms").hide();
	            } else {
	                $("#mrmrs").hide();
	                $("#mr").hide();
	                $("#mrs").hide();
	                $("#ms").show();
	            }
	        })


      $('#dateOfBirthIcon').click(function(){
          $('#dateOfBirth').datepicker("show");
      })

      $('#dateOfBirthCloseIcon').click(function(){
          $('#dateOfBirth').datepicker("hide");
          $('#dateOfBirth').datepicker('setDate', null)
      })

      $( function() {
         $( "#dateOfBirth" ).datepicker({
            dateFormat: 'd MM, yy',
            changeMonth: true,
            changeYear: true,
            maxDate: 0
         });
      } );



		// Add row the table
		$('#btnAddRow').on('click', function() {
		    var lastRow = $('#scholastic tbody tr:last').html();
		    //alert(lastRow);
		    $('#scholastic tbody').append('<tr>' + lastRow + '</tr>');
		    $('#scholastic tbody tr:last input').val('');
		});

		// Delete last row in the table
		$('#btndeleteRow').on('click', function() {
		    var lenRow = $('#scholastic tbody tr').length;
		    //alert(lenRow);
		    if (lenRow == 1 || lenRow <= 1) {
		        alert("Can't remove all row!");
		    } else {
		        $('#scholastic tbody tr:last').remove();
		    }
		});



		// Add row the table
		$('#brobtnAddRow').on('click', function() {
		    var lastRow = $('#brothers tbody tr:last').html();
		    //alert(lastRow);
		    $('#brothers tbody').append('<tr>' + lastRow + '</tr>');
		    $('#brothers tbody tr:last input').val('');
		});

		// Delete last row in the table
		$('#brobtndeleteRow').on('click', function() {
		    var lenRow = $('#brothers tbody tr').length;
		    //alert(lenRow);
		    if (lenRow == 1 || lenRow <= 1) {
		        alert("Can't remove all row!");
		    } else {
		        $('#brothers tbody tr:last').remove();
		    }
		});

        $(document).ready(function(){
            $('.dropdown-submenu a.test').on("click", function(e){
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });


