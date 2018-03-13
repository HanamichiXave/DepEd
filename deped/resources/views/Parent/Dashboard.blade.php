<!DOCTYPE html>
<html>
   <head>
      <title>Dashboard</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png')!!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css')!!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/dashboards/bootstrap dashboard/bsdashboard.css')!!}" rel="stylesheet">
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
      <div class="container" >
         <br>
         <br>
         <div class="page-header" style="color: #000033"><h2><strong>Parent Management</strong></h2></div>
         <ol class="breadcrumb" style="background-color: #D9EDF7">
           <li><a href="{{URL::Route('parent')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
           <li>Dashboard</li>
         </ol>
          <!-- your code start here -->
          <!-- Please observe indention -->
          <div class="col-lg-12">
            <div class="container-2">
             <div id="page-wrapper">
                <div class="row" >
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="circle-tile">
                         <a href="#">
                            <div class="circle-tile-heading green db-container">
                               <i class="fa fa-user fa-fw fa-3x"></i>
                            </div>
                         </a>
                         <div class="circle-tile-content green db-container">
                            <div class="circle-tile-description text-faded">
                               Children
                            </div>
                            <div class="circle-tile-number text-faded">
                               3
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="circle-tile">
                         <a href="#">
                            <div class="circle-tile-heading orange db-container">
                               <i class="fa fa-user fa-fw fa-3x"></i>
                            </div>
                         </a>
                         <div class="circle-tile-content orange db-container">
                            <div class="circle-tile-description text-faded">
                               Teacher
                            </div>
                            <div class="circle-tile-number text-faded">
                               3
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="circle-tile">
                         <a href="#">
                            <div class="circle-tile-heading blue db-container">
                               <i class="fa fa-database fa-fw fa-3x"></i>
                            </div>
                         </a>
                         <div class="circle-tile-content blue db-container">
                            <div class="circle-tile-description text-faded">
                               Department
                            </div>
                            <div class="circle-tile-number text-faded">
                               4
                               <span id="sparklineB"></span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="circle-tile">
                         <a href="#">
                            <div class="circle-tile-heading red db-container">
                               <i class="fa fa-book fa-fw fa-3x"></i>
                            </div>
                         </a>
                         <div class="circle-tile-content red db-container">
                            <div class="circle-tile-description text-faded">
                               Class
                            </div>
                            <div class="circle-tile-number text-faded">
                               14
                               <span id="sparklineC"></span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- page-wrapper END-->
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="panel panel-custom">
                <div class="panel-heading">
                  <i class="fa fa-lightbulb-o"></i>
                  <label>Subject Learnings</label>                    
                </div>
                <div class="db-container" style="position: relative; width:auto;">
                  <canvas id="myChartpie"></canvas>
                </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="panel panel-custom db-container">
                <div class="panel-heading"><i class="fa fa-info-circle"></i>&nbsp;Notice Board</div>
                <div class="panel-body">
                  <i class="fa fa-exclamation"><label>&nbsp;Student Grade Status</label></i>
                  <p style="font-size: 12px;text-indent: 50px; text-align: justify;">Your child, John Ivan has failed in some of his subjects. You we're required to attend in our office meeting dated, November 28, 2017, in the afternoon. You may contact us through email or mobile number listed below.</p>
                  <hr/>
                  <i class="fa fa-star"><label>&nbsp;Christmas Day 2017</label></i>
                  <p style="font-size: 12px;text-indent: 50px; text-align: justify;">Christmas is an annual festival commemorating the birth of Jesus Christ, observed most commonly on December 25 as a religious and cultural celebration among billions of people around the world. Your children are required to attend the christmas party that will be held on UP Campus on December 23.</p>
                  <hr/>
                </div>
              </div>
          </div>
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-custom">
                <div class="panel-heading">
                  <i class="fa fa-lightbulb-o"></i>
                  <label>Quarterly Average Grade</label>                    
                </div>
                <div class="db-container" style="position: relative; width:auto;">
                  <canvas id="myChartline"></canvas>
                </div>
            </div>
          </div>
         
          <!-- end of your code -->
          <!-- footer here -->
       
          <footer class="navbar-fixed-bottom">
            <div class="container-fluid footer">
              <p class="pull-right powerby">&copy; 2016 - Powered by <a href="http://www.simplevia.com" class="quicktrackcolor">QuickTrack</a></p>
            </div>
          </footer>
         <!-- end foooter -->
      </div><br/><br/><br/>
      <!-- plugin scripts -->
      <script src="{!! asset('assets/jquery/dist/jquery.min.js')!!}"></script>
      <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js')!!}"></script>
      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js')!!}"></script>
      <!-- DataTable Link -->
      <script src="{!! asset('assets/DataTables/js/jquery.dataTables.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/datatables.bootstrap.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.buttons.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.bootstrap.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.html5.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.print.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedColumns.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedHeader.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.keyTable.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js')!!}"></script>
      <!-- End of LInk -->
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js') !!}"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <script src="{!! asset('js/Parent/Dashboard.js')!!}"></script>
      <!-- This is the Code for dataTable, Please copy paste -->
      <!-- This is the Code for dataTable -->
      <!-- end of your custom script -->
   </body>
</html>