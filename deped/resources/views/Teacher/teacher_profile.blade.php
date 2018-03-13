<!DOCTYPE html>
<html>
   <head>
      <title>Teacher Management</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png') !!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/DataTables/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css') !!}" rel="stylesheet"> 
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
      .btn {
         font-size: 13px!important;
      }
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
               <img class="schuler" src="{!! asset('assets/images/logonatin.png') !!}" height="25" width="30" />
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
         <div class="page-header" style="color: #000033"><h2><strong>Teacher Management</strong></h2></div>
         <ol class="breadcrumb" style="background-color: #D9EDF7">
           <li><a href="{{URL::Route('teacher')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
           <li>Teacher Profile</li>
         </ol>

      <!-- your code start here -->
      <!-- Please observe indention -->
      
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="panel panel-custom">
               <div class="panel-body">
                  <div class="col-lg-12" style="text-align: center;">
                     <h4>Teacher's Photo</h4>
                     <img src="{!! asset('assets/images/teacher1.png') !!}" height="148">
                  </div>
                  <div class="col-lg-12">
                     <br>
                     <div class="form-inline">
                        <label>Name:</label>
                     </div>
                     <div class="form-inline">
                        <label>Employee No:</label>
                     </div>
                     <div class="form-inline">
                        <label>Date Hired:</label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6">
            <div class="panel panel-custom">
               <div class="panel-body">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="form-group">
                        <label>Rank</label>
                        <input class="form-control input-sm" type="" name="">
                     </div>
                     <div class="form-group">
                        <label>Address</label>
                        <input class="form-control input-sm" type="" name="">
                     </div>
                     <div class="form-group">
                        <label>Contact No</label>
                        <input class="form-control input-sm" type="" name="">
                     </div>
                     <div class="form-group">
                        <label>PRC Number</label>
                        <input class="form-control input-sm" type="" name="">
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                     <div class="form-group">
                        <label>SSS Number</label>
                        <input class="form-control input-sm" type="" name="">
                     </div>
                     <div class="form-group">
                        <label>Pag-IBIG Number</label>
                        <input class="form-control input-sm" type="" name="">
                     </div>
                     <div class="form-group">
                        <label>TIN Number</label>
                        <input class="form-control input-sm" type="" name="">
                     </div>
                     <div class="form-group">
                        <label>PhilHealth Number</label>
                        <input class="form-control input-sm" type="" name="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="panel panel-custom">
               <div class="panel-body">
                  <div class="col-lg-12" style="margin-bottom: 10px;">
                     <button type="button" class="btn btn-primary btn-block">Personal Information</button>
                  </div>
                  <div class="col-lg-12" style="margin-bottom: 10px;">
                     <button type="button" class="btn btn-primary btn-block">Family Information</button>
                  </div>
                  <div class="col-lg-12" style="margin-bottom: 10px;">
                     <button type="button" class="btn btn-primary btn-block">Education Information</button>
                  </div>
                  <div class="col-lg-12">
                     <button type="button" class="btn btn-primary btn-block">Work Experiences</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
               <div class="panel-body">
                  <div class="table-responsive">
                     <table id="uploaded" class="table">
                        <tbody>
                           <tr> <h4>&nbsp;&nbsp;Attached Requirement Files</h4></tr>
                           <tr>
                              <th style="width: 50%;">
                                 <a class="link"> Birth Certificate </a>
                              </th>
                              <td style="width: 20%;">
                                 <a class="link" href="">Viewable</a>
                              </td>
                           </tr>
                           <tr>
                              <th>
                                 <a class="link" href=""> Diploma </a>
                              </th>
                              <td>
                                 <a class="link" href="" >Viewable</a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <hr />
      <!-- end of your code -->
      <!-- footer here -->
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
      
      <script src="{!! asset('assets/jquery/dist/jquery.min.js') !!}"></script>
      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/jquery.dataTables.min.js') !!}"></script> 
      <script src="{!! asset('assets/DataTables/js/dataTables.bootstrap.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.buttons.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.bootstrap.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.html5.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.print.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedColumns.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedHeader.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.keyTable.min.js') !!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js') !!}"></script>

      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <!-- end of your custom script -->
   </body>
</html>