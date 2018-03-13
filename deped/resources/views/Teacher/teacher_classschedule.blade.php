@extends('Teacher.teacher-layout')

@section('content')
<div class="page-header" style="color: #000033">
   <h2><strong>Teacher Management</strong></h2>
</div>
<ol class="breadcrumb" style="background-color: #D9EDF7">
   <li><a href="{{URL::Route('teacher')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
   <li>Class Schedule</li>
</ol>
<!-- your code start here -->
<!-- Please observe indention -->

<div class="panel panel-custom">
   <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-book fa-lg"></i> Subject List</div>
   <div class="panel-body">
      <div class="row">
         <div class="col-lg-12">
            <div class="row">
               <center><h4>School Year for 2017-2018</h4></center>
               <div class="col-sm-6">
                  <div class="form-group contact-search m-b-30">
                     <input type="text" id="search" class="form-control" style="height: 40px; margin-top: 7px;" placeholder="Search...">
                  </div>
               </div>
               <div class="col-sm-4">
               </div>
            </div>
            <div class="container-fluid">
               <div class="row">
                  <form class="table-responsive">
                     <table id="myTable" class="display nowrap table table-striped table-hover"  cellspacing="0" width="100%">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Grade</th>
                              <th>Section</th>
                              <th>Subject</th>
                              <th>Time</th>
                              <th>Days</th>
                              <th>Room / Building</th>
                              <th>Number of Student</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($classes as $class)
                              <tr>
                                 <td></td>
                                 <td>{{ $class->sectionLabel }}</td>
                                 <td>{{ $class->gradeLabel }}</td>
                                 <td>{{ $class->subject }}</td>
                                 <td>{{ $class->timeStart." - ".$class->timeEnd }}</td>
                                 <td>{{ $class->schedule }}</td>
                                 <td>{{ $class->roomNumber }}</td>
                                 <td>30</td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection