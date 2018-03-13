<!DOCTYPE html>
<html>
   <head>
      <title>Super Admin Management</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png') !!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
      <link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
      <link href="{!! asset('assets/custom/css/style.css') !!}" rel="stylesheet" type="text/css" />
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
   </head>
   <body class="bodybg" >
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
               <img class="schuler" src="{!! asset('assets/images/logonatin.png') !!}" height="25" width="30" />
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
            <h2><strong>Super Admin Management</strong></h2>
         </div>
         <!-- your code start here -->
         <!-- Please observe indention -->
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
               <a href="{{URL::Route('admin')}}">
                  <div class="hovereffect">
                     <img class="img-responsive" src="{!! asset('assets/images/Super Admin/v5/administration.png') !!}" height="100" width="100" alt="">
                     <div class="overlay">
                        <h2>Administration</h2>
                        <p class="info">
                           Manage and assigning users to groups, and provide selective access to individual users.
                        </p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
               <a href="{{URL::Route('principal')}}">
                  <div class="hovereffect">
                     <img class="img-responsive" src="{!! asset('assets/images/Super Admin/v5/principal.png') !!}" height="100" width="100" alt="">
                     <div class="overlay">
                        <h2>Principal</h2>
                        <p class="info">
                           Manage and observe everthing that happens inside school premicomposerses.
                        </p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
               <a href="{{URL::Route('teacher')}}">
                  <div class="hovereffect">
                     <img class="img-responsive" src="{!! asset('assets/images/Super Admin/v5/teacher.png') !!}" height="100" width="100" alt="">
                     <div class="overlay">
                        <h2>Teacher</h2>
                        <p class="info">
                           Managing lesson plans, students grades, and reports for the assigned class.
                        </p>
                     </div>
                  </div>
               </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
               <a href="{{URL::Route('parent')}}">
                  <div class="hovereffect">
                     <img class="img-responsive" src="{!! asset('assets/images/Super Admin/v5/parent.png') !!}" height="100" width="100" alt="">
                     <div class="overlay">
                        <h2>Parent Portal</h2>
                        <p class="info">
                           Tool for the parents, stay them informed and engaged in their child's education.
                        </p>
                     </div>
                  </div>
               </a>
            </div>
         </div>
         <!-- end of your code -->
         <!-- footer here -->
         <hr />
        <footer class="navbar-fixed-bottom">
           <div class="container-fluid" style="background: linear-gradient(-90deg, #00344c, #a1dbf7) ;">
              <p class="pull-right " style="padding-top: .5%; padding-right: 3%; font-size: 10px; font-weight: bolder; color: #fff;">&copy; 2016 - Powered by <a href="http://www.simplevia.com" style="color: #21d23e;">QuickTrack</a></p>
           </div>
        </footer>
         <!-- end foooter -->
      </div>
     <!-- JQuery -->
      <script src="{!! asset('assets/jquery/dist/jquery.js') !!}"></script>
      <script src="{!! asset('assets/jquery/dist/jquery.min.js') !!}"></script>
      <!-- DataTables -->
      <script src="{!! asset('assets/DataTables/js/jquery.dataTables.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/jquery.dataTables.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.buttons.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.bootstrap.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/jquery.dataTables.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.html5.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.print.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedColumns.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedHeader.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.keyTable.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js') !!}"></script>
      <!-- FormValidation -->
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- Charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js') !!}"></script>

   </body>
</html>