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
            <li> Form 137</li>
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
                              <td width="125px"><b>Form 137-A</b></td>
                           <tr>
                              <td style="text-align: center; width: 500px;">
                                 <b style=" font-size: 30px;">SCHULER ORTIGAS UNIVERSITY</b><br/>
                                 <table style="border-bottom: solid 1px black;">
                                    <br>
                                    <tr>
                                       <td style="width: 290px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Name:&nbsp;&nbsp;&nbsp;&nbsp;<b>Juan Dela Cruz Jr.</b></p>
                                          <p style="font-family: serif;">Place of Birth: Province:&nbsp;&nbsp;&nbsp;<b>Nueva Ecija</b></p>
                                          <p style="font-family: serif;">Parent/Guardian:&nbsp;&nbsp;&nbsp;&nbsp;<b>Juan Dela Cruz Sr.</b></p>
                                          <p style="font-family: serif;">Address of Parent/Guardian:&nbsp;&nbsp;<b>Lupao, Nueva Ecija</b></p>
                                          <p style="font-family: serif;">Intermediate of Course completed:&nbsp;&nbsp;&nbsp;&nbsp;<b>Lupao Elem. School</b></p>
                                       </td>
                                       <td style="width: 120px; font-size: 10px; text-align: left">
                                          <p style="font-family: serif;">Date of Birth Year: <b>2001</b></p>
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
                              <!-- <td style="text-align: center; width: 490px;">
                                 <b style=" font-size: 25px;">SCHULER UNIVERSITY</b><br/>
                                 <b style=" font-size: 10px;">DEPARTMENT OF REGISTRATION AND RECORDS MANAGEMENT</b><br/>
                                 <b style=" font-size: 10px;">ORTIGAS, PHILIPPINES</b><br/>
                                 <b class="pull-right" style="margin-right: 20px;">C-2004</b><br/><br/>
                                 <b style="font-size: 25px;"><b>OFFICIAL TRANSCRIPT OF RECORDS</b></b> -->
                           </tr>
                           </td>
                           <!-- <td style="width: auto; font-size: 15px;">
                              <b>DRRM Form 9</b><br/>
                              <b>(REVISED 1999)</b><br/>
                              <b>N&#x1ECD; 023123</b>
                              </td> -->
                           <table style="table-layout: fixed; width: 685px;">
                              <tr>
                                 <td style="width: 200px; font-size: 10px; text-align: left">
                                    <p style="font-family: serif;"><b>First Year</b>&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b> 2008-2009</b></p>
                                    <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Lupao National High School</b></p>
                                 </td>
                                 <td style="width: 200px; font-size: 10px; text-align: left">
                                    <p style="font-family: serif;"><b>Second Year</b>&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b>2009-2010</b></p>
                                    <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Lupao National High School</b></p>
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
                                          <td style="width:3px;"  rowspan="2" >U-Earned</td>
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
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:3px; border-right: 1px solid black;">81</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">I</td>
                                          <td style="width:2px; border-right: 1px solid black;">English</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:3px; border-right: 1px solid black;">78</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">I</td>
                                          <td style="width:2px; border-right: 1px solid black;">Math</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:3px; border-right: 1px solid black;">78</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">I</td>
                                          <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:3px; border-right: 1px solid black;">82</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">I</td>
                                          <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                          <td style="width:10px; border-right: 1px solid black;">79.6</td>
                                          <td style="width:10px; border-right: 1px solid black;">79.6</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">79.9</td>
                                          <td style="width:3px; border-right: 1px solid black;">79.9</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;"></td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">I</td>
                                          <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:3px; border-right: 1px solid black;">81</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">I</td>
                                          <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:3px; border-right: 1px solid black;">79</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">I</td>
                                          <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:3px; border-right: 1px solid black;">79</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">I</td>
                                          <td style="width:2px; border-right: 1px solid black;">Values</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:3px; border-right: 1px solid black;">82</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">0.4</td>
                                       </tr>
                                    </table>
                                    <table style="width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;"></td>
                                          <td style="width:10px; border-right: 1px solid black;">June</td>
                                          <td style="width:10px; border-right: 1px solid black;">July</td>
                                          <td style="width:10px; border-right: 1px solid black;">Aug</td>
                                          <td style="width:10px; border-right: 1px solid black;">Sept</td>
                                          <td style="width:10px; border-right: 1px solid black;">Oct</td>
                                          <td style="width:10px; border-right: 1px solid black;">Nov</td>
                                          <td style="width:10px; border-right: 1px solid black;">Dec</td>
                                          <td style="width:10px; border-right: 1px solid black;">Jan</td>
                                          <td style="width:10px; border-right: 1px solid black;">Feb</td>
                                          <td style="width:10px; border-right: 1px solid black;">Mar</td>
                                          <td style="width:10px; border-right: 1px solid black;">Apr</td>
                                          <td style="width:10px;">Total</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;">Days of School</td>
                                          <td style="width:10px; border-right: 1px solid black;">8</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">23</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">19</td>
                                          <td style="width:10px; border-right: 1px solid black;">15</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">11</td>
                                          <td style="width:10px;">205</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;">Days Present</td>
                                          <td style="width:10px; border-right: 1px solid black;">8</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">23</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">19</td>
                                          <td style="width:10px; border-right: 1px solid black;">15</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">11</td>
                                          <td style="width:10px;">20</td>
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
                                          <td style="width:3px;"  rowspan="2" >U-Earned</td>
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
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:3px; border-right: 1px solid black;">76.25</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">II</td>
                                          <td style="width:2px; border-right: 1px solid black;">English</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:3px; border-right: 1px solid black;">77</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">II</td>
                                          <td style="width:2px; border-right: 1px solid black;">Math</td>
                                          <td style="width:10px; border-right: 1px solid black;">74</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:3px; border-right: 1px solid black;">76.5</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">II</td>
                                          <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:3px; border-right: 1px solid black;">76</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">2.0</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">II</td>
                                          <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                          <td style="width:10px; border-right: 1px solid black;">79.05</td>
                                          <td style="width:10px; border-right: 1px solid black;">76.75</td>
                                          <td style="width:10px; border-right: 1px solid black;">77.5</td>
                                          <td style="width:10px; border-right: 1px solid black;">79.5</td>
                                          <td style="width:3px; border-right: 1px solid black;">78.2</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;"></td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">II</td>
                                          <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:3px; border-right: 1px solid black;">79.5</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.0</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">II</td>
                                          <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:3px; border-right: 1px solid black;">79</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">II</td>
                                          <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:3px; border-right: 1px solid black;">78.25</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">II</td>
                                          <td style="width:2px; border-right: 1px solid black;">Values</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:3px; border-right: 1px solid black;">75.75</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">0.3</td>
                                       </tr>
                                    </table>
                                    <table style="width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;"></td>
                                          <td style="width:10px; border-right: 1px solid black;">June</td>
                                          <td style="width:10px; border-right: 1px solid black;">July</td>
                                          <td style="width:10px; border-right: 1px solid black;">Aug</td>
                                          <td style="width:10px; border-right: 1px solid black;">Sept</td>
                                          <td style="width:10px; border-right: 1px solid black;">Oct</td>
                                          <td style="width:10px; border-right: 1px solid black;">Nov</td>
                                          <td style="width:10px; border-right: 1px solid black;">Dec</td>
                                          <td style="width:10px; border-right: 1px solid black;">Jan</td>
                                          <td style="width:10px; border-right: 1px solid black;">Feb</td>
                                          <td style="width:10px; border-right: 1px solid black;">Mar</td>
                                          <td style="width:10px; border-right: 1px solid black;">Apr</td>
                                          <td style="width:10px;">Total</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;">Days of School</td>
                                          <td style="width:10px; border-right: 1px solid black;">16</td>
                                          <td style="width:10px; border-right: 1px solid black;">23</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">23</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">15</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">19</td>
                                          <td style="width:10px; border-right: 1px solid black;">23</td>
                                          <td style="width:10px; border-right: 1px solid black;">2</td>
                                          <td style="width:10px;">204</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;">Days Present</td>
                                          <td style="width:10px; border-right: 1px solid black;">16</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">18</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">17</td>
                                          <td style="width:10px; border-right: 1px solid black;">18</td>
                                          <td style="width:10px; border-right: 1px solid black;">14</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">19</td>
                                          <td style="width:10px; border-right: 1px solid black;">23</td>
                                          <td style="width:10px; border-right: 1px solid black;">2</td>
                                          <td style="width:10px;">192</td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                           <!-- trial -->
                           <br>
                           <table style="table-layout: fixed; width: 685px;">
                              <tr>
                                 <td style="width: 200px; font-size: 10px; text-align: left">
                                    <p style="font-family: serif;"><b>Third Year</b>&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b> 2010-2011</b></p>
                                    <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Lupao National High School</b></p>
                                 </td>
                                 <td style="width: 200px; font-size: 10px; text-align: left">
                                    <p style="font-family: serif;"><b>Fourth Year</b>&nbsp;&nbsp;School Year : &nbsp;&nbsp;&nbsp;<b>2011-2012</b></p>
                                    <p style="font-family: serif;">School:<b>&nbsp;&nbsp;Lupao National High School</b></p>
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
                                          <td style="width:3px;"  rowspan="2" >U-Earned</td>
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
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:3px; border-right: 1px solid black;">77.5</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">III</td>
                                          <td style="width:2px; border-right: 1px solid black;">English</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:10px; border-right: 1px solid black;">76</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:3px; border-right: 1px solid black;">78</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">III</td>
                                          <td style="width:2px; border-right: 1px solid black;">Math</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">84</td>
                                          <td style="width:10px; border-right: 1px solid black;">86</td>
                                          <td style="width:10px; border-right: 1px solid black;">84</td>
                                          <td style="width:3px; border-right: 1px solid black;">83.5</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">III</td>
                                          <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:3px; border-right: 1px solid black;">80.25</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.8</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">III</td>
                                          <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:3px; border-right: 1px solid black;">79</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;"></td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">III</td>
                                          <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">75</td>
                                          <td style="width:10px; border-right: 1px solid black;">79</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:3px; border-right: 1px solid black;">78.5</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">III</td>
                                          <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                          <td style="width:10px; border-right: 1px solid black;">84</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:3px; border-right: 1px solid black;">81.25</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">III</td>
                                          <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                          <td style="width:10px; border-right: 1px solid black;">81</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:3px; border-right: 1px solid black;">78.75</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">III</td>
                                          <td style="width:2px; border-right: 1px solid black;">EP</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">83</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:3px; border-right: 1px solid black;">80.25</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">0.3</td>
                                       </tr>
                                    </table>
                                    <table style="width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;"></td>
                                          <td style="width:10px; border-right: 1px solid black;">June</td>
                                          <td style="width:10px; border-right: 1px solid black;">July</td>
                                          <td style="width:10px; border-right: 1px solid black;">Aug</td>
                                          <td style="width:10px; border-right: 1px solid black;">Sept</td>
                                          <td style="width:10px; border-right: 1px solid black;">Oct</td>
                                          <td style="width:10px; border-right: 1px solid black;">Nov</td>
                                          <td style="width:10px; border-right: 1px solid black;">Dec</td>
                                          <td style="width:10px; border-right: 1px solid black;">Jan</td>
                                          <td style="width:10px; border-right: 1px solid black;">Feb</td>
                                          <td style="width:10px; border-right: 1px solid black;">Mar</td>
                                          <td style="width:10px; border-right: 1px solid black;">Apr</td>
                                          <td style="width:10px;">Total</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;">Days of School</td>
                                          <td style="width:10px; border-right: 1px solid black;">8</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">23</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">19</td>
                                          <td style="width:10px; border-right: 1px solid black;">15</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">11</td>
                                          <td style="width:10px;">205</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;">Days Present</td>
                                          <td style="width:10px; border-right: 1px solid black;">8</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">23</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">19</td>
                                          <td style="width:10px; border-right: 1px solid black;">15</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">11</td>
                                          <td style="width:10px;">20</td>
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
                                          <td style="width:3px;"  rowspan="2" >U-Earned</td>
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
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">83</td>
                                          <td style="width:3px; border-right: 1px solid black;">80.75</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">IV</td>
                                          <td style="width:2px; border-right: 1px solid black;">English</td>
                                          <td style="width:10px; border-right: 1px solid black;">87</td>
                                          <td style="width:10px; border-right: 1px solid black;">87</td>
                                          <td style="width:10px; border-right: 1px solid black;">90</td>
                                          <td style="width:10px; border-right: 1px solid black;">90</td>
                                          <td style="width:3px; border-right: 1px solid black;">89</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">IV</td>
                                          <td style="width:2px; border-right: 1px solid black;">Math</td>
                                          <td style="width:10px; border-right: 1px solid black;">85</td>
                                          <td style="width:10px; border-right: 1px solid black;">86</td>
                                          <td style="width:10px; border-right: 1px solid black;">85</td>
                                          <td style="width:10px; border-right: 1px solid black;">88</td>
                                          <td style="width:3px; border-right: 1px solid black;">86</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">IV</td>
                                          <td style="width:2px; border-right: 1px solid black;">Sci. & Tech</td>
                                          <td style="width:10px; border-right: 1px solid black;">77</td>
                                          <td style="width:10px; border-right: 1px solid black;">83</td>
                                          <td style="width:10px; border-right: 1px solid black;">85</td>
                                          <td style="width:10px; border-right: 1px solid black;">87</td>
                                          <td style="width:3px; border-right: 1px solid black;">83</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.8</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">IV</td>
                                          <td style="width:2px; border-right: 1px solid black;">Makabayan</td>
                                          <td style="width:10px; border-right: 1px solid black;"83.88</td>
                                          <td style="width:10px; border-right: 1px solid black;">86.55</td>
                                          <td style="width:10px; border-right: 1px solid black;">88.55</td>
                                          <td style="width:10px; border-right: 1px solid black;">81.99</td>
                                          <td style="width:3px; border-right: 1px solid black;">86.35</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;"></td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">IV</td>
                                          <td style="width:2px; border-right: 1px solid black;">A.Panlipunan</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">84</td>
                                          <td style="width:10px; border-right: 1px solid black;">83</td>
                                          <td style="width:3px; border-right: 1px solid black;">81.75</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">IV</td>
                                          <td style="width:2px; border-right: 1px solid black;">T.L.E</td>
                                          <td style="width:10px; border-right: 1px solid black;">94</td>
                                          <td style="width:10px; border-right: 1px solid black;">95</td>
                                          <td style="width:10px; border-right: 1px solid black;">95</td>
                                          <td style="width:10px; border-right: 1px solid black;">90</td>
                                          <td style="width:3px; border-right: 1px solid black;">93.5</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.2</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">IV</td>
                                          <td style="width:2px; border-right: 1px solid black;">Mapeh</td>
                                          <td style="width:10px; border-right: 1px solid black;">78</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">87</td>
                                          <td style="width:10px; border-right: 1px solid black;">89</td>
                                          <td style="width:3px; border-right: 1px solid black;">83.5</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">1.5</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:30px; border-right: 1px solid black;">IV</td>
                                          <td style="width:2px; border-right: 1px solid black;">EP</td>
                                          <td style="width:10px; border-right: 1px solid black;">80</td>
                                          <td style="width:10px; border-right: 1px solid black;">82</td>
                                          <td style="width:10px; border-right: 1px solid black;">83</td>
                                          <td style="width:10px; border-right: 1px solid black;">92</td>
                                          <td style="width:3px; border-right: 1px solid black;">84.75</td>
                                          <td style="width:3px; border-right: 1px solid black;">Passed</td>
                                          <td style="width:3px;">0.6</td>
                                       </tr>
                                    </table>
                                    <table style="width: 340px; border: 1px solid black; font-size: 10px; text-align: center;">
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;"></td>
                                          <td style="width:10px; border-right: 1px solid black;">June</td>
                                          <td style="width:10px; border-right: 1px solid black;">July</td>
                                          <td style="width:10px; border-right: 1px solid black;">Aug</td>
                                          <td style="width:10px; border-right: 1px solid black;">Sept</td>
                                          <td style="width:10px; border-right: 1px solid black;">Oct</td>
                                          <td style="width:10px; border-right: 1px solid black;">Nov</td>
                                          <td style="width:10px; border-right: 1px solid black;">Dec</td>
                                          <td style="width:10px; border-right: 1px solid black;">Jan</td>
                                          <td style="width:10px; border-right: 1px solid black;">Feb</td>
                                          <td style="width:10px; border-right: 1px solid black;">Mar</td>
                                          <td style="width:10px; border-right: 1px solid black;">Apr</td>
                                          <td style="width:10px;">Total</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;">Days of School</td>
                                          <td style="width:10px; border-right: 1px solid black;">19</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">24</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">12</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">24</td>
                                          <td style="width:10px; border-right: 1px solid black;">5</td>
                                          <td style="width:10px;">210</td>
                                       </tr>
                                       <tr style="border-bottom: solid 1px black;">
                                          <td style="width:40px; border-right: 1px solid black;">Days Present</td>
                                          <td style="width:10px; border-right: 1px solid black;">18</td>
                                          <td style="width:10px; border-right: 1px solid black;">21</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">22</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">12</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">20</td>
                                          <td style="width:10px; border-right: 1px solid black;">24</td>
                                          <td style="width:10px; border-right: 1px solid black;">5</td>
                                          <td style="width:10px;">206</td>
                                       </tr>
                                    </table>
                                 </td>
                              </tr>
                           </table>
                           <!--  <table style="table-layout: fixed; width: 685px; border: 1px solid black; font-size: 12px;">
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
                              </table> -->
                           <!-- <table style="table-layout: fixed; width: 685px; border: 1px solid black; font-size: 14px;">
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
                              </table> -->
                           <!-- <table style="table-layout: fixed; width: 685px; border: 1px solid black; font-size: 12px;">
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
                              </table> -->
                           <table>
                              <tr>
                                 <td style="width: 100px;">&nbsp;</td>
                                 <td style="width: 100px;"></td>
                                 <td style="width: 100px;"></td>
                                 <td style="width: 100px;"></td>
                              </tr>
                              <tr>
                                 <td style="width: 685px; font-size: 12px;" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;I certify that this is true of Juan E. Dela Cruz. This student is, on this 19th say of NOVEMBER 2012 eligible for admission to COLLEGE year as regular/an irregular student, and has no property responsibility in this school.</td>
                              </tr>
                           </table>
                           <table>
                              <tr>
                                 <br>
                                 <td style="width: 685px; text-align: right; font-size: 12px;">ROSALINA L. AGAPAY</td>
                              </tr>
                              <tr>
                                 <td style="width: 685px; text-align: right; font-size: 12px;">PRINCIPAL I</td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </center>
         </div>
         <div class="col-lg-2">
            <button style="margin-bottom: 3%; width: 180px; height: 50px; font-size: 20px;" onclick="print();" class="btn btn-success"><i class="fa fa-print"></i> Print Transcript</button>
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
      <script src="{!! asset('js/Principal/form137.js') !!}"></script>
      <!-- your custom script -->
    
      <!-- end of your custom script -->
   </body>
</html>