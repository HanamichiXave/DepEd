<!DOCTYPE html>
<html>
   <head>
      <title>Teacher</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png') !!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet">
      
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>

   </style>
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
               <img class="schuler" src=" {!! asset('assets/images/logonatin.png') !!}" height="25" width="30" />
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
         <div class="page-header" style="color: #000033">
            <h2><strong>Teacher Management</strong></h2>
         </div>
         <ol class="breadcrumb">
           <li>This is HTML FORMAT</li>
           <li><a href="#"></a></li>
         </ol>
         <section>
         <!-- your code start here -->
         <!-- Please observe indention -->
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                <a href="{{URL::Route('teacherclassgradedeped')}}">
                <div class="hovereffect">
                    <img class="img-responsive" src="{!! asset('assets/images/deped.png') !!}" height="100" width="100" alt="">
                    <div class="overlay">
                       <h2>DepEd Format</h2>
                        <p class="info">
                               Grading system using the official format of DepEd.
                        </p>
                      </div>
                  </div>
              </a>
            </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a href="{{URL::Route('teacherclassgradeschool')}}">
                <div class="hovereffect">
                    <img class="img-responsive" src="{!! asset('assets/images/school.png') !!}" height="100" width="100" alt="">
                    <div class="overlay">
                       <h2>School Format</h2>
                        <p class="info">
                               Official grading system used by the school.
                        </p>
                      </div>
                  </div>
              </a>
            </div>


         <!-- end of your code -->
         <!-- footer here -->
         </section>

         <hr />
         <footer class="navbar-fixed-bottom">
            <div class="container-fluid footer">
              <p class="pull-right powerby">&copy; 2016 - Powered by <a href="http://www.simplevia.com" class="quicktrackcolor">QuickTrack</a></p>
            </div>
          </footer>
         <!-- end foooter -->
      </div>
      <!-- plugin scripts -->
      <script src="{!! asset('assets/jquery/dist/jquery.min.js') !!}"></script>
      <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js') !!}"></script>

      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
      <!-- DataTable Link -->
      <script src="{!! asset('assets/DataTables/js/jquery.dataTables.min.js') !!}"></script> 
      <script src="{!! asset('assets/DataTables/js/datatables.bootstrap.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.buttons.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.bootstrap.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.html5.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.print.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedColumns.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedHeader.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.keyTable.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js') !!}"></script>
      <!-- End of LInk -->

      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- JS file -->
      <script src="{!! asset('js/Teacher/classgradingmngt.js') !!}"></script>
      <!-- your custom script -->

      <!-- This is the Code for dataTable, Please copy paste -->

      <!-- This is the Code for dataTable -->

      <!-- end of your custom script -->
   </body>
</html>