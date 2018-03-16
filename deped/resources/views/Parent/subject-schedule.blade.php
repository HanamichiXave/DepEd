@extends('parent.parent-layout') @php $section = $classes[0]->label; $gradeLevel = $grades[0]->label @endphp
@section('content')
<style>
    .table{
        background-color: #fff;
    }
    .notop {
        border-top: 0px solid #ddd!important;
        text-align: left!important;
    }
    .tdwidth1 {
        width:  60%;
    }
    .tdwidth {
        width: 25%;
    }
    .nav-pills{
        background-color: #fff;
    }
    .tab-content{
        background-color: #fff;
        border: 1px solid #ccc;
    }
    .nav-pills .active a{
        border-radius: 0;
    }
    @media screen and (max-width: 438px) {
        .tdwidth {
            width: 30%;
        }
        }
        .tabwidth {
            width: 20%;
        }
    @media screen and (max-width: 768px){
        .tabwidth {
            width: auto;
        }
    }
    th {
        background-color: #85ADDE;
        color: #FFFFFF;
    }
    .table {
        margin-bottom: 0px!important;
    }
</style>
 <div class="page-header" style="color: #000033">
    <h2><strong>Parent Management</strong></h2>
 </div>
 <ol class="breadcrumb" style="background-color: #D9EDF7">
   <li><a href="{{URL::Route('parent')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
   <li><a href="{{URL::Route('schoolactivities')}}">School Activities</a></li>
   <li>Subject Schedule</li>
 </ol>
<div class="row">
  <div class="col-lg-12">
    <div class="col-md-6 col-lg-6">
      <div class="colg-12">
        <table class="table">
         <tbody>
           <tr>
              <td class="notop tdwidth"><strong>Grade:</strong></th>
              <td class="notop tdwidth1"><label class="control-label">
                      @foreach($grades as $grade)
                            @if(strcmp($gradeLevel, $grade->label) == 0)
                                @php $gradeLevel = $grade->label @endphp
                          @elseif(strcmp($gradeLevel, $grade->label) !== 0)
                                @php $gradeLevel .= " / " .$grade->label @endphp
                          @endif
                      @endforeach
                      {{ $gradeLevel }}
                  </label></td>
           </tr>
           <tr>
              <td class="notop tdwidth"><strong>Section:</strong></th>
              <td class="notop tdwidth1"><label class="control-label">
                      @foreach($classes as $class)
                          @if(strcmp($class->label, $section) == 0)
                              @php $section = $class->label @endphp
                          @elseif(strcmp($class->label, $section) !== 0)
                              @php $section .= " / " .$class->label @endphp
                          @endif
                      @endforeach {{ $section }}</label</td>
           </tr>
           <tr>
              <td class="notop tdwidth"><strong>Class Adviser:</strong></th>
              <td class="notop tdwidth1"><label class="control-label">{{ $adviser[0]->lastName }}, {{ $adviser[0]->firstName }} {{ $adviser[0]->middleName }}</label></td>
           </tr>
         </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-lg-12">
      <br>
    <div class="col-lg-12">
      <ul class="nav nav-justified nav-pills" role="tablist">
        <li role="presentation" class="active tabwidth" ><a href="#monday" aria-controls="home" role="tab" data-toggle="tab">Monday</a></li>
        <li role="presentation" class="tabwidth"><a href="#tuesday" aria-controls="profile" role="tab" data-toggle="tab">Tuesday</a></li>
        <li role="presentation" class="tabwidth"><a href="#wednesday" aria-controls="messages" role="tab" data-toggle="tab">Wednesday</a></li>
        <li role="presentation" class="tabwidth"><a href="#thursday" aria-controls="settings" role="tab" data-toggle="tab">Thursday</a></li>
        <li role="presentation" class="tabwidth"><a href="#friday" aria-controls="settings" role="tab" data-toggle="tab">Friday</a></li>
      </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="monday">
        <div class="table-responsive">
          <table class="table table-hover mails m-0 table table-actions-bar">
            <thead>
              <tr>
                <th class="col-md-3">Room Number/Bldg</th>
                <th class="col-md-3">Subject</th>
                <th class="col-md-3">Time</th>
                <th class="col-md-3">Teacher</th>
              </tr>
            </thead>
            <tbody>
            @foreach($classes as $class)
              @if($class->schedule == 'Monday')
              <tr>
                <td>Rm. {{ $class->roomNumber}} / Bldg. {{$class->Building }}</td>
                <td>{{ $class->subject }}</td>
                <td>{{ $class->timeStart }} - {{ $class->timeEnd }}</td>
                <td>{{ $class->lastName }}, {{ $class->firstName }} {{ $class->middleName }}</td>
              </tr>
              @endif
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="tuesday">
        <div class="table-responsive">
          <table class="table table-hover mails m-0 table table-actions-bar">
            <thead>
              <tr>
                <th class="col-md-3">Room Number/Bldg</th>
                <th class="col-md-3">Subject</th>
                <th class="col-md-3">Time</th>
                <th class="col-md-3">Teacher</th>
              </tr>
            </thead>
            <tbody>
            @foreach($classes as $class)
              @if($class->schedule == 'Tuesday')
              <tr>
                <td>Rm. {{ $class->roomNumber}} / Bldg. {{$class->Building }}</td>
                <td>{{ $class->subject }}</td>
                <td>{{ $class->timeStart }} - {{ $class->timeEnd }}</td>
                <td>{{ $class->lastName }}, {{ $class->firstName }} {{ $class->middleName }}</td>
              </tr>
              @endif
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="wednesday">
        <div class="table-responsive">
          <table class="table table-hover mails m-0 table table-actions-bar">
            <thead>
              <tr>
                <th class="col-md-3">Room Number/Bldg</th>
                <th class="col-md-3">Subject</th>
                <th class="col-md-3">Time</th>
                <th class="col-md-3">Teacher</th>
              </tr>
            </thead>
            <tbody>
                @foreach($classes as $class)
                  @if($class->schedule == 'Wednesday')
                    <tr>
                      <td>Rm. {{ $class->roomNumber}} / Bldg. {{$class->Building }}</td>
                      <td>{{ $class->subject }}</td>
                      <td>{{ $class->timeStart }} - {{ $class->timeEnd }}</td>
                      <td>{{ $class->lastName }}, {{ $class->firstName }} {{ $class->middleName }}</td>
                    </tr>
                    @endIf
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="thursday">
        <div class="table-responsive">
          <table class="table table-hover mails m-0 table table-actions-bar">
            <thead>
              <tr>
                <th class="col-md-3">Room Number/Bldg</th>
                <th class="col-md-3">Subject</th>
                <th class="col-md-3">Time</th>
                <th class="col-md-3">Teacher</th>
              </tr>
            </thead>
            <tbody>
            @foreach($classes as $class)
              @if($class->schedule == 'Thursday')
              <tr>
                <td>Rm. {{ $class->roomNumber}} / Bldg. {{$class->Building }}</td>
                <td>{{ $class->subject }}</td>
                <td>{{ $class->timeStart }} - {{ $class->timeEnd }}</td>
                <td>{{ $class->lastName }}, {{ $class->firstName }} {{ $class->middleName }}</td>
              </tr>
              @endif
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="friday">
        <div class="table-responsive">
          <table class="table table-hover mails m-0 table table-actions-bar">
            <thead>
              <tr>
                <th class="col-md-3">Room Number/Bldg</th>
                <th class="col-md-3">Subject</th>
                <th class="col-md-3">Time</th>
                <th class="col-md-3">Teacher</th>
              </tr>
            </thead>
            <tbody>
            @foreach($classes as $class)
              @if($class->schedule == 'Friday')
              <tr>
                <td>Rm. {{ $class->roomNumber}} / Bldg. {{$class->Building }}</td>
                <td>{{ $class->subject }}</td>
                <td>{{ $class->timeStart }} - {{ $class->timeEnd }}</td>
                <td>{{ $class->lastName }}, {{ $class->firstName }} {{ $class->middleName }}</td>
              </tr>
              @endif
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>
@endsection