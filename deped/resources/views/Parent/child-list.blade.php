<!DOCTYPE html>
<html>
   <head>
      <title>Parent Management Portal</title>
      <link rel="icon" href="../../content/images/logonatin.png">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../../content/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="../../content/custom/css/style.css" rel="stylesheet">
      <link href="../../content/dataTables/css/dataTables.bootstrap.min.css" rel="stylesheet">
      <link href="../../content/fontawesome/font-awesome.min.css" rel="stylesheet">
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
               <img class="schuler" src="../../content/images/logonatin.png" height="25" width="30" />
               </a>
               <a class="navbar-brand schulercolor" href="../Super Admin/super-admin-management.html">SchulerTrack</a>
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
      <div class="container" >
         <br>
         <br>
         <div class="page-header" style="color: #000033">
            <h2><strong>Kids Lists</strong></h2>
         </div>
         <ol class="breadcrumb">
            <li><a href="../../views/Parent/parent-management.html">Parent Management</a></li>
            <li>Kids List</li>
            <li><a href="#"></a></li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->

         <div class="panel panel-custom">
            <div class="panel-heading"><h5>My Child List</h5>
            </div>
            <div class="panel-body"> 
               <div class="row">
                 <div class="col-sm-6">
                    <div class="form-group contact-search m-b-30">
                       <input type="text" id="search" class="form-control" placeholder="Search...">
                    </div>
                 </div>
                </div>
                 <div class="table-responsive">
                 <table class="table table-striped table-hover" id="listofKids">
                       <thead>
                           <tr>
                               <th style="max-width: 95px;"> </th>
                               <th style="max-width: 95px;"> </th>
                               <th>Student - ID</th>
                               <th>Name</th>
                               <th>Subject List</th>
                               <th>Schedule / Classes</th>
                               <th>Library Portal</th>
                               <th>Grades & Student Profile</th>
                               <th>Statement of Account</th>
                               <th>Document & Files</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr class="">
                               <td></td>
                               <td></td>
                               <td>Schuler001</td>
                               <td>Antonio Bravo</td>
                               <td><a href="../../Views/Parent/subject-list.html"><button class="btn btn-info" id="" name="">View Subject</button></a></td>
                               <td><a href="../../Views/Parent/subject-schedule.html"><button class="btn btn-success" id="" name="">View Schedule</button></a></td>
                               <td><a href="../../Views/Parent/library-portal.html"><button class="btn btn-primary" id="" name="">View Portal</button></a></td>
                               <td><a href="../../Views/Parent/grades.html"><button class="btn btn-warning" id="" name="">View Grades</button></a></td>
                               <td><a href="../../Views/Parent/statement-of-account.html"><button class="btn btn-default" id="" name="">View Account</button></a></td>
                               <td><a href="#" data-toggle="modal" data-target="#viewFiles"><button class="btn btn-danger" id="" name="">View Files</button></a></td>
                           </tr>
                           <tr class="">
                               <td></td>
                               <td></td>
                               <td>Schuler002</td>
                               <td>Carl Joseph Bravo</td>
                               <td><a href="../../Views/Parent/subject-list.html"><button class="btn btn-info" id="" name="">View Subject</button></a></td>
                               <td><a href="../../Views/Parent/subject-schedule.html"><button class="btn btn-success" id="" name="">View Schedule</button></a></td>
                               <td><a href="../../Views/Parent/library-portal.html"><button class="btn btn-primary" id="" name="">View Portal</button></a></td>
                               <td><a href="../../Views/Parent/grades.html"><button class="btn btn-warning" id="" name="">View Grades</button></a></td>
                               <td><a href="../../Views/Parent/statement-of-account.html"><button class="btn btn-default" id="" name="">View Account</button></a></td>
                               <td><a href="#" data-toggle="modal" data-target="#viewFiles"><button class="btn btn-danger" id="" name="">View Files</button></a></td>
                           </tr>
                       </tbody>
                 </table>
                 </div>
               </div>
            </div>
         </div>   


         <div id="viewFiles" class="modal fade" role="dialog">
             <div class="modal-dialog modal-lg">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h4 class="modal-title"><strong>Document And Files</strong></h4>
                     </div>
                     <div class="modal-body">
                         <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-hover table-bordered table table-actions-bar">
                                    <thead>
                                        <tr class="">
                                            <td>Title of Document</td>
                                            <td>Date</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td>Promisory Note</td>
                                            <td>2017/09/03</td>
                                            <td><button class="btn btn-info" id="" name="">Download</button></td>
                                        </tr>
                                        <tr class="">
                                            <td>Promisory Note</td>
                                            <td>2017/09/03</td>
                                            <td><button class="btn btn-info" id="" name="">Download</button></td>
                                        </tr>
                                        <tr class="">
                                            <td>Promisory Note</td>
                                            <td>2017/09/03</td>
                                            <td><button class="btn btn-info" id="" name="">Download</button></td>
                                        </tr>
                                        <tr class="">
                                            <td>Promisory Note</td>
                                            <td>2017/09/03</td>
                                            <td><button class="btn btn-info" id="" name="">Download</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                 </div>
             </div>
         </div>
         <!-- end of your code -->
         <!-- footer here -->
         <hr />
         <footer class="navbar-fixed-bottom">
            <div class="container-fluid" style="background-color: #35AC49;">
               <p class="pull-right " style="padding-top: .5%; padding-right: 3%; font-size: 10px; font-weight: bolder; color: #000033;">&copy; 2016 - Powered by <a href="http://www.simplevia.com" style="color: #fff;">QuickTrack</a></p>
            </div>
         </footer>
         <!-- end foooter -->
      </div>
      <!-- plugin scripts -->
      <script src="../../content/jquery/dist/jquery.min.js"></script>
      <script src="../../content/jquery-ui/jquery-ui.min.js"></script>
      <script src="../../content/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="../../content/DataTables/js/jquery.dataTables.min.js"></script> 
      <script src="../../content/DataTables/js/datatables.bootstrap.js"></script>
      <script src="../../content/DataTables/js/dataTables.buttons.min.js"></script>
      <script src="../../content/DataTables/js/buttons.bootstrap.min.js"></script>
      <script src="../../content/DataTables/js/buttons.html5.min.js"></script>
      <script src="../../content/DataTables/js/buttons.print.min.js"></script>
      <script src="../../content/DataTables/js/dataTables.fixedColumns.min.js"></script>
      <script src="../../content/DataTables/js/dataTables.fixedHeader.min.js"></script>
      <script src="../../content/DataTables/js/dataTables.keyTable.min.js"></script>
      <script src="../../content/DataTables/js/dataTables.scroller.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>

      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <script type="text/javascript">
        $(document).ready(function(){
           var oTable = $('#listofKids').DataTable({
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
</script>
      <!-- end of your custom script -->
   </body>
</html>