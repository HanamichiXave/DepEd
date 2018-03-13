<!DOCTYPE html>
<html>
   <head>
      <title>Teacher Management</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png') !!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
      .dataTables_length {
         margin-top: 20px;
      }
      td, th {
         text-align: center;
      }
      .formcontrolattrib {
         max-width: 45px; 
         text-align: center;
      }
      thead {
         background-color: #277992 !important;
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
      <div class="container" >
         <br>
         <br>
         <div class="page-header" style="color: #000033"><h2><strong>Teacher Management</strong></h2></div>
         <ol class="breadcrumb" style="background-color: #D9EDF7">
           <li><a href="{{URL::Route('teacher')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
           <li>Student Grade (School)</li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="panel panel-default" style="background-color: #78b3d6; box-shadow: none;">
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="text-align: center;">
                           <h4>Student's Photo</h4>
                           <img src="{!! asset('assets/images/stud.png') !!}" height="168">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                           <br>
                           <form>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="row">
                                    <div class="form-inline">
                                       <label>School Year : </label> 2017 - 2018
                                    </div>
                                    <div class="form-inline">
                                       <label>Grade : </label> 1
                                    </div>
                                    <div class="form-inline">
                                       <label>Section : </label> Einstein
                                    </div>
                                    <div class="form-inline">
                                       <label>Time : </label> 9:00 - 10:00 AM
                                    </div>
                                    <div class="form-inline">
                                       <label>Day : </label> Mon/Wed/Fri
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="row">
                                    <div class="form-inline">
                                       <label>Grading Period : </label> Quarter 1
                                    </div>
                                    <div class="form-inline">
                                       <label>Subject : </label> English
                                    </div>
                                    <div class="form-inline">
                                       <label>Total Students : </label> 30
                                    </div>
                                    <div class="form-inline">
                                       <label>Male Students : </label> 15
                                    </div>
                                    <div class="form-inline">
                                       <label>Female Students : </label> 15
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <form class="table-responsive">
                  <table class="display nowrap table table-bordered tablehead" id="grades1">
                     <thead>
                        <tr>
                           <th style="max-width: 50px; background-color: #55A072 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="1"></center></th>
                           <th style="max-width: 50px; background-color: #70B25B !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="1.25"></center></th>
                           <th style="max-width: 50px; background-color: #86C04D !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="1.50"></center></th>
                           <th style="max-width: 50px; background-color: #90C648 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="1.75"></center></th>
                           <th style="max-width: 50px; background-color: #A8CE41 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="2.00"></center></th>
                           <th style="max-width: 50px; background-color: #C7DA38 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="2.25"></center></th>
                           <th style="max-width: 50px; background-color: #CFDD37 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="2.50"></center></th>
                           <th style="max-width: 50px; background-color: #E5E735 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="2.75"></center></th>
                           <th style="max-width: 50px; background-color: #e0c812 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="3.00"></center></th>
                           <th style="max-width: 50px; background-color: #EEB057 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="4.00"></center></th>
                           <th style="max-width: 50px; background-color: #bd3a28 !important;"><center><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="5.00"></center></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td style=" background-color: #55A072 !important;">100-96</td>
                           <td style=" background-color: #70B25B !important;">95-91</td>
                           <td style=" background-color: #86C04D !important;">90-86</td>
                           <td style=" background-color: #90C648 !important;">85-81</td>
                           <td style=" background-color: #A8CE41 !important;">80-76</td>
                           <td style=" background-color: #C7DA38 !important;">75-72</td>
                           <td style=" background-color: #CFDD37 !important;">71-68</td>
                           <td style=" background-color: #E5E735 !important;">67-64</td>
                           <td style=" background-color: #e0c812 !important;">63-60</td>
                           <td style=" background-color: #EEB057 !important;">59-50</td>
                           <td style=" background-color: #bd3a28 !important;">50 below</td>
                        </tr>
                        <tr>
                           <td style="background: linear-gradient(to right, #55A072 , #70B25B);" colspan="2">Excellent</td>
                           
                           <td style="background: linear-gradient(to right, #86C04D , #90C648);" colspan="2">Very Good</td>
                      
                           <td style="background: linear-gradient(to right, #A8CE41 , #C7DA38);" colspan="2">Good</td>
                        
                           <td style="background: linear-gradient(to right, #CFDD37 , #E5E735);" colspan="2">Satisfactory</td>
                          
                           <td style=" background-color: #e0c812 !important;">Passed</td>
                           <td style=" background-color: #EEB057 !important;">Conditional</td>
                           <td style=" background-color: #bd3a28 !important;">Failed</td>
                        </tr>
                     </tbody>
                  </table>
               </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <form class="table-responsive"/>
                  <table class="display nowrap table table-bordered" id="grades">
                     <thead>
                        <tr>
                       <th colspan="3" rowspan="2">STUDENT NAME</th>
                       <th colspan="13">WRITTEN WORKS (30%)</th>
                       <th colspan="13">PERFORMANCE TASKS (50%)</th>
                       <th colspan="3">QUARTERLY ASSESSMENT (20%)</th>
                       <th rowspan="2">INITIAL GRADE</th>
                       <th rowspan="2">QUARTERLY GRADE</th>

                        </tr>
                       <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>Total</th>
                        <th>PS</th>
                        <th>WS</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>Total</th>
                        <th>PS</th>
                        <th>WS</th>
                        <th>1</th>
                        <th>PS</th>
                        <th>PW</th>
                 
                   

                        
                       </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td >1</td>
                           <td >2017-0001</td>
                           <td >Aquino, Genesis Ivan J.</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>2017-0002</td>
                           <td>Balido, Eliseo</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>2017-0003</td>
                           <td>Bravo Jr., Antonio G.</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>2017-0004</td>
                           <td>Cabin, Maria Avegin</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>2017-0005</td>
                           <td>Cabansa, Rhema</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>6</td>
                           <td>2017-0006</td>
                           <td>Camari, Donna Mae</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>7</td>
                           <td>2017-0007</td>
                           <td>Calucot, Bea Ellaine</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>8</td>
                           <td>2017-0008</td>
                           <td>Espanya, Ellaine</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>9</td>
                           <td>2017-0009</td>
                           <td>Emperial, Trixia</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>10</td>
                           <td>2017-0010</td>
                           <td>Gorgonia, Carl Joseph</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>11</td>
                           <td>2017-0011</td>
                           <td>Labansa, Anthony G.</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>12</td>
                           <td>2017-0012</td>
                           <td>Okla, Jhamila</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>13</td>
                           <td>2017-0013</td>
                           <td>Orbasido, Nikko Jireh</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>14</td>
                           <td>2017-0014</td>
                           <td>Penayo, Mark Anthonie G.</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>15</td>
                           <td>2017-0015</td>
                           <td>Qukoan, Emman</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>16</td>
                           <td>2017-0016</td>
                           <td>Qoutan, Manuella</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>17</td>
                           <td>2017-0017</td>
                           <td>Saducos, Bea Trixia</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>18</td>
                           <td>2017-0018</td>
                           <td>Sanchez, Avegin</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>19</td>
                           <td>2017-0019</td>
                           <td>Segunada., Alberto</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                        <tr>
                           <td>20</td>
                           <td>2017-0020</td>
                           <td>Tari, Nikko Jireh</td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="30%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="50%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="100%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name="" value="20%" disabled="" readonly=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                           <td><input style="width: 70px;" class="form-control" type="" name=""></td>
                        </tr>
                     
                       
                     </tbody>
                  </table>
               </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="row">
                  <div class="col-lg-12">
                     <button type="button" class="btn btn-success pull-right">Save</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end of your code -->
         <!-- footer here -->
         <hr />
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
      <script src="{!! asset('assets/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
      <!-- DataTable Link -->
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
      <!-- End of LInk -->
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <!-- JS file -->
      <script src="{!! asset('js/Teacher/tstudgradeschool.js') !!}"></script>
      <!-- end of your custom script -->
   </body>
</html>