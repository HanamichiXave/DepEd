<!DOCTYPE html>
<html>
   <head>
      <title>Teacher Management</title>
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
           <li>Payslip</li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
            <div class="row">
               <div class="col-lg-12">
                  <ul class="pager">
                     <label style="font-size: 35px;">YEAR 2017</label><br>
                     <li class="previous"><a href="#">Previous</a></li>
                     <li class="next"><a href="#">Next</a></li>
                  </ul>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> January</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> February</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> March</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> April</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> May</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> June</button>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> July</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> August</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> September</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> October</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> November</button>
                  </div>
                  <div class="form-group">
                     <button type="button" class="btn btn-default btn-block btn-success" data-toggle="modal" data-target="#payslip-modal"> December</button>
                  </div>
               </div>
         <!--          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><br>
            <button type="button" class="btn btn-default">Print</button>
            <button type="button" class="btn btn-default">Save</button>
            </div> -->
            </div>
            <div id="payslip-modal" class="modal fade" role="dialog">
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">My Payslip</h4>
                     </div>
                     <div class="modal-body">
                        <ul class="nav nav-tabs nav-justified">
                           <li class="active"><a data-toggle="tab" href="#1st">1st Cut-off</a></li>
                           <li ><a data-toggle="tab" href="#2nd">2nd Cut-off</a></li>
                        </ul>
                        <!--               <div class="panel panel-default">
                           <div class="panel-body">
                             
                           </div>
                           </div> -->
                        <div class="tab-content">
                           <div id="1st" class="tab-pane fade in active">
                              <br>
                              <div class="panel panel-default" style="border-radius: 0px; border: none; box-shadow: none;">
                                 <div class="panel-heading" style="border: none;">
                                    <h3 class="panel-title" style="text-align: center;"><strong>PAYSLIP</strong></h3>
                                 </div>
                                 <div class="panel-body">
                                    <div class="col-lg-12" style="border-bottom: 1px dotted #8c8b8b; padding-bottom: 5px;" >
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Name:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Cut-off Period :</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Employee No:</label> 
                                             </div>
                                             <div class="form-inline">
                                                <label>Payroll Date:</label> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-12" style="border-bottom: 1px dotted #8c8b8b; padding-bottom: 5px; padding-top: 10px;">
                                       <h4>Salary Breakdown</h4>
                                       <br>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Basic Salary:</label> <!-- &#8369; Peso Sign--> 
                                             </div>
                                             <div class="form-inline">
                                                <label>Salary Adjustment:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Overtime:</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Daily Rate:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Hour Rate:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label style="color: #009900;">Gross Pay:</label>
                                             </div>
                                          </div>
                                       </div>
                                       <br>
                                    </div>
                                    <div class="col-lg-12" style="border-bottom: 1px dotted #8c8b8b; padding-bottom: 5px; padding-top: 10px;">
                                       <h4>Deductions</h4>
                                       <br>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>SSS / GSIS:</label> <!-- &#8369; Peso Sign--> 
                                             </div>
                                             <div class="form-inline">
                                                <label>PhilHealth:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Pag-IBIG dues:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Withholding Tax:</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Absent / Undertime:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Late:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Cash Advance:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label style="color: red;">Deduction:</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="col-lg-6 pull-right" style="padding: 0;">
                                          <h3 style="color: #26AF8C">NET PAY:</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div id="2nd" class="tab-pane fade">
                              <br>
                              <div class="panel panel-default" style="border-radius: 0px; border: none; box-shadow: none;">
                                 <div class="panel-heading" style="border: none;">
                                    <h3 class="panel-title" style="text-align: center;"><strong>PAYSLIP</strong></h3>
                                 </div>
                                 <div class="panel-body">
                                    <div class="col-lg-12" style="border-bottom: 1px dotted #8c8b8b; padding-bottom: 5px;" >
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Name:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Cut-off Period :</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Employee No:</label> 
                                             </div>
                                             <div class="form-inline">
                                                <label>Payroll Date:</label> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-12" style="border-bottom: 1px dotted #8c8b8b; padding-bottom: 5px; padding-top: 10px;">
                                       <h4>Salary Breakdown</h4>
                                       <br>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Basic Salary:</label> <!-- &#8369; Peso Sign--> 
                                             </div>
                                             <div class="form-inline">
                                                <label>Salary Adjustment:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Overtime:</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Daily Rate:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Hour Rate:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label style="color: #009900;">Gross Pay:</label>
                                             </div>
                                          </div>
                                       </div>
                                       <br>
                                    </div>
                                    <div class="col-lg-12" style="border-bottom: 1px dotted #8c8b8b; padding-bottom: 5px; padding-top: 10px;">
                                       <h4>Deductions</h4>
                                       <br>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>SSS / GSIS:</label> <!-- &#8369; Peso Sign--> 
                                             </div>
                                             <div class="form-inline">
                                                <label>PhilHealth:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Pag-IBIG dues:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Withholding Tax:</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <div class="row">
                                             <div class="form-inline">
                                                <label>Absent / Undertime:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Late:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label>Cash Advance:</label>
                                             </div>
                                             <div class="form-inline">
                                                <label style="color: red;">Deduction:</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="col-lg-6 pull-right" style="padding: 0;">
                                          <h3 style="color: #26AF8C">NET PAY:</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
      <script src="{!! asset('assets/jquery/dist/jquery.min.js') !!}"></script>
      <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js') !!}"></script>
       
      <script src="{!! asset('assets/jquery/dist/jquery.min.js') !!}"></script>
      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
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

      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <!-- end of your custom script -->
   </body>
</html>