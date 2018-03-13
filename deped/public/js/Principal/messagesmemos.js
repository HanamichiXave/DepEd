
         $(document).ready(function(){
           var oTable = $('#myTable').DataTable({
             "orderCellsTop": false,
             "searchHighlight" : true,
              "columnDefs": [
                { 
                  "sortable" : false, "targets": [0,1,6],
                  "searchable": false, "targets": [0,1,6]
                }
                ],
             "order": [[ 2, "asc" ]]
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

        $('#compose').on('show.bs.modal', function () {
           jQuery(document).ready(function() {   
          $('#recipient').tokenfield({
            autocomplete: {
              source: ['mayson@simplevia.com', 'xavier@simplevia.com', 'benson@simplevia.com', 'ivan@simplevia.com', 'cj@simplevia.com', 'ave@simplevia.com', 'bravo@simplevia.com', 'bea@simplevia.com', 'jham@simplevia.com', 'elli@simplevia.com'],
              delay: 1
            },
            showAutocompleteOnFocus: true
          });
          $('#cc').tokenfield({
            autocomplete: {
              source: ['mayson@simplevia.com', 'xavier@simplevia.com', 'benson@simplevia.com', 'ivan@simplevia.com', 'cj@simplevia.com', 'ave@simplevia.com', 'bravo@simplevia.com', 'bea@simplevia.com', 'jham@simplevia.com', 'elli@simplevia.com'],
              delay: 1
            },
            showAutocompleteOnFocus: true
          });
        });
        })

          $(document).ready(function() {
            
            $('#calendar').fullCalendar({
              height: 415,
              header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
              },
              defaultDate: '2017-11-12',
              navLinks: true, // can click day/week names to navigate views
              selectable: true,
              selectHelper: true,
              select: function(start, end) {
                var title = prompt('Event Title:');
                var eventData;
                if (title) {
                  eventData = {
                    title: title,
                    start: start,
                    end: end
                  };
                  $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                }
                $('#calendar').fullCalendar('unselect');
              },
              editable: true,
              eventLimit: true, // allow "more" link when too many events
              events: [
                {
                  title: 'All Day Event',
                  start: '2017-11-01'
                },
                {
                  title: 'Long Event',
                  start: '2017-11-07',
                  end: '2017-11-10'
                },
                {
                  id: 999,
                  title: 'Repeating Event',
                  start: '2017-11-09T16:00:00'
                },
                {
                  id: 999,
                  title: 'Repeating Event',
                  start: '2017-11-16T16:00:00'
                },
                {
                  title: 'Conference',
                  start: '2017-11-11',
                  end: '2017-11-13'
                },
                {
                  title: 'Meeting',
                  start: '2017-11-12T10:30:00',
                  end: '2017-11-12T12:30:00'
                },
                {
                  title: 'Lunch',
                  start: '2017-11-12T12:00:00'
                },
                {
                  title: 'Meeting',
                  start: '2017-11-12T14:30:00'
                },
                {
                  title: 'Happy Hour',
                  start: '2017-11-12T17:30:00'
                },
                {
                  title: 'Dinner',
                  start: '2017-11-12T20:00:00'
                },
                {
                  title: 'Birthday Party',
                  start: '2017-11-13T07:00:00'
                },
              ]
            });
            
          });
 
          $(document).ready(function() {
            
            $('#schooleventcalendar').fullCalendar({
              height: 415,
              header: {
                left: 'prev',
                center: 'title',
                right: 'next',
              },
              defaultDate: '2017-11-12',
              navLinks: false, // can click day/week names to navigate views
              selectable: false,
              selectHelper: false,
              
              editable: false,
              eventLimit: true, // allow "more" link when too many events
              events: [
                {
                  title: 'All Saints Day',
                  start: '2017-11-01'
                },
                {
                  title: 'All Souls Day',
                  start: '2017-11-02'
                },
                {
                  title: 'Bonifacio Day',
                  start: '2017-11-30'
                },
                {
                  title: 'Maulid un-Nabi',
                  start: '2017-12-01'
                },
                {
                  title: 'Fest der unbefleckten Empfängnis',
                  start: '2017-12-08'
                },
                {
                  title: 'Christmas Eve',
                  start: '2017-12-24'
                },
                {
                  title: 'Christmas Day',
                  start: '2017-12-25'
                },
                {
                  title: 'Rizal Day',
                  start: '2017-12-30'
                },
                {
                  title: 'New Years Eve',
                  start: '2017-12-31'
                },
                {
                  title: 'New Year',
                  start: '2018-01-01'
                },
              ]
            });
            
          });
 

      <!-- Upload Photo -->

       function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
          
            reader.onload = function(e) {
              $('#newimg').attr('src', e.target.result);
            }
          
            reader.readAsDataURL(input.files[0]);
          }
          }
          
          $("#newimginp").change(function() {
             readURL(this);
          });


      <!-- Print -->

         $('#to').on('keyup keypress blur change', function() {
           $('#to2').text($(this).val());
         });
         $('#from').on('keyup keypress blur change', function() {
           $('#from2').text($(this).val());
         });
         $('#carbon').on('keyup keypress blur change', function() {
           $('#carbon2').text($(this).val());
         });
         // $('#date').on('keyup keypress blur change', function() {
         //   $('#date2').text($(this).val());
         // });
         $('#re').on('keyup keypress blur change', function() {
           $('#re2').text($(this).val());
         });
         $('#subject').on('keyup keypress blur change', function() {
           $('#subject2').text($(this).val());
         });
         $('#field').on('keyup keypress blur change', function() {
           $('#field2').text($(this).val());
         });
         
         function printPage(){
            $('#date2').text($('#date').val());
            window.print();
         }

        n =  new Date()
        y = n.getFullYear();
        m = n.getMonth() + 1;
        var month = new Array();
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";
        mm = month[n.getMonth()];
        d = n.getDate();
        $('#date').val(mm + " " + d + ", " + y)
        // document.getElementById("date").innerHTML = m + "/" + d + "/" + y;

        function deselect(e) {
          $('.pop').slideFadeToggle(function() {
            e.removeClass('selected');
          });    
        }

        $(function() {
          $('#contact').on('click', function() {
            if($(this).hasClass('selected')) {
              deselect($(this));               
            } else {
              $(this).addClass('selected');
              $('.pop').slideFadeToggle();
            }
            return false;
          });

          $('.close').on('click', function() {
            deselect($('#contact'));
            return false;
          });
        });

        $.fn.slideFadeToggle = function(easing, callback) {
          return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
        };

        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }

            //this function can remove a array element.
            Array.remove = function(array, from, to) {
                var rest = array.slice((to || from) + 1 || array.length);
                array.length = from < 0 ? array.length + from : from;
                return array.push.apply(array, rest);
            };
        
            //this variable represents the total number of popups can be displayed according to the viewport width
            var total_popups = 0;
            
            //arrays of popups ids
            var popups = [];
        
            //this is used to close a popup
            function close_popup(id)
            {
                for(var iii = 0; iii < popups.length; iii++)
                {
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);
                        
                        document.getElementById(id).style.display = "none";
                        
                        calculate_popups();
                        
                        return;
                    }
                }   
            }
        
            //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
            function display_popups()
            {
                var right = 220;
                
                var iii = 0;
                for(iii; iii < total_popups; iii++)
                {
                    if(popups[iii] != undefined)
                    {
                        var element = document.getElementById(popups[iii]);
                        element.style.right = right + "px";
                        right = right + 320;
                        element.style.display = "block";
                    }
                }
                
                for(var jjj = iii; jjj < popups.length; jjj++)
                {
                    var element = document.getElementById(popups[jjj]);
                    element.style.display = "none";
                }
            }
            
            //creates markup for a new popup. Adds the id to popups array.
            function register_popup(id, name, src)
            {
                
                for(var iii = 0; iii < popups.length; iii++)
                {   
                    //already registered. Bring it to front.
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);
                    
                        popups.unshift(id);
                        
                        calculate_popups();
                        
                        
                        return;
                    }
                }               
                
                var element = '<div class="popup-box chat-popup" id="'+ id +'">';
                element = element + '<div class="popup-head">';
                element = element + '<div class="popup-head-left">'+ name +'</div>';
                element = element + '<div class="popup-head-right"><a href="javascript:close_popup(\''+ id +'\');">&#10005;</a></div>';
                element = element + '<div style="clear: both"></div></div><div id="popup'+id+'" class="popup-messages"><div class="form-inline"><input class="inputbar form-control" style="position:inherit;" id="chatmessage'+id+'" type="text" placeholder="Type . . "><button type="submit" data-id="'+id+'" id="send'+id+'" class="btn btn-info fa fa-paper-plane sendBtn"></button></div></div></div>';
                document.getElementsByClassName("chatcontainer")[0].innerHTML = document.getElementsByClassName("chatcontainer")[0].innerHTML + element;  
        
                popups.unshift(id);
                        
                calculate_popups();
                
            }
            
            //calculate the total number of popups suitable and then populate the toatal_popups variable.
            function calculate_popups()
            {
                var width = window.innerWidth;
                if(width < 540)
                {
                    total_popups = 0;
                }
                else
                {
                    width = width - 200;
                    //320 is width of a single popup box
                    total_popups = parseInt(width/320);
                }
                
                display_popups();
                
            }
            $(document).on('click', '.sendBtn' ,function() {
                var id = $(this).data('id');
                var input = $("#chatmessage"+id).val();
                if($('#chatmessage'+id).val().length !=0){
                
                var markup = "<div><img width='40' height='40' style='border-radius:5px;' src='../../content/images/Teacher/xavier.jpg'/><label>&nbsp;</label>" + input + "</div> ";
                $("#popup"+id).append(markup);
                $('#chatmessage'+id).val('');}
                else {
                  
                }
            });

            // $(document).on('click', '#send' ,function() {
            //     alert('CJ')
            // });
            // $(document).on('click', '#send' ,function() {
            //     alert('CJNG')
            // });
            // $(document).ready(function(){
            //     $('#send').attr('disabled',true);
            //     $('#chatmessage').keyup(function(){
            //         if($(this).val().length !=0)
            //             $('#send').attr('disabled', false);            
            //         else
            //             $('#send').attr('disabled',true);
            //     })
            // });
            
            //recalculate when window is loaded and also when window is resized.
            window.addEventListener("resize", calculate_popups);
            window.addEventListener("load", calculate_popups);
            