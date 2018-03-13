
      function printDiv() 
      {
        var divToPrint=document.getElementById('AppForm');
        var newWin=window.open('','Print-Window');
        newWin.document.open();
        newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
        newWin.document.close();
        setTimeout(function(){newWin.close();},10);
      }

    
      $('#dateOfBirthIcon').click(function(){
          $('#dateOfBirth').datepicker("show");
      })
      $('#dateOfBirthCloseIcon').click(function(){
          $('#dateOfBirth').datepicker("hide");
          $('#dateOfBirth').datepicker('setDate', null)
      })

      $( function() {
         $( "#dateOfBirth" ).datepicker({
            dateFormat: 'd, MM, yy',
            changeMonth: true,
            changeYear: true,
            maxDate: 0
         });
      } );

     
      $('#dateOfBirthIconFather').click(function(){
          $('#dateOfBirthFather').datepicker("show");
      })

      $('#dateOfBirthCloseIconFather').click(function(){
          $('#dateOfBirthFather').datepicker("hide");
          $('#dateOfBirthFather').datepicker('setDate', null)
      })

      $( function() {
         $( "#dateOfBirthFather" ).datepicker({
            dateFormat: 'd, MM, yy',
            changeMonth: true,
            changeYear: true,
            maxDate: 0
         });
      } );

     
      $('#dateOfBirthIconMother').click(function(){
          $('#dateOfBirthMother').datepicker("show");
      })

      $('#dateOfBirthCloseIconMother').click(function(){
          $('#dateOfBirthMother').datepicker("hide");
          $('#dateOfBirthMother').datepicker('setDate', null)
      })

      $( function() {
         $( "#dateOfBirthMother" ).datepicker({
            dateFormat: 'd, MM, yy',
            changeMonth: true,
            changeYear: true,
            maxDate: 0
         });
      } );

     
      $('#dateOfBirthIconGuardian').click(function(){
          $('#dateOfBirthGuardian').datepicker("show");
      })

      $('#dateOfBirthCloseIconGuardian').click(function(){
          $('#dateOfBirthGuardian').datepicker("hide");
          $('#dateOfBirthGuardian').datepicker('setDate', null)
      })

      $( function() {
         $( "#dateOfBirthGuardian" ).datepicker({
            dateFormat: 'd, MM, yy',
            changeMonth: true,
            changeYear: true,
            maxDate: 0
         });
      } );
    // Upload Image in Student info
         function readURL(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
            
              reader.onload = function(e) {
                $('#studentimg').attr('src', e.target.result);
              }
            
              reader.readAsDataURL(input.files[0]);
            }
            }
            
            $("#studentimginp").change(function() {
               readURL(this);
            });

      // Upload Image in Father info 
         function readURL2(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
            
              reader.onload = function(e) {
                $('#fatherimg').attr('src', e.target.result);
              }
            
              reader.readAsDataURL(input.files[0]);
            }
            }
            
            $("#fatherimginp").change(function() {
            readURL2(this);
         });

         function readURL3(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
            
              reader.onload = function(e) {
                $('#motherimg').attr('src', e.target.result);
              }
            
              reader.readAsDataURL(input.files[0]);
            }
            }
            
            $("#motherimginp").change(function() {
            readURL3(this);
         });

         function readURL4(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
            
              reader.onload = function(e) {
                $('#guardianimg').attr('src', e.target.result);
              }
            
              reader.readAsDataURL(input.files[0]);
            }
            }
            
            $("#guardianimginp").change(function() {
            readURL4(this);
         });