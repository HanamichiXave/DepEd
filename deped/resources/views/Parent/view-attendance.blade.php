@extends('parent.parent-layout')
@php $child = $child[0] @endphp
@section('content')
         <div class="page-header" style="color: #000033">
            <h2><strong>Parent Management</strong></h2>
         </div>
        <ol class="breadcrumb" style="background-color: #D9EDF7">
           <li><a href="{{URL::Route('parent')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
           <li><a href="{{URL::Route('schoolactivities')}}">School Activities</a></li>
           <li>Student Attendance</li>
        </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
         <section>
          <div class="row total">
              <div class="panel">
                  <div class="panel-body">
                      <div>
                          <h4>Student: &emsp;&emsp;{{ $child->firstName }} {{ $child->middleName }} {{ $child->lastName }}</h4>
                          <h4>Present: &emsp;&emsp;{{ count($gates) }}</h4>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
            @for($m = date('m'); $m <= 12 ; $m++)
                    @php $firstday = getdate(mktime(0,0,0,$m,1,$year)); $first_week_day = $firstday["wday"]; $col = 2; @endphp
                    @while (($today <= 32) && ($cont))
                        @php $firstday = getdate(mktime(0,0,0,$m,$today,$year)); @endphp
                        @if ($firstday["mon"] != $m)
                            @php $lastday = $today - 1; $cont = false; @endphp
                        @endif
                        @php $today++ @endphp
                    @endwhile

                  <div class="col-md-{{ 12 / $col }} col-sm-6" style="overflow: hidden">
                    <div class="col-lg-12 card-box">
                      <div class="row month"><h4 align="center">{{ date('F', mktime(0,0,0,$m))  }}</h4></div> <!-- end row-->
                      <div class="table responsive">
                        <table class="table mails m-0 table-actions-bar">
                          <thead>
                            <th style="text-align: center">S</th><th style="text-align: center">M</th><th style="text-align: center">T</th><th style="text-align: center">W</th><th style="text-align: center">T</th><th style="text-align: center">F</th><th style="text-align: center">S</th>
                          </thead>
                          <tbody>
                          @php $day = 1; $wday = $first_week_day;  $firstweek = true; @endphp
                              @while ( $day <= $lastday)
                                  @if ($firstweek)
                                      <tr align=left>
                                      @for ($i=1; $i<=$first_week_day; $i++) <td> </td> @endfor
                                      @php $firstweek = false @endphp
                                  @endif
                                  @if ($wday==0) <tr align=left> @endif
                                  <td class="
                                  @foreach($gates as $gate)
                                    @php $aMonth = date('m', strtotime($gate->dateIn)) + 0;  $aDay = date('d', strtotime($gate->dateIn)) + 0; @endphp
                                    @if($m == $aMonth)
                                      @if($day !== $aDay && $day <= date('d'))
                                          {{ 'absent' }}
                                      @elseif($day == $aDay)
                                          {{ 'present' }}
                                      @endif
                                    @endif
                                  @endforeach
                                  ">{{ $day }}</td>
                                  @if ($wday==6) </tr> @endif
                                @php
                                  $wday++; $wday = $wday % 7; $day++; @endphp
                              @endwhile
                              @while($wday <=6 ) @php $wday++ @endphp @endwhile
                              {!! '</tr>' !!}
                          </tbody>
                        </table>
                      </div> <!-- end table responsive-->
                    </div> <!-- end cardbox-->
                  </div> <!-- end col-lg-3-->
                  @if($count % $col== 0) </div><div class="row"> @endif
                 @php $count++ @endphp
              @endfor
          </div> <!-- end row-->
        </section>
@endsection