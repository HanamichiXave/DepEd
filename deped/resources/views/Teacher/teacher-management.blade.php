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
      <link href="{!! asset('assets/custom/css/Teacher/T_MainPage.css') !!}" rel="stylesheet"> 
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
    /*Chat Window
    #chatWindow {
    position: fixed;
    bottom: 30px;
    right: 30px;
    }
    .windowSize{
      width: 240px;
      height: 700px;
      border: 1px solid green;
      border-radius: 1px;
    }
    .windowHeading{
      width: 240px;
      height: 40px;
      background-color: #1284AD;
      border-radius: 1px;
    }*/
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
        <br>
        <!-- <div class="page-header" style="color: #000033"><h2><strong>Administration Management</strong></h2></div> -->
          <ol class="breadcrumb" style="background-color: #D9EDF7">
            <li><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</li>
          </ol>
           
        <!-- your code start here -->
        <!-- Please observe indention -->
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teacherdashboard')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/Super Admin/v5/dashboard.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Dashboard</h2>
                      <p class="info">
                             Provides in-depth data analysis, organizes and presents information regarding all teacher activity.
                      </p>
                    </div>
                </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL:: Route('teacherprofile')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/profilelogo.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>My Profile</h2>
                      <p class="info">
                             View a teacher's profile and information.
                      </p>
                    </div>
                </div>
            </a>
          </div>  
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teacherclassschedule')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/classlogo.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>My Class Schedule</h2>
                      <p class="info">
                             A list of all the classes and schedules given to a teacher.
                      </p>
                    </div>
                </div>
            </a>
          </div>  
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teacherlessonplan')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/library.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>My Lesson Plan</h2>
                      <p class="info">
                             A list of lesson plans a teacher can use in their subjects and lessons.
                      </p>
                    </div>
                </div>
            </a>
          </div> 
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teacherpayslip')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/list.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Payslip</h2>
                      <p class="info">
                            A record of all payslips a teacher receives from the beginning to the end of the year.
                      </p>
                    </div>
                </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teacherleave')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/hr.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Leave & Vacation</h2>
                      <p class="info">
                            Contains a record of all leaves and absences a teacher had made. 
                      </p>
                    </div>
                </div>
            </a>
          </div>  
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teacherclassattendance')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/reserved.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Class Attendance</h2>
                      <p class="info">
                             Contains all records of classes a teacher has and every seating arrangement for different subject.
                      </p>
                    </div>
                </div>
            </a>
          </div>  
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('classgradingmanagement')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/record.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Class Grade</h2>
                      <p class="info">
                             A record of grades that can be viewed per class.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a data-toggle="modal" data-target="#schoolHandbook">
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/progress.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Progress Report</h2>
                      <p class="info">
                             View the academic progress of the class for the semester of school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teacherclassgrade')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/classresult.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Class Exam Result & Exam Schedule</h2>
                      <p class="info">
                             Manage the exam schedule and results of examinations given by the teacher.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teacherclassgrade')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/achievement.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Class Activities Achievements</h2>
                      <p class="info">
                             List of activities the class had done and their achievements.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('teachermessages')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/memo.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Messages & Memo</h2>
                      <p class="info">
                            Contains Emails, Notifications, Memo's and To-Do list of individual employees and staffs.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
            <a href="{{URL::Route('document')}}">
                <div class="hovereffect">
                    <img class="img-responsive" src="{!! asset('assets/images/records.png') !!}" width="100" height="100" />
                    <div class="overlay">
                        <h2>Student Documents</h2>
                        <p class="info">
                            Manage Different Documents From Form 137 to Diplomas.
                        </p>
                    </div>
                </div>
            </a>
            <br><br>
        </div>

        <div id="chatWindow">
          <div class="windowSize">
            <div class="windowHeading">
              
            </div>
          </div>
        </div>

        <div id="schoolHandbook" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><strong>Progress Report(s)</strong></h4>
                  </div>
                  <div class="modal-body">
                      <br />
                      <div class="panel panel-custom">
                <div class="panel-heading"><i class="fa fa-bullhorn"></i>&nbsp&nbsp Progress Report</div>
                <div class="panel-body"> 
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
                              <a href="{{URL::Route('teacherstudprog')}}">
                              <div class="hovereffect">
                                  <img class="img-responsive" src="{!! asset('assets/images/Counselor/student-list.png') !!}" height="100" width="100" alt="">
                                  <div class="overlay">
                                     <h2>Student</h2>
                                      <p class="info">
                                             Progress made by a student in a grading.
                                      </p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                              <a href="t{{URL::Route('teacherclassprog')}}">
                              <div class="hovereffect">
                                  <img class="img-responsive" src="{!! asset('assets/images/classlogo.png') !!}" height="100" width="100" alt="">
                                  <div class="overlay">
                                     <h2>Class</h2>
                                      <p class="info">
                                             Progress made by a class in a grading.
                                      </p>
                                    </div>
                                </div>
                            </a>
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



         <!-- end of your code -->
         
         <!-- footer here -->
         <hr>
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
      <!-- JS file -->
      <script src="{!! asset('js/Teacher/teachermngt.js') !!}"></script>
      <!-- end of your custom script -->
   </body>
</html>