@extends('Teacher.teacher-layout')

@section('content')
   <style type="text/css">
      .dataTables_length {
       margin-bottom: 15px;
       margin-top: 5px;
      }

      .add-ls-tbl div{
         margin-bottom: 5px;
      }
      td, th {
         text-align: center;
      }
   </style>
         <div class="page-header" style="color: #000033"><h2><strong>Teacher Management</strong></h2></div>
         <ol class="breadcrumb" style="background-color: #D9EDF7">
           <li><a href="{{URL::Route('teacher')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
           <li>Lesson Plan</li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->

         <div class="row">
            <div class="col-lg-12">
               <div class="panel panel-custom">
                  <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-pencil-square-o fa-lg"></i> Lesson Plan List</div>
                     <div class="panel-body">
                         <div class="row">
                             <div class="col-sm-8">
                                 <div class="form-group contact-search m-b-30">
                                     <input type="text" id="search" class="form-control" style="height: 40px; margin-top: 7px;" placeholder="Search...">
                                 </div>
                             </div>
                             <div class="col-sm-4">
                                 <button type="button" class="btn btn-info" style="height: 40px; margin-top: 7px;" data-toggle="modal" data-target="#addModal" >Add Lesson Plan</button>
                             </div>
                         </div>
                         <form class="table-responsive">
                             <table id="myTable" class="display nowrap table table-hover display" cellspacing="0" width="100%">
                                 <thead>
                                 <tr>
                                     <th style="width: 5%; text-align: center;"></th>
                                     <th style="width: 5%; text-align: center;">Quarter</th>
                                     <th  style="width: 10%; text-align: center;">Date</th>
                                     <th  style="width: 10%; text-align: center;">Subject</th>
                                     <th  style="width: 10%; text-align: center;">Grade Level</th>
                                     <th  style="width: 20%; text-align: center;">Topic</th>
                                     <th  style="width: 20%; text-align: center;">Title</th>
                                     <th  style="width: 10%; text-align: center;">Lesson Duration</th>
                                     <th  style="width: 30%;"></th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 @foreach($lessons as $lesson)
                                     <tr>
                                         <td></td>
                                         <td>{{ $lesson->quarter }}</td>
                                         <td>{{ date("m/d/Y", strtotime($lesson->dateoflesson)) }}</td>
                                         <td>{{ $lesson->subject }}</td>
                                         <td>{{ $lesson->gradelevel }}</td>
                                         <td>{{ $lesson->topic }}</td>
                                         <td>{{ $lesson->title }}</td>
                                         <td>{{ $lesson->duration }}</td>
                                         <td>
                                             <button type="button" class="btn btn-info btn-xs center-block" data-toggle="modal" data-target="#editModal{{ $lesson->id }}" style="width: 60px;">Edit</button>
                                             <button type="button" class="btn btn-danger btn-xs center-block" data-toggle="modal" data-target="#deleteModal{{ $lesson->id }}"  style="width: 60px;">Delete</button>
                                         </td>
                                     </tr>
                                 @endforeach
                                 </tbody>
                             </table>
                         </form>
                     </div>

                  <!-- Modal Add -->
                  <div class="modal fade" id="addModal" role="dialog">
                     <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Lesson Plan</h4>
                           </div>
                           <form action = "{{ url('teacher/storelessonplan') }}" method = "POST">
                              {{ csrf_field() }}
                           <div class="modal-body">
                              <div class="card-box">
                                 <div class="row ">
                                    <div class="col-lg-12"> 
                                       <div class="panel panel-custom">
                                          <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-pencil-square-o fa-lg"></i>Add Lesson Plan</div>
                                             <div class="panel-body"> 
                                                <div class="row add-ls-tbl">
                                                    <div class="col-lg-3 col-md-3">Date of Lesson Plan:</div>
                                                    <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="date" name="dateoflesson"></div>
                                                    <div class="col-lg-3 col-md-3">Time:</div>
                                                    <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="time" name="time"></div>
                                                    <div class="col-lg-3 col-md-3">Subject:</div>
                                                    <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="text" name="subject"></div>
                                                    <div class="col-lg-3 col-md-3">Quarter:</div>
                                                    <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="text" name="quarter"></div>
                                                    <div class="col-lg-3 col-md-3">Topic:</div>
                                                    <div class="col-lg-9 col-md-9"><input style="width: 100%;" class="form-control" type="text" name="topic"></div>
                                                    <div class="col-lg-3 col-md-3">Title:</div>
                                                    <div class="col-lg-9 col-md-9"><input style="width: 100%;" class="form-control" type="text" name="title"></div>
                                                    <div class="col-lg-3 col-md-3">Grade Level:</div>
                                                    <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="text" name="gradelevel"></div>
                                                    <div class="col-lg-3 col-md-3">Lesson Duration:</div>
                                                    <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="text" name="duration"></div>
                                                    <div class="col-lg-12 col-md-12">Lesson Objective:</div>
                                                    <div class="col-lg-12 col-md-12"><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "objective"></textarea></div>
                                                    <div class="col-lg-6 col-md-6">Materials / Equipment:<br/><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "materials"></textarea></div>
                                                    <div class="col-lg-6 col-md-6">References:<br/><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "reference"></textarea></div>
                                                    <div class="col-lg-6 col-md-6">Take Home Tasks:<br/><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "tasks"></textarea></div>
                                                    <div class="col-lg-6 col-md-6">Notes:<br/><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "notes"></textarea></div>
                                                </div>
                                             </div>
                                       </div>      
                                    </div>
                                 </div>
                                 <!-- End of Row-->
                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-success">Save</button>
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                           </form>
                        </div>
                     </div>
                  </div><!--end of modal--> 

                  <!-- Modal Edit -->
                   @foreach($lessons as $lesson)
                  <div class="modal fade" id="editModal{{ $lesson->id  }}" role="dialog">
                     <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Lesson Plan</h4>
                           </div>
                            <form action = "{{ url('teacher/updatelessonplan', $lesson->id) }}" method = "POST">
                                {{ csrf_field() }}
                               <div class="modal-body">
                                  <div class="card-box">
                                     <div class="row">

                                        <div class="col-lg-12">
                                     <div class="panel panel-custom">
                                              <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-pencil-square-o fa-lg"></i>Edit Lesson Plan</div>
                                                 <div class="panel-body">
                                                    <div class="row add-ls-tbl">
                                                        <div class="col-lg-3 col-md-3">Date of Lesson Plan:</div>
                                                        <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="date" name="dateoflesson" value = "{{ date('Y-m-d', strtotime($lesson->dateoflesson)) }}"></div>
                                                        <div class="col-lg-3 col-md-3">Time:</div>
                                                        <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="time" name="time" value = "{{ $lesson->time }}"></div>
                                                        <div class="col-lg-3 col-md-3">Subject:</div>
                                                        <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="text" name="subject" value = "{{ $lesson->subject }}"></div>
                                                        <div class="col-lg-3 col-md-3">Quarter:</div>
                                                        <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="text" name="quarter" value = "{{ $lesson->quarter }}"></div>
                                                        <div class="col-lg-3 col-md-3">Topic:</div>
                                                        <div class="col-lg-9 col-md-9"><input style="width: 100%;" class="form-control" type="text" name="topic" value = "{{ $lesson->topic }}"></div>
                                                        <div class="col-lg-3 col-md-3">Title:</div>
                                                        <div class="col-lg-9 col-md-9"><input style="width: 100%;" class="form-control" type="text" name="title" value = "{{ $lesson->title }}"></div>
                                                        <div class="col-lg-3 col-md-3">Grade Level:</div>
                                                        <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="text" name="gradelevel" value = "{{ $lesson->gradelevel }}"></div>
                                                        <div class="col-lg-3 col-md-3">Lesson Duration:</div>
                                                        <div class="col-lg-3 col-md-3"><input style="width: 100%;" class="form-control" type="text" name="duration" value = "{{ $lesson->duration }}"></div>
                                                        <div class="col-lg-12 col-md-12">Lesson Objective:</div>
                                                        <div class="col-lg-12 col-md-12"><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "objective">{{ $lesson->objective }}</textarea></div>
                                                        <div class="col-lg-6 col-md-6">Materials / Equipment:<br><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "materials">{{ $lesson->materials }}</textarea></div>
                                                        <div class="col-lg-6 col-md-6">References:<br><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "reference">{{ $lesson->reference }}</textarea></div>
                                                        <div class="col-lg-6 col-md-6">Take Home Tasks:<br><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "tasks">{{ $lesson->tasks }}</textarea></div>
                                                        <div class="col-lg-6 col-md-6">Notes:<br><textarea style="width: 100%; height: 100%; resize: none;" class="form-control" name = "notes">{{ $lesson->notes }}</textarea></div>
                                                    </div>
                                                 </div>
                                           </div>
                                        </div>

                                     </div>
                                     <!-- End of Row-->
                                  </div>
                                  <div class="modal-footer">
                                     <button type="submit" class="btn btn-success">Update</button>
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                               </div>
                            </form>
                        </div>
                     </div>
                  </div>
                   @endforeach
                       <!--end of modal-->
                   @foreach($lessons as $lesson)
                  <!-- Modal Delete -->
                  <div class="modal fade" id="deleteModal{{ $lesson->id }}" role="dialog">
                     <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Delete Lesson</h4>
                           </div>
                            <form action = "{{ url('teacher/deletelessonplan', $lesson->id) }}" method = "POST">
                                {{ csrf_field() }}
                               <div class="modal-body">
                                  <div class="card-box">
                                     <div class="row">
                                        <div class="col-lg-12">
                                           <div class="row">
                                              <div class="col-lg-12">
                                                 <h3 style="text-align: center;"><strong>Are you sure you want to delete Lesson Plan?</strong></h3><br/>
                                                 </div>
                                                 <div class="col-lg-12">
                                                 <center>
                                                 <button type="submit" class="btn btn-warning">Delete</button>
                                                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                 </center>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                     <!-- End of Row-->
                                  </div>
                               </div>
                            </form>
                        </div>
                     </div>
                  </div><!--end of modal-->
                   @endforeach
               </div>
            </div>
         </div>
@endsection