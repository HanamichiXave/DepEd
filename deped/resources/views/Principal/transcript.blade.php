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
                    <table style="table-layout: fixed; width: 685px;">
                      <tr>
                        <td width="auto"><img src="{!! asset('assets/images/transcriptlogo.png') !!}" height="120" width="120"></td>
                        <td style="text-align: center; width: 500px;">
                           <b style=" font-size: 25px;">SCHULER UNIVERSITY</b><br/>
                           <b style=" font-size: 10px;">DEPARTMENT OF REGISTRATION AND RECORDS MANAGEMENT</b><br/>
                           <b style=" font-size: 10px;">ORTIGAS, PHILIPPINES</b><br/>
                           <b class="pull-right" style="margin-right: 20px;">C-2004</b><br/><br/>
                           <b style="font-size: 25px;"><b>OFFICIAL TRANSCRIPT OF RECORDS</b></b>
                         </td>
                        <td style="width: auto; font-size: 15px;">
                          <b>DRRM Form 9</b><br/>
                          <b>(REVISED 1999)</b><br/>
                          <b>N&#x1ECD; 023123</b>
                        </td>
                      </tr>
                    </table>
                    <table style="table-layout: fixed; width: 685px; border: 1px solid black; font-size: 12px;">
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;">NAME:&nbsp;<b>JOHN XAVIER BUENAVENTURA</b></td>
                         <td style="width: 100px;">S.N:&nbsp;<b>02012312</b></td>
                         <td style="width: 80px;">SEX:&nbsp;<b>MALE</b></td>
                         <td style="width: 170px;">NATIONALITY:&nbsp;<b>FILIPINO</b></td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;" colspan="4">PERMANENT ADDRESS:&nbsp;<b>UNIT 2F CALIFORNIA GARDEN SQUARE, MANDALUYONG CITY</b></td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;" colspan="4">COLLEGE OF:&nbsp;<b>INFORMATION TECHNOLOGY</b></td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;" colspan="4">ENTRANCE CREDENTIAL:&nbsp;<b>FORM 137A FROM MAKATI HIGH SCHOOL</b></td>
                       </tr>
                       <tr>
                         <td colspan="5">&nbsp;</td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;" colspan="3">PRELIMINARY EDUCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b></b>NAME OF SCHOOL AND ADDRESS</td>
                         <td>Year</td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;" colspan="3">&nbsp;&nbsp;&nbsp;ELEMENTARY: &nbsp;&nbsp;&nbsp;<b>MAKATI ELEMENTARY SCHOOL</b></td>
                         <td><b>2009</b></td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;" colspan="3">&nbsp;&nbsp;&nbsp;HIGH SCHOOL: &nbsp;&nbsp;&nbsp;<b>MAKATI HIGH SCHOOL</b></td>
                         <td><b>2013</b></td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;" colspan="4">DEGREE TITLE: &nbsp;<b>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</b></td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 300px;">DATE OF GRADUATION:&nbsp;<b>JUNE 9,2017</b></td>
                         <td colspan="2">S.O NO.:&nbsp;<b>(B)2-201300544)</b></td>
                         <td>DATED:&nbsp;<b>AUGUST 12, 2017</b></td>
                       </tr>
                     </table>
                     <table style="table-layout: fixed; width: 685px; border: 1px solid black; font-size: 14px;">
                      <tr>
                        <td style="width: 20px; border-bottom: 1px solid black;" rowspan="2"></td>
                        <td style="width: 450px; border-right: 1px solid black; border-bottom: 1px solid black; " rowspan="2">SUBJECT CODE AND NUMBER &nbsp;&nbsp;&nbsp;DESCRIPTION TITLE</td>
                        <td style="width: 120px; border-right: 1px solid black; border-bottom: 1px solid black; text-align: center;" colspan="2">GRADE</td>
                        <td style="width: 80px; text-align: center; border-bottom: 1px solid black;" rowspan="2">CREDITS</td>
                      </tr>
                      <tr>
                        <td style="width: 60px; border-right: 1px solid black;  text-align: center; border-bottom: 1px solid black;">FINAL</td>
                        <td style="width: 60px; border-right: 1px solid black;  text-align: center; border-bottom: 1px solid black;">RE-EX</td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>PE</b></td>
                              <td style="width: 950px; text-align: center;"><b>PHYSICAL EDUCATION</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>1.00</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>NSTP</b></td>
                              <td style="width: 950px; text-align: center;"><b>NATIONAL SERVICE TRAINING PROGRAM</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>1.25</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">&nbsp;</td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b></b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">FIRST SEMESTER S.Y 2013-2014</td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b></b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT101</b></td>
                              <td style="width: 950px; text-align: center;"><b>SOFTWARE ENGINEERING</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.75</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>FIL02</b></td>
                              <td style="width: 950px; text-align: center;"><b>RIZAL</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.50</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT102</b></td>
                              <td style="width: 950px; text-align: center;"><b>DATABASE MANAGEMENT SYSTEMS</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>1.25</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT103</b></td>
                              <td style="width: 950px; text-align: center;"><b>SYSTEM ANALYSIS AND DESIGNS</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>1.25</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT106</b></td>
                              <td style="width: 950px; text-align: center;"><b>DATA COMMUNICATIONS</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>1.75</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT108</b></td>
                              <td style="width: 950px; text-align: center;"><b>WEB DEVELOPMENT</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>1.50</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT1012</b></td>
                              <td style="width: 950px; text-align: center;"><b>TROUBLESHOOTING</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.25</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>ENG103</b></td>
                              <td style="width: 950px; text-align: center;"><b>GAME DEVELOPMENT</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.25</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">&nbsp;</td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b></b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">SECOND SEMESTER S.Y 2013-2014</td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b></b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>FIL02</b></td>
                              <td style="width: 950px; text-align: center;"><b>Descreet mathematics</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.00</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT101</b></td>
                              <td style="width: 950px; text-align: center;"><b>CALCULUS</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>1.00</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>FIL02</b></td>
                              <td style="width: 950px; text-align: center;"><b>AUTOMATA</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.25</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT101</b></td>
                              <td style="width: 950px; text-align: center;"><b>LOGIC AND DESIGN</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.50</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>FIL02</b></td>
                              <td style="width: 950px; text-align: center;"><b>SYSTEM ANALYSIS AND DESIGN II</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.75</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">
                          <table>
                            <tr>
                              <td style="width: 300px; text-align: center;"><b>IT101</b></td>
                              <td style="width: 950px; text-align: center;"><b>REASEARCH IN COMPUTER SCIENCE</b></td>
                            </tr>
                          </table>
                        </td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b>2.00</b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b>1</b></td>
                      </tr>
                      <tr style="font-size: 12px;">
                        <td></td>
                        <td style="border-right: 1px solid">&nbsp;</td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="border-right: 1px solid black;  text-align: center;"><b></b></td>
                        <td style="text-align: center;"><b></b></td>
                      </tr>
                     </table>
                     <table style="table-layout: fixed; width: 685px; border: 1px solid black; font-size: 12px;">
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width:660px;" colspan="2">NOTE: THIS TRANSCRIP IS ONLY VALID WHEN SIGNED AND STAMPED BY THE HEAD OF THE ADMINISTRATION, UNIVERSITY OF SCHULER. </td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td></td>
                         <td></td>
                       </tr> 
                        <tr>
                         <td style="width: 20px;"></td>
                         <td style="width:660px;" colspan="2">FINAL GRADE TOTAL. ____________</td>
                       
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td></td>
                         <td></td>
                       </tr> 
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width:660px;" colspan="2">TOTAL NUMBER OF CREDITS. __________ </td>
                         
                       </tr> 
                       <tr>
                         <td>&nbsp;</td>
                         <td></td>
                         <td></td>
                       </tr> 
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width:660px;" colspan="2">FINAL STATUS. ____________ </td>
                         
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td></td>
                         <td></td>
                       </tr>  
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width:660px;" colspan="2">ISSUED BY. _______________ </td>
                         
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td></td>
                         <td></td>
                       </tr> 
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width:660px;" colspan="2">SIGN BY. ____________________ DATE SIGNED _____________________ </td>
                         
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td></td>
                         <td></td>
                       </tr> 
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width:660px; text-align: right;" colspan="2">APPROVED BY. ________________________ </td>
                         
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td></td>
                         <td></td>
                       </tr>  
                       <tr>
                         <td>&nbsp;</td>
                         <td></td>
                         <td style="width:660px;"></td>
                       </tr>
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
      <script src="{!! asset('js/Principal/transcrip.js') !!}"></script>
      <!-- your custom script -->
    
      <!-- end of your custom script -->
   </body>
</html>