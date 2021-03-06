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
                    <table style="table-layout: fixed; width: 685px;">
                      <tr>
                        <td style="width: 120px;"><img src="{!! asset('assets/images/transcriptlogo.png') !!}" height="120" width="120"></td>
                        <td style="text-align: center; width: 500px;">
                           <b style=" font-size: 30px;">SCHULER ORTIGAS UNIVERSITY</b><br/>
                           <table style="border-bottom: solid 1px black;">
                            <tr>
                              <td style="width: 400px; font-size: 10px; text-align: left">
                                <p style="font-family: serif;">Unit 405 4F Centerpoint Bldg, Ortigas Center, Pasig City</p>
                                <p style="font-family: serif;">- Acredited Level II by FAAP through PAASCU</p>
                                <p style="font-family: serif;">- BS EN ISO 5001: 1994 Certified Cert No. AJA 01/3638</p>
                              </td>
                              <td style="width: 50px; font-size: 10px; text-align: left">
                                <p style="font-family: serif;">Tel No.:</p>
                                <p style="font-family: serif;">Email: </p>
                                <p style="font-family: serif;">Website:</p>
                              </td>
                              <td style="width: 200px; font-size: 10px; text-align: left">
                                <p style="font-family: serif;">477-4052  696-0480</p>
                                <p style="font-family: serif;">info@simplevia.com</p>
                                <p style="font-family: serif;">http://www.simplevia.com/</p>
                              </td>
                            </tr>
                          </table>
                         </td>
                      </tr>
                    </table>
                    <table style="table-layout: fixed; width: 685px; border-bottom: solid 1px black;">
                      <tr style="text-align: center;">
                        <td style="font-size: 15px;">OFFICE OF THE REGISTRAR</td>
                      </tr>
                      <tr style="text-align: center;">
                        <td style="font-size: 15px;">&nbsp;</td>
                      </tr>
                      <tr style="text-align: center;">
                        <td style="font-size: 18px;">TRANSCRIPT OF RECORDS</td>
                      </tr>
                      <tr style="text-align: center;">
                        <td style="font-size: 18px;">
                          <table style="border-bottom: solid 1px black;">
                            <tr>
                              <td style="width: 20px;"></td>
                              <td style="width: 50px; font-size: 15px; text-align: left"><p style="font-family: serif;">Name:&nbsp;</p></td>
                              <td style="width: 240px; font-size: 15px; text-align: left">John Xavier Buenaventura</td>
                              <td style="width: 50px; font-size: 15px; text-align: left"><p style="font-family: serif;">Title/Degree:&nbsp;</p></td>
                              <td style="width: 350px; font-size: 15px; text-align: left"><p style="font-family: serif;">Bachelor of Science in Tourism</p></td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                     <table style="table-layout: fixed; width: 685px; font-size: 12px; text-align: center;">
                      <tr>
                        <td style="width: 20px; border-left: 1px solid black; border-bottom: 1px solid black;" rowspan="2"></td>
                        <td style="width: 100px; border-bottom: 1px solid black; text-align: center;" rowspan="2">TERM</td>
                        <td style="width: 100px; border-bottom: 1px solid black; " rowspan="2">NAME OF COURSE</td>
                        <td style="width: 200px; border-bottom: 1px solid black; " rowspan="2">DESCRIPTION</td>
                        <td style="width: 120px; text-align: center;" colspan="2">GRADE</td>
                        <td style="width: 80px; text-align: center; border-bottom: 1px solid black; border-right: 1px solid black;" rowspan="2">CREDITS</td>
                      </tr>
                      <tr>
                        <td style="width: 60px; text-align: center; border-bottom: 1px solid black;">FINAL</td>
                        <td style="width: 60px; text-align: center; border-bottom: 1px solid black;">RE-EX</td>
                      </tr>
                      <tr>
                        <td colspan="7" style="font-size: 13px;"><b><u>SCHULER ORTIGAS UNIVERSITY</u></b></td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td>1st Semester 2000-2001</td>
                        <td>Management 2</td>
                        <td>Human Resource Development & Management</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>HRM 7</td>
                        <td>Bar Services Management</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>HRM 8</td>
                        <td>Food Merchandising & Sales</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Language 1</td>
                        <td>Foreign Language</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>NAT SCI 1</td>
                        <td>Food Chemistry</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Tourism 2</td>
                        <td>Domestic Tourism</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td colspan="7" style="font-size: 13px;"><b>******</b></td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td>2nd Semester 2000-2001</td>
                        <td>Math 3</td>
                        <td>Math of Investment</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Computer 1</td>
                        <td>Basic Computer Operation</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>HRM 9</td>
                        <td>Inventory Management</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Asian Civilization</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Rizal's Life, Works and Writings</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Language 2</td>
                        <td>Foreign Language</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Finance 1</td>
                        <td>Basic Business Finance</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Humanities 152</td>
                        <td>Ethics</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td colspan="7" style="font-size: 13px;"><b>******</b></td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td>Summer</td>
                        <td>Practicum</td>
                        <td>On The Job Training</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td colspan="7" style="font-size: 13px;"><b>******</b></td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td>1st Semester 2001-2002</td>
                        <td>Computer 2</td>
                        <td>Software Operations</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>HRM 10</td>
                        <td>Financial Management and Cost Control</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>HRM 11</td>
                        <td>Land Resource and Area Development</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Methods of Research</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>HRM 12</td>
                        <td>Facilities Design, Planning and Management</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Humanities 2</td>
                        <td>Ethics</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td colspan="7" style="font-size: 13px;"><b>******</b></td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td>2nd Semester 2001-2002</td>
                        <td>HRM 13</td>
                        <td>Research Issues in Hotel and Restaurant Management</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Practicum 2</td>
                        <td>Travel Industry Practice (On the Job Training)</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr style="font-size: 10px;">
                        <td></td>
                        <td></td>
                        <td>Humanities 2</td>
                        <td>Ethics</td>
                        <td colspan="2">83</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td colspan="7" style="font-size: 13px;"><b>************************************************************************************************</b></td>
                      </tr>
                     </table>
                     <br/>
                     <table style="table-layout: fixed; width: 685px; border: 1px solid black; font-size: 12px;">
                      <tr>
                         <td style="width: 20px;">&nbsp;</td>
                         <td style="width: 150px;"></td>
                         <td></td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 150px;">GRADING SYSTEM:</td>
                         <td></td>
                       </tr>
                       <tr>
                         <td></td>
                         <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.00 96% – 100%, 1.25  94% – 95%, 1.50 92% – 93%, 1.75  89% – 91%, 2.00  87% – 88%, 2.25  84% – 86%, 2.50  82% – 83%, 2.75  79% – 81%, 3.00  75% – 78%, 5.00  Below 75%.</td>
                       </tr>
                       <tr>
                         <td colspan="3">&nbsp;</td>
                       </tr>
                       <tr>
                         <td style="width: 20px;"></td>
                         <td style="width: 150px;" colspan="2">CREDITS:</td>
                       </tr>
                       <tr>
                         <td></td>
                         <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One unit of credit is one hour of lecture or recitation each week for a period of a complete semester. In all courses, two or more laboratory work is regarded is equivalent to one recitation or lecture hour.</td>
                       </tr>
                       <tr>
                         <td colspan="3">&nbsp;</td>
                       </tr>
                     </table>
                     <br/>
                     <table style="table-layout: fixed; width: 685px; font-size: 12px;">
                      <tr style="font-size: 15px;">
                        <td style="width: 90px;">Prepared By:</td>
                        <td style="width: 150px;">Antonio Bravo</td>
                        <td style="width: 90px;">Checked By:</td>
                        <td style="width: 150px; text-align: center;"><u>John Benson Leabres</u></td>
                        <td style="width: 150px; text-align: center;"><u>John Mayson Labuntog</u></td>
                      </tr>
                      <tr style="font-size: 15px;">
                        <td style="width: 90px;"></td>
                        <td style="width: 150px;"></td>
                        <td style="width: 90px;"></td>
                        <td style="width: 200px; text-align: center;">President</td>
                        <td style="width: 200px; text-align: center;">Registrar</td>
                      </tr>
                      <tr style="font-size: 15px;">
                        <td style="width: 90px;">&nbsp;</td>
                        <td style="width: 150px;"></td>
                        <td style="width: 90px;"></td>
                        <td style="width: 200px; text-align: center;"></td>
                        <td style="width: 200px; text-align: center;"></td>
                      </tr>
                      <tr style="font-size: 15px;">
                        <td style="width: 90px;">&nbsp;</td>
                        <td style="width: 150px;"></td>
                        <td style="width: 90px;"></td>
                        <td style="width: 200px; text-align: center;"></td>
                        <td style="width: 200px; text-align: center;"></td>
                      </tr>
                      <tr style="font-size: 15px;">
                        <td colspan="2" rowspan="2" style="text-align: center;"><p>Accounts Verified By:</p><p>(University Seal)</p></td>
                        <td>Jhamila Okla</td>
                        <td colspan="2" rowspan="2" style="text-align: center;"><p><u>Ivan Genesis Aquino</u></p><p>Chairman</p></td>
                      </tr>
                     </table>
                     <br/>
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
      <script src="{!! asset('js/Principal/transcript2.js') !!}"></script>
      <!-- your custom script -->
     

      <!-- end of your custom script -->
   </body>
</html>