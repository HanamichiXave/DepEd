
<!DOCTYPE html>
<html>
   <head>
      <title>Parent</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png')!!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap-tokenfield.min.css')!!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/custom/css/Principal/P-Mainpage.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css')!!}" rel="stylesheet">
      <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
      <!-- end of css  -->
      <!-- your custom css -->
      <link href="{!! asset('assets/calendar/fullcalendar.min.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/calendar/fullcalendar.print.min.css')!!}" rel="stylesheet">
      <!-- end of your custom css -->
   </head>
   <style>
    .modal-xl {
      width: 90%;
      max-width: 1200px;
    }

    ...
    }
    .marginbottom {
      margin-bottom: 10px;
    }
    .button {
      height: 40px; 
      margin-top: 7px; 
      width: 190px;
      text-align: left;
      justify-content: center;
      font-size: 15px;
      background-color: #23928c;
      color: #FFFFFF!important;
    }
    .composebutton {
      height: 40px; 
      margin-top: 7px; 
      width: 160px;
      text-align: center;
      justify-content: center;
      font-size: 15px;
      background-color: #479C48;
      color: #FFFFFF;
    }
    .listbutton {
      height: 40px; 
      margin-top: 7px; 
      width: 75px;
      text-align: center;
      justify-content: center;
      font-size: 15px;
      color: #FFFFFF;
    }
    .panel-heading {
      font-size: 20px; 
      font-weight: 350;
    }
    .textbox {
      height: 40px; 
      margin-top: 7px;
    }
    .bordright {
      border-right: solid;
      border-width: 1px;
      border-color: #1284ad;
    }
    .bordbot {
      border-bottom: 1px solid #1284ad;
    }
    
    .panel-body {
      padding: 0px 15px!important;
    }
    .panel-body-calendar {
    padding: 0px !important;
    }
    .marginbot {
      margin-bottom: 15px;
    }
    .marbot {
      margin-bottom: 10px;
    }
    .nav-customized > li {
        width: 100%;
    }
    @media (max-width: 991px) {
      .nav-customized > li {
          width: auto;
      }
    }
    .holidayborder {
      border-right: 1px solid #1284ad;
    }
    @media (max-width: 1199px) {
      .holidayborder {
        border-right: : 1px solid #1284ad;
      }
    }
    .leftcalendar {
      position: absolute;
      top: 50%;
      z-index: 5;
      display: inline-block;
      left: 5%;
    }
    .rightcalendar {
      position: absolute;
      top: 50%;
      z-index: 5;
      display: inline-block;
      right: 5%;
    }
    .carousel-control {
      opacity: .2!important;
    }

    @media (max-width: 991) {
      .composebutton {
        width: 90px;
        text-align: center;
      }
    }

    @media (min-width: 768px) {
      .modal-xl {
          width: 90%;
          max-width: 1200px;
      }
    }
    .ui-autocomplete { 
      z-index: 5000; 
    }
    * {box-sizing: border-box;}

    .month {
        padding: 70px 25px;
        width: 100%;
        background: #1abc9c;
        text-align: center;
    }

    .month ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .month ul li {
        color: white;
        font-size: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .month .prev {
        float: left;
        padding-top: 10px;
    }

    .month .next {
        float: right;
        padding-top: 10px;
    }

    .weekdays {
        margin: 0;
        padding: 10px 0;
        background-color: #ddd;
    }

    .weekdays li {
        display: inline-block;
        width: 13.6%;
        color: #666;
        text-align: center;
    }

    .days {
        padding: 10px 0;
        background: #eee;
        margin: 0;
    }

    .days li {
        list-style-type: none;
        display: inline-block;
        width: 13.6%;
        text-align: center;
        margin-bottom: 5px;
        font-size:12px;
        color: #777;
    }

    .days li .active {
        padding: 5px;
        background: #1abc9c;
        color: white !important
    }

    /* Add media queries for smaller screens */
    @media screen and (max-width:720px) {
        .weekdays li, .days li {width: 13.1%;}
    }

    @media screen and (max-width: 420px) {
        .weekdays li, .days li {width: 12.5%;}
        .days li .active {padding: 2px;}
    }

    @media screen and (max-width: 290px) {
        .weekdays li, .days li {width: 12.2%;}
    }
    #calendar {
      max-width: 900px;
      margin: 0 auto;
    }
    .contactpic {
      height: 100px;
      width: 100px;
      padding: 10px 0px 10px 10px;
    }
    #addnew {
      padding-top: 80px;
    }
    #compose {
      padding-top: 80px;
    }
    td, th {
      text-align: center;
    }
    .chat-body-cont {
      font-family: Arial, Helvetica, sans-serif;
      font-size:13px;
      position: fixed;
      right: 0px;
      width: 100%;
      top: 0px;
      height: 100%;
      padding-left: 5px;
      overflow:hidden;
      pointer-events: none;
      z-index: 999999999999 !important;
    }
    .left-ch {
      height: 100%;
      float:right;
      overflow:hidden;
      max-width: 935px;
    }
    .usrh {
      float:left;
    }
    .usrin {
      width: 180px;
      border:none;
      margin-top: 5px;
    }
    .user-searcher {
      height: 7%;
      width: 100%;
      overflow:hidden;
    }
    .usrp {
      float:left;
      padding: 10px;
      max-width: 160px;
      overflow: hidden;
    }
    .usrpt {
      float:left; 
      width: 35px;
      height:10px;
    }
    .rttle {
      width: 100%; float:left;
      padding: 5px;
      background-color: #E4DFDF;
      font-weight:bold;
      font-size: 12px;
    }
    .ol-usr {
      width: 100%;
      padding: 5px;
      float: left;
      border-bottom: .5px solid #E4DFDF;
      cursor:pointer
    }
    .side-list {
      height: 85%;
      overflow-y: scroll;
      box-shadow: 0px 0px 1px 0px;
    }
    .side-head {
      width: 250px;
      height: 30px;
      color: white;
      background-color: #2A928C;
      box-shadow: 0px 0px 2px 0px;
      cursor:pointer;
    }
    .right-ch {
      pointer-events: none;
      height: 100%;
      width: 250px;
      float: right;
    }
    .chit-chat {
      font-weight: bold;
      float:left;
      padding:5px 0px 0px 10px;
    }
    .siders {
      pointer-events:all;
      position: absolute;
      bottom: 33px;
      height: 30px;
      margin-top: 60px;
      box-shadow: 0px .8px 5px 0px;
      background-color: white;
      overflow:hidden;
      border-radius: 3px 3px 0px 0px;
    }
    .chit-chat-t {
      margin: 5px 0px 0px 0px;
      float:left;
      background-color: #45e26f;
      width: 10px;
      height: 10px;
      border-radius: 180%;
    }
    .chit-chat-b {
      float:left;
      margin-left: 5px;
    }
    .mch-001 {
      width: 100%;
      float:left;
      padding: 0px 0px 0px 10px;
      margin-bottom: 5px;
    }
    .mch-000 {
      width: 100%;
      float:left;
      padding: 0px 0px 0px 5px;
    }
    .left-cssc {
      float: right;
      height: 100%;
      width: 260px;
      margin-right: 15px;
    }
    .ch-cont-floater {
      position: absolute;
      width: 260px;
      bottom: 33px;
      max-height: 328px;
    }
    .chat-cont {
      pointer-events: auto;
      float: right;
      overflow:hidden;
      width: 260px;
      border-radius: 3px 3px 0px 0px;
      box-shadow: 0px .8px 5px -.7px
    }
    .chat-head {
      cursor:pointer;
      font-weight:bold;
      width: 100%;
      height: 30px;
      color: white;
      background-color: #00D489;
      overflow: hidden;
    }
    .usersname-ch {
      float:left;
      width: 70%;
      height: 100%;
      padding: 8px 0px 0px 10px;
    }
    .ch-act {
      float:right;
      padding: 5px;
      font-size:13px;
    }
    .dta-2 {
      float:right;
      margin-left:10px;
      cursor:pointer;
    }
    .chat-body {
      height: 250px;
      background-color: white;
      box-shadow: 0px 0px 1px 0px;
      overflow: hidden;
    }
    .knamo {
      position: absolute;
      bottom:49px;
      padding-bottom:30px;
      width: 100%;
      max-height: 249px;
    }
    .excss {
      height: 100%;
      float:right;
      overflow:hidden;
      max-width: 200px;
    }
    .excss-b {
      float:right;
      height: 100%;
      width: 180px;
      margin-right: 15px;
    }
    .excss-list {
      width: 100%;
      overflow:hidden;
      padding: 2px 0px 2px 6px;
      cursor:pointer;
    }
    .excss-list:hover {
      background-color: #00D489;
      color:white;
    }
    .excss-list-n {
      float:left;
      width: 150px;
      max-height: 20px;
      overflow:hidden;
    }
    .excss-list-i {
      float: right;
      margin-right: 2px;
      font-size: 10px;
      cursor:pointer;
    }
    .excss-list-i:hover {
      background-color:white;
      color:grey;
    }
    .excss-whspc {
      width:35px; height: 5px;
      position: absolute;
      bottom:28px;
      background-color: white;
      right: 0px;
    }
    .excss-btn {
      float:right;
      width: 35px;
      height: 30px;
      background-repeat: no-repeat;
      background-position: center;
      background-image: url('/assets/images/emsg.png');
      background-color: #00D489;
      box-shadow: 0px .8px 5px -.7px;
      border-radius:3px 3px 0px 0px;
      pointer-events: auto;
      cursor: pointer;
    }
    .excss-l-hldr {
      pointer-events: auto;
      background-color: white;
      max-height: 300px;
      box-shadow: 0px .8px 5px -.7px;
      padding:5px;
      display:none;
    }
    .list-hlder {
      width: 100%;
      cursor: pointer;
    }
    .excss-nn {
      position: absolute;
      bottom:0px;
      width: 180px;
    }

    .err-m1, .err-m2 span {
      cursor:pointer;
    }
    .err-m1, .err-m2{
      float:left; width:100%;
      color:red;
      font-size: 10px;
      padding-left:30px;
      padding-right:30px;
    }
    .err-m1, .err-m2 span:hover {
    text-decoration:underline;
    }
    .err-ns {
      color: red;
      cursor: pointer;
    }
    .navbar-custom {
      font-size: 12px;
    }
    .navbar-custom ul .active a {
      color: #5fbeaa !important;
    }
    .navbar-custom ul a {
      padding: 1.5em !important;
    }
    .cntr_bdge {
      border-radius:2px;
      background-color:#F7FDFF;
      font-size:9px;
      float:right;
      padding:3px;
      box-shadow: 0px 0px 2px 0px;
      position:relative; top: 10px;
    }
    .ch_input {
      min-height: 30px;
      max-height: 60px;
      overflow-x:hidden;
      background-color:
      white; padding: 10px;
      box-shadow: 0px 0px 1px 0px;
    }
    .stat_fl {
      position: fixed;
      width: 242px;
      bottom: 49px;
      height: 30px;
      font-size: 10px;
    }
    /*for asus zenpad */
    @media screen and (max-width: 990px) {
     .left-cssc {
      float:left;
    }
    .chat-cont {
      width: 100%;
      float: left;
      height: 100%;
      border-radius: 0px;
    }
    .ch-cont-floater, .left-ch {
      width: 100%;
      height: 100%;
      margin-right: 5px;
      font-size: 17px;
     }
     .ch-cont-floater {
      max-height: 100%; 
     }
     .hol-d {
      height: 89%;
     }
     .chat-head {
      height: 5%;
     }
     .chat-body {
      height: 100%;
      overflow: hidden;
     }
     .ch_input {
      height: 20%;
     }
     .stat_fl {
      width: 100%;
      font-size: 12px;
      bottom:9.5%;
     }
     .knamo {
      max-height: 84.4%;
      bottom:9.5%;
     }
     .ch-act {
      font-size: 17px;
     }
    }
    @media screen and (max-height: 855px) and (max-width: 990px) {
     .knamo {
      max-height: 88.95%;
      bottom:6%;
     }
    }
    /*end asus zenpad */
    /*for huawei tablet */
    @media screen and (max-height: 550px) and (max-width: 990px){
    .chat-head {
      height: 7.5%;
     }
    .hol-d {
      height: 82.3%;
     }
     .knamo {
      max-height: 82.3%;
      bottom:10.5%;
     }
    }
    /*end huawei tablet */
    /*for alcatel one touch with  320 x 544 screen resolution */
    @media screen and (max-height: 488px) and (max-width: 990px) {
    .chat-head {
      height: 6%;
     }
    .hol-d {
      height: 83.7%;
     }
     .knamo {
      max-height: 81.85%;
      bottom:11.8%;
     }
     .ch-cont-floater, .left-ch {
      font-size: 14px;
     }
    }
    @media screen and (max-height: 544px) and (max-width: 990px) {
    .chat-head {
      height: 7%;
     }
    .hol-d {
      height: 83.7%;
     }
     .knamo {
      max-height: 81.85%;
      bottom:11%;
     }
    }
    @media screen and (max-height: 243px) and (max-width: 990px) {
    .chat-head {
      height: 13%;
     }
    .hol-d {
      height: 69.7%;
     }
     .knamo {
      max-height: 67.85%;
      bottom:11.8%;
      bottom:18.5%;
     }
     .stat_fl {
      bottom:18.5%;
     }
    }
    /* 320 x 544 ends here */
    .current_date {
      width: 100%;
      height: 100%;
      border:none;
      box-shadow: 0px 0px 1px 0px;
      border-radius: 2px;
      height: 36px;
      padding: 0px 0px 0px 15px;
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
               <img class="schuler" src="{!! asset('assets/images/logonatin.png')!!}" height="25" width="30" />
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
      <div class="container">
        <br>
        <br>
        <div class="page-header" style="color: #000033"><h2><strong>Parent Management</strong></h2></div>
        <ol class="breadcrumb" style="background-color: #D9EDF7">
          <li><a href="{{URL::Route('parent')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
          <li><a href="{{URL::Route('schoolactivities')}}">School Activities</a></li>
          <li>Messages &amp; Memo's</li>
        </ol>
      <!-- your code start here -->
      <!-- Please observe indention -->
  
      <div class="row">
        <div class="col-md-9 col-lg-9">
          <div class="panel panel-custom">
            <div class="panel-heading"><i class="fa fa-calendar fa-lg"></i> <label>School Calendar</label></div><br>
            <div class="panel-body-calendar">
              <div id="schooleventcalendar"></div>
            </div>
          </div>
          <div class="row">
                <div class="col-lg-6">
                  <div class="panel panel-custom">
                    <div class="panel-heading"><i class="fa fa-bookmark-o fa-lg"></i> <label>Holidays and Observances</label></div>
                    <div class="panel-body">
                        <ul>
                          <li><label><strong>1 </strong> Jan  New Year's Day</label></li>
                          <li><labeL><strong>2 </strong> Jan  'New Year's Day' observed</label></li>
                          <li><labeL><strong>28 </strong> Jan Chinese Lunar New Year's Day</label></li>
                          <li><labeL><strong>25 </strong> Feb People Power Anniversary</label></li>
                          <li><labeL><strong>9 </strong> Apr The Day of Valor</label></li>
                          <li><labeL><strong>13 </strong> Apr Maundy Thursday</label></li>
                          <li><labeL><strong>14 </strong> Apr Good Friday</label></li>
                          <li><labeL><strong>16 </strong> Apr Easter Sunday</label></li>
                          <li><labeL><strong>24 </strong> Apr Lailatul Isra Wal Mi Raj</label></li>
                          <li><labeL><strong>1 </strong> May Labor Day</label></li>
                          <li><labeL><strong>12 </strong> Jun Eidul-Filtar</label></li>
                          <li><labeL><strong>21 </strong> Aug Ninoy Aquino Day</label></li>
                          <li><labeL><strong>28 </strong> Aug National Heroes Day 'holiday'</label></li>
                          <li><label><strong>2 </strong> Sep Id-ul-Adha (Feast of the Sacrifice)</label></li>
                          <li><label><strong>3 </strong> Sep Id-ul-Adha Day 2</label></li>
                          <li><label><strong>22 </strong> Sep Amun Jadid</label></li>
                          <li><label><strong>31 </strong> Oct Special non-working Day</label></li>
                          <li><label><strong>1 </strong> Nov All Saint's Day</label></li>
                          <li><label><strong>2 </strong> Nov All Soul's Day</label></li>
                          <li><label><strong>30 </strong> Nov Bonifacio Day</label></li>
                          <li><label><strong>1 </strong> Dec Maulid un-Nabi</label></li>
                          <li><label><strong>8 </strong> Dec Fest der unbefleckten Empfängnis</label></li>
                          <li><label><strong>24 </strong> Dec Christmas Eve</label></li>
                          <li><label><strong>25 </strong> Dec Christmas Day</label></li>
                          <li><label><strong>30 </strong> Dec Rizal Day</label></li>
                          <li><label><strong>31 </strong> Dec New Year's Eve</label></li>
                        </ul>  
                      
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="panel panel-custom">
                    <div class="panel-heading"><i class="fa fa-newspaper-o fa-lg"></i> <label>Events</label></div>
                    <div class="panel-body" style="margin-top: 10px;">
                      <ul>
                        <label><li>Meeting With All Faculty and Staff on November 3,2017</li></label>
                        <label><li>Christmas Party Moved on December 23, 2017</li></label>
                        <label><li>Semester's Break Starts on December 23, 2017 to January 4, 2018</li></label>
                        <label><li>Fire Drill on March 18, 2018</li></label>
                      </ul>  
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="panel panel-custom">
                    <div class="panel-heading"><i class="fa fa-bookmark-o fa-lg"></i> <label>Activities</label></div>
                    <div class="panel-body" style="margin-top: 10px;">
                      <ul>
                        <label><li>Meeting With All Faculty and Staff on November 3,2017</li></label>
                        <label><li>Christmas Party Moved on December 23,2017</li></label>
                        <label><li>Semester's Break Starts on December 23, 2017 to January 4, 2018</li></label>
                        <label><li>Fire Drill on March 18, 2018</li></label>
                      </ul>  
                    </div>
                  </div>
                </div>
              </div>
        </div>

        <div class="col-md-3 col-lg-3" align="center">
          <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
            <a class="btn btn-md waves-effect waves-light m-b-30 button" data-toggle="modal" data-target="#mail"> <i class="fa fa-envelope fa-lg"></i> Mail<span class="badge pull-right" style="background-color: red;">60</span></a>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
            <a class="btn btn-md waves-effect waves-light m-b-30 button" data-toggle="modal" data-target="#contacts"> <i class="fa fa-phone-square fa-lg"></i> Contacts</a>
          </div>
         <!--  <div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
            <a class="btn btn-md waves-effect waves-light m-b-30 button"> <i class="fa fa-commenting fa-lg"></i> Chat</a>
          </div> -->
        </div>
      </div>

    <div class="chat-body-cont">
        <div class="gtr-urs"></div>
          <div class="right-ch">
              <div class="siders">
                  <div class="side-head"  id="minimizer">
                  <div class="chit-chat">
                      <div class="chit-chat-t"></div>
                      <div class="chit-chat-b"><span>Chat</span><span> ( </span><span id="olcount">0</span><span> )</span></div>
                  </div>
                        
                  </div>
                  <!-- online user list area -->
                  <div class="side-list">
                      <div class="rttle">
                      <span>DEPARTMENT/CATEGORY</span>
                      </div>
                      <div class="ol-usr" id="1">
                      <div class="usrpt">
                        <img alt="user-img" height="40" width="40" class="img-circle" src="{!! asset('assets/images/Teacher/xavier.jpg')!!}">
                      </div>
                      <div class="usrp">
                        <span>John Xavier V. Buenaventura</span>
                      </div>
                        <div class="cntr_bdge">
                        <span>99+</span>
                        </div>
                      </div>
                      <div class="ol-usr" id="2">
                      <div class="usrpt">
                        <img alt="user-img" height="40" width="40" class="img-circle" src="{!! asset('assets/images/Teacher/benson.jpg')!!}">
                      </div>
                      <div class="usrp">
                        <span>John Benson Leabres</span>
                      </div>
                        <div class="cntr_bdge">
                        <span>99+</span>
                        </div>
                      </div>
                      <div class="ol-usr" id="3">
                      <div class="usrpt">
                        <img alt="user-img" height="40" width="40" class="img-circle" src="{!! asset('assets/images/Teacher/mayson.png')!!}">
                      </div>
                      <div class="usrp">
                        <span>John Mayson Labuntog</span>
                      </div>
                        <div class="cntr_bdge">
                          <span>99+</span>
                        </div>
                      </div>
                      <div class="ol-usr" id="4">
                      <div class="usrpt">
                        <img alt="user-img" height="40" width="40" class="img-circle" src="{!! asset('assets/images/Teacher/ivan.jpg">')!!}
                      </div>
                      <div class="usrp">
                        <span>Ivan Genesis</span>
                      </div>
                        <div class="cntr_bdge">
                        <span>99+</span>
                        </div>
                      </div>
                      <div class="ol-usr" id="5">
                      <div class="usrpt">
                        <img alt="user-img" height="40" width="40" class="img-circle" src="{!! asset('assets/images/Teacher/Bravo.jpg"')!!}>
                      </div>
                      <div class="usrp">
                        <span>Antonie Brave</span>
                      </div>
                        <div class="cntr_bdge">
                        <span>99+</span>
                        </div>
                      </div>
                  </div>
                  <!-- end user list -->
                  <!--user search area-->
                  <div class="user-searcher">
                    <div class="usrh">
                        <div style="padding: 10px;" class="glyphicon glyphicon-search">
                        </div>
                    </div>
                    <div class="usrh">
                        <input class="usrin" type="text" aria-autocomplete="list" aria-expanded="false" role="combobox" placeholder="Search" autocomplete="off" autocorrect="off" value="" />
                    </div>
                  </div>
                 <!--end user search-->
              </div>
          </div>

          <div class="left-ch">
          
          </div>
          <!-- start codes here -->
    </div>

      <hr />
      <!-- end of your code -->
      <!-- footer here -->
      <footer class="navbar-fixed-bottom">
         <div class="container-fluid footer">
            <p class="pull-right powerby">&copy; 2016 - Powered by <a href="http://www.simplevia.com" class="quicktrackcolor">QuickTrack</a></p>
         </div>
      </footer>
      <!-- end foooter -->
      </div>

      <!-- Mail Modal -->
      <div class="modal fade" id="mail" role="dialog">
        <div class="modal-dialog modal-xl">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="panel panel-custom">
                    <div class="panel-heading"><i class="fa fa-envelope fa-lg"></i> <label>Mail</label></div><br>
                    <div class="panel-body" style="margin-bottom: 10px;">
                      <form class="form-group">
                        <div class="col-lg-12 form-group">
                          <a class="btn composebutton btn-success waves-effect waves-light" data-target="#compose" data-toggle="modal">Compose</a>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                          <ul class="nav nav-pills nav-customized">
                            <li class="active"><a data-toggle="tab" href="#inbox"><span class="badge pull-right">42</span> Inbox </a></li>
                            <li><a data-toggle="tab" href="#starred">Starred</a></li>
                            <li><a data-toggle="tab" href="#important">Important</a></li>
                            <li><a data-toggle="tab" href="#sentmail">Sent Mail</a></li>
                            <li><a data-toggle="tab" href="#drafts">Drafts</a></li>
                          </ul>  
                        </div>
                        <div class="col-sm-12 col-md-10 col-lg-10 form-group">
                          <div class="tab-content">
                            <div id="inbox" class="tab-pane fade in active">
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                            </div>
                            <div id="starred" class="tab-pane fade">
                              <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">9:10 AM</span> 
                                  <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">9:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                            </div>
                            <div id="important" class="tab-pane fade">
                              <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                                <a href="#" class="list-group-item">
                                  <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                  <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                  <span class="badge">12:10 AM</span> 
                                  <span class="pull-right"></span>
                                </a>
                            </div>
                            <div id="sentmail" class="tab-pane fade">
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">John Mayson Labuntog</span>
                                <span class="text-muted" style="font-size: 11px;">- Hello Mr. Buenaventura</span> 
                                <span class="badge">12:10 AM</span> 
                                <span class="pull-right"></span>
                              </a>
                            </div>
                            <div id="drafts" class="tab-pane fade">
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">Drafts</span>
                                <span class="text-muted" style="font-size: 11px;">- Hi Mr. Labuntog</span> 
                                <span class="badge">12:00 AM</span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">Drafts</span>
                                <span class="text-muted" style="font-size: 11px;">- Hi Mr. Labuntog</span> 
                                <span class="badge">12:00 AM</span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">Drafts</span>
                                <span class="text-muted" style="font-size: 11px;">- Hi Mr. Labuntog</span> 
                                <span class="badge">12:00 AM</span>
                              </a>
                              <a href="#" class="list-group-item">
                                <input type="checkbox"> <span class="name" style="min-width: 120px; display: inline-block;">Drafts</span>
                                <span class="text-muted" style="font-size: 11px;">- Hi Mr. Labuntog</span> 
                                <span class="badge">12:00 AM</span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <a class="btn btn-danger waves-effect waves-light m-b-30 pull-right">Delete</a>
                        </div>
                      </form>
                      <form class="form-group">
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
        
        <!-- Compose Modal -->
      <div class="modal fade" id="compose" role="dialog">
        <div class="modal-dialog modal-lg">
        
          <!-- Modal content-->
          <div class="modal-content">
            <!-- <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> -->
            <div class="modal-body">
              <div class="panel panel-custom">
                <div class="panel-heading"><i class="fa fa-envelope fa-lg"></i> <label>Compose</label></div>
                <div class="panel-body" style="margin-top: 10px;">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marbot">
                      <div class="col-xs-10 col-sm-7 col-md-6 col-lg-5">
                        <input type="text" class="form-control" id="recipient" placeholder="To:" />
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marbot">
                      <div class="col-xs-10 col-sm-7 col-md-6 col-lg-5">
                        <input type="text" class="form-control" id="cc" placeholder="Cc:" />
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marbot">
                      <div class="col-xs-10 col-sm-7 col-md-6 col-lg-5">
                        <input class="form-control" placeholder="Subject:">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marbot">
                      <div class="col-lg-12">
                        <textarea class="form-control" style="height: 150px;"></textarea>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                      <div class="btn-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="pull-right">
                          <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o fa-lg"></i> Save Drafts</button>
                          <button type="button" class="btn btn-info btn-primary"><i class="fa fa-paper-plane fa-lg"></i> Send</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>

      <!-- Modal For Add New Memo -->
      <div id="addmemo" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="panel panel-custom">
                    <div class="panel-heading"><i class="fa fa-bookmark-o fa-lg"></i> <label>Add New Memo</label></div><br>
                    <div class="panel-body" style="margin-bottom: 10px;">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marbot">
                          <div class="col-lg-12">
                            <textarea class="form-control" style="height: 150px;" placeholder="Write something.."></textarea>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginbottom">
                          <div class="col-lg-12">
                            <a class="btn btn-info waves-effect waves-light m-b-30 pull-right"><i class="fa fa-floppy-o fa-lg"></i>Save</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal For Contacts -->
      <div id="contacts" class="modal fade" role="dialog">
        <div class="modal-dialog modal-xl">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="panel panel-custom">
                    <div class="panel-heading"><i class="fa fa-address-book-o fa-lg"></i> <label>Contacts</label></div><br>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-sm-5 col-md-3 col-lg-3">
                          <div class="form-group">
                            <input type="text" id="search" class="form-control" placeholder="Search...">
                          </div>
                        </div>
                        <div class="col-sm-7 col-md-9 col-lg-9">
                          <div class="form-group">
                            <a class="btn btn-info" data-toggle="modal" data-target="#addnew"><i class="fa fa-plus"></i> Add New</a>
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="table-responsive">
                            <table id="myTable" class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th style="max-width: 95px;">Image</th>
                                  <th>Name</th>
                                  <th>Role</th>
                                  <th>Number</th>
                                  <th>Email</th>
                                  <th colspan="">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td>
                                    <img src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t1.0-9/21272248_1880894221926819_3661498612912457806_n.jpg?oh=a00766892011dbbd04a07c71fca4d17d&oe=5A8DB442" height="60px" width="60px" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                  </td>
                                  <td>John Mayson Labuntog</td>
                                  <td>Teacher</td>
                                  <td>09875654983</td>
                                  <td>mayson@simplevia.com</td>
                                  <td>
                                    <a class="btn btn-warning">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>
                                    <img src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t1.0-9/22853284_1690766500956263_4575511868439774205_n.jpg?oh=7a3f6bb7ce94a462855d2e9a8d4206db&oe=5A9754DD" height="60px" width="60px" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                  </td>
                                  <td>John Xavier Buenaventura</td>
                                  <td>Parent</td>
                                  <td>098473473543</td>
                                  <td>xavier@simplevia.com</td>
                                  <td>
                                    <a class="btn btn-warning">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>
                                    <img src="https://scontent.fmnl4-4.fna.fbcdn.net/v/t1.0-9/13087595_1249731295055452_3600774611463302131_n.jpg?oh=aea4964d51c6e06d8a035c787b3a7a04&oe=5AACB57D" height="60px" width="60px" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                  </td>
                                  <td>John Benson Leabres</td>
                                  <td>Teacher</td>
                                  <td>098847568938</td>
                                  <td>benso@simplevia.com</td>
                                  <td>
                                    <a class="btn btn-warning">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal For New Contact -->
      <div id="addnew" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">

          <div class="modal-content">
            <!-- <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> -->
            <div class="modal-body"> 
              <div class="panel panel-custom">
                <div class="panel-heading"><i class="fa fa-plus-square fa-lg"></i> Add New Contact</div><br />
                <div class="panel-body">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <figure>
                          <img id="newimg" src="https://vignette.wikia.nocookie.net/expanse/images/8/80/Char_icon.png/revision/latest?cb=20170225162026" style="display: fixed; margin: auto;" height="100" width="120" placeholder="Upload Photo">
                          <figcaption>
                             <span class="btn btn-file">
                             <input class="required input-sm" type="file" id="newimginp" name="file" style="width: 90px;">
                             </span>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                      <div class="form-group">
                        <label>Name: </label>
                        <input class="form-control">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <div class="form-group">
                        <label class="control-label" for="dialect">Role: </label>
                          <select class="form-control" id="select-religion">
                            <option selected="" disabled="">- SELECT ROLE -</option>
                            <option value="Admin">Admin</option>
                            <option value="Clinic">Clinic</option>
                            <option value="Clinic">Counselor</option>
                            <option value="Finance">Finance</option>
                            <option value="Hr">Human Resource</option>
                            <option value="Library">Library</option>
                            <option value="maintenance">Maintenance</option>
                            <option value="Security">Security</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Trans">Transportation</option>
                            <option value="Others">Others</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                      <div class="form-group">
                        <label>Email: </label>
                        <input class="form-control">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      <div class="form-group">
                        <label>Number: </label>
                        <input class="form-control">
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                      <div class="pull-right">
                        <a class="btn btn-md btn-info"> <i class="fa fa-plus fa-lg"></i> Save</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <!-- plugin scripts -->
      <script src="{!! asset('assets/jquery/dist/jquery.min.js')!!}"></script>
      <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js')!!}"></script>

      <script src="{!! asset('assets/calendar/moment.min.js')!!}"></script>
      <script src="{!! asset('assets/calendar/fullcalendar.min.js')!!}"></script>

      <script src="{!! asset('assets/DataTables/js/jquery.dataTables.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/datatables.bootstrap.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.buttons.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.bootstrap.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.html5.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/buttons.print.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedColumns.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.fixedHeader.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.keyTable.min.js')!!}"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js')!!}"></script>


      <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>
      <script type="text/javascript"  src="{!!asset('assets/custom/css/Messages&Memos/chc.js')!!}"></script>

      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


      <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
      <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
      <script src="{!! asset('assets/bootstrap/js/bootstrap-tokenfield.min.js')!!}"></script>
      <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script> 
      <!-- end of plugin scripts -->
      <!-- your custom script -->
      <script src="{!! asset('js/Parent/messagescalendar.js')!!}"></script>  
      <!-- end of your custom script -->
   </body>
</html>