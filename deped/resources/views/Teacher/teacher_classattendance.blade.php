@extends('Teacher.teacher-layout')

@section('content')
   <style type="text/css">
      .dataTables_length {
         margin-bottom: 15px;
         margin-top: 5px;
      }
      .badge-info {
         background-color: #5bc0de;
      }
      .present {
         color: #28A745;
         font-size: 1.45em;
      }
      .absent {
         color: #dc3545;
         font-size: 1.45em;
      }
      .late{
         color: #FFC107;
         font-size: 1.45em;
      }
      .excuse{
         color: #17A2B8;
         font-size: 1.45em;
      }
      .wend{
         color: #00000;
         font-size: 1.45em;
      }
      .stud-panel-lg{
         border-radius: 4px;
         border: 2px solid #44A5C9!important;
         width: 70px;
         height: 83px;
      }
      .attendance{
         background-color: #D3D3D3;
         width: 67px;
         height: 21px;
         text-align: center;
         font-size: 10px;
         border-radius: 2px;
      }
      .attendance p{
         padding-top: 5px;
      }
      td, th {
         text-align: center;
      }
   </style>
         <div class="page-header" style="color: #000033">
            <h2><strong>Teacher Management</strong></h2>
         </div>
         <ol class="breadcrumb" style="background-color: #D9EDF7">
            <li><a href="{{URL::Route('teacher')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
            <li>Class Attendance</li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
         <div class="page-header" style="color: #000033">
            <h2>
               My Class Attendance
               <small>
                  <h4>S.Y 2017 - 2018</h4>
               </small>
            </h2>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <ul class="nav nav-tabs nav-justified nav-pills">
                  <li class="active"><a data-toggle="tab" href="#my-classes"><strong> My Classes</strong></a></li>
                  <li><a data-toggle="tab" href="#sit-arr"><strong> Seating Arrangement</strong></a></li>
               </ul>
               <div class="tab-content">
                  <div id="my-classes" class="tab-pane fade in active">
                     <div class="panel panel-custom">
                        <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-address-book-o" aria-hidden="true"></i> Class List</div>
                        <div class="panel-body">

                           <h3 style="text-align: center; margin-top: 2px;">My Classes</h3>
                           <form>
                              <div class="row">
                                 <div class="col-sm-8">
                                    <div class="form-group contact-search m-b-30">
                                       <input type="text" id="search" class="form-control" style="height: 40px; margin-top: 7px;" placeholder="Search...">
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                 </div>
                              </div>
                              <div class="table-responsive">
                                 <table id="myTable" class="display nowrap table table-striped table-hover">
                                    <thead>
                                       <tr>
                                          <th style="width: 10%;">#</th>
                                          <th style="width: 20%;">Grade</th>
                                          <th style="width: 20%;">Section</th>
                                          <th style="width: 25%;">Subject</th>
                                          <th style="width: 25%;">Day / Time</th>
                                          <th ></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($classes as $class)
                                       <tr>
                                          <td></td>
                                          <td>
                                             @foreach($sections as $section)
                                                @foreach($grades as $grade)
                                                   @if($section->gradeId == $grade->gradeId && $class->sectionId == $section->sectionId)
                                                      {{ $grade->gradeLabel }}
                                                   @endif
                                                @endforeach
                                             @endforeach
                                          </td>
                                          <td>
                                             @foreach($sections as $section)
                                                @if($section->sectionId == $class->sectionId)
                                                   {{ $section->sectionLabel }}
                                                @endif
                                             @endforeach
                                          </td>
                                          <td>{{ $class->subject }}</td>
                                          <td>{{ $class->schedule." / ".$class->timeStart." - ".$class->timeEnd }}</td>
                                          <td>
                                             <button type="button" id = "{{ $class->classId }}" data-toggle="modal" data-target="#viewClass{{ $class->classId }}" class="btn btn-info btn-xs center-block view-class" style="width: 70px; height: 30px; font-size: 15px;">View</button>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div id="sit-arr" class="tab-pane fade">
                     <div class="container-fluid no-p-l-r">
                        <div class="col-md-3">
                           <div class="row">
                              <div class="panel panel-default" style="height: 3.68in;">
                                 <div class="panel-heading" style="text-align: center;">
                                    <label class="panel-title">Students List</label>
                                 </div>
                                 <div class="container-fluid no-p-l-r" style="overflow-y: auto; height: 3in;" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student1">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/Avy.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student1-att">
                                             <p id="student1-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s1">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student2">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/Bea.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student2-att">
                                             <p id="student2-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s2">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student3">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/benson.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student3-att">
                                             <p id="student3-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s3">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student4">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/Bravo.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student4-att">
                                             <p id="student4-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s4">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student5">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/carl.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student5-att">
                                             <p id="student5-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s5">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student6">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/Eli.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student6-att">
                                             <p id="student6-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s6">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student7">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/genesis.JPG') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student7-att">
                                             <p id="student7-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s7">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student8">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/Ishrael.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student8-att">
                                             <p id="student8-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s8">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student9">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/Jham.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student9-att">
                                             <p id="student9-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s9">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student10">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/mayson.png') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student10-att">
                                             <p id="student10-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s10">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student11">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/Nikko.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student11-att">
                                             <p id="student11-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s11">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                    <div class="stud-panel-lg col-xs-12 col-sm-6 col-md-3 dropdown no-p-l-r" draggable="true" ondragstart="drag(event, this.id)" ondragend="show(this.id)" id="student12">
                                       <a href="" type="button" class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="{!! asset('assets/images/Teacher/xavier.jpg') !!}" width="66" height="58" style="border-radius: 2px;">
                                          <div class="attendance" id="student12-att">
                                             <p id="student12-text">Attendance</p>
                                          </div>
                                       </a>
                                       <ul  class="dropdown-menu attendanceChoice" id="attendanceChoice-s12">
                                          <li class="" value="Present"><a href="#">Present <i class="fa fa-circle pull-right present"></i></a></li>
                                          <li class="" value="Late"><a href="#">Late <i class="fa fa-circle pull-right late"></i></a></li>
                                          <li class="" value="Absent"><a href="#">Absent <i class="fa fa-circle pull-right absent"></i></a></li>
                                          <li class="" value="Excused"> <a href="#">Excused <i class="fa fa-circle pull-right excuse"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-9 panel panel-default container-fluid">
                           <div class="col-md-12 no-p-l-r">
                              <strong> Section: 1</strong></br>
                              <strong> Class: English</strong>
                           </div>
                           <div class="row no-p-l-r">
                              <div class="col-xs-12 col-sm-6 p-l-r-5 text-center">
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 p-l-r-5 text-center">
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 p-l-r-5 text-center">
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 p-l-r-5 text-center">
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 p-l-r-5 text-center">
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 p-l-r-5 text-center">
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 p-l-r-5 text-center">
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 p-l-r-5 text-center">
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                                 <div class="student-container panel panel-default center-block no-m-l-r"  ondrop="drop(event)" ondragover="allowDrop(event)">
                                 </div>
                              </div>
                           </div>
                           <div style="text-align: center;">
                              <div class="teacher-table panel panel-default center-block no-m-l-r">
                                 <img src="{!! asset('assets/images/Teacher/student-girl.png') !!}"/>
                              </div>
                           </div>
                           <div style="text-align: center; margin-bottom:20px; background: #dff0d8 !important;" class="panel panel-default">
                              <label class="panel-title">Green board</label>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <button type="button" class="btn btn-primary pull-right">Save</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br><br>


      <!-- Modal ViewClass -->
         @foreach($classes as $class)
      <div id="viewClass{{ $class->classId }}" class="modal fade" role="dialog">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">View Class</h4>
               </div>
               <div class="modal-body">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="panel panel-custom">
                           <div class="panel-heading"><i class="fa fa-address-book-o" aria-hidden="true"></i>
                              &nbspClass Information
                           </div>
                           <div class="panel-body">
                                <div class="panel panel-custom">
                                   <div class="row">
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <table class="table">
                                               <tr>
                                                  <td>
                                                     Grade:
                                                  </td>
                                                  <td>
                                                     <span>
                                                        @foreach($sections as $section)
                                                           @foreach($grades as $grade)
                                                              @if($section->gradeId == $grade->gradeId && $class->sectionId == $section->sectionId)
                                                                 {{ $grade->gradeLabel }}
                                                              @endif
                                                           @endforeach
                                                        @endforeach
                                                     </span>
                                                  </td>
                                               </tr>
                                               <tr>
                                                  <td>
                                                     Section:
                                                  </td>
                                                  <td>
                                                     <span>
                                                        @foreach($sections as $section)
                                                           @if($section->sectionId == $class->sectionId)
                                                              {{ $section->sectionLabel }}
                                                           @endif
                                                        @endforeach
                                                     </span>
                                                  </td>
                                               </tr>
                                               <tr>
                                                  <td>
                                                     Subject:
                                                  </td>
                                                  <td>
                                                     <span >{{ $class->subject }}</span>
                                                  </td>
                                               </tr>
                                               <tr>
                                                  <td>
                                                     Day / Time:
                                                  </td>
                                                  <td>
                                                     <span >{{ $class->schedule." / ".$class->timeStart." - ".$class->timeEnd }}</span>
                                                  </td>
                                               </tr>
                                            </table>
                                         </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <table class="table">
                                               <tr>
                                                  <td>
                                                     Room No:
                                                  </td>
                                                  <td>
                                                     <span class="badge badge-info">{{ $class->roomNumber }}</span>
                                                  </td>
                                               </tr>
                                               <tr>
                                                  <td>
                                                     Number of Student:
                                                  </td>
                                                  <td>
                                                     <span class="badge badge-info">
                                                        @php $students_total = 0; @endphp
                                                        @foreach($academics as $academic)
                                                           @if($academic->classId == $class->classId)
                                                              @php $students_total++; @endphp
                                                           @endif
                                                        @endforeach
                                                        {{ $students_total }}
                                                     </span>
                                                  </td>
                                               </tr>
                                               <tr>
                                                  <td>
                                                     Class Teacher:
                                                  </td>
                                                  <td>
                                                     <span>
                                                        @foreach($teachers as $teacher)
                                                           @foreach($users as $user)
                                                              @if($teacher->teacherId == $class->teacherId && $user->UserId == $teacher->userId)
                                                                 {{ $user->firstName." ".$user->middleName." ".$user->lastName }}
                                                              @endif
                                                           @endforeach
                                                        @endforeach
                                                     </span>
                                                  </td>
                                               </tr>
                                               <tr>
                                                  <td>
                                                     Section Adviser:
                                                  </td>
                                                  <td>
                                                     <span>
                                                        @foreach($sections as $section)
                                                           @foreach($teachers as $teacher)
                                                              @foreach($users as $user)
                                                                 @if($section->sectionId == $class->sectionId && $section->teacherId == $teacher->teacherId && $teacher->userId == $user->UserId)
                                                                    {{ $user->firstName." ".$user->middleName." ".$user->lastName }}
                                                                 @endif
                                                              @endforeach
                                                           @endforeach
                                                        @endforeach
                                                     </span>
                                                  </td>
                                               </tr>
                                            </table>
                                         </div>
                                   </div>
                                </div>
                              <div class="col-lg-12">
                                 <div class="row">
                                    <div class=" panel panel-custom">
                                       <table class="table">
                                          <tr>
                                             <td>
                                                Total Male Students:
                                             </td>
                                             <td>
                                                <span class="badge badge-info">{{ $male_total }}</span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                Total Female Students:
                                             </td>
                                             <td>
                                                <span class="badge badge-info">{{ $female_total }}</span>
                                             </td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="row">
                                    <div class="panel panel-custom">
                                       <h5>&nbsp&nbsp Attendance Legend</h5>
                                       <table class="table">
                                          <tr>
                                             <td>
                                                <span class="badge badge-info">PRESENT</span>
                                             </td>
                                             <td>
                                                <i class="fa fa-circle present">
                                             </td>
                                          </tr>
                                          <tr>
                                          <td>
                                          <span class="badge badge-info">ABSENT</span>
                                          </td>
                                          <td>
                                          <i class="fa fa-circle absent">
                                          </td>
                                          </tr>
                                          <tr>
                                          <td>
                                          <span class="badge badge-info">LATE</span>
                                          </td>
                                          <td>
                                          <i class="fa fa-circle late">
                                          </td>
                                          </tr>
                                          <tr>
                                          <td>
                                          <span class="badge badge-info">EXCUSED</span>
                                          </td>
                                          <td>
                                          <i class="fa fa-circle excuse">
                                          </td>
                                          </tr>
                                          <tr>
                                          <td>
                                          <span class="badge badge-info">WEEKEND</span>
                                          </td>
                                          <td>
                                          <i class="fa fa-circle wend">
                                          </td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="row">
                                  <div class="panel panel-custom">
                                  <center><h4>Month of January</h4></center>
                                     <div class="table-responsive">
                                      <div class="container">
                                      <table id="stud-attendance" class="table table-hover table-responsive ">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th style="text-align: center;"></i>Students</th>
                                             <th style="text-align: center;"></i> 1</th>
                                             <th style="text-align: center;"></i> 2</th>
                                             <th style="text-align: center;"></i> 3</th>
                                             <th style="text-align: center;"></i> 4</th>
                                             <th style="text-align: center;"></i> 5</th>
                                             <th style="text-align: center;"></i> 6</th>
                                             <th style="text-align: center;"></i> 7</th>
                                             <th style="text-align: center;"></i> 8</th>
                                             <th style="text-align: center;"></i> 9</th>
                                             <th style="text-align: center;"></i> 10</th>
                                             <th style="text-align: center;"></i> 11</th>
                                             <th style="text-align: center;"></i> 12</th>
                                             <th style="text-align: center;"></i> 13</th>
                                             <th style="text-align: center;"></i> 14</th>
                                             <th style="text-align: center;"></i> 15</th>
                                             <th style="text-align: center;"></i> 16</th>
                                             <th style="text-align: center;"></i> 17</th>
                                             <th style="text-align: center;"></i> 18</th>
                                             <th style="text-align: center;"></i> 19</th>
                                             <th style="text-align: center;"></i> 20</th>
                                             <th style="text-align: center;"></i> 21</th>
                                             <th style="text-align: center;"></i> 22</th>
                                             <th style="text-align: center;"></i> 23</th>
                                             <th style="text-align: center;"></i> 24</th>
                                             <th style="text-align: center;"></i> 25</th>
                                             <th style="text-align: center;"></i> 26</th>
                                             <th style="text-align: center;"></i> 27</th>
                                             <th style="text-align: center;"></i> 28</th>
                                             <th style="text-align: center;"></i> 29</th>
                                             <th style="text-align: center;"></i> 30</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($students as $student)
                                             @foreach($academics as $academic)
                                                @if($academic->classId == $class->classId && $academic->studentId == $student->studentId)
                                                   <tr style="text-align: left;">
                                                      <td>{{ $student->studentId }}</td>
                                                      <td>{{ $student->firstName." ".$student->middleName." ".$student->lastName }}</td>
                                                      <td><i class="fa fa-circle late"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle wend"></i></td>
                                                      <td><i class="fa fa-circle wend"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle late"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle wend"></i></td>
                                                      <td><i class="fa fa-circle wend"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle excuse"></i></td>
                                                      <td><i class="fa fa-circle wend"></i></td>
                                                      <td><i class="fa fa-circle wend"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle late"></i></td>
                                                      <td><i class="fa fa-circle wend"></i></td>
                                                      <td><i class="fa fa-circle wend"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                      <td><i class="fa fa-circle present"></i></td>
                                                   </tr>
                                                @endif
                                             @endforeach
                                          @endforeach
                                       </tbody>
                                      </table>
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
                  <input type="hidden" name="class-id" id="class-id" value="">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
         @endforeach
      <!-- end of your code -->
      <!-- footer here -->
@endsection