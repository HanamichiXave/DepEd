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
      <link href="{!! asset('assets/dashboards/bootstrap dashboard/bsdashboard.css') !!}" rel="stylesheet">
      
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
    td , th {
      text-align: center;
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
         <div class="page-header" style="color: #000033">
            <h2><strong>Teacher Management</strong></h2>
         </div>
         <ol class="breadcrumb" style="background-color: #D9EDF7">
            <li><a href="{{URL::Route('teacher')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
            <li>Class Progress Report</li>
         </ol>
         <section>
         <!-- your code start here -->
         <!-- Please observe indention -->
         
          <div class="panel panel-custom">
            <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-line-chart fa-lg"></i> Class List
             </div>
             <div class="panel-body">
                <div class="row">
                   <div class="col-sm-6">
                      <div class="form-group contact-search m-b-30">
                         <input type="text" id="search" class="form-control" style="height: 40px; margin-top: 7px;" placeholder="Search...">
                      </div>
                   </div>
                </div>
                <div class="table-responsive">
                   <table id="classprog" class="display nowrap table table-striped table-hover">
                      <thead>
                         <tr>
                            <th ></th>
                            <th >Grade/Year Level</th>
                            <th >Section</th>
                            <th >Subject</th>
                            <th >Progress</th>
                         
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td></td>
                            <td>2nd</td>
                            <td>Mabini</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                          
                         </tr>
                         <tr>
                            <td></td>
                            <td>2nd</td>
                            <td>Bonifacio</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                          
                         </tr>
                         <tr>
                            <td></td>
                            <td>2nd</td>
                            <td>Rizal</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>2nd</td>
                            <td>Aguinaldo</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>2nd</td>
                            <td>Luna</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>2nd</td>
                            <td>Aquino</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>2nd</td>
                            <td>Silang</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>1nd</td>
                            <td>Masipag</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>1st</td>
                            <td>Masinop</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>3rd</td>
                            <td>Ruby</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>1st</td>
                            <td>Maagap</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>3rd</td>
                            <td>Quartz</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>3rd</td>
                            <td>Topaz</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>3rd</td>
                            <td>Emerald</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>1st</td>
                            <td>Masunurin</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>4th</td>
                            <td>Sampaguita</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>4th</td>
                            <td>Rose</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>4th</td>
                            <td>Santan</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>
                         <tr>
                            <td></td>
                            <td>4th</td>
                            <td>Ilang Ilang</td>
                            <td><select>
                                <option value="Math">Math</option>
                                <option value="English">English</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Science">Science</option>
                                <option value="MAPEH">MAPEH</option>
                                <option value="TLE">TLE</option>
                              </select></td>
                            <td><a href="#" class="btn btn-info btn-md waves-effect waves-light m-b-30" data-toggle="modal" data-target="#certModal">See Class Progress</a></td>
                           
                         </tr>

                      </tbody>
                   </table>
                </div>
             </div>
          </div>
           <div class="modal fade" id="certModal" role="dialog">
               <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Progress</h4>
                     </div>
                     <div  class="modal-body">
                      
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="panel panel-custom">
                                <div class="panel-heading">
                                  <i class="fa fa-line-chart"></i>
                                  <label>Class Progress</label>                    
                                </div>
                               <div class="db-container" style="position: relative; width:auto;">
                                  <canvas id="myChartbarhr" height="100px"></canvas>
                                </div>
                              </div>
                          </div>
                     
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                     </div>
                  </div>
               </div>
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
      <script src="{!! asset('assets/DataTables/js/dataTables.bootstrap.js') !!}"></script>
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <!-- JS file -->
      <script src="{!! asset('js/Teacher/tclassprog.js') !!}"></script>
      <!-- This is the Code for dataTable, Please copy paste -->
     

      <!-- This is the Code for dataTable -->

      <!-- end of your custom script -->
   </body>
</html>