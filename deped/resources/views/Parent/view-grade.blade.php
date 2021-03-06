<!DOCTYPE html>
<html>
   <head>
      <title>Parent Management Portal</title>
      <link rel="icon" href="../../content/images/logonatin.png">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../../content/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="../../content/custom/css/style.css" rel="stylesheet">
      <link href="../../Content/datatables.net/css/jquery.dataTables.min.css" rel="stylesheet" />
      <link href="../../content/fontawesome/font-awesome.min.css" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
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
               <img class="schuler" src="../../content/images/logonatin.png" height="25" width="30" />
               </a>
               <a class="navbar-brand schulercolor" href="../Super Admin/super-admin-management.html">SchulerTrack</a>
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
               <form class="navbar-form navbar-right search-form" role="search">
                  <input type="text" class="form-control" placeholder="Search" />
               </form>
            </div>
         </div>
      </nav>
      <!-- end of navigation bar -->
      <div class="container" >
         <br>
         <br>
         <div class="page-header" style="color: #000033">
            <h2><strong>Antonio Bravo's Science Subject Grade</strong></h2>
         </div>
         <ol class="breadcrumb">
            <li><a href="../../views/Parent/parent-management.html">Parent Management</a></li>
            <li><a href="../../views/Parent/child-list.html">Kids List</a></li>
            <li><a href="../../views/Parent/subject-list.html">View Subject</a></li>
            <li>Subject Grade</li>
            <li><a href="#"></a></li>
        </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
         <section class="">

            <div class="row">
                <div class="col-sm-12">


                    <div class="col-lg-4 ">

                        <div class="table-responsive card-box">
                            <h3>Science</h3>
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th> Mrs. Rome Rodriguez</br> Room 1235 </th>
                                    </tr>
                                </thead>

                                <tbody></tbody>
                            </table>

                        </div>

                        <div class="table-responsive card-box">
                            <h3>Breakdown</h3>
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th>Kind</th>
                                        <th>Score</th>


                                    </tr>
                                </thead>

                                <tbody>

                                    <tr class="">
                                        <td>
                                            Quiz
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            Recitation
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            Homework
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            Exam
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            Class Participation
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            TOTAL:
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="col-lg-8 ">
                        <div class="table-responsive card-box">
                            <h3>Quiz (20%)</h3>
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th style="max-width: 95px;">
                                        </th>
                                        <th style="max-width: 95px;">
                                        </th>
                                        <th>Topic</th>
                                        <th>Date</th>


                                    </tr>
                                </thead>

                                <tbody>

                                    <tr class="">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Parts of a Plant
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Photosynthesis
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Plant Life Cycle
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>

                                    <tr class="">
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <b>Total</b>
                                        </td>

                                        <td>
                                            <b>93%</b>
                                        </td>

                                    </tr>









                                </tbody>
                            </table>

                        </div>

                        <div class="table-responsive card-box">
                            <h3>Recitation (15%)</h3>
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th style="max-width: 95px;">
                                        </th>
                                        <th style="max-width: 95px;">
                                        </th>
                                        <th>Topic</th>
                                        <th>Date</th>


                                    </tr>
                                </thead>

                                <tbody>

                                    <tr class="">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Parts of a Plant
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Photosynthesis
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Plant Life Cycle
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>

                                    <tr class="">
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <b>Total</b>
                                        </td>

                                        <td>
                                            <b>93%</b>
                                        </td>

                                    </tr>









                                </tbody>
                            </table>

                        </div>

                        <div class="table-responsive card-box">
                            <h3>Homeworks (10%)</h3>
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Topic</th>
                                        <th>Date</th>
                                        <th>Score</th>


                                    </tr>
                                </thead>

                                <tbody>

                                    <tr class="">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Parts of a Plant
                                        </td>

                                        <td>
                                            06/29/16
                                        </td>
                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Photosynthesis
                                        </td>

                                        <td>
                                            06/29/16
                                        </td>
                                        <td>
                                            <b><a href="" class="text-dark"><b>91%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Plant Life Cycle
                                        </td>

                                        <td>
                                            06/29/16
                                        </td>
                                        <td>
                                            <b><a href="" class="text-dark"><b>92%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <b>Total</b>
                                        </td>
                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>












                                </tbody>
                            </table>

                        </div>

                        <div class="table-responsive card-box">
                            <h3>Exam (35%)</h3>
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th style="max-width: 95px;">
                                        </th>
                                        <th style="max-width: 95px;">
                                        </th>
                                        <th>Topic</th>
                                        <th>Date</th>


                                    </tr>
                                </thead>

                                <tbody>

                                    <tr class="">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Parts of a Plant
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Photosynthesis
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Plant Life Cycle
                                        </td>

                                        <td>
                                            02/07/09
                                        </td>

                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>

                                    <tr class="">
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <b>Total</b>
                                        </td>

                                        <td>
                                            <b>93%</b>
                                        </td>

                                    </tr>









                                </tbody>
                            </table>

                        </div>

                        <div class="table-responsive card-box">
                            <h3>Class Participation (10%)</h3>
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Topic</th>
                                        <th>Date</th>
                                        <th>Score</th>


                                    </tr>
                                </thead>

                                <tbody>

                                    <tr class="">
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Parts of a Plant
                                        </td>

                                        <td>
                                            06/29/16
                                        </td>
                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Photosynthesis
                                        </td>

                                        <td>
                                            06/29/16
                                        </td>
                                        <td>
                                            <b><a href="" class="text-dark"><b>91%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Plant Life Cycle
                                        </td>

                                        <td>
                                            06/29/16
                                        </td>
                                        <td>
                                            <b><a href="" class="text-dark"><b>92%</b></a> </b>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <b>Total</b>
                                        </td>
                                        <td>
                                            <b><a href="" class="text-dark"><b>95%</b></a> </b>
                                        </td>

                                    </tr>












                                </tbody>
                            </table>

                        </div>

                    </div>



                </div>

            </div>
        </section>
         <!-- end of your code -->
         <!-- footer here -->
         <hr />
         <footer class="navbar-fixed-bottom">
            <div class="container-fluid" style="background-color: #35AC49;">
               <p class="pull-right " style="padding-top: .5%; padding-right: 3%; font-size: 10px; font-weight: bolder; color: #000033;">&copy; 2016 - Powered by <a href="http://www.simplevia.com" style="color: #fff;">QuickTrack</a></p>
            </div>
         </footer>
         <!-- end foooter -->
      </div>
      <!-- plugin scripts -->
      <script src="../../content/jquery/dist/jquery.min.js"></script>
      <script src="../../content/jquery-ui/jquery-ui.min.js"></script>
      <script src="../../content/datatables.net/js/jquery.dataTables.min.js"></script> 

      <script src="../../content/bootstrap/dist/js/bootstrap.min.js"></script>
      
      <script src="../../content/datatables.net/js/datatables.bootstrap.js"></script>
      <script src="../../content/datatables.net/js/dataTables.buttons.min.js"></script>

      <script src="../../content/datatables.net/js/buttons.bootstrap.min.js"></script>
      <script src="../../content/datatables.net/js/buttons.html5.min.js"></script>
      <script src="../../content/datatables.net/js/buttons.print.min.js"></script>

      <script src="../../content/datatables.net/js/dataTables.fixedColumns.min.js"></script>
      <script src="../../content/datatables.net/js/dataTables.fixedHeader.min.js"></script>
      <script src="../../content/datatables.net/js/dataTables.keyTable.min.js"></script>
      <script src="../../content/datatables.net/js/dataTables.scroller.min.js"></script>


      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <script type="text/javascript">

      </script>
      <!-- end of your custom script -->
   </body>
</html>