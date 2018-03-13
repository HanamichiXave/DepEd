<!DOCTYPE html>
<html>
   <head>
      <title>Principal</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png') !!">
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
    #transcript img {
        z-index: -999; 
        background-size:contain;
    }
    .centered {
        position: absolute;
        transform: translate(-50%, -50%);
    }
    .panel-heading {
      padding:0px 0px;
    }
    @font-face {
     font-family: Carta;
     src: url("{!! asset('assets/fonts/Carta_Magna-line-demo-FFP.ttf') !!");
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
               <img class="schuler" src="{!! asset('assets/images/logonatin.png') !!" height="25" width="30" />
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
          <li><a href="{{URL::Route('principal')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
          <li><a href="{{URL::Route('document')}}"> Student Transcript</a></li>
          <li> Transcript</li>
        </ol>
      <!-- your code start here -->
      <!-- Please observe indention -->
      
       <div class="col-lg-12">
         <div id="transcript" class="panel panel-default" style="height: 815px; width: 1080px;">
          <div class="panel-heading" style="height: 815px; width: 1080px;">
            <center><img src="{!! asset('assets/images/Principal/diploma.png') !!}" style="height: 817px; width: 1063px;"></center>
            <img style="position: absolute; left: 790px; top: 65px; z-index: 999" src="{!! asset('assets/images/depedlogo.png') !!}" height="130" width="120"></img>
           <img style="position: absolute; left: 210px; top: 65px; z-index: 999" src="{!! asset('assets/images/transcriptlogo.png') !!}" height="143" width="130"></img>
              <p style="position: absolute; left: 460px; top: 27px; font-size: 16px; width: 1000px;"><b>Republika ng Pilipinas</b></p>
              <p style="position: absolute; left: 468px; top: 45px; font-size: 13px; width: 1000px;">Republic of the Philippines</p>
              <p style="position: absolute; left: 445px; top: 60px; font-size: 16px; width: 1000px;"><b>Kagawaran ng Edukasyon</b></p>
              <p style="position: absolute; left: 472px; top: 80px; font-size: 13px; width: 1000px;">Department of Education</p>
              <p style="position: absolute; left: 431px; top:97px; font-size: 16px; width: 1000px;"><b>Rehiyon VI Kanlurang Visayas</b></p>
              <p style="position: absolute; left: 473px; top: 116px; font-size: 13px; width: 1000px;">Region VI Western Visayas</p>
              <p style="position: absolute; left: 410px; top: 131px; font-size: 17px; width: 1000px;"><b>SANGAY NG LUNGSOD NG CADIZ</b></p>
              <p style="position: absolute; left: 495px; top: 151px; font-size: 12px; width: 1000px;">Division of Cadiz City</p>
              <p style="position: absolute; left: 350px; top: 195px; font-size: 25px; width: 1000px;"><b>SCHULER ORTIGAS UNIVERSITY</b></p>
              <p style="position: absolute; left: 474px; top: 222px; font-size: 13px; width: 1000px;">Brgy. San Antonio, Ortigas</p>
              <p style="position: absolute; left: 472px; top: 260px; font-size: 16px; width: 1000px;">Pinatunayan nito na si</p>
              <p style="position: absolute; left: 420px; top: 273px; font-size: 35px;font-family: Carta !important; width: 1000px;">Juan A. Dela Cruz</p>
              <p style="position: absolute; left: 444px; top: 320px; font-size: 11px; width: 1000px;">Learner Reference Number &nbsp;&nbsp;(LRN) : xxxxxx</p>
              <p style="position: absolute; left: 160px; top: 355px; font-size: 17px; width: 1000px;">ay &nbsp;&nbsp; maluwalhating &nbsp;&nbsp; nakatapos &nbsp;&nbsp; ng &nbsp;&nbsp; Basic &nbsp;&nbsp; Education &nbsp;&nbsp; Curriculum &nbsp;&nbsp; na &nbsp;&nbsp; itinakda &nbsp;&nbsp; para &nbsp;&nbsp; sa </p>
              <p style="position: absolute; left: 150px; top: 375px; font-size: 17px; width: 1000px;">mataas &nbsp;&nbsp; na &nbsp;&nbsp; paraan &nbsp;&nbsp; ng &nbsp;&nbsp; Kagawaran &nbsp;&nbsp; ng &nbsp;&nbsp; Edukasyon, &nbsp;&nbsp; kaya &nbsp;&nbsp; pinag &nbsp;&nbsp; kalooban &nbsp;&nbsp; siya &nbsp;&nbsp; nitong</p>
              <p style="position: absolute; left: 410px; top: 415px; font-size: 70px;font-family: Carta !important; width: 1000px;">Katunayan</p>
              <p style="position: absolute; left: 280px; top: 510px; font-size: 17px; width: 1000px;">Nilagdaan &nbsp; sa &nbsp; Xxxxxxx,&nbsp; Pilipinas &nbsp; nitong &nbsp; ika-1 &nbsp; ng &nbsp; Abril &nbsp; 2016.</p>
              <p style="position: absolute; left: 210px; top: 645px; font-size: 20px;font-family: Carta !important; width: 1000px;">Juan A. Dela Cruz</p>
              <p style="position: absolute; left: 245px; top: 670px; font-size: 13px; width: 1000px;">Punong-Guro</p>
              <p style="position: absolute; left: 735px; top: 645px; font-size: 20px;font-family: Carta !important;">Juan A. Dela Cruz</p>
              <p style="position: absolute; left: 660px; top: 670px; font-size: 13px; width: 1000px;">Pangsangay na Tagapamanihala ng mga Paaralan</p>
          </div>
          </div>
        </div>
       </div>
        <div class="col-lg-12">
          <button style="margin-bottom: 3%; width: 180px; height: 50px; font-size: 20px; position: absolute; left: 1330px;" onclick="print();" class="btn btn-success pull-right";><i class="fa fa-print"></i> Print Transcript</button>
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
      <script src="{!! asset('js/Principal/diploma3.js') !!}"></script>
      <!-- your custom script -->
    
      <!-- end of your custom script -->
   </body>
</html>