<!DOCTYPE html>
<html>
   <head>
      <title>Parent Management Portal</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png')!!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/Datatables/css/jquery.dataTables.min.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css')!!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <body>
      <!-- navigation bar  -->
      <nav class="navbar navbar-findcond navbar-fixed-top" style="margin-bottom: 0;">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="col-lg-4 navbar-brand custom-brand" href="#" style="color: white;">
               <img class="schuler" src="{!! asset('assets/images/logonatin.png')!!}" height="25" width="30" />
               </a>
               <a class="navbar-brand schulercolor" href="{{URL::Route('superadmin')}}">SchulerTrack</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i> Notifications <span class="badge">3</span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li>
                           <a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Note</span> Teacher is not on class!</a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Warning</span> 10 students are late in Grade v - Magalang.</a>
                        </li>
                        <li>
                           <a href="#"><i class="fa fa-fw fa-tag"></i> <span class="badge">Note</span> Mrs. Tanchoco teacher of Grade 3 - Matapat is not on...</a>
                        </li>
                        <li class="divider">|</li>
                           <li>
                                  <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> &nbsp&nbsp&nbspSee all notifications...</a>
                           </li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> My Account</a></li>
                     <li><a href="#"> <i class="fa fa-cog" aria-hidden="true"></i> Setting</a></li>
                     <li><a href="#exit"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- end of navigation bar -->
      <div class="container">
        <br>
        <br>
        <div class="page-header" style="color: #000033">
          <h2><strong>Parent Management</strong></h2>
        </div>
          <ol class="breadcrumb" style="background-color: #D9EDF7">
             <li><a href="{{URL::Route('parent')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
             <li><a href="{{URL::Route('schoolactivities')}}">School Activities</a></li>
             <li>Library Portal</li>
          </ol>
        <!-- your code start here -->
        <!-- Please observe indention -->
        <div class="row ">
          <div class="col-lg-12">
            <ul class="nav nav-tabs nav-pills">
                <li class="active tab">
                    <a href="#home-1" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Borrowed Materials  </span>
                    </a>
                </li>
                <li class="tab">
                    <a href="#home-2" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">History</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="home-1">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card-box">
                          <div class="panel panel-custom">
                            <div class="panel-heading"><h5>Borrowed Materials</h5></div>
                             <div class="panel-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group contact-search m-b-30">
                                     <input type="text" id="search" class="form-control" placeholder="Search...">
                                  </div>
                                </div>
                              </div>
                              <div class="table-responsive">
                                  <table class="display nowrap table table-striped table-hover" id="borrowedList">
                                      <thead>
                                          <tr>
                                              <th style="max-width: 95px;"></th>
                                              <th>Material Type</th>
                                              <th>Name of Material</th>
                                              <th>Borrowed Date</th>
                                              <th>Days Laps from Expect Return Date</th>
                                              <th>Expected Return Date</th>
                                              <th>Fine</th>
                                              <th>Payment Status</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td></td>
                                              <td>Book</td>
                                              <td>Mathematics</td>
                                              <td>2017/09/02</td>
                                              <td>30 Days</td>
                                              <td>2017/09/02</td>
                                              <td>&#8369; 100.00</td>
                                              <td>Not Paid</td>
                                          </tr>
                                          <tr>
                                              <td></td>
                                              <td>Magazine</td>
                                              <td>Sports</td>
                                              <td>2017/09/02</td>
                                              <td>30 Days</td>
                                              <td>2017/09/02</td>
                                              <td>&#8369; 200.00</td>
                                              <td>Not Paid</td>
                                          </tr>
                                          <tr>
                                              <td></td>
                                              <td>CD/DVD</td>
                                              <td>Video Tutorial</td>
                                              <td>2017/09/02</td>
                                              <td>30 Days</td>
                                              <td>2017/09/02</td>
                                              <td>&#8369; 550.00</td>
                                              <td>Not Paid</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              </div>
                            </div>
                        </section>
                    </div>
                </div>
              </div>
              <div class="tab-pane" id="home-2">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card-box">
                          <div class="panel panel-custom">
                            <div class="panel-heading"><h5>History</h5></div>
                             <div class="panel-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <div class="form-group contact-search m-b-30">
                                     <input type="text" id="search1" class="form-control" placeholder="Search...">
                                  </div>
                                </div>
                              </div>
                              <div class="table-responsive">
                                  <table class="display nowrap table table-striped table-hover" id="history">
                                      <thead>
                                          <tr>
                                              <th style="max-width: 95px;"></th>
                                              <th>Material Borrowed</th>
                                              <th>Name of Material</th>
                                              <th>Borrowed Date</th>
                                              <th>Date Returned</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td></td>
                                              <td>Book</td>
                                              <td>Mathematics</td>
                                              <td>2017/09/02</td>
                                              <td>Not Returned</td>
                                          </tr>
                                          <tr>
                                              <td></td>
                                              <td>Magazine</td>
                                              <td>Sports</td>
                                              <td>2017/09/02</td>
                                              <td>Not Returned</td>
                                          </tr>
                                          <tr>
                                              <td></td>
                                              <td>CD/DVD</td>
                                              <td>Video Tutorial</td>
                                              <td>2017/09/02</td>
                                              <td>Not Returned</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              </div>
                            </div>
                        </section>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of your code -->
        <!-- footer here -->
        <hr />
        <footer class="navbar-fixed-bottom">
           <div class="container-fluid footer">
              <p class="pull-right powerby">&copy; 2016 - Powered by <a href="http://www.simplevia.com" class="quicktrackcolor">QuickTrack</a></p>
           </div>
        </footer>
        <!-- end foooter -->
      </div>
      <!-- plugin scripts -->
      <script src="{!! asset('assets/jquery/dist/jquery.min.js')!!}"></script>
      <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js')!!}"></script>
      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/jquery.dataTables.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.bootstrap.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.buttons.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.bootstrap.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.html5.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.print.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedColumns.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedHeader.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.keyTable.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js')!!}"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <script>
          $(document).ready(function(){
             var oTable = $('#borrowedList').DataTable({
               "orderCellsTop": false,
               "searchHighlight" : true,
               "ordering": false,
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
      </script>
     <script>
          $(document).ready(function(){
             var oTable = $('#history').DataTable({
               "orderCellsTop": false,
               "searchHighlight" : true,
               "ordering": false,
             });
             $('#search1').keyup(function(){
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
      </script>
     
      <!-- end of your custom script -->
   </body>
</html>