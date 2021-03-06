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
        <div class="page-header" style="color: #000033"><h2><strong>Principal Management</strong></h2></div>
        <ol class="breadcrumb" style="background-color: #D9EDF7">
          <li><a href="../../views/Principal/principal-management.html"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
          <li><a href="../../views/Principal/document.html"> Student Transcript</a></li>
          <li> Transcript</li>
        </ol>
      <!-- your code start here -->
      <!-- Please observe indention -->
      
       <div class="col-lg-10">
        <center>
          <div id="transcript" class="panel panel-default" style="width: 720px;">
            <div class="panel-heading">
              <div class="table-responsive">
                <div style="overflow-x:auto;">
                  <table style="table-layout: fixed; width: 670px;">
                    <tr>
                      <td style="width: 120px;"><img src="{!! asset('assets/images/transcriptlogo.png') !!}" height="120" width="120"></td>
                      <td style="text-align: center; width: 500px;">
                         <table>
                          <tr>
                            <td style="width: 70px; font-size: 10px; text-align: center;">
                              <p style="font-family: serif;">&nbsp;</p>
                              <p style="font-family: serif;"></p>
                              <p style="font-family: serif;"></p>
                            </td>
                            <td style="width: 500px; font-size: 15px; text-align: center;">
                              <p style="font-family: serif;"><b>SCHULER ORTIGAS UNIVERSITY</b></p>
                              <p style="font-family: serif;">DEPARTMENT OF REGISTRATIONS</p>
                              <p style="font-family: serif;">AND RECORDS MANAGEMENT</p>
                              <p style="font-family: serif;">Ortigas, Philippines</p>
                            </td>
                            <td style="width: 200px; font-size: 15px; text-align: center;">
                              <p style="font-family: serif;">SU Form S-No. 2.10</p>
                              <p style="font-family: serif;">(DRRM - Revised November 2010)</p>
                              <p style="font-family: serif;">M 12-No.15712</p>
                            </td>
                          </tr>
                        </table>
                       </td>
                    </tr>
                  </table>
                  <table style="table-layout: fixed; width: 670px; border-bottom: solid 1px black;">
                    <tr style="text-align: center;">
                      <td style="font-size: 15px;">OFFICIAL TRANSCRIPT OF RECORDS</td>
                    </tr>
                    <tr style="text-align: center;">
                      <td style="font-size: 15px;">&nbsp;</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="font-size: 10px;">
                        <table style="border-bottom: solid 1px black; width: 670px;">
                          <tr>
                            <td style="width: 20px;"></td>
                            <td style="width: 150px;">&nbsp;</td>
                            <td style="width: 150px;"></td>
                            <td style="width: 150px;"></td>
                            <td style="width: 200px;"></td>
                          </tr>
                          <tr>
                            <td style="width: 20px;"></td>
                            <td colspan="4">NAME: <b>ANTONIO BRAVO JR.</b></td>
                          </tr>
                          <tr>
                            <td style="width: 20px;"></td>
                            <td style="width: 150px;">SN:&nbsp;&nbsp;<b>20090103176</b></td>
                            <td style="width: 50px;">SEX:&nbsp;&nbsp;<b>Male</b></td>
                            <td style="width: 200px;">NATIONALITY:&nbsp;&nbsp;<b>FILIPINO</b></td>
                            <td style="width: 200px;"></td>
                          </tr>
                          <tr>
                            <td style="width: 20px;"></td>
                            <td colspan="4">COLLEGE:&nbsp;&nbsp;<b>ARTS AND SCIENCES</b></td>
                          </tr>
                          <tr>
                            <td style="width: 20px;"></td>
                            <td colspan="4">COURSE:&nbsp;&nbsp;<b>BACHELOR OF SCIENCE IN HOTEL AND RESTAURANT MANAGEMENT</b></td>
                          </tr>
                          <tr>
                            <td style="width: 20px;"></td>
                            <td colspan="4">ENTRANCE CREDENTIAL:&nbsp;&nbsp;<b>FORM 137A FROM CENTRAL LUZON STATE UNIVERSITY</b></td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                   <table style="table-layout: fixed; width: 670px; font-size: 10px; text-align: left;">
                    <tr>
                      <td style="width: 20px;"></td>
                      <td style="width: 150px;">GRADING SYSTEM</td>
                      <td style="width: 100px;"></td>
                      <td style="width: 200px;"></td>
                      <td style="width: 80px;"></td>
                      <td style="width: 120px;"></td>
                    </tr>
                    <tr>
                      <td style="width: 20px;"></td>
                      <td colspan="4">
                        <table>
                          <td>
                            <table style="text-align: center;">
                              <tr>
                                <td style="width: 80px;"></td>
                                <td style="width: 80px;"></td>
                                <td style="width: 50px;">Letter</td>
                                <td style="width: 100px;"></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>Number</u></td>
                                <td style="width: 80px;"><u>Percent</u></td>
                                <td style="width: 50px;"><u>Grade</u></td>
                                <td style="width: 100px;"><u>Descriptive</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.00</u></td>
                                <td style="width: 80px;"><u>98-100</u></td>
                                <td style="width: 50px;"><u>A+</u></td>
                                <td style="width: 100px;"><u>Excellent</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.25</u></td>
                                <td style="width: 80px;"><u>95-97</u></td>
                                <td style="width: 50px;"><u>A</u></td>
                                <td style="width: 100px;"><u>Excellent</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.50</u></td>
                                <td style="width: 80px;"><u>92-94</u></td>
                                <td style="width: 50px;"><u>A-</u></td>
                                <td style="width: 100px;"><u>Very Good</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.75</u></td>
                                <td style="width: 80px;"><u>89-91</u></td>
                                <td style="width: 50px;"><u>B+</u></td>
                                <td style="width: 100px;"><u>Very Good</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>2.00</u></td>
                                <td style="width: 80px;"><u>86-88</u></td>
                                <td style="width: 50px;"><u>B</u></td>
                                <td style="width: 100px;"><u>Good</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>2.25</u></td>
                                <td style="width: 80px;"><u>83-85</u></td>
                                <td style="width: 50px;"><u>B-</u></td>
                                <td style="width: 100px;"><u>Good</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>2.50</u></td>
                                <td style="width: 80px;"><u>80-82</u></td>
                                <td style="width: 50px;"><u>C+</u></td>
                                <td style="width: 100px;"><u>Fair</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>2.75</u></td>
                                <td style="width: 80px;"><u>77-79</u></td>
                                <td style="width: 50px;"><u>C</u></td>
                                <td style="width: 100px;"><u>Passed</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>3.00</u></td>
                                <td style="width: 80px;"><u>75-76</u></td>
                                <td style="width: 50px;"><u>C-</u></td>
                                <td style="width: 100px;"><u>Passed</u></td>
                              </tr>
                            </table>
                          </td>
                          <td>
                            <table style="text-align: center;">
                              <tr>
                                <td style="width: 80px;">Number</td>
                                <td style="width: 80px;"></td>
                                <td style="width: 50px;">Letter</td>
                                <td style="width: 100px;"></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>/Code</u></td>
                                <td style="width: 80px;"><u>Percent</u></td>
                                <td style="width: 50px;"><u>Grade</u></td>
                                <td style="width: 100px;"><u>Descriptive</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>4.00</u></td>
                                <td style="width: 80px;"><u>70-74</u></td>
                                <td style="width: 50px;"><u>D-</u></td>
                                <td style="width: 100px;"><u>Conditioned</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>5.00</u></td>
                                <td style="width: 80px;"><u>Below</u></td>
                                <td style="width: 50px;"><u>F</u></td>
                                <td style="width: 100px;"><u>Failed</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.00</u></td>
                                <td style="width: 80px;" colspan="3"><u>Officially Dropped</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.00</u></td>
                                <td style="width: 80px;" colspan="3"><u>Unofficially Dropped</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.00</u></td>
                                <td style="width: 80px;" colspan="3"><u>Lacks Final Examination</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.00</u></td>
                                <td style="width: 80px;" colspan="3"><u>Lacks Final Requirements</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.00</u></td>
                                <td style="width: 80px;" colspan="3"><u>Leave of Absence</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.00</u></td>
                                <td style="width: 80px;" colspan="3"><u>Enrolled not Attendance</u></td>
                              </tr>
                              <tr>
                                <td style="width: 80px;"><u>1.00</u></td>
                                <td style="width: 80px;" colspan="3"><u>In Progress</u></td>
                              </tr>
                            </table>
                          </td>
                        </table>
                      </td>
                      <td rowspan="3"><img src="{!! asset('assets/images/Teacher/Bravo.jpg') !!}" style="width: 115px; height: 150px; padding: 3px; border: solid 1px black;"><p style="text-align: center;">Not valid without University dry seal and student's picture.</p></td>
                    </tr>
                    <tr>
                      <td style="width: 20px;"></td>
                      <td style="width: 150px;" colspan="4">
                        <tr>
                          <td colspan="5">
                            <table>
                              <tr>
                                <td style="width: 20px;"></td>
                                <td><p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One unit of credit is one hour of lecture or recitation each week for a period of a complete semester. In all courses, two or more laboratory work is regarded is equivalent to one recitation or lecture hour.</p></td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="7" style="font-size: 13px;"></td>
                    </tr>
                   </table>
                   <table id="header" style="table-layout: fixed; width: 670px; border: 1px solid black; font-size: 10px;">
                    <tr>
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;"></td>
                      <td style="width: 380px;"></td>
                      <td style="width: 50px;"></td>
                      <td style="width: 50px;"></td>
                      <td style="width: 60px;"></td>
                    </tr>
                    <tr>
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;"></td>
                      <td style="width: 380px;"></td>
                      <td style="width: 50px; text-align: center; border-right: solid 1px black;" colspan="2">GRADE</td>
                      <td style="width: 60px;"></td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">SUBJECT CODE</td>
                      <td style="width: 380px;">DESCRIPTIVE TITLE</td>
                      <td style="width: 50px; text-align: center;">FINAL</td>
                      <td style="width: 50px; text-align: center; border-right: solid 1px black;">RE-EX</td>
                      <td style="width: 60px; text-align: center;">CREDITS</td>
                    </tr>
                   </table>
                   <table id="content" style="table-layout: fixed; width: 670px; border-bottom: solid 1px black; font-size: 10px;">
                    <tr>
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;"></td>
                      <td style="width: 380px;"></td>
                      <td style="width: 50px;"></td>
                      <td style="width: 50px;"></td>
                      <td style="width: 60px;"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="2"><b>FIRST SEMESTER 2009-2010</b></td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">EN 111</td>
                      <td style="width: 380px;">Communication and Study Skills in English Across Discipines</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">FI 101</td>
                      <td style="width: 380px;">Sining ng Komunikasyon</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">HRM 101</td>
                      <td style="width: 380px;">Introduction to HRM</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">HRM 102</td>
                      <td style="width: 380px;">Principles of Safety Hygiene and Sanitation</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">NS 104A</td>
                      <td style="width: 380px;">Environmental Science</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">PSY 101</td>
                      <td style="width: 380px;">General Psychology</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="2"><b>SECOND SEMESTER 2009-2010</b></td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">B1 401A</td>
                      <td style="width: 380px;">Food Microbiology & Parasitology</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">EN 112</td>
                      <td style="width: 380px;">College Reading and Writings</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">FI 112</td>
                      <td style="width: 380px;">Pagbasa at Pagsulat sa Iba't-Ibang Displina</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">HRM 121</td>
                      <td style="width: 380px;">Culinary Arts and Science</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">HRM 211</td>
                      <td style="width: 380px;">House Keeping Procedures</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">PSY 208</td>
                      <td style="width: 380px;">Human Behaviour in Organizations</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">NTC1</td>
                      <td style="width: 380px;">Civic Welfare Training Service 1</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="2"><b>FIRST SEMESTER 2010-2011</b></td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">HRM 301</td>
                      <td style="width: 380px;">Front Office Management</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">HRM 312</td>
                      <td style="width: 380px;">Asian Cuisine 1 and 2</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">MA 101B</td>
                      <td style="width: 380px;">College Algebra with Business Application</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr style="text-align: left;">
                      <td style="width: 20px;"></td>
                      <td style="width: 110px;">MGE 101</td>
                      <td style="width: 380px;">Fundamentals of Management</td>
                      <td style="width: 50px; text-align: center;">2.50</td>
                      <td style="width: 50px; text-align: center;"></td>
                      <td style="width: 60px; text-align: center;">3</td>
                    </tr>
                    <tr>
                      <td style="width: 20px;">&nbsp;</td>
                      <td style="width: 110px;"></td>
                      <td style="width: 380px;"></td>
                      <td style="width: 50px;"></td>
                      <td style="width: 50px;"></td>
                      <td style="width: 60px;"></td>
                    </tr>
                   </table>

                   <table style="table-layout: fixed; width: 670px; font-size: 12px;">
                    <tr>
                      <td style="width: 75px;" colspan="5">Remarked By:</td>
                    </tr>
                    <tr>
                      <td style="width: 90px;">&nbsp;</td>
                      <td style="width: 150px;"></td>
                      <td style="width: 90px;"></td>
                      <td style="width: 200px; text-align: center;"></td>
                      <td style="width: 200px; text-align: center;"></td>
                    </tr>
                    <tr>
                      <td style="width: 90px;">&nbsp;</td>
                      <td style="width: 150px;"></td>
                      <td style="width: 90px;"></td>
                      <td style="width: 200px; text-align: center;"></td>
                      <td style="width: 200px; text-align: center;"></td>
                    </tr>
                    <tr>
                      <td style="width: 90px; text-align: center;" colspan="5"><u>John Xavier Buenaventura</u></td>
                    </tr>
                    <tr>
                      <td style="width: 90px; text-align: center;" colspan="5">University Registrar</td>
                    </tr>
                    <tr>
                      <td style="width: 90px;">&nbsp;</td>
                      <td style="width: 150px;"></td>
                      <td style="width: 90px;"></td>
                      <td style="width: 200px; text-align: center;"></td>
                      <td style="width: 200px; text-align: center;"></td>
                    </tr>
                    <tr>
                      <td colspan="2" rowspan="2" style="text-align: center;">Prepared By:&nbsp;&nbsp;&nbsp;<b>John Mayson Labuntog</b></td>
                      <td></td>
                      <td colspan="2" rowspan="2" style="text-align: center;">Checked By:&nbsp;&nbsp;&nbsp;<b>John Benson Leabres</b></td>
                    </tr>
                   </table>
                </div>
              </div>
            </div>
         </div>
        </center>
       </div>
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
      <script src="{!! asset('js/Principal/transcript3.js') !!}"></script>
      <!-- your custom script -->
    

      <!-- end of your custom script -->
   </body>
</html>