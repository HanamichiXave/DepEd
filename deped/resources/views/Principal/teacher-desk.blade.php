<!DOCTYPE html>
<html>
   <head>
      <title>Principal</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png') !!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/custom/css/Principal/P-Mainpage.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/datatables/css/jquery.dataTables.min.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
    .super-panel-lg {
    border: 3px solid #44A5C9!important;
    border-radius: 5px!important;
    width: 150px;
    height: 40px;
    justify-content: center;
    text-align: center;
    }
    .pageimg {
      height: 70px;
      margin: 0px 5px 5px 5px;
    }
    .spr-label {
      font-size: 14px !important;
      color: #000033;
      cursor: pointer;
    }
    .modal-xl {
      width: 90%;
      max-width: 1200px;
    }

    ...
    }
    .dataTables_paginate {
      float: right;
    }
    .marginbottom {
      margin-bottom: 10px;
    }
    .button {
      height: 34px; 
      margin-top: 7px; 
      width: 190px;
      text-align: center;
      justify-content: center;
      font-size: 13px;
      background-color: #67ded7;
      color: #222222;
    }
    .panel-heading {
      font-size: 20px; 
      font-weight: 350;
    }
    .textbox {
      height: 40px; 
      margin-top: 7px;
    }
    .bordright {
      border-right: solid;
      border-width: 1px;
      border-color: #1284ad;
    }
    .bordbot {
      border-bottom: 1px solid #1284ad;
    }

    @media screen and (max-width: 991px){
      .bordright{
        border-right: none;
      }
      .bordbot {
        border-bottom: solid;
        border-width: 1px;
        border-color: #1284ad;
      }
      .bordbot{
      border-bottom: : 1px;
      border-color: #1284ad;
      }
    }
    .marbot {
      margin-bottom: 0px;
    }
    @media screen and (max-width: 1999px) {
      .marbot {
        margin-bottom: 5px;
      }
    }
    .panel-body {
      padding: 0px 15px!important;
    }
    .panel-button:hover,
    .panel-button:focus {
      background-color: white;
      transform: scale(1.03);
      transition: all .1s;
      background-color: transparent;
    }
    .super-panel {
      width: 150px;
      height: 50px !important;
      border: 1px solid #44A5C9;
      border-radius: 4px;
      cursor: pointer;
    }
    .btn-modal {
      width: 150px;
      height: 50px !important;
      border: 1px solid #44A5C9;
      border-radius: 4px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 10px;
      margin-bottom: 10px;
      color: #333;
    }
    .center {
      margin: 0 auto;
      cursor: pointer;
    }
    .margintop {
      margin-top: 20px;
    }
    @media screen and (max-width: 991px) {
      .margintop {
        margin-top: 0px!important;
      }
      .searchtop {
        margin-top: 10px!important;
      }
      .searchbot {
        margin-bottom: 15px!important;
      }
    }
    .searchtop {
      margin-top: 15px;
    }
    .searchbot {
      margin-bottom: 25px;
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
      <div class="container">
        <br>
        <br>
        <div class="page-header" style="color: #000033"><h2><strong>Principal Management</strong></h2></div>
        <ol class="breadcrumb" style="background-color: #D9EDF7">
          <li><a href="{{URL::Route('principal')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
          <li>Teacher Desk</li>
        </ol>
        <!-- your code start here -->
        <!-- Please observe indention -->
    
        <div class="panel panel-custom">
          <div class="panel-heading"><i class="fa fa-users fa-lg"></i> Teacher Info</div>
          <div class="panel-body">
            <div class="row bordbot searchtop">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 form-group searchbot">
                <input class="form-control textbox" placeholder="Employee Name">
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 form-group searchbot">
                <input class="form-control textbox" placeholder="Employee No.">
              </div>
              <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 form-group searchbot">
                <input class="form-control textbox" placeholder="Department">
              </div>
              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 form-group searchbot">
                <a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" style="height: 40px; margin-top: 7px;">
                <i class="fa fa-search"></i> Search</a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 bordright">
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 form-group" style="margin-top: 20px; text-align: center;">
                <img src="{!! asset('assets/images/profilelogo.png') !!}" id="" style="display: fixed; margin: auto;" height="150" width="150" placeholder="Upload Photo">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 form-group" style="margin-top: 20px;">
                <div class="col-lg-4">
                    <label class="control-label">Date of Hire</label>
                  </div>
                  <div class="col-lg-5">
                    <input class="form-control" disabled="">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 form-group">
                <div class="col-lg-4">
                    <label class="control-label">Rank</label>
                  </div>
                  <div class="col-lg-5">
                    <input class="form-control" disabled="">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 form-group">
                <div class="col-lg-4">
                    <label class="control-label">Status Employment</label>
                  </div>
                  <div class="col-lg-5">
                    <input class="form-control" disabled="" style="text-align: center;">
                  </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 form-group" style="text-align: center;">
                <label><i class="fa fa-circle excused" aria-hidden="true"></i>&nbsp;Active</label>
                <label><i class="fa fa-circle excused" aria-hidden="true"></i>&nbsp;Inactive</label>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12  col-lg-12 form-group">
                <div class="col-lg-4">
                  <label class="control-label">Name of Employee</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" disabled="">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                <div class="col-lg-4">
                  <label class="control-label">Department</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" disabled="">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group">
                <div class="col-lg-4">
                  <label class="control-label">Supervisor</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" disabled="">
                </div>
              </div>
              
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
              <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 form-group margintop">
                <a class="panel-button center btn btn-modal" data-toggle="modal" data-target="#teachprof">
                  <label class="center">Teacher Profile</label>
                </a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 form-group margintop">  
                <a class="panel-button center btn btn-modal" data-toggle="modal" data-target="#teachsched">
                  <label class="center">Teacher Schedule</label>
                </a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 form-group">  
                <a class="panel-button center btn btn-modal" data-toggle="modal" data-target="#lessplan">
                  <label class="center">Lesson Plan</label>
                </a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 form-group">  
                <a class="panel-button center btn btn-modal" data-toggle="modal" data-target="#eval">
                  <label class="center">Evaluation</label>
                </a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 form-group">  
                <a class="panel-button center btn btn-modal" data-toggle="modal" data-target="#teachrec">
                  <label class="center">Teacher Record</label>
                </a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 form-group">  
                <a class="panel-button center btn btn-modal" data-toggle="modal" data-target="#classprog">
                  <label class="center">Class Progress</label>
                </a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 form-group">  
                <a class="panel-button center btn btn-modal" data-toggle="modal" data-target="#actachi">
                  <label class="center">Activities &amp;<br> Achievement</label>
                </a>
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

      <!-- Modal For Teacher Profile -->
      <div id="teachprof" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Teacher Profile</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Modal For Teacher Schedule -->
      <div id="teachsched" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Teacher Schedule</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Modal For Lesson Plan -->
      <div id="lessplan" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Lesson Plan</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Modal For Evaluation -->
      <div id="eval" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Evaluation</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Modal For Teacher Record -->
      <div id="teachrec" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Teacher Record</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Modal For Class Progress -->
      <div id="classprog" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Class Progress</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <!-- Modal For Activities & Achievement -->
      <div id="actachi" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Activities &amp; Achievement</h4>
            </div>
            <div class="modal-body">
              <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>


      <!-- plugin scripts -->
      <script src="{!! asset('assets/jquery/dist/jquery.min.js') !!}"></script>
      <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js') !!}"></script>
      <script src="{!! asset('assets/jquery/dist/jquery.min.js') !!}"></script>
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
      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->

      <!-- end of your custom script -->
   </body>
</html>