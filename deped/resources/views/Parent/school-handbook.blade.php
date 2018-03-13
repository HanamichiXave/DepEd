<!DOCTYPE html>
<html>
   <head>
      <title>Policy</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png')!!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, user-scalable = no">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
      <link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css')!!}" rel="stylesheet">
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css')!!}" rel="stylesheet">
      <!-- <link href="../../content/turnflip/Turncustom.css" rel="stylesheet"> -->
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css')!!}" rel="stylesheet">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

      <!-- end of css  -->
      <!-- your custom css -->
      <script src="{!! asset('assets/turnflip/lib/turn.min.js')!!}"></script>
      <script src="{!! asset('assets/turnflip/lib/turn.js')!!}"></script>
      <script src="{!! asset('assets/turnflip/lib/zoom.min.js')!!}"></script>
      <script src="{!! asset('assets/turnflip/lib/zoom.js')!!}"></script>
      <!-- end of your custom css -->
   </head>
 <!--  <style>
  @import url(https://fonts.googleapis.com/css?family=Lato:900);


h1 {
  font-size: 4em;
  color: white;
}
h2 {
  font-size: 2em;
  color: white;
}
a {
    color: #666;
  text-decoration: none;
}

.page:not(:first-child)+div:before {
  content: "Page " attr(title);
  color: rgba(255,255,255,.75);
  left: 20px;
  top: 10px;
  position: absolute;
  text-shadow: 0 0 6px black;
}
.page {
  background: no-repeat center top;
  background-size: 100%;
  width: 554px;
  height: 554px;
  overflow: hidden;
}

.hard {
  background-position: center;
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size: auto;
  width: 100%;
  background-size: 100% 100%;
}


html, body {
    margin: 0;
    height: 100%;
}

  html {
    overflow-y: hidden;
  }
body.hide-overflow {
    overflow: hidden;
}

.t {
    display: table;
    width: 50%;
    height: 60%;
    padding-bottom: 0;
}

.tc {
    vertical-align: middle;
    text-align: center;
}
/* book */

.book {
    margin: 0;
    width: 90%;
    height: 100%;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.book .page {
    height: 100%;
}

.book .page img {
    max-width: 100%;
    height: 100%;
}
.bookbord {
  border: 3px solid #e4e3dd;
}
/*@media  print {
   body * {
      visibility: hidden;         }
   #book img {
      visibility: visible;
      display: block;
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
   }
}*/
</style> -->
<style type="text/css">
  html, body {
    margin: 0;
    height: 100%;
}

/* body {
    background-color: #333;
} */



/* helpers */

.t {
    display: table;
    width: 100%;
    height: 100%;
}

.tc {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.rel {
    position: relative;
}

/* book */

.book {
    margin: 0 auto;
    width: 90%;
    height: 90%;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.book .page {
    height: 100%;
}

.book .page img {
    max-width: 100%;
    height: 100%;
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
      <div class="container" >
        <br>
        <br>
        <div class="page-header" style="color: #000033"><h2><strong>Parent Management</strong></h2></div>
        <ol class="breadcrumb" style="background-color: #D9EDF7">
          <li><a href="{{URL::Route('parent')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
          <li>Student Handbook</li>
        </ol>
         <section>
         <!-- your code start here -->
         <!-- Please observe indention -->
          <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-custom" >
                <div class="panel-heading"><i class="fa fa-book fa-lg"></i> Student Handbook</div>
                  <div class="panel-body" style="background-color: #35272a">

                    <div class="t">
                      <div class="tc rel">
                          <div class="book" id="book">
                            <div id="1" class="page hard page1 bookbord" ><img src="{!! asset('assets/images/handbook.jpg')!!}" />
                            </div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/1.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/2.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/3.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/4.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/5.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/6.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/7.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/8.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/9.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/10.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/11.png')!!}" alt="" /></div>
                              <div class="page"><img src="{!! asset('assets/turnflip/picture/12.png')!!}" alt="" /></div>
                            </div>
                         
                            <div class="pageSearch">
                              <hr/> <label style="color:#fff;">Page:</label>
                                <input type="number" id="pageFld" min="1"> <button type="button" class="btn btn-success" id="btnPrint" >Print Page</button>
                                <a href="../../content/turnflip/studentmanual.pdf" download="UserManual"><button type="button" class="btn btn-info fa fa-download fa-lg" style="height: 35px;"></button></a>
                                <!-- <button type="button" class="btn btn-info">
                                      <span class="glyphicon glyphicon-search"></span> Search
                                  </button> --><br>
                                <button class="btn btn-info" id="prevBtn" style="margin-top: 1%;">Previous</button>
                                <button class="btn btn-info" id="nextBtn" style="margin-top: 1%;">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        
         <!-- end of your code -->
         <!-- footer here -->
         </section>
          <footer class="navbar-fixed-bottom">
             <div class="container-fluid footer">
                <p class="pull-right powerby">&copy; 2016 - Powered by <a href="http://www.simplevia.com" class="quicktrackcolor">QuickTrack</a></p>
             </div>
          </footer>
         <!-- end foooter -->
      </div>
      <!-- plugin scripts -->
      <script src="{!! asset('assets/jquery/dist/jquery.min.js')!!}"></script>
      <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js')!!}"></script>
      <script src="{!! asset('assets/turnflip/lib/turn.min.js')!!}"></script>
      <script src="{!! asset('assets/turnflip/lib/turn.js')!!}"></script>
      <script src="{!! asset('assets/turnflip/lib/zoom.min.js')!!}"></script>
      <script src="{!! asset('assets/turnflip/lib/zoom.js')!!}"></script>
      <!-- DataTable Link -->
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
      <!-- End of LInk -->

      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- end of plugin scripts -->
      <!-- your custom script -->


      <!-- This is the Code for dataTable, Please copy paste -->
      <script src="{!! asset('js/Parent/school-handbook.js')!!}"></script>
      <!-- This is the Code for dataTable -->

      <!-- end of your custom script -->
   </body>
</html>