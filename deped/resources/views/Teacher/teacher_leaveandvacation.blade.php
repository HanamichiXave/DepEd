@extends('Teacher.teacher-layout')

@section('content')
<style>
   .badge-info {
   background-color: #5bc0de;
   }
   .badge-success {
   background-color: #60b660;
   }
   .badge-danger {
   background-color: #C73232;
   }
   .badge-warning {
   background-color: #EA9632;
   }
   .badge-primary {
   background-color: #2B618E;
   }
   .m-b-10 {
   margin-bottom: 15px !important;
   }
</style>
<!-- end of your custom css -->
   <div class="page-header" style="color: #000033">
      <h2><strong>Teacher Management</strong></h2>
   </div>
   <ol class="breadcrumb" style="background-color: #D9EDF7">
      <li><a href="{{URL::Route('teacher')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
      <li>Leave Request</li>
   </ol>
   <!-- your code start here -->
   <!-- Please observe indention -->

   <div class="panel panel-custom">
      <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-futbol-o fa-lg"></i> List of Vacation & Leave</div>
      <div class="panel-body">
         <div class="row">
            <div class="col-lg-12">
               <div class="row">
                  <center>
                     <h4><strong>School Year for 2017-2018</strong></h4>
                  </center>
                  <div class="col-sm-6 col-xs-12 col-lg-6">
                     <div class="form-group contact-search m-b-30">
                        <input type="text" id="search" class="form-control" style="height: 40px; margin-top: 7px;" placeholder="Search...">
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12 col-lg-6">
                     <button type="button" class="btn btn-info btn-md waves-effect waves-light m-b-30" style="height: 40px; margin-top: 7px; margin-bottom: 10px;" data-toggle="modal" data-target="#myModal">Request Leave/Vacation</button>
                  </div>
               </div>
               <div class="container-fluid">
                  <div class="row">
                     <form class="table-responsive">
                        <table class="display nowrap table table-striped table-hover" id="myTable" role="grid" aria-describedby="searchList_info">
                           <thead>
                              <tr role="row">
                                 <th class="sorting_asc " tabindex="0" aria-controls="searchList" rowspan="1" colspan="1" aria-label=": activate to sort column descending" aria-sort="ascending" style="width: 5px;"></th>
                                 <th class="sorting " tabindex="0" aria-controls="searchList" rowspan="1" colspan="1" aria-label="Student ID: activate to sort column ascending" style="width: 92px;">Date of File</th>
                                 <th class="sorting " tabindex="0" aria-controls="searchList" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 123px;">Type of Leave</th>
                                 <th class="sorting " tabindex="0" aria-controls="searchList" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending" style="width: 69px;">Start of Leave</th>
                                 <th class="sorting " tabindex="0" aria-controls="searchList" rowspan="1" colspan="1" aria-label="Contact: activate to sort column ascending" style="width: 69px;">End of Leave</th>
                                 <th class="sorting " tabindex="0" aria-controls="searchList" rowspan="1" colspan="1" aria-label="Nature of Accident: activate to sort column ascending" style="width: 156px;">Reason of Leave & Vacation</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($leaves as $leave)
                                 <tr>
                                    <td></td>
                                    <td>{{ $leave->dateOfFile }}</td>
                                    <td>{{ $leave->typeOfLeave }}</td>
                                    <td>{{ date('F d, Y', strtotime($leave->dateOfLeaveStart)) }}</td>
                                    <td>{{ date('F d, Y', strtotime($leave->dateOfLeaveEnd)) }}</td>
                                    <td>{{ $leave->reasonOfLeave }}</td>
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

<!-- Modal -->
   <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title"></h4>
            </div>
            <form method="POST" action = "{{ url('teacher/storeleave') }}">
               {{ csrf_field() }}
            <div class="modal-body">
               <div class="card-box">
                  <div class="col-lg-12">
                     <div class="container-fluid panel panel-custom">
                        <div class="row">
                          <center><h4><strong>Teacher Attendance/Leave Information</strong></strong></h4></center>
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px; margin-bottom: 10px;">
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">Type of Employee:</div>
                             <div class="col-lg-8 col-md-8 col-sm-6 col-xs-4"> <strong>Regular</strong></div>
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">Available Vacation Leave:</div>
                             <div class="col-lg-1 col-md-2 col-sm-6 col-xs-4"> <span class="badge badge-success">4</span></div>
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">Available Sick Leave:</div>
                             <div class="col-lg-3 col-md-2 col-sm-6 col-xs-4"> <span class="badge badge-warning">6</span></div>
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">No. of Absent:</div>
                             <div class="col-lg-1 col-md-2 col-sm-6 col-xs-4"> <span class="badge badge-danger">2</span></div>
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">No. of Present:</div>
                             <div class="col-lg-3 col-md-2 col-sm-6 col-xs-4"> <span class="badge badge-primary">130</span></div>
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">No. of Vacation Leave Used:</div>
                             <div class="col-lg-1 col-md-2 col-sm-6 col-xs-4"> <span class="badge badge-info">5</span></div>
                             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">No. of Sick Leave Used:  </div>
                             <div class="col-lg-3 col-md-2 col-sm-6 col-xs-4"> <span class="badge badge-info">1</span></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="panel panel-custom">
                        <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-futbol-o fa-lg"></i> Leave Request Form
                        </div>
                        <div class="panel-body">
                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 m-b-10"><label>Employee Name:</label></div>
                           <div class="col-lg-3 col-md-9 col-sm-7 col-xs-12 m-b-10"><input class="form-control" style="width: 100%;" type="text" name="employeeName"></div>
                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 m-b-10"><label>Employee ID:</label></div>
                           <div class="col-lg-3 col-md-9 col-sm-7 col-xs-12 m-b-10"><input class="form-control" style="width: 100%;" type="text" name="employeeId"></div>
                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 m-b-10"><label>Department:</label></div>
                           <div class="col-lg-3 col-md-9 col-sm-7 col-xs-12 m-b-10"><input class="form-control" style="width: 100%;" type="text" name="department"></div>
                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 m-b-10"><label>Department Head:</label></div>
                           <div class="col-lg-3 col-md-9 col-sm-7 col-xs-12 m-b-10"><input class="form-control" style="width: 100%;" type="text" name="departmentHead"></div>
                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 m-b-10"><label>Type of Leave:</label></div>
                           <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12 m-b-10">
                              <select style="width: 100%;" class="form-control m-b-10" name = "typeOfLeave">
                                 <option value = "Sick">Sick</option>
                                 <option value = "Vacation">Vacation</option>
                                 <option value = "Absence / Personal">Absence / Personal</option>
                                 <option value = "Maternity / Paternity">Maternity / Paternity</option>
                                 <option value = "Leaves w/o Pay">Leaves w/o Pay</option>
                              </select>
                           </div>
                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 m-b-10">Date of Leave:</div>
                           <div class="col-lg-3 col-md-9 col-sm-7 col-xs-12 m-b-10"><input class="form-control" style="width: 100%;" type="date" name="dateOfLeaveStart"></div>
                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 m-b-10">Date of Leave:</div>
                           <div class="col-lg-3 col-md-9 col-sm-7 col-xs-12 m-b-10"><input class="form-control" style="width: 100%;" type="date" name="dateOfLeaveEnd"></div>
                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 m-b-10">Reason of Leave:</div>
                           <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12 m-b-10"> <textarea class="form-control" style=" resize: none; width: 100%; height: 100%;" name = "reasonOfLeave"></textarea></div>
                           @php
                              date_default_timezone_set('Asia/Manila');

                           @endphp
                           <input type = "hidden" name = "dateOfFile" value = "@php echo date('F d, Y'); @endphp">
                           <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                              <button type="submit" class="btn btn-info pull-right">Submit Request</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</form>
@endsection