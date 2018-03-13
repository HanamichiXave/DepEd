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
      <link href="{!! asset('assets/DataTables/css/jquery.dataTables.min.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
      p {
      margin-bottom: 0;
      font-family: Courier;
      }
      td {
      font-family: Courier;
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
            <li> New</li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
         <div class="col-lg-10">
            <center>
               <div id="transcript" class="panel panel-default" style="width: 720px;">
                  <div class="panel-heading">
                     <div class="table-responsive">
                        <div style="overflow-x:auto;">
                           <table style="table-layout: fixed; width: 685px;">
                              <tr>
                                 <td width="auto"><img src="{!! asset('assets/images/transcriptlogo.png') !!}" height="120" width="125"></td>
                                 <td style="text-align: center; width: 425px;">
                                    <b style=" font-size: 22px; ">Republic of the Philippines</b><br/>
                                    <b style=" font-size: 12px;">Department of Education</b><br/>
                                    <b style=" font-size: 12px;"> Region IV-A CALABARZON</b><br/>
                                    <b style=" font-size: 12px;">DIVISION OF LUCENA CITY</b><br/>
                                    <b style=" font-size: 17px;">SCHULER ORTIGAS UNIVERSITY</b><br/>
                                    <b style="font-size: 22px;"><b>OFFICIAL TRANSCRIPT OF RECORDS</b></br>
                                 </td>
                                 <td style="width: auto; font-size: 11px;">
                                    <label>Form 137-A</label>
                                    <table style="width: 155px; border: solid 1px black;">
                                       <tr>
                                          <td style="width: 10px; font-size: 9px; text-align: center;">Copy of this Record send to the Principal of</td>
                                       </tr>
                                       <tr>
                                          <td style="width: 10px; font-size: 9px; text-align: center;">adgdfahsdfsfsfsadghas</td>
                                       </tr>
                                       <tr>
                                          <td style="width: 10px; font-size: 10px; text-align: center;"><b>Principal</b></td>
                                       </tr>
                                       <tr>
                                          <td>&nbsp;</td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                           <table style="table-layout: fixed; width: 714px; font-size: 12px; border-bottom: solid 1px black;">
                              <tr>
                                 <td style="width: 24px;"><b>Name:</b> James Fernandez</td>
                                 <td style="width: 13px;"><b>Date of Birth:</b> wddfda</td>
                                 <td style="width: 10px;"><b>Month:</b> January</td>
                                 <td style="width: 6px;"><b>Day:</b> 18</td>
                                 <td style="width: 6px;"><b>Sex:</b> M</td>
                              </tr>
                              <tr>
                                 <td style="width: 25px;"><b>Place of Birth: Province:</b> Nueva Ecija</td>
                                 <td style="width: 15px;" colspan="2"><b>Town:</b> asdfghjklzxcveteygryhrdyherhbnm</td>
                                 <td style="width: 15px;" colspan="2"><b>Tel:</b> 00927263898</td>
                              </tr>
                              <tr>
                                 <td style="width: 20px;" colspan="2"><b>Parent or Guardian:</b> Raul A. Fernandez jr.</td>
                                 <td style="width: 20px;" colspan="3"><b>Occupation:</b> Driver</td>
                              </tr>
                              <tr>
                                 <td style="width: 20px;" colspan="5"><b>Address of Parent or Guardian:</b> Puncan Carranglan Nueva Ecija</td>
                              </tr>
                              <tr>
                                 <td style="width: 20px;" colspan="2"><b>Intermediate Course Completed:</b> srrggrrdtfy</td>
                                 <td style="width: 20px;"><b>Year:</b> gfyg </td>
                                 <td style="width: 20px;" colspan="2"><b>GEN. AVE.</b> ghrggg</td>
                              </tr>
                              <tr>
                                 <td style="width: 20px;" colspan="5"><b>Total number of years to complete Elementary Course:</b> fhgdfdgfgfhgu</td>
                              </tr>
                           </table>
                           <table style="table-layout: fixed; width: 685px; font-size: 12px; border-bottom: solid 1px black;">
                              <tr>
                                 <td style="width: 200px;"><b>Classified as First Year</b></td>
                                 <td style="width: 200px;"><b>School</b></td>
                                 <td style="width: 200px;" colspan="3"><b>School Year</b></td>
                              </tr>
                           </table>
                           <table style="table-layout: fixed; width: 685px; border: 1px solid black;">
                           <tr style="border-bottom: solid 1px black;">
                              <td style="width: 96px; font-size: 10px; text-align: center; border-right: 1px solid black;" rowspan="2"><b>Curriculum Year</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Subject</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" colspan="4"><b>Periodic Ratings</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Final Rating</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Action Taken</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Credit Earned</b></td>
                              <td style="width: 100px; font-size: 10px; text-align: center;" rowspan="2"><b>Remarks</b></td>
                           </tr>
                           <tr style="border-bottom: solid 1px black;">
                              <td style="width: 30px; border-right: solid 1px black; font-size: 10px; text-align: center;">1</td>
                              <td style="width: 30px; border-right: solid 1px black; font-size: 10px; text-align: center;">2</td>
                              <td style="width: 30px; border-right: solid 1px black; font-size: 10px; text-align: center;">3</td>
                              <td style="width: 30px; font-size: 10px; text-align: center;">4</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">1</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Filipino</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black;text-align: center;">2</td>
                              <td style="width:2px; border-right: 1px solid black;text-align: center;">English</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">3</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Mathematics</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">4</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Science and Technology</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center; text-align: center;">5</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center; text-align: center;">MAKABAYAN</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">6</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Araling Panlipunan</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">TEPP(THE)</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;  text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">7</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">MSEPP(PEHM)</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;  text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">8</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">EP</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;  text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">9</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Christian Living</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">10</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Homeroom</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">11</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Conduct</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">12</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">TEPP</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <table style="table-layout: fixed; width: 685px; border: 1px solid black;">
                           <tr style="border-bottom: solid 1px black;">
                              <td style="width: 50px; font-size: 10px; text-align: center; border-right: 1px solid black;"><b></b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JUNE</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JULY</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>AUG.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>SEPT.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>OCT.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>NOV.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>DEC.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JAN.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>FEB.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>MAR.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>TOTAL</b></td>
                              <td style="width: 50px; font-size: 10px; text-align: center;"><b>Gen. Ave.</b></td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">Days of School</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; text-align: center;"></td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">Days of Present</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; text-align: center;">Adviser</td>
                           </tr>
                           <table style="table-layout: fixed; width: 714px; font-size: 12px; border-bottom: solid 1px black;">
                              <tr>
                                 <td style="width: 24px;"><b>Has advanced units in:</b> </td>
                              </tr>
                              <tr>
                                 <td style="width: 24px;"><b>Lacks units in:</b> </td>
                              </tr>
                           </table>
                           <table style="table-layout: fixed; width: 685px; font-size: 12px; border-bottom: solid 1px black;">
                              <tr>
                                 <td style="width: 200px;"><b>Classified as Second Year</b></td>
                                 <td style="width: 200px;"><b>School</b></td>
                                 <td style="width: 200px;" colspan="3"><b>School Year</b></td>
                              </tr>
                           </table>
                           <table style="table-layout: fixed; width: 685px; border: 1px solid black;">
                           <tr style="border-bottom: solid 1px black;">
                              <td style="width: 96px; font-size: 10px; text-align: center; border-right: 1px solid black;" rowspan="2"><b>Curriculum Year</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Subject</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" colspan="4"><b>Periodic Ratings</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Final Rating</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Action Taken</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Credit Earned</b></td>
                              <td style="width: 100px; font-size: 10px; text-align: center;" rowspan="2"><b>Remarks</b></td>
                           </tr>
                           <tr style="border-bottom: solid 1px black;">
                              <td style="width: 25px; border-right: solid 1px black; font-size: 10px; text-align: center;">1</td>
                              <td style="width: 25px; border-right: solid 1px black; font-size: 10px; text-align: center;">2</td>
                              <td style="width: 25px; border-right: solid 1px black; font-size: 10px; text-align: center;">3</td>
                              <td style="width: 25px;  font-size: 10px; text-align: center;">4</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">1</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Filipino</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black;text-align: center;">2</td>
                              <td style="width:2px; border-right: 1px solid black;text-align: center;">English</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">3</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Mathematics</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">4</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Science and Technology</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;  text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center; text-align: center;">5</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center; text-align: center;">MAKABAYAN</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">6</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Araling Panlipunan</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">TEPP(THE)</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;  text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">7</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">MSEPP(PEHM)</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;  text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">8</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">EP</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;  text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">9</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Christian Living</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;  text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">10</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Homeroom</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">11</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Conduct</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">12</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">TEPP</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <table style="table-layout: fixed; width: 685px; border: 1px solid black;">
                           <tr style="border-bottom: solid 1px black;">
                              <td style="width: 50px; font-size: 10px; text-align: center; border-right: 1px solid black;"><b></b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JUNE</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JULY</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>AUG.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>SEPT.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>OCT.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>NOV.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>DEC.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JAN.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>FEB.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>MAR.</b></td>
                              <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>TOTAL</b></td>
                              <td style="width: 50px; font-size: 10px;text-align: center;"><b>Gen. Ave.</b></td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">Days of School</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; text-align: center;"></td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">Days of Present</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                              <td style="width:3px; text-align: center;">Adviser</td>
                           </tr>
                           <table style="table-layout: fixed; width: 714px; font-size: 12px; border-bottom: solid 1px black;">
                              <tr>
                                 <td style="width: 24px;"><b>Has advanced units in:</b> </td>
                              </tr>
                              <tr>
                                 <td style="width: 24px;"><b>Lacks units in:</b> </td>
                              </tr>
                           </table>
                           <table style="table-layout: fixed; width: 685px; font-size: 12px; border-bottom: solid 1px black;">
                              <tr>
                                 <td style="width: 200px;"><b>Classified as Second Year</b></td>
                                 <td style="width: 200px;"><b>School</b></td>
                                 <td style="width: 200px;" colspan="3"><b>School Year</b></td>
                              </tr>
                           </table>
                           <table style="table-layout: fixed; width: 685px; border: 1px solid black;">
                           <tr style="border-bottom: solid 1px black;">
                              <td style="width: 96px; font-size: 10px; text-align: center; border-right: 1px solid black;" rowspan="2"><b>Curriculum Year</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Subject</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" colspan="4"><b>Periodic Ratings</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Final Rating</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Action Taken</b></td>
                              <td style="width: 96px; font-size: 10px; border-right: 1px solid black; text-align: center;" rowspan="2"><b>Credit Earned</b></td>
                              <td style="width: 100px; font-size: 10px; text-align: center;" rowspan="2"><b>Remarks</b></td>
                           </tr>
                           <tr style="border-bottom: solid 1px black;">
                              <td style="width: 25px; border-right: solid 1px black; font-size: 10px; text-align: center;">1</td>
                              <td style="width: 25px; border-right: solid 1px black; font-size: 10px; text-align: center;">2</td>
                              <td style="width: 25px; border-right: solid 1px black; font-size: 10px; text-align: center;">3</td>
                              <td style="width: 25px; font-size: 10px; text-align: center;">4</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">1</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Filipino</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black;text-align: center;">2</td>
                              <td style="width:2px; border-right: 1px solid black;text-align: center;">English</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black;text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black;text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">3</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Mathematics</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">4</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Science and Technology</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center; text-align: center;">5</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center; text-align: center;">MAKABAYAN</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center; text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">6</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Araling Panlipunan</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">TEPP(THE)</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">7</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">MSEPP(PEHM)</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">8</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">EP</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">9</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Christian Living</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">10</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Homeroom</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">11</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">Conduct</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <tr style="border-bottom: solid 1px black; font-size: 11px;">
                              <td style="width:30px; border-right: 1px solid black; text-align: center;">12</td>
                              <td style="width:2px; border-right: 1px solid black; text-align: center;">TEPP</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">77</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">80</td>
                              <td style="width:10px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">81</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">Passed</td>
                              <td style="width:3px; border-right: 1px solid black; text-align: center;">1.5</td>
                              <td style="width:3px;text-align: center;">1.5</td>
                           </tr>
                           <table style="table-layout: fixed; width: 685px; border: 1px solid black;">
                              <tr style="border-bottom: solid 1px black;">
                                 <td style="width: 50px; font-size: 10px; text-align: center; border-right: 1px solid black;"><b></b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JUNE</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JULY</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>AUG.</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>SEPT.</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>OCT.</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>NOV.</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>DEC.</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>JAN.</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>FEB.</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>MAR.</b></td>
                                 <td style="width: 50px; font-size: 10px; border-right: 1px solid black; text-align: center;"><b>TOTAL</b></td>
                                 <td style="width: 50px; font-size: 10px;text-align: center;"><b>Gen. Ave.</b></td>
                              </tr>
                              <tr style="border-bottom: solid 1px black; font-size: 11px;">
                                 <td style="width:30px; border-right: 1px solid black; text-align: center;">Days of School</td>
                                 <td style="width:2px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px;text-align: center;"></td>
                              </tr>
                              <tr style="border-bottom: solid 1px black; font-size: 11px;">
                                 <td style="width:30px; border-right: 1px solid black; text-align: center;">Days of Present</td>
                                 <td style="width:2px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:10px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px; border-right: 1px solid black; text-align: center;"></td>
                                 <td style="width:3px;text-align: center;">Adviser</td>
                              </tr>
                              <table style="table-layout: fixed; width: 685px; font-size: 12px;">
                                 <tr>
                                    <td style="width: 24px;"><b>Has advanced units in:</b> </td>
                                 </tr>
                                 <tr>
                                    <td style="width: 24px;"><b>Lacks units in:</b> </td>
                                 </tr>
                              </table>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </center>
         </div>
         <div id="editor"></div>
         <div class="col-lg-2">
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
      <script src="{!! asset('js/Principal/form1372.js') !!}"></script>
      <!-- your custom script -->
      
      <!-- end of your custom script -->
   </body>
</html>