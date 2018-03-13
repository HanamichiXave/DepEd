<!DOCTYPE html>
<html>
   <head>
      <title>Principal</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png') !!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/custom/css/Principal/P-Mainpage.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/datatables.net/css/jquery.dataTables.min.css') !!}" rel="stylesheet" />
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
      body p {
      margin-bottom: 0;
      font-family: 'serif' !important;
      }
      td {
      font-family: serif;
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
      <div class="container ">
         <br>
         <br>
         <div class="page-header" style="color: #000033">
            <h2><strong>Principal Management</strong></h2>
         </div>
         <ol class="breadcrumb" style="background-color: #D9EDF7">
            <li><a href="{{URL::Route('principal')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
            <li><a href="{{URL::Route('document')}}"> Student Transcript</a></li>
            <li> Transcript</li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
         <div class="col-lg-9">
            <div id="transcript" class="panel panel-default" style="width: 720px;">
               <div class="panel-heading">
                  <div class="table-responsive">
                     <div style="overflow-x:auto;">
                        <table style="table-layout: fixed; width: 670px;">
                           <tr>
                              <td style="width: 120px;"><img src="{!! asset('assets/images/depedlogo.png') !!}" height="120" width="120"></td>
                              <td style="text-align: center; width: 500px;">
                                 <table>
                                    <tr>
                                       <td style="width: 70px; font-size: 10px; text-align: center;">
                                          <p style="font-family: serif;">&nbsp;</p>
                                          <p style="font-family: serif;"></p>
                                          <p style="font-family: serif;"></p>
                                       </td>
                                       <td style="width: 500px; font-size: 15px; text-align: center;">
                                          <p style="font-family: serif;"><b>Republic of the Philippines</b></p>
                                          <p style="font-family: serif;">Department of Education</p>
                                          <p style="font-family: serif;">Division of Ortigas</p>
                                          <p style="font-family: serif; font-size: 18px;">SHULER ORTIGAS UNIVERSITY</p>
                                          <p style="font-family: serif;">Ortigas, Philippines</p>
                                       </td>
                                       <td style="width: 120px;"><img src="{!! asset('assets/images/transcriptlogo.png') !!}" height="120" width="120"></td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                        <table style="table-layout: fixed; width: 685px; border-bottom: solid 1px black;">
                           <tr style="text-align: center;">
                              <td style="font-size: 15px;">SECONDARY STUDENT'S PERMANENT RECORD</td>
                           </tr>
                           <!-- <tr>
                              <td style="border-bottom: solid 1px black;">
                              </td>
                              </tr> -->
                           <tr style="text-align: left;">
                              <td style="font-size: 10px;">
                                 <table style="width: 670px;">
                                    <tr>
                                       <td style="width: 20px;"></td>
                                       <td style="width: 150px;">&nbsp;</td>
                                       <td style="width: 150px;"></td>
                                       <td style="width: 150px;"></td>
                                       <td style="width: 200px;"></td>
                                    </tr>
                                    <tr>
                                       <td style="width: 380px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Name:&nbsp;&nbsp;&nbsp;&nbsp;<b>Juan Dela Cruz Jr.</b></p>
                                          <p style="font-family: serif;">Place of Birth: Province:&nbsp;&nbsp;&nbsp;<b>Nueva Ecija</b></p>
                                          <p style="font-family: serif;">Parent/Guardian:&nbsp;&nbsp;&nbsp;&nbsp;<b>Juan Dela Cruz Sr.</b></p>
                                          <p style="font-family: serif;">Address of Parent/Guardian:&nbsp;&nbsp;<b>Lupao, Nueva Ecija</b></p>
                                          <p style="font-family: serif;">Intermediate of Course completed:&nbsp;&nbsp;&nbsp;&nbsp;<b>Lupao Elem. School</b></p>
                                       </td>
                                       <td style="width: 120px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Date of Birth Year: <b>1996</b></p>
                                          <p style="font-family: serif;">Town:<b>Lupao</b></p>
                                          <p style="font-family: serif;">&nbsp;Occupation:&nbsp;&nbsp;&nbsp;<b>Housekeeper</b></p>
                                          <br>
                                       </td>
                                       <td style="width: 100px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Month: <b>February</b></p>
                                          <br><br>
                                          <p style="font-family: serif;">Year:<b>2007-2008</b></p>
                                       </td>
                                       <td style="width: 150px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Day: <b>16</b></p>
                                          <p style="font-family: serif;">Barrio:<b>Parista</b></p>
                                          <br>
                                          <p style="font-family: serif;">General Average:&nbsp;&nbsp;&nbsp;<b>81.5%</b></p>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                        <table style="table-layout: fixed; width: 685px; border-bottom:2px solid black;">
                           <tr>
                              <td style="width: 200px; font-size: 10px; text-align: left">
                                 <p style="font-family: serif;">Classified as:&nbsp;&nbsp;<b>First Year</b>&nbsp;&nbsp;&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b> 2008-2009</b></p>
                                 <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Shuler Ortigas University</b></p>
                              </td>
                              <td style="width: 200px; font-size: 10px; text-align: left">
                                 <p style="font-family: serif;">Classified as:&nbsp;&nbsp;<b>Second Year</b>&nbsp;&nbsp;&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b> 2009-2010</b></p>
                                 <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Shuler Ortigas University</b></p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <table style=" width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Cur. Year</td>
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Subjects</td>
                                       <td style="width:10px; border-right: 1px solid black; border-bottom: 1px solid black;" colspan="4">Grading Periods</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" > CS Ave.</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" >Act. Taken</td>
                                       <td style="width:3px;"  rowspan="2">Grades Earned</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width: 25px; border-right: solid 1px black;">&nbsp</td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">Filipino</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">81</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">English</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">Math</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">82</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79.9</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">81</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">I</td>
                                       <td style="width:2px; border-right: 1px solid black;">Values</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">82</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">0.4</td>
                                    </tr>
                                 </table>
                                 <table style="width: 340px;">
                                    <tr>
                                       <td style="width: 190px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Total No. of Years in School:&nbsp;&nbsp;<b>7</b></p>
                                          <p style="font-family: serif;">Total Days of School:&nbsp;&nbsp;<b>202</b></p>
                                          <p style="font-family: serif;">Eligible for transfer & admission to:&nbsp;&nbsp;<b>Second Yr</b></p>
                                          <p style="font-family: serif;">Has advance unit in:&nbsp;&nbsp;<b>None</b></p>
                                          <p style="font-family: serif;">Lacks credit in:&nbsp;&nbsp;<b>None</b></p>
                                       </td>
                                       <td style="width:50px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Average:&nbsp;&nbsp;<b>77.28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.2</b></p>
                                          <p style="font-family: serif;">Total Days Present:<b>180</b></p>
                                          <br>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                              <td>
                                 <table style=" width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Cur. Year</td>
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Subjects</td>
                                       <td style="width:10px; border-right: 1px solid black; border-bottom: 1px solid black;" colspan="4">Grading Periods</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" > CS Ave.</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" >Act. Taken</td>
                                       <td style="width:3px;"  rowspan="2" >Grades Earned</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width: 25px; border-right: solid 1px black;">&nbsp</td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Filipino</td>
                                       <td style="width:10px; border-right: 1px solid black;">76</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">English</td>
                                       <td style="width:10px; border-right: 1px solid black;">72</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Math</td>
                                       <td style="width:10px; border-right: 1px solid black;">71</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                       <td style="width:10px; border-right: 1px solid black;">75</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                       <td style="width:10px; border-right: 1px solid black;">75</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                       <td style="width:10px; border-right: 1px solid black;">72</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                       <td style="width:10px; border-right: 1px solid black;">77</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                       <td style="width:10px; border-right: 1px solid black;">76</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Values</td>
                                       <td style="width:10px; border-right: 1px solid black;">76</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;"></td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                 </table>
                                 <table style="width: 340px;">
                                    <tr>
                                       <td style="width: 190px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Total No. of Years in School:&nbsp;&nbsp;<b>7.3</b></p>
                                          <p style="font-family: serif;">Total Days of School:&nbsp;&nbsp;<b>39</b></p>
                                          <p style="font-family: serif;">Eligible for transfer & admission to:&nbsp;&nbsp;<b>Second Yr</b></p>
                                          <p style="font-family: serif;">Has advance unit in:&nbsp;&nbsp;<b>None</b></p>
                                          <p style="font-family: serif;">Lacks credit in:&nbsp;&nbsp;<b>None</b></p>
                                       </td>
                                       <td style="width:50px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Average:&nbsp;&nbsp;<b>___&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</b></p>
                                          <p style="font-family: serif;">Total Days Present:<b>180</b></p>
                                          <br>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                        <table style="table-layout: fixed; width: 685px;border-bottom:2px solid black;">
                          <tr>
                              <td style="width: 200px; font-size: 10px; text-align: left">
                                 <p style="font-family: serif;">Classified as:&nbsp;&nbsp;<b>First Year</b>&nbsp;&nbsp;&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b> 2008-2009</b></p>
                                 <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Shuler Ortigas University</b></p>
                              </td>
                              <td style="width: 200px; font-size: 10px; text-align: left">
                                 <p style="font-family: serif;">Classified as:&nbsp;&nbsp;<b>Second Year</b>&nbsp;&nbsp;&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b> 2010-2011</b></p>
                                 <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Shuler Ortigas University</b></p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <table style=" width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Cur. Year</td>
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Subjects</td>
                                       <td style="width:10px; border-right: 1px solid black; border-bottom: 1px solid black;" colspan="4">Grading Periods</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" > CS Ave.</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" >Act. Taken</td>
                                       <td style="width:3px;"  rowspan="2" >Grades Earned</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width: 25px; border-right: solid 1px black;">&nbsp</td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Filipino</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">81</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">English</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Math</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">82</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79.9</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">81</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">II</td>
                                       <td style="width:2px; border-right: 1px solid black;">Values</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">82</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">0.4</td>
                                    </tr>
                                 </table>
                                 <table style="width: 340px;">
                                    <tr>
                                       <td style="width: 190px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Total No. of Years in School:&nbsp;&nbsp;<b>7</b></p>
                                          <p style="font-family: serif;">Total Days of School:&nbsp;&nbsp;<b>202</b></p>
                                          <p style="font-family: serif;">Eligible for transfer & admission to:&nbsp;&nbsp;<b>Second Yr</b></p>
                                          <p style="font-family: serif;">Has advance unit in:&nbsp;&nbsp;<b>None</b></p>
                                          <p style="font-family: serif;">Lacks credit in:&nbsp;&nbsp;<b>None</b></p>
                                       </td>
                                       <td style="width:50px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Average:&nbsp;&nbsp;<b>77.28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.2</b></p>
                                          <p style="font-family: serif;">Total Days Present:<b>180</b></p>
                                          <br>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                              <td>
                        	<table style=" width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Cur. Year</td>
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Subjects</td>
                                       <td style="width:10px; border-right: 1px solid black; border-bottom: 1px solid black;" colspan="4">Grading Periods</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" > CS Ave.</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" >Act. Taken</td>
                                       <td style="width:3px;"  rowspan="2" >Grades Earned</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width: 25px; border-right: solid 1px black;">&nbsp</td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Filipino</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">76.25</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">English</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">77</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Math</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">76.5</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">76</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">2.0</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78.2</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79.5</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.0</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78.25</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Values</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">75.75</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">0.3</td>
                                    </tr>
                                 </table>
                                 <table style="width: 340px;">
                                    <tr>
                                       <td style="width: 190px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Total No. of Years in School:&nbsp;&nbsp;<b>7</b></p>
                                          <p style="font-family: serif;">Total Days of School:&nbsp;&nbsp;<b>202</b></p>
                                          <p style="font-family: serif;">Eligible for transfer & admission to:&nbsp;&nbsp;<b>Second Yr</b></p>
                                          <p style="font-family: serif;">Has advance unit in:&nbsp;&nbsp;<b>None</b></p>
                                          <p style="font-family: serif;">Lacks credit in:&nbsp;&nbsp;<b>None</b></p>
                                       </td>
                                       <td style="width:50px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Average:&nbsp;&nbsp;<b>77.28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.2</b></p>
                                          <p style="font-family: serif;">Total Days Present:<b>180</b></p>
                                          <br>
                                       </td>
                                    </tr>
                                 </table>
                            	</td>
                            </tr>
                        </table>
                        <table style="table-layout: fixed; width: 685px;">
                           <tr>
                              <td style="width: 200px; font-size: 10px; text-align: left">
                                 <p style="font-family: serif;">Classified as:&nbsp;&nbsp;<b>First Year</b>&nbsp;&nbsp;&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b> 2008-2009</b></p>
                                 <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Shuler Ortigas University</b></p>
                              </td>
                              <td style="width: 200px; font-size: 10px; text-align: left">
                                 <p style="font-family: serif;">Classified as:&nbsp;&nbsp;<b>Second Year</b>&nbsp;&nbsp;&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b> 2009-2010</b></p>
                                 <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Shuler Ortigas University</b></p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <table style=" width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Cur. Year</td>
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Subjects</td>
                                       <td style="width:10px; border-right: 1px solid black; border-bottom: 1px solid black;" colspan="4">Grading Periods</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" > CS Ave.</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" >Act. Taken</td>
                                       <td style="width:3px;"  rowspan="2" >Grades Earned</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width: 25px; border-right: solid 1px black;">&nbsp</td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">Filipino</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">81</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">English</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">Math</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">82</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79.9</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">81</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">IV</td>
                                       <td style="width:2px; border-right: 1px solid black;">Values</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">82</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">0.4</td>
                                    </tr>
                                 </table>
                                 <table style="width: 340px;">
                                    <tr>
                                       <td style="width: 190px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Total No. of Years in School:&nbsp;&nbsp;<b>7</b></p>
                                          <p style="font-family: serif;">Total Days of School:&nbsp;&nbsp;<b>202</b></p>
                                          <p style="font-family: serif;">Eligible for transfer & admission to:&nbsp;&nbsp;<b>Second Yr</b></p>
                                          <p style="font-family: serif;">Has advance unit in:&nbsp;&nbsp;<b>None</b></p>
                                          <p style="font-family: serif;">Lacks credit in:&nbsp;&nbsp;<b>None</b></p>
                                       </td>
                                       <td style="width:50px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Average:&nbsp;&nbsp;<b>77.28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.2</b></p>
                                          <p style="font-family: serif;">Total Days Present:<b>180</b></p>
                                          <br>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                              <td>
                        	<table style=" width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Cur. Year</td>
                                       <td style="width:2px; border-right: 1px solid black;" rowspan="2" >Subjects</td>
                                       <td style="width:10px; border-right: 1px solid black; border-bottom: 1px solid black;" colspan="4">Grading Periods</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" > CS Ave.</td>
                                       <td style="width:3px; border-right: 1px solid black;" rowspan="2" >Act. Taken</td>
                                       <td style="width:3px;"  rowspan="2" >Grades Earned</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width: 25px; border-right: solid 1px black;">&nbsp</td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                       <td style="width: 25px; border-right: solid 1px black;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Filipino</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">76.25</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">English</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">77</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Math</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">76.5</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.5</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">76</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">2.0</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78.2</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;"></td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79.5</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.0</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">79</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">78.25</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">1.2</td>
                                    </tr>
                                    <tr style="border-bottom: solid 1px black;">
                                       <td style="width:30px; border-right: 1px solid black;">III</td>
                                       <td style="width:2px; border-right: 1px solid black;">Values</td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:10px; border-right: 1px solid black;"></td>
                                       <td style="width:3px; border-right: 1px solid black;">75.75</td>
                                       <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                       <td style="width:3px;">0.3</td>
                                    </tr>
                                 </table>
                                 <table style="width: 340px;">
                                    <tr>
                                       <td style="width: 190px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Total No. of Years in School:&nbsp;&nbsp;<b>7</b></p>
                                          <p style="font-family: serif;">Total Days of School:&nbsp;&nbsp;<b>202</b></p>
                                          <p style="font-family: serif;">Eligible for transfer & admission to:&nbsp;&nbsp;<b>Second Yr</b></p>
                                          <p style="font-family: serif;">Has advance unit in:&nbsp;&nbsp;<b>None</b></p>
                                          <p style="font-family: serif;">Lacks credit in:&nbsp;&nbsp;<b>None</b></p>
                                       </td>
                                       <td style="width:50px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Average:&nbsp;&nbsp;<b>77.28&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.2</b></p>
                                          <p style="font-family: serif;">Total Days Present:<b>180</b></p>
                                          <br>
                                       </td>
                                    </tr>
                                 </table>
                            	</td>
                            </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        <div class="col-lg-3">
            <button style="margin-bottom: 3%; width: 180px; height: 50px; font-size: 20px;" onclick="print();" class="col-lg-12 btn btn-success"><i class="fa fa-print"></i> Print Transcript</button>
         </div>
         <!-- end of your code -->
         <!-- footer here -->
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
      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- JS file -->
      <script src="{!! asset('js/Principal/form1373.js') !!}"></script>
      <!-- your custom script -->
      
      <!-- end of your custom script -->
   </body>
</html>