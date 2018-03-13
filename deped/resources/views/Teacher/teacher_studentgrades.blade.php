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
   .tablehead th{
      background-color: #4cae4c !important;
   }
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
           <li>Student Grade (DepEd)</li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="panel panel-default" style="background-color: #99efcf; box-shadow: none;">
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
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="panel panel-default" style="box-shadow: none; background-color: #faffaf;">
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-lg-12">
                           <form class="col-lg-12" style="text-align: center;">
                              <h4><strong>Legend</strong></h4>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                 <table class="table">
                                    <tbody>
                                       <tr>
                                          <th style="width: 3%;">Ex</th>
                                          <td>Exceptional</td>
                                       </tr>
                                       <tr>
                                          <th style="width: 3%;">E</th>
                                          <td>Excellent</td>
                                       </tr>
                                       <tr>
                                          <th style="width: 3%;">VG</th>
                                          <td>Very Good</td>
                                       </tr>
                                       <tr>
                                          <th style="width: 3%;">G</th>
                                          <td>Good</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                 <table class="table">
                                    <tbody>
                                       <tr>
                                          <th style="width: 3%;">S</th>
                                          <td>Satisfactory</td>
                                       </tr>
                                       <tr>
                                          <th style="width: 3%;">D</th>
                                          <td>Developing</td>
                                       </tr>
                                       <tr>
                                          <th style="width: 3%;">NI</th>
                                          <td>Needs Improvement</td>
                                       </tr>
                                       <tr>
                                          <th style="width: 3%;">NA</th>
                                          <td>Not Applicable</td>
                                       </tr>
                                    </tbody>
                                 </table>
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
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="A+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="A+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="A+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="A+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="A"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="A"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="A"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="A"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B+"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="B"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="C"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="C"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="C"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="C"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="D"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="D"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="D"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="D"></th>
                           <th style="max-width: 50px;"><input class="form-control formcontrolattrib" type="text" name="" readonly="" value="F"></th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>100</td>
                           <td>99</td>
                           <td>98</td>
                           <td>97</td>
                           <td>96</td>
                           <td>95</td>
                           <td>94</td>
                           <td>93</td>
                           <td>92</td>
                           <td>91</td>
                           <td>90</td>
                           <td>89</td>
                           <td>88</td>
                           <td>87</td>
                           <td>86</td>
                           <td>85</td>
                           <td>84</td>
                           <td>83</td>
                           <td>82</td>
                           <td>81</td>
                           <td>80</td>
                           <td>79</td>
                           <td>78</td>
                           <td>77</td>
                           <td>76</td>
                           <td>75</td>
                           <td>74</td>
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
      <script src="{!! asset('js/Teacher/tstudentgrades.js') !!}"></script>
      <!-- end of your custom script -->
   </body>
</html>