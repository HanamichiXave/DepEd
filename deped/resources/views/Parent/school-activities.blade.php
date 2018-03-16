@extends('parent.parent-layout')
@section('content')
        <div class="page-header" style="color: #000033"><h2><strong>Parent Management</strong></h2></div>
        <ol class="breadcrumb" style="background-color: #D9EDF7">
           <li><a href="{{URL::Route('parent')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
           <li>School Activities</li>
       </ol>

    <!-- your code start here -->
    <!-- Please observe indention -->
    <div class="row">
          <div class="col-md-12">
            <div class="jumbotron">
                <form action="" method="get" style=" margin-bottom:25px;" class="">
                    <div class="form-group">
                        <label for="browser">Name of child</label>
                        <select name="browser" id="browser" class="form-control" onchange="alert($('#browser option:selected').val())">
                            @foreach( $children as $child)
                                <option id="{{ $child->studentId }}" value="{{ $child->studentId }}">{{ $child->firstName }}</option>
                            @endforeach
                        </select>
                    </div>

                  <button class="btn btn-info">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="{{URL::Route('parentgrades', ['id' => $children[2]->studentId])}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/record.png')!!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Grades</h2>
                      <p class="info">
                             the grade of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="{{URL::Route('parentviewattendance',['id' => 1])}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/reserved.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Attendance</h2>
                      <p class="info">
                             the attendance of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="{{URL::Route('libraryportal')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/library.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Library Activities</h2>
                      <p class="info">
                             the library activities of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="{{URL::Route('parentsubjectschedule', ['id' => 1])}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/classlogo.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Class Schedule</h2>
                      <p class="info">
                             the class schedule of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="{{URL::Route('parentgrades', ['id' => 1])}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/profilelogo.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>My Profile</h2>
                      <p class="info">
                             the profile of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="{{URL::Route('statementofaccount')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/Parent/account.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Statement Account</h2>
                      <p class="info">
                             the statement account of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/Parent/records.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>School Records and Letters</h2>
                      <p class="info">
                             the school records and letters of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/Parent/activiti.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Upcoming Activities</h2>
                      <p class="info">
                             the upcoming activities of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/classresult.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Exam Results and Schedule</h2>
                      <p class="info">
                             the exam result and schedule of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/Parent/assignments.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Assignment(s) and Project(s)</h2>
                      <p class="info">
                             the assignment(s) and aroject(s) of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="{{URL::Route('messagecalendar')}}" >
              <div class="hovereffect">
                  <img class="img-responsive" src="{!! asset('assets/images/memo.png') !!}" height="100" width="100" alt="">
                  <div class="overlay">
                     <h2>Message's &amp; School Calendar</h2>
                      <p class="info">
                             the assignment(s) and aroject(s) of the student for the semester or school year.
                      </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection