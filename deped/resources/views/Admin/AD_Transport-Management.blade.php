<!DOCTYPE html>
<html>
   <head>
      <title>Administration Management</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png')!!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css')!!}"  rel="stylesheet">
      <link href="{!! asset('assets/DataTables/css/dataTables.bootstrap.min.css')!!}" rel="stylesheet">
      <!-- css for nav bar --> 
      <link href="{!! asset('assets/custom/css/style.css')!!}" rel="stylesheet">
      
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css')!!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
   #example_filter {
      display: none;
   }
   .dataTables_length {
    margin-bottom: 15px;
    margin-top: 5px;
   }
   .page-header {
      padding-bottom: 0px!important;
      margin: 20px 0 0px!important;
      border-bottom: 0px solid #eee!important;
   }
   .breadcrumb {
      padding: 5px 15px!important;
      margin-bottom: 10px!important;
      font-size: 15px!important
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
         <div class="page-header" style="color: #000033"><h2><strong>Administration Management</strong></h2></div>
         <ol class="breadcrumb" style="background-color: #D9EDF7">
            <li><a href="{{URL::Route('admin')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i><label>Home</label></a></li>
            <li>Transportation Management</li>
         </ol>
      <!-- your code start here -->
      <!-- Please observe indention -->
            <div class="panel panel-custom">
               <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-users fa-lg"></i> Transportation List</div>
               <div class="panel-body"> 
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group contact-search col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <input type="text" id="search" class="form-control" style="height: 40px; margin-top: 7px;" placeholder="Search...">
                        </div >
                           <div class="col-lg-3 col-xs-12 col-sm-3" style="margin-bottom: 5px;">
                              <a class="btn btn-info btn-md waves-effect waves-light m-b-30 btn-responsive" style="height: 40px; margin-top: 7px;" data-toggle="modal" data-target="#myModal"><i class="fa fa-car fa-lg" aria-hidden="true"></i>&nbsp; Add New Vehicle</a>
                           </div>
                           <div class="col-lg-3 col-xs-12 col-sm-3" style="margin-bottom: 5px;">
                              <a class="btn btn-info btn-md waves-effect waves-light m-b-30 btn-responsive" style="height: 40px; margin-top: 7px;" data-toggle="modal" data-target="#myModal2">Add New Schedule</a>
                           </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                     <table id="myTable" class="table table-striped table-hover">
                        <thead class="thead-color">
                           <tr>
                              <th></th>
                              <th  style="max-width: 95px;">Vehicle No.</th>
                              <th >Vehicle Profile</th>
                              <th >Driver's Profile</th>
                              <th >Number of Passengers</th>
                              <th >EDSA</th>
                              <th >Schedule</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td></td>
                              <td>0231</td>
                              <td>2017-0001</td>
                              <td>Genesis Ivan J. Aquino</td>
                              <td>17</td>
                              <td>SLEX</td>
                              <td>January 20, 2017</td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>0345</td>
                              <td>2017-0002</td>
                              <td>Carl John Gorgonia</td>
                              <td>15</td>
                              <td>SCTEX</td>
                              <td>March 3, 2017</td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>0612</td>
                              <td>2017-0003</td>
                              <td>John Benson Leabres</td>
                              <td>9</td>
                              <td>BACLARAN</td>
                              <td>May 15, 2017</td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>0234</td>
                              <td>2017-0004</td>
                              <td>John Mayson Labuntog</td>
                              <td>13</td>
                              <td>LAGUNA</td>
                              <td>June 1, 2017</td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>0247</td>
                              <td>2017-0005</td>
                              <td>Antonio Bravo</td>
                              <td>10</td>
                              <td>PAMPANGA</td>
                              <td>June 3, 2017</td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>0716</td>
                              <td>2017-0006</td>
                              <td>Eliseo Balido</td>
                              <td>8</td>
                              <td>SUBIC</td>
                              <td>August 12, 2017</td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>0663</td>
                              <td>2017-0007</td>
                              <td>James Bravo</td>
                              <td>12</td>
                              <td>BALER</td>
                              <td>August 20, 2017</td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>0172</td>
                              <td>2017-0008</td>
                              <td>Sandra Engaran</td>
                              <td>11</td>
                              <td>ILOCOS</td>
                              <td>September 15, 2017</td>
                          </tr>
                        </tbody>
                     </table>
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

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="ialog">
         <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-custom">
                           <div class="panel-heading"><i class="fa fa-car fa-lg" aria-hidden="true"></i> &nbsp&nbspAdd New Vehicle</div>
                              <div class="panel-body">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="col-lg-4">
                                          <div class="row">
                                             <img style="display:block; margin-left:auto; margin-right:auto" class="img-circle " id="image" title="contact-img" alt="contact-img" alt="user-img" height="200px" width="200px"></br>
                                          </div>
                                          <div class="row clearfix form-group">
                                             <div class='col-lg-12' align="center">
                                                <span class='group-span-filestyle input-group-btn' tabindex='0'>
                                                <span class="btn btn-file">
                                                <input class="required" type="file" id="file" name="file" accept="image/*"></br>
                                                </span>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-8">
                                          <div class="row" style="margin-top: 15px;">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Vehicle No.</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="vehicleNo" id="vehicleNo">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- end row -->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Registration No.</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="registrationNo" id="registrationNo">
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Policy No.</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="policyNo" id="policyNo">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- end row -->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Insurance No.</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="insuranceNo" id="insuranceNo">
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Insurance Company</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="insuranceComp" id="insuranceComp">
                                                   </div>
                                                   <div>  
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- end row -->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Model/Brand</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="model" id="model">
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Color</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="color" id="color">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end of row-->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Engine No.</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="engineNo" id="engineNo">
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Chassis No.</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="chassisNo" id="chassisNo">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end of row-->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Year of Manufacturer</label>
                                                   <div class="col-lg-12">
                                                      <select class="form-control" id="yearManafacturer" name="yearManafacturer"></select>
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Date of Registration</label>
                                                   <div class='col-lg-12'>
                                                      <div class="form-group">
                                                         <div class="input-group date form_date col-lg-12" data-date="" data-date-format="dd MM yyyy" data-link-field="registration" data-link-format="dd MM yyyy">
                                                            <input class="form-control" size="16" type="text" value="" readonly >
                                                            <span class="input-group-addon">
                                                               <div class="glyphicon glyphicon-remove">
                                                               </div>
                                                            </span>
                                                         </div>
                                                         <input type="hidden" id="registration" name="registration" value="" /><br/>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end of row-->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Transmission</label>
                                                   <div class="col-lg-12">
                                                      <select class="form-control" id="transmission" name="transmission">
                                                         <option disabled selected>-- Please Select --</option>
                                                         <option value="Automatic">Automatic</option>
                                                         <option value="Manual">Manual</option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Maximum Passenger</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="passenger" id="passenger">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end of row-->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Bus Fare</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="busFare" id="busFare">
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Plate No.</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="plateNo" id="plateNo">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end of row-->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Route From</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="routeFrom" id="routeFrom">
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">To</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="text" name="routeTo" id="routeTo">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end of row-->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">Schedule From</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="time" name="schedFrom" id="schedFrom">
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix form-group">
                                                   <label class="col-lg-12 control-label">To</label>
                                                   <div class="col-lg-12">
                                                      <input class='required form-control' type="time" name="schedTo" id="schedTo">
                                                   </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 form-group clearfix">
                                                   <div class="col-lg-12">
                                                      <label class="control-label">Days</label>
                                                         <select class="form-control" id="transmission" name="transmission">
                                                            <option disabled selected>-- Please Select --</option>
                                                            <option value="monday">Monday</option>
                                                            <option value="tuesday">Tuesday</option>
                                                            <option value="wednesday">Wednesday</option>
                                                            <option value="thursday">Thursday</option>
                                                            <option value="Friday">Friday</option>
                                                         </select>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <!--end of row-->
                                          <div class="row ">
                                             <div class="col-lg-12">
                                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                   <label class="col-lg-12 control-label">Assigned Driver</label>
                                                      <div class="col-lg-12">
                                                         <select class="col-lg-12 form-control" id="assignedDriver" name="assignedDriver">
                                                            <option disabled selected>-- Please Select Driver--</option>
                                                            <option value="3">Raymark Bravo</option>
                                                         </select>
                                                      </div>
                                                </div>
                                                <input type="hidden" id="name" name="name">
                                                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                   <label class="col-lg-12 control-label">Assigned Conductor</label>
                                                      <div class="col-lg-12">
                                                         <select class="col-lg-12 form-control" id="assignedConductor" name="assignedConductor">
                                                            <option disabled selected>-- Please Select Conductor--</option>
                                                            <option value="Jomar Bravo">Jomar Bravo</option>
                                                         </select>
                                                      </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>      
                        </div>  
                     </div> 
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
               </div>
            </div>
         </div>
      </div>

      <!-- Moda12 -->
      <div class="modal fade" id="myModal2" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add New Schedule</h4>
               </div>
               <div class="modal-body">
                  <p>Add some new sched.</p>
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
    <script src="{!! asset('assets/DataTables/js/dataTables.bootstrap.js') !!}"></script>
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
   <script src="{!! asset('js/Admin/AD_Transport-Management.js') !!}"></script>>
      <!-- end of your custom script -->
   </body>
</html>