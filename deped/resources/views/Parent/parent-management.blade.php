<!DOCTYPE html>
<html>
<head>
	<title>Parent Management Portal</title>
	<link rel="icon" href="{!! asset('assets/images/logonatin.png')!!}">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">
	<!-- css for nav bar -->
	<link href="{!! asset('assets/custom/css/style.css')!!}" rel="stylesheet">
	<link href="{!! asset('assets/fontawesome/font-awesome.min.css')!!}" rel="stylesheet">
	<link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css')!!}" rel="stylesheet">
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
		<br>    
        <ol class="breadcrumb" style="background-color: #D9EDF7">
           <li><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</li>
       </ol>
	<!-- your code start here -->
	<!-- Please observe indention -->
		<div class="row">
			<center>
		        <div class="col-sm-6 col-md-6 col-lg-4">
		        	<a href="{{URL::Route('parentdashboard')}}" >
	                  <div class="hovereffect">
	                      <img class="img-responsive" src="{!! asset('assets/images/Super Admin/v5/dashboard.png')!!}" height="100" width="100" alt="">
	                      <div class="overlay">
	                         <h2>Dashboard</h2>
	                          <p class="info">
	                                 Provides in-depth data analysis, organizes and presents information regarding all student data.
	                          </p>
	                        </div>
	                    </div>
	                </a>
		        </div>
		        <div class="col-sm-6 col-md-6 col-lg-4">
		        	<a data-toggle="modal" data-target="#schoolHandbook">
	                  <div class="hovereffect">
	                      <img class="img-responsive" src="{!! asset('assets/images/Parent/book.png')!!}" height="100" width="100" alt="">
	                      <div class="overlay">
	                         <h2>School Handbook and Announcement</h2>
	                          <p class="info">
	                                 Read all school announcements and View the School's Handbook. 
	                          </p>
	                        </div>
	                    </div>
	                </a>
		        </div>
		        <div class="col-sm-12 col-md-12 col-lg-4">
		        	<a href="{{URL::Route('schoolactivities')}}">
	                  <div class="hovereffect">
	                      <img class="img-responsive" src="{!! asset('assets/images/Parent/sactivity.png')!!}" height="100" width="100" alt="">
	                      <div class="overlay">
	                         <h2>School Activities</h2>
	                          <p class="info">
	                                 See all School activities that happened and also upcoming activities. 
	                          </p>
	                        </div>
	                    </div>
	                </a>
		        </div>
	        </center>
	    </div>
	    <div id="schoolHandbook" class="modal fade" role="dialog">
		    <div class="modal-dialog modal-lg">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		            </div>
		            <div class="modal-body">
		                <br />
		                <div class="panel panel-custom">
							<div class="panel-heading"><i class="fa fa-bullhorn"></i>&nbsp&nbsp Handbook and Announcement</div>
							<div class="panel-body"> 
			                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
			                    	<a href="{{URL::Route('schoolhandbook')}}">
					                  <div class="hovereffect">
					                      <img class="img-responsive" src="{!! asset('assets/images/Parent/bookStud.png')!!}" height="100" width="100" alt="">
					                      <div class="overlay">
					                         <h2>Student Handbook</h2>
					                          <p class="info">
					                                 Everything a student needs to learn from rules and regulations to proper manners inside the school.
					                          </p>
					                        </div>
					                    </div>
					                </a>
			                    </div>
			                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			                    	<a href="{{URL::Route('schoolannouncement')}}">
					                  <div class="hovereffect">
					                      <img class="img-responsive" src="{!! asset('assets/images/Parent/announcement.png')!!}" height="100" width="100" alt="">
					                      <div class="overlay">
					                         <h2>School Announcement</h2>
					                          <p class="info">
					                                 Announcements made by school staffs.
					                          </p>
					                        </div>
					                    </div>
					                </a>
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
	<script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
	<script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
	<!-- end of plugin scripts -->
	<!-- your custom script -->

	<!-- end of your custom script -->
</body>
</html>