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
      <div class="container" >
         <br>
         <br>
         <div class="page-header" style="color: #000033"><h2><strong>Parent Management</strong></h2></div>
        <ol class="breadcrumb" style="background-color: #D9EDF7">
          <li><a href="{{URL::Route('parent')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
          <li><a href="{{URL::Route('schoolactivities')}}">School Activities</a></li>
          <li>Overall Grades</li>
        </ol>
        <!-- your code start here -->
        <!-- Please observe indention -->
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header" style="color: #000033"><h2><strong>Antonio Bravo's Overall Grades</strong></h2></div>
            <div class="col-lg-4">
              <div class="table-responsive card-box">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th colspan="4"><h3>UPCOMING ASSIGNMENTS</h3></th>
                    </tr>
                    <tr>
                      <th>Due</th>
                      <th>Title</th>
                      <th>Course</th>
                      <th>Type</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Today!</td>
                      <td>Proportions</td>
                      <td>Math V</td>
                      <td>Homework</td>
                    </tr>
                    <tr>
                      <td>6/27</td>
                      <td>Anatomy</td>
                      <td>Science</td>
                      <td>Seatwork</td>
                    </tr>
                    <tr>
                      <td>7/03</td>
                      <td>Life of Rizal Essay</td>
                      <td>AP</td>
                      <td>Homework</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive card-box">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <td colspan="2"><h3>Person to Contact in Case of Emergency</h3></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Manalo, Jose</br>
                        Unit 2410 24F Ortigas Corporate Center</br>
                        J. Vargas aven. cor. Meralco Ave.
                      </td>
                      <td style="min-width: 250px">
                        <i class="fa fa-envelope-o"></i><span class="m-l-15"><a href="mailto:info@test.com">Send Message</a></span></br>
                        <i class="fa fa-phone"></i><span class="m-l-15">0917 884 3647</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive card-box">
                <table class="table table-hover mails m-0 table table-actions-bar">
                  <thead>
                    <tr>
                      <td><h3>Requirements</h3></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="">
                      <td>
                        <i class="fa fa-check m-r-5"></i>Birth Certificate
                      </td>
                    </tr>
                    <tr class="">
                      <td>
                        <i class="fa fa-times m-r-5"></i>Certificate of Good Moral Character
                      </td>
                    </tr>
                    <tr class="">
                      <td>
                        <i class="fa fa-check m-r-5"> </i>Form 138
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive card-box">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <td><h3>Medical Record</h3></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="">
                      <td>Marissa has no known allergies.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive card-box">
                <table class="table table-hover mails m-0 table table-actions-bar">
                  <thead>
                    <tr>
                      <td><h3>Academic History</h3></td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Grade 6</td>
                    </tr>
                    <tr>
                      <td>Grade 5</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive card-box">
                <table class="table table-hover mails m-0 table table-actions-bar">
                  <thead>
                    <tr>
                      <td colspan="2"><h3>Student School Information</h3></td>
                    </tr>
                  </thead>
                  <tbody>
                    <th colspan="2">Education Details</th>
                    <tr class="">
                      <td>School Year</td>
                      <td>2015-2016</td>
                    </tr>
                    <tr class="">
                      <td>Date of Admission</td>
                      <td>10/27/15</td>
                    </tr>
                    <tr class="">
                      <td>Admission No.</td>
                      <td>134-366-43</td>
                    </tr>
                    <tr class="">
                      <td>Enrollment No.</td>
                      <td>385-132-633 </td>
                    </tr>
                    <tr class="">
                      <td>Grade</td>
                      <td>7</td>
                    </tr>
                    <tr class="">
                      <td>Section</td>
                      <td>Rose </td>
                    </tr>
                    <th colspan="2">Scholarship Granted</thead>
                    <tr class="">
                      <td>Type of Scholarship</td>
                      <td>Full Tuition, Fees, Books</td>
                    </tr>
                    <tr class="">
                      <td>Amount</td>
                      <td style="min-width: 350px">Php 1,903.54</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card-box">
                <h3>REPORT ON LEARNER'S OBSERVED VALUES</h3>
                <div class="table-responsive card-box">
                  <div class="col-lg-5">
                    <h3>PERIODIC RATING</h3>
                  </div>
                </div>
                <div class="table-responsive card-box">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <td colspan="7"><h3>Quarter</h3></td>
                      </tr>
                      <tr>
                        <th>LEARNING AREAS</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>Final Grade</th>
                        <th>Remarks</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Filipino</td>
                        <td>89</td>
                        <td>84</td>
                        <td>87</td>
                        <td>86</td>
                        <td>87</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                        <td>English</td>
                        <td>83</td>
                        <td>84</td>
                        <td>85</td>
                        <td>86</td>
                        <td>83</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                         <td>Mathematics</td>
                         <td>85</td>
                         <td>84</td>
                         <td>88</td>
                         <td>89</td>
                         <td>88</td>
                         <td>Passed</td>
                      </tr>
                      <tr>
                        <td>Science</td>
                        <td>85</td>
                        <td>84</td>
                        <td>88</td>
                        <td>89</td>
                        <td>88</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                        <td>Araling Panlipunan (AP)</td>
                        <td>87</td>
                        <td>85</td>
                        <td>90</td>
                        <td>89</td>
                        <td>87</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                        <td>Edukasyon sa Pagpapakatao (EsP)</td>
                        <td>89</td>
                        <td>84</td>
                        <td>88</td>
                        <td>86</td>
                        <td>87</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                        <td>Edukasyong Pantahanan at Pangkabuhayan (EPP)</td>
                        <td>89</td>
                        <td>84</td>
                        <td>87</td>
                        <td>86</td>
                        <td>87</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                        <td colspan="7"><b>MAPEH</b></td>
                      </tr>
                      <tr>
                        <td>Music</td>
                        <td>89</td>
                        <td>84</td>
                        <td>87</td>
                        <td>86</td>
                        <td>87</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                        <td>Arts</td>
                        <td>89</td>
                        <td>84</td>
                        <td>87</td>
                        <td>86</td>
                        <td>87</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                        <td>PE</td>
                        <td>89</td>
                        <td>84</td>
                        <td>87</td>
                        <td>86</td>
                        <td>87</td>
                        <td>Passed</td>
                      </tr>
                      <tr>
                        <td>Health</td>
                        <td>89</td>
                        <td>84</td>
                        <td>87</td>
                        <td>86</td>
                        <td>87</td>
                        <td>Passed</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="table-responsive card-box">
                  <table class="table table-hover mails m-0 table table-actions-bar">
                    <thead>
                      <tr>
                        <th colspan="2"><h3>Personal Information</h3></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nationality</td>
                        <td>Filipino</td>
                      </tr>
                      <tr>
                        <td>Dialect</td>
                        <td>English, Tagalog</td>
                      </tr>
                      <tr>
                        <td> Religion
                        </td>
                        <td>Catholic</td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td style="min-width: 350px">Married</td>
                      </tr>
                      <tr>
                        <td>Height (ft)</td>
                        <td style="min-width: 350px">5'5"</td>
                      </tr>
                      <tr>
                        <td>Weight (kg)</td>
                        <td style="min-width: 350px">52</td>
                      </tr>
                      <tr>
                        <td>Blood Type</td>
                        <td style="min-width: 350px">A</td>
                      </tr>
                      <tr>
                        <td>Any Allergies</td>
                        <td style="min-width: 350px"></td>
                      </tr>
                      <tr>
                        <td>Remarks</td>
                        <td style="min-width: 350px">N/A</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <div class="table-responsive card-box">
                <table class="table table-hover mails m-0 table table-actions-bar">
                  <thead>
                    <tr>
                      <td colspan="2"><h3>Guardian's Information</h3><br />
                        <div class="checkbox" style="text-align: center;"> 
                          <input data-parsley-mincheck='2' data-parsley-multiple='groups' id='male' type='checkbox'>
                          <label for='male'>Same as Parents</label>
                        </div>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Guardian's Name</td>
                      <td>Joseph Dela Cruz</td>
                    </tr>
                    <tr>
                      <td>Address </td>
                      <td>
                        Unit 2410 24F One Corporate
                        Center J. Vargas Ave. Cor. Meralco Ave.
                        Ortigas Pasig City
                      </td>
                    </tr>
                    <tr>
                      <td>Landline</td>
                      <td>589-5478</td>
                    </tr>
                    <tr>
                      <td>Email Address</td>
                      <td>delacruzmark@example.com</td>
                    </tr>
                    <tr>
                      <td>Mobile No.</td>
                      <td>+63910222222</td>
                    </tr>
                    <tr>
                      <td>Religion</td>
                      <td>Christian</td>
                    </tr>
                    <tr>
                      <td>Nationality</td>
                      <td>Filipino</td>
                    </tr>
                    <tr>
                      <td>Dialect</td>
                      <td>English, Tagalog</td>
                    </tr>
                    <tr>
                      <td>Occupation</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Company Name</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Company Landline</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Company Address</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Relationship to Student</td>
                      <td>Aunt</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><a href="#" style="color: blue">View photo</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="table-responsive card-box">
                <table class="table table-hover mails m-0 table table-actions-bar">
                  <thead>
                    <tr>
                      <th colspan="2"><h3>Parent's Information</h3></th>
                    </tr>
                  </thead>
                  <tbody>
                    <th colspan="2"><h4>Father's Information</h4></thead>
                    <tr class="">
                      <td>Father's Name</td>
                      <td>Joseph Dela Cruz</td>
                    </tr>
                    <tr class="">
                      <td>Address </td>
                      <td>
                        Unit 2410 24F One Corporate
                        Center J. Vargas Ave. Cor. Meralco Ave.
                        Ortigas Pasig City
                      </td>
                    </tr>
                    <tr class="">
                      <td>Landline</td>
                      <td>589-5478</td>
                    </tr>
                    <tr class="">
                      <td>Email Address</td>
                      <td>delacruzmark@example.com</td>
                    </tr>
                    <tr class="">
                      <td>Mobile No.</td>
                      <td>+63910222222</td>
                    </tr>
                    <tr class="">
                      <td>Religion</td>
                      <td>Christian</td>
                    </tr>
                    <tr class="">
                      <td>Nationality</td>
                      <td>Filipino</td>
                    </tr>
                    <tr class="">
                      <td>Dialect</td>
                      <td>English, Tagalog</td>
                    </tr>
                    <tr class="">
                      <td>Company Name</td>
                      <td></td>
                    </tr>
                    <tr class="">
                      <td>Company Landline</td>
                      <td></td>
                    </tr>
                    <tr class="">
                      <td>Company Address</td>
                      <td></td>
                    </tr>
                    <tr class="">
                      <td></td>
                      <td>Living</td>
                    </tr>
                    <tr class="">
                      <td></td>
                      <td><a href="#" style="color: blue">View photo</a></td>
                    </tr>
                    <th colspan="2"><h4>Mother's Information</h4></th>
                    <tr class="">
                      <td>Mother's Name</td>
                      <td>Josephina Dela Cruz</td>
                    </tr>
                    <tr class="">
                      <td>Address </td>
                      <td>
                        Unit 2410 24F One Corporate
                        Center J. Vargas Ave. Cor. Meralco Ave.
                        Ortigas Pasig City
                      </td>
                    </tr>
                    <tr class="">
                      <td>Landline</td>
                      <td>589-5478</td>
                    </tr>
                    <tr class="">
                      <td>Email Address</td>
                      <td>delacruzmark@example.com</td>
                    </tr>
                    <tr class="">
                      <td>Mobile No.</td>
                      <td>+63910222222</td>
                    </tr>
                    <tr class="">
                      <td>Religion</td>
                      <td>Christian</td>
                    </tr>
                    <tr class="">
                      <td>Nationality</td>
                      <td>Filipino</td>
                    </tr>
                    <tr class="">
                      <td>Dialect</td>
                      <td>English, Tagalog</td>
                    </tr>
                    <tr class="">
                      <td>Company Name</td>
                      <td></td>
                    </tr>
                    <tr class="">
                      <td>Company Landline</td>
                      <td></td>
                    </tr>
                    <tr class="">
                      <td>Company Address</td>
                      <td></td>
                    </tr>
                    <tr class="">
                      <td></td>
                      <td>Living</td>
                    </tr>
                    <tr class="">
                      <td></td>
                      <td><a href="#" style="color: blue">View photo</a></td>
                    </tr>
                    <tr class="">
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
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
      <script src="{!! asset('assets/Datatables/js/jquery.dataTables.min.js')!!}"></script>

      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js')!!}"></script>
      
      <script src="{!! asset('assets/Datatables/js/datatables.bootstrap.js')!!}"></script>
      <script src="{!! asset('assets/Datatables/js/dataTables.buttons.min.js')!!}"></script>

      <script src="{!! asset('assets/Datatables/js/buttons.bootstrap.min.js')!!}"></script>
      <script src="{!! asset('assets/Datatables/js/buttons.html5.min.js')!!}"></script>
      <script src="{!! asset('assets/Datatables/js/buttons.print.min.js')!!}"></script>

      <script src="{!! asset('assets/Datatables/js/dataTables.fixedColumns.min.js')!!}"></script>
      <script src="{!! asset('assets/Datatables/js/dataTables.fixedHeader.min.js')!!}"></script>
      <script src="{!! asset('assets/Datatables/js/dataTables.keyTable.min.js')!!}"></script>
      <script src="{!! asset('assets/Datatables/js/dataTables.scroller.min.js')!!}"></script>

      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      
      <!-- end of your custom script -->
   </body>
</html>