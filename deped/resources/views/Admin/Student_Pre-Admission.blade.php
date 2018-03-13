<!DOCTYPE html>
<html>
<head>
	<title>Administration Management</title>
	<link rel="icon" href="{!! asset('assets/images/logonatin.png') !!}">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
	<link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('assets/custom/css/style.css') !!}" rel="stylesheet" type="text/css" />
	<link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" />
	<!-- end of css  -->
	<!-- your custom css -->

	<!-- end of your custom css -->
</head>
<style>
.no-border-right {
  border-right: solid 1px #FFF!important;
}
.dataTables_length {
 margin-bottom: 15px;
 margin-top: 5px;
}
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #;
}

.dropdown-submenu>.dropdown-menu {
	top: 0;
	left: 100%;

}

.dropdown-submenu:hover>.dropdown-menu {
	display: block;
}

.dropdown-submenu>a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	border-left-color: #ccc;
	margin-top: 5px;
	margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
	border-left-color: #fff;
}

.dropdown-submenu.pull-left {
	float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
	left: -100%;
	margin-left: 10px;
	-webkit-border-radius: 6px 0 6px 6px;
	-moz-border-radius: 6px 0 6px 6px;
	border-radius: 6px 0 6px 6px;
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
		<div class="page-header" style="color: #000033"><h2><strong>Administration Management</strong></h2></div>
		<ol class="breadcrumb" style="background-color: #D9EDF7">
            <li><a href="{{URL::Route('admin')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i><label>Home</label></a></li>
            <li>Student Pre-Admission</li>
        </ol>
		<!-- your code start here -->
		<!-- Please observe indention -->
               <form method="post" action="{{action('AdminController@Dostudpreadmission')}}">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="pull-right">
						<button type="button" class="btn btn-default" value='Print' onclick='printDiv();' ><i class="fa fa-print" aria-hidden="true"></i>Print Form</button>
					</div>
				</div>
		        <br>
		        <br>
	    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
	        <ul class="nav nav-pills nav-stacked">
	            <li role="presentation" class="active"><a data-toggle="tab" href="#stud-app">Student Application Form</a></li>
	            <li role="presentation"><a data-toggle="tab" href="#stud-req">Student Requirement &amp Result Pre-Admission</a></li>
	            <li role="presentation"><a data-toggle="tab" href="#list-preadmission">List of Student Pre-Admission</a></li>
	        </ul>
	    </div>
	    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
	        <div class="tab-content">
	        	
	            <div class="tab-pane fade in active" id="stud-app">
	                <div class="panel panel-custom">
	                	<div class="panel-heading">IA. APPLICANTS INFORMATION</div>
	                    <div class="panel-body">
	                    	<div class="row">
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Surname</label>
		                                <input class="form-control" type="text" name="surname">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>First Name</label>
		                                <input class="form-control" type="text" name="firstname">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Middle Name</label>
		                                <input class="form-control" type="text" name="middlename">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<label>Application for:</label>
									<div class="dropdown">
										<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
											<span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
													<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
													<li class="dropdown-submenu">
														<a class="test" href="#">Another dropdown <span class="caret"></span></a>
														<ul class="dropdown-menu">
															<li><a href="#">3rd level dropdown</a></li>
															<li><a href="#">3rd level dropdown</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
													<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
													<li class="dropdown-submenu">
														<a class="test" href="#">Another dropdown <span class="caret"></span></a>
														<ul class="dropdown-menu">
															<li><a href="#">3rd level dropdown</a></li>
															<li><a href="#">3rd level dropdown</a></li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="dropdown-submenu">
												<a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
												<ul class="dropdown-menu">
													<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
													<li><a tabindex="-1" href="#">2nd level dropdown</a></li>
													<li class="dropdown-submenu">
														<a class="test" href="#">Another dropdown <span class="caret"></span></a>
														<ul class="dropdown-menu">
															<li><a href="#">3rd level dropdown</a></li>
															<li><a href="#">3rd level dropdown</a></li>
														</ul>
													</li>
												</ul>
											</li>

										</ul>
									</div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
		                            <div class="form-group">
		                                <label>Address: </label>
		                                <input class="form-control" type="text" name="address">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Citizenship</label>
		                                <input class="form-control" type="text" name="citizenship">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
		                            <div class="form-group">
		                                <label>Telephone No. (S)</label>
		                                <input class="form-control" type="text" name="telephone">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
		                            <div class="form-group">
		                                <label>Mobile No. (S)</label>
		                                <input class="form-control" type="number" name="mobile">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
		                            <div class="form-group">
		                                <label>Email</label>
		                                <input class="form-control" type="email" name="email">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
		                            <div class="form-group">
	                                    <label class="control-label" for="dob">Date of Birth *</label>
	                                    <div class="input-group date form_date" data-date-format="dd MM yyyy" data-link-field="dob" data-link-format="dd MM yyyy">
	                                       <input id="dateOfBirth" class="form-control" size="16" type="text" value="date" name="birthdate" readonly="">
	                                       <span class="input-group-addon">
	                                          <div id="dateOfBirthIcon" class="glyphicon glyphicon-calendar datepicker"></div>
	                                       </span>
	                                       <span class="input-group-addon">
	                                          <div id="dateOfBirthCloseIcon" class="glyphicon glyphicon-remove"></div>
	                                       </span>
	                                    </div>
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
		                            <div class="form-group">
		                                <label>Place of Birth</label>
		                                <input class="form-control" type="text" name="birthplace">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
		                            <div class="form-group">
		                                <label>Birth Order</label>
		                                <select class="form-control" name="birth_order">
		                                    <option selected disabled>- SELECT -</option>
		                                    <option value="eldest">Eldest</option>
		                                    <option value="middle">Middle</option>
		                                    <option value="Youngest">Youngest</option>
		                                </select>
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Number of Bro. </label>
		                                <input class="form-control" type="number" name="sibling_b">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Number of Sis. </label>
		                                <input class="form-control" type="number" name="sibling_s">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Religion</label>
		                                <input list="browsers"   name="religion">
		                                <datalist id="browsers">
		                                    <option value="Roman Catholic">Roman Catholic</option>
		                                    <option value="Protestant">Protestant</option>
		                                    <option value="Others">Others</option>
		                                </datalist>
											 
										   
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="protestant" style="display: none;">
		                            <div class="form-group">
		                                <label>Specify</label>
		                                <input class="form-control" type="text" name="">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="others" style="display: none;">
		                            <div class="form-group">
		                                <label>Specify</label>
		                                <input class="form-control" type="text" name="">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Place of Baptism </label>
		                                <input class="form-control" type="text" name="baptism_place">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Date of Baptism </label>
		                                <input class="form-control" type="text" name="baptism">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		                            <div class="form-group">
		                                <label>Church</label>
		                                <input class="form-control" type="text" name="church">
		                            </div>
		                        </div>
		                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-6">
		                            <div class="form-group">
		                                <label>Language(s) Fluent In: </label>
		                                <div class="col-lg-12">
			                                <div class="row">
				                                <div class="checkbox-inline">
				                                    <label style="font-weight: normal;"><input type="checkbox" value="chinese(mandarin)" name="language[]" >Chinese (Mandarin</label>
				                                </div>
				                                <div class="checkbox-inline">
				                                    <label style="font-weight: normal;"><input type="checkbox" value="chinese(fookien)" name="language[]" >Chinese (Fookien</label>
				                                </div>
				                            </div>
				                            <div class="row">
				                                <div class="checkbox-inline">
				                                    <label style="font-weight: normal;"><input type="checkbox" value="filipino" checked name="language[]">Filipino</label>
				                                </div>
				                                <div class="checkbox-inline">
				                                    <label style="font-weight: normal;"><input type="checkbox" value="english" checked name="language[]">English</label>
				                                </div>
				                            </div>
				                            <div class="row">
				                                <div class="form-inline">
				                                    <label class="checkbox-inline"><input type="checkbox" value="others" name="language[]">Others: </label>
				                                    <input class="form-control" type="" name="">
				                                </div>
				                            </div>
				                        </div>
		                            </div>
		                        </div>
		                    </div>
	                    </div>
	                </div>
	                <div class="panel panel-custom">
	                	<div class="panel-heading">IB. SCHOLASTICS BACKGROUND</div>
	                    <div class="panel-body">
	                        <p>List in order, beginning from the lowest grade, ALL schools attended. This must be a COMPLETE listing of evevry school in which the child has been enrolled.</p>
	                        <div style="overflow-x: auto;">
	                            <table id="scholastic" class="table table-bordered">
	                                <thead>
	                                    <tr>
	                                        <th style="width: 30%; text-align: center;">School Attended</th>
	                                        <th style="width: 35%; text-align: center;">Address</th>
	                                        <th style="width: 20%; text-align: center;" colspan="3">Level</th>
	                                        <th style="width: 15%; text-align: center;" colspan="3">School Year</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="sa_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="schoolattended"></td>
	                                        <td class="no-border-right">
	                                            <center>
	                                                <input class="form-control" style="width:50px;" type="number" name="sa_level" placeholder="G - 1"> 
	                                            </center>
	                                        </td>
	                                        <td class="no-border-right">
	                                        	<center>
	                                        		<label> - </label>
	                                        	</center>
	                                        </td>
	                                        <td>
	                                        	<center>
	                                        		<input class="form-control" style="width:50px;" type="number" name="sa_level" placeholder="G - 3">
	                                        	</center>
	                                        </td>
	                                        <td class="no-border-right">
	                                            <center>
	                                                <input class="form-control" style="width: 60px;" type="number" name="sa_year" placeholder="2013" maxlength="4">
	                                            </center>
	                                        </td>
	                                        <td class="no-border-right">
	                                        	<center>
	                                        		<label> - </label>
	                                        	</center>
	                                        </td>
	                                        <td>
	                                        	<center>
	                                        		<input class="form-control" style="width: 60px;" type="number" name="sa_year" placeholder="2016" maxlength="4">
	                                        	</center>
	                                        </td>
	                                    </tr>
	                                    <tr>
	                                        <td><input class="form-control input-sm" type="" name=""></td>
	                                        <td><input class="form-control input-sm" type="" name=""></td>
	                                        <td class="no-border-right">
	                                            <center>
	                                                <input class="form-control" style="width:50px;" type="number" name="sa_level" placeholder="G - 1"> 
	                                            </center>
	                                        </td>
	                                        <td class="no-border-right">
	                                        	<center>
	                                        		<label> - </label>
	                                        	</center>
	                                        </td>
	                                        <td>
	                                        	<center>
	                                        		<input class="form-control" style="width:50px;" type="number" name="sa_level" placeholder="G - 3">
	                                        	</center>
	                                        </td>
	                                        <td class="no-border-right">
	                                            <center>
	                                                <input class="form-control" style="width: 60px;" type="number" name="sa_level" placeholder="2013" maxlength="4">
	                                            </center>
	                                        </td>
	                                        <td class="no-border-right">
	                                        	<center>
	                                        		<label> - </label>
	                                        	</center>
	                                        </td>
	                                        <td>
	                                        	<center>
	                                        		<input class="form-control" style="width: 60px;" type="number" name="sa_year" placeholder="2016" maxlength="4">
	                                        	</center>
	                                        </td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                            <button class="btn btn-info" id="btnAddRow" name="">Add more.</button><button class="btn btn-warning" id="btndeleteRow" style="margin-left: 10px;" name="">Delete Row</button>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-custom">
	                	<div class="panel-heading">II. PARENTS' INFORMATION</div>
	                    <div class="panel-body">
	                        <ul class="nav nav-pills nav-justified">
	                            <li class="active"><a data-toggle="tab" href="#father-info">Father's Information</a></li>
	                            <li><a data-toggle="tab" href="#mother-info">Mother's Information</a></li>
	                        </ul>
	                        <div class="tab-content">
	                            <div id="father-info" class="tab-pane fade in active">
	                                <br>
	                                <div class="row">
	                                    <div class="col-lg-12">
	                                        <div class="row">
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Surname</label>
	                                                    <input class="form-control" type="text" name="f_surname">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>First Name</label>
	                                                    <input class="form-control" type="text" name="f_firstname">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Middle Name</label>
	                                                    <input class="form-control" type="text" name="f_middlename">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                                                <div class="form-group">
	                                                    <label>Address</label>
	                                                    <input class="form-control" type="text" name="f_address">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Telephone No. (S)</label>
	                                                    <input class="form-control" type="number" name="f_telephone">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Mobile No. (S)</label>
	                                                    <input class="form-control" type="text" name="f_mobile">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Email</label>
	                                                    <input class="form-control" type="text" name="f_email">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Occupation/Profession</label>
	                                                    <input class="form-control" type="text" name="f_occupation">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Business Name</label>
	                                                    <input class="form-control" type="text" name="f_bname">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Business Email</label>
	                                                    <input class="form-control" type="text" name="f_bemail">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                                                <div class="form-group">
	                                                    <label>Company Address</label>
	                                                    <input class="form-control" type="text" name="f_company_address">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Telephone No. (S)</label>
	                                                    <input class="form-control" type="text" name="">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Religion</label>
	                                                    <select class="form-control" id="religion-select" name="f_religion">
	                                                        <option selected disabled>- SELECT RELIGION -</option>
	                                                        <option value="1">Roman Catholic</option>
	                                                        <option value="2">Protestant</option>
	                                                        <option value="3">Others</option>
	                                                    </select>
	                                                </div>
	                                            </div>
	                                            <div class="col-lg-4" id="protest" style="display: none;">
	                                                <div class="form-group">
	                                                    <label>Specify</label>
	                                                    <input class="form-control" type="text" name="f_religion">
	                                                </div>
	                                            </div>
	                                            <div class="col-lg-4" id="other" style="display: none;">
	                                                <div class="form-group">
	                                                    <label>Specify</label>
	                                                    <input class="form-control" type="text" name="f_religion">
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div id="mother-info" class="tab-pane fade in">
	                                <br>
	                                <div class="row">
	                                    <div class="col-sm-12 col-lg-12">
	                                        <div class="row">
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Maiden Name</label>
	                                                    <input class="form-control" type="text" name="m_maidename">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>First Name</label>
	                                                    <input class="form-control" type="text" name="m_firstname">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Middle Name</label>
	                                                    <input class="form-control" type="text" name="m_middlename">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                 
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                 
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                
	                                            </div>
	                                            <div class="col-lg-12">
	                                                <div class="form-group">
	                                                    <label>Address</label>
	                                                    <input class="form-control" type="text" name="m_address">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Telephone No. (S)</label>
	                                                    <input class="form-control" type="text" name="m_telephone">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Mobile No. (S)</label>
	                                                    <input class="form-control" type="number" name="m_mobile">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Email</label>
	                                                    <input class="form-control" type="text" name="m_email">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Occupation/Profession</label>
	                                                    <input class="form-control" type="text" name="m_occupation">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Business Name</label>
	                                                    <input class="form-control" type="text" name="m_bname">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Business Email</label>
	                                                    <input class="form-control" type="text" name="m_bemail">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	                                                <div class="form-group">
	                                                    <label>Company Address</label>
	                                                    <input class="form-control" type="text" name="m_company_address">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Telephone No. (S)</label>
	                                                    <input class="form-control" type="text" name="m_company_address">
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
	                                                <div class="form-group">
	                                                    <label>Religion</label>
	                                                    <select class="form-control" id="religion-select" name="m_religion">
	                                                        <option selected disabled>- SELECT RELIGION -</option>
	                                                        <option value="roman catholic">Roman Catholic</option>
	                                                        <option value="protestant">Protestant</option>
	                                                        <option value="other">Others</option>
	                                                    </select>
	                                                </div>
	                                            </div>
	                                            <div class="col-lg-4" id="protestant" style="display: none;">
	                                                <div class="form-group">
	                                                    <label>Specify</label>
	                                                    <input class="form-control" type="text" name="">
	                                                </div>
	                                            </div>
	                                            <div class="col-lg-4" id="others" style="display: none;">
	                                                <div class="form-group">
	                                                    <label>Specify</label>
	                                                    <input class="form-control" type="text" name="">
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-custom">
	                	<div class="panel-heading">II. A. LANGUAGES</div>
	                    <div class="panel-body">
	                        <div style="overflow-x:auto;">
	                            <table class="table table-bordered">
	                                <thead style="background-color: lightgreen;">
	                                    <tr>
	                                        <th colspan="2" style="width: 20%; text-align: center;"></th>
	                                        <th colspan="4" style="width: 40%; text-align: center;">FATHER</th>
	                                        <th colspan="4" style="width: 40%; text-align: center;">MOTHER</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <th colspan="2" style="text-align: center;">LANGUAGE</th>
	                                        <th style="text-align: center; font-size: 11px;">CAN SPEAK</th>
	                                        <th style="text-align: center; font-size: 11px;">CAN READ</th>
	                                        <th style="text-align: center; font-size: 11px;">CAN WRITE</th>
	                                        <th style="text-align: center; font-size: 11px;">CAN UNDERSTAND</th>
	                                        <th style="text-align: center; font-size: 11px;">CAN SPEAK</th>
	                                        <th style="text-align: center; font-size: 11px;">CAN READ</th>
	                                        <th style="text-align: center; font-size: 11px;">CAN WRITE</th>
	                                        <th style="text-align: center; font-size: 11px;">CAN UNDERSTAND</th>
	                                    </tr>
	                                    <tr>
	                                        <td rowspan="2" style="font-size: 12px; text-align: center; vertical-align: middle; width: 10%;">CHINESE</td>
	                                        <td style="font-size: 12px; text-align: center; vertical-align: middle; width: 10%;">(MANDARIN)</td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_chi_mandarin[]" value="can speak"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_chi_mandarin[]" value="can read"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_chi_mandarin[]" value="can write"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_chi_mandarin[]" value="can understand"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_chi_mandarin[]" value="can speak"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_chi_mandarin[]" value="can read"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_chi_mandarin[]" value="can write"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_chi_mandarin[]" value="can understand"></td>
	                                    </tr>
	                                    <tr>
	                                        <td style="font-size: 12px; text-align: center; vertical-align: middle;">(FOOKIEN)</td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_chi_fookien[]" value="can speak"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_chi_fookien[]" value="can read"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_chi_fookien[]" value="can write"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_chi_fookien[]" value="can understand"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_chi_fookien[]" value="can speak"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_chi_fookien[]" value="can read"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_chi_fookien[]" value="can write"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_chi_fookien[]" value="can understand"></td>
	                                    </tr>
	                                    <tr>
	                                        <td style="font-size: 12px; text-align: center; vertical-align: middle;">ENGLISH</td>
	                                        <td></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="f_english[]" value="can speak"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="f_english[]" value="can read"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="f_english[]" value="can write"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="f_english[]" value="can understand"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="m_english[]" value="can speak"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="m_english[]" value="can read"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="m_english[]" value="can write"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="m_english[]" value="can understand"></td>
	                                    </tr>
	                                    <tr>
	                                        <td style="font-size: 12px; text-align: center; vertical-align: middle;">FILIPINO</td>
	                                        <td></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="f_filipino[]" value="can speak" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="f_filipino[]" value="can read" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="f_filipino[]" value="can write" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="f_filipino[]" value="can understand" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="m_filipino[]" value="can speak" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="m_filipino[]" value="can read" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="m_filipino[]" value="can write" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" checked name="m_filipino[]" value="can understand" ></td>
	                                    </tr>
	                                    <tr>
	                                        <td style="font-size: 12px; text-align: center; vertical-align: middle;">OTHERS</td>
	                                        <td></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_other[]" value="can speak" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_other[]" value="can read" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_other[]" value="can write" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="f_other[]" value="can understand" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_other[]" value="can speak" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_other[]" value="can read" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_other[]" value="can write" ></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="m_other[]" value="can understand" ></td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-custom">
	                	<div class="panel-heading">II. B. EDUCATION</div>
	                    <div class="panel-body">
	                        <div style="overflow-x: auto;">
	                            <table class="table table-bordered">
	                                <thead>
	                                    <tr>
	                                        <th style="text-align: center; font-size: 12px; width: 12%;">FATHER</th>
	                                        <th style="text-align: center; font-size: 12px; width: 23%;">NAME OF SCHOOL</th>
	                                        <th style="text-align: center; font-size: 12px; width: 30%">ADDRESS</th>
	                                        <th style="text-align: center; font-size: 12px; width: 15%;">DEGREE OBTAINED</th>
	                                        <th style="text-align: center; font-size: 12px; width: 20%;">SCHOOL YEAR ATTENDED</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td>Grade School</td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_grade_school_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_grade_school_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_grade_school_degree"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="f_grade_school_year_attended"></td>
	                                    </tr>
	                                    <tr>
	                                        <td>High School</td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_hs_school_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_hs_school_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_hs_school_degree"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="f_hs_school_year_attended"></td>
	                                    </tr>
	                                    <tr>
	                                        <td>College</td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_college_school_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_college_school_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_college_school_degree"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="f_college_school_year_attended"></td>
	                                    </tr>
	                                    <tr>
	                                        <td>Post Graduate</td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_post_grade_school_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_post_grade_school_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="f_post_grade_school_degree"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="f_post_grade_school_year_attended"></td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                        <div style="overflow-x: auto;">
	                            <table class="table table-bordered">
	                                <thead>
	                                    <tr>
	                                        <th style="text-align: center; font-size: 12px; width: 12%;">MOTHER</th>
	                                        <th style="text-align: center; font-size: 12px; width: 23%;">NAME OF SCHOOL</th>
	                                        <th style="text-align: center; font-size: 12px; width: 30%">ADDRESS</th>
	                                        <th style="text-align: center; font-size: 12px; width: 15%;">DEGREE OBTAINED</th>
	                                        <th style="text-align: center; font-size: 12px; width: 20%;">SCHOOL YEAR ATTENDED</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td>Grade School</td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="'m_grade_school_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="m_grade_school_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="m_grade_school_degree"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="m_grade_school_year_attended"></td>
	                                    </tr>
	                                    <tr>
	                                        <td>High School</td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="'m_hs_school_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="m_hs_school_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="m_hs_school_degree"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="m_hs_school_year_attended"></td>
	                                    </tr>
	                                    <tr>
	                                        <td>College</td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="'m_college_school_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="m_college_school_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="m_college_school_degree"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="m_college_school_year_attended"></td>
	                                    </tr>
	                                    <tr>
	                                        <td>Post Graduate</td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="'m_post_grade_school_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="m_post_grade_school_address"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="m_post_grade_school_degree"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="m_post_grade_school_year_attended"></td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-custom">
	                	<div class="panel-heading">II. C. CITIZENSHIP</div>
	                    <div class="panel-body">
	                        <div style="overflow-x: auto;">
	                            <table class="table table-bordered">
	                                <thead>
	                                    <tr>
	                                        <th style=" width: 10%;"></th>
	                                        <th style="text-align: center; width: 10%;">Chinese</th>
	                                        <th style="text-align: center; width: ">Native Born Filipino</th>
	                                        <th style="text-align: center; width: ">Naturalized Filipino</th>
	                                        <th style="text-align: center; width: ">Applicant for Naturalized</th>
	                                        <th style="text-align: center; width: ">Other Nationality</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td style="text-align: center;">Father</td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="father_citizenship[]" value="chinese"></td>			
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="father_citizenship[]" checked value="native born filipino"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="father_citizenship[]" value="naturalized filipino"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="father_citizenship[]" value="applicant for naturalized"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="father_citizenship[]" value="other nationality"></td>
	                                    </tr>
	                                    <tr>
	                                        <td style="text-align: center;">Mother</td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="mother_citizenship[]" value="chinese"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="mother_citizenship[]" checked value="native born filipino"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="mother_citizenship[]" value="naturalized filipino"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="mother_citizenship[]" value="applicant for naturalized"></td>
	                                        <td style="text-align: center; vertical-align: middle;"><input type="checkbox" name="mother_citizenship[]" value="other nationality"></td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-custom">
	                	<div class="panel-heading">III. INFORMATION ON BROTHERS &amp; SISTERS</div>
	                    <div class="panel-body">
	                        <div style="overflow-x: auto;">
	                            <table id="brothers" class="table table-bordered">
	                                <thead>
	                                    <tr>
	                                        <th style="text-align: center; width: 30%;">NAME</th>
	                                        <th style="text-align: center; width: 30%;">CHINESE NAME</th>
	                                        <th style="text-align: center; width: 15%;">DATE OF BIRTH</th>
	                                        <th style="text-align: center; width: 8%;">AGE</th>
	                                        <th style="text-align: center; width: 8%;">SEX</th>
	                                        <th style="text-align: center; width: 10%;">GR./YR.</th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                    <tr>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="sibling_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name=""></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="sibling_birthdate"></td>
	                                        <td><input class="form-control input-sm tb-input" type="number" name="sibling_age"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="sibling_sex"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="sibling_gr"></td>
	                                        
	                                    </tr>
	                                    <tr>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="sibling_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name=""></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="sibling_birthdate"></td>
	                                        <td><input class="form-control input-sm tb-input" type="number" name="sibling_age"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="sibling_sex"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="sibling_gr"></td>
	                                    </tr>
	                                    <tr>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="sibling_name"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name=""></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="sibling_birthdate"></td>
	                                        <td><input class="form-control input-sm tb-input" type="number" name="sibling_age"></td>
	                                        <td><input class="form-control input-sm tb-input" type="text" name="sibling_sex"></td>
	                                        <td><input class="form-control input-sm tb-input" type="date" name="sibling_gr"></td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                            <button class="btn btn-info" id="brobtnAddRow" name="">Add more.</button><button class="btn btn-warning" id="brobtndeleteRow" style="margin-left: 10px;" name="">Delete Row</button>
	                        </div>
	                    </div>
	                </div>
	                <div class="panel panel-custom">
	                	<div class="panel-heading">IV. FAMILY STATUS <small style="font-style: italic;">(Please check any statement that applies.)</small></div>
	                    <div class="panel-body">
	                        <h4 style="font-weight: bold;"></h4>
	                        <form class="row">
	                            <div class="col-lg-12">
	                                <div class="col-lg-4">       
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value=" Applicant lives with both parents" checked name="family_status[]"> Applicant lives with both parents</label>
	                                    </div>
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="Applicant lives with grandparents" name="family_status[]"> Applicant lives with grandparents</label>
	                                    </div>
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="Parents are separated" name="family_status[]"> Parents are separated</label>
	                                    </div>
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="" name="family_status[]"> Others</label>
	                                        <input class="form-inline input-bottom" type="" name="" style="width: 1.65in; border-bottom: 1px solid black;">
	                                    </div>
	                                </div>
	                                <div class="col-lg-4">
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="Parents are anunulled/divorced" name="family_status[]"> Parents are anunulled/divorced</label>
	                                    </div>
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="Applicant lives with father only" name="family_status[]"> Applicant lives with father only</label>
	                                    </div>
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="Applicant lives with mother only" name="family_status[]"> Applicant lives with mother only</label>
	                                    </div>
	                                </div>
	                                <div class="col-lg-4">
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="Child is adopted" name="family_status[]"> Child is adopted</label>
	                                    </div>
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="Father is deceased" name="family_status[]"> Father is deceased</label>
	                                    </div>
	                                    <div class="checkbox">
	                                        <label><input type="checkbox" value="Mother is deceased" name="family_status[]"> Mother is deceased</label>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-lg-12">
	                                <p>To whom will the school address its communication regarding the child's application.</p>
	                                    <div class="col-lg-4">
	                                        <select name="childApplications" id="childApplications" class="form-control">
	                                            <option value="" hidden>-Please select...</option>
	                                            <option value="Mr_Mrs">Mr. &amp; Mrs.</option>
	                                            <option value="Mr">Mr.</option>
	                                            <option value="Mrs">Mrs.</option>
	                                            <option value="Ms">Ms.</option>
	                                        </select>
	                                        <br />
	                                    </div>
	                                <div class="col-lg-6">
	                                    <div class="row">
	                                        <div class="col-lg-12">
	                                            <div class="input-group" id="mrmrs">
	                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                                <input class="form-control" type="text"  name="salutation" placeholder="Mr. &amp; Mrs." >
	                                            </div>
	                                            <div class="input-group" id="mr">
	                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                                <input class="form-control" type="text"  name="salutation" placeholder="Mr. ">
	                                            </div>
	                                            <div class="input-group" id="mrs">
	                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                                <input class="form-control" type="text"  name="salutation" placeholder="Mrs. ">
	                                            </div>
	                                            <div class="input-group" id="ms">
	                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                                <input class="form-control" type="text"  name="salutation" placeholder="Ms. ">
	                                            </div>
	                                        </div><br>
	                                    </div>
	                                </div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	                <div class="panel panel-custom">
	                	<div class="panel-heading">V. OTHER INFORMATION</div>
	                    <div class="panel-body">
	                        <form class="row">
	                            <div class="col-lg-12">
	                                <div class="col-lg-12">
	                                    <br>
	                                    <div class="form-inline">
	                                         
                                                   <label class="radio-inline">
                                                      <input type="radio" name="theraphy" value="yes">YES
                                                   </label>
                                                   <label class="radio-inline">
                                                      <input type="radio" name="theraphy" value="no">NO
                                                   </label>
                                                
	                                    </div><br>
	                                        <div class="form-group">
	                                            <label>If yes, please state kind of therapy.</label>
	                                            <input class="form-control input-bottom" type="" name="kind_of_theraphy" size="76">
	                                        </div>
	                                        <br>
	                                        <div class="form-group">
	                                            <label>If yes, please state period of treatment.</label>
	                                            <textarea class="form-control input-bottom" type="" style="resize: none;" name="period_of_treatment"></textarea>
	                                        </div>
	                                </div>
	                            </div>
	                        </form>
	                        <nav aria-label="...">
	                            <ul class="pager">
	                                 <button> save</button>                           
	                            </ul>
	                        </nav>
	                        
	                    </div>
	                </div>
	            </div>
	      
</form>
<input type="hidden" name="_token" value="{{csrf_token()}}">   
	            <div class="tab-pane fade" id="stud-req">
	                <div class="panel panel-custom">
	                	<div class="panel-heading">Requirements and Results</div>
	                    <div class="panel-body">
	                        <div class="row">
	                            <div class="col-lg-3">
	                                <div class="form-group" style="text-align: center;">
	                                    <img src="{!! asset('assets/images/xavier.png') !!}" style="height: 165px; width: 165px;"><br /><br />
	                                    <label>Admission Number</label> <br />
	                                    <input class="bordernone" type="text" width="3%">
	                                </div>
	                            </div>
	                            <div class="col-lg-9">
	                                <div class="row">
	                                    <div class="col-lg-6">
	                                    	<div class="form-inline">
		                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
		                                            <label>Name of Applicant:</label>
		                                        </div>
		                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7">
		                                            <p class="bordernone text-wrap" type="text" size="35"><strong>John Xavier Villarin Buenaventura</strong></p>
		                                        </div>
		                                    </div>
	                                    </div>
	                                    <div class="col-lg-6">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-8">
	                                            <label>Application for Grade:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-4">
	                                            <p class="bordernone text-wrap" type="text" size="35">Grade 11</p>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
	                                            <label>Date Filed:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7">
	                                            <p class="bordernone text-wrap" type="text" size="35">September 25,2017</p>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
	                                            <label>O.R Number for Payment:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7">
	                                            <p class="bordernone text-wrap" type="text" size="35">1023912084</p>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
	                                            <label>Amount:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7">
	                                            <p class="bordernone text-wrap" type="text" size="35">100,000</p>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
	                                            <label>Date of Scheduled Exam:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7">
	                                            <p class="bordernone text-wrap" type="text" size="35">September 29,2017</p>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
	                                            <label>Date of Interview:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7">
	                                            <p class="bordernone text-wrap" type="text" size="35">September 30,2017</p>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
	                                            <label>Result of the Exam:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7" style="margin-bottom: 5px;">
	                                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-check-square-o" aria-hidden="true"></i><strong>ACCEPTED</strong></button><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i><strong>REJECTED</strong></button>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
	                                            <label>Result of the Interview:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7" style="margin-bottom: 5px;">
	                                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-check-square-o" aria-hidden="true"></i><strong>ACCEPTED</strong></button><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i><strong>REJECTED</strong></button>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-12">
	                                        <div class="tryText col-xs-12 col-sm-5 col-md-4 col-lg-5">
	                                            <label>Remarks:</label>
	                                        </div>
	                                        <div class="tryInput col-xs-12 col-sm-7 col-md-8 col-lg-7">
	                                            <p class="bordernone text-wrap" type="text" size="35">Free Tuition fee and Uniform</p>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12">
	                            <hr />
	                            <div class="row">
	                                <center><h3><u>Student Requirement</u></h3></center>
	                                <h4>Attached File</h4>
	                                <table class="table table-hover">
	                                    <tbody>
	                                        <tr>
	                                            <th>Birth Certificate</th>
	                                            <td><a href="#"> View File</a></td>
	                                        </tr>
	                                        <tr>
	                                            <th>Good Moral Certificate</th>
	                                            <td><a href="#"> View File</a></td>
	                                        </tr>
	                                        <tr>
	                                            <th>Student Card</th>
	                                            <td><a href="#"> View File</a></td>
	                                        </tr>
	                                        <tr>
	                                            <th>Add More</th>
	                                            <td><a href="#"> View File</a></td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="tab-pane fade" id="list-preadmission">
	                
	                    <div class="panel-body">
	                        <div class="row">
	                            <div class="clearfix"></div>
	                            <div class="col-lg-12">
	                            	<div class="panel panel-custom">
									  <div class="panel-heading" style="font-size: 20px; font-weight: 350;"><i class="fa fa-users fa-lg"></i> Student List</div>
									   <div class="panel-body">
										   <div class="row">
											<div class="col-sm-6">
												<div class="form-group contact-search m-b-30">
													<input type="text" id="search" class="form-control" style="height: 40px; margin-top: 7px;" placeholder="Search...">
												</div>
											</div>
										</div>
		                                <div class="table-responsive">
		                                    <form>
		                                        <table id="myTable" class=" table table-striped table-hover" cellspacing="0" width="100%">
		                                            <thead>
		                                                <tr class="header thead-color">
		                                                    <th style="width: 2%;  text-align: center;">#</th>
		                                                    <th style="width: 20%;  text-align: center;">Applicant Name</th>
		                                                    <th style="width: 5%;  text-align: center;">Admission Number</th>
		                                                    <th style="width: 8%;  text-align: center;">Application for Grade</th>
		                                                    <th style="width: 8%;  text-align: center;">Exam Result</th>
		                                                    <th style="width: 10%; text-align: center;">Interview Result</th>
		                                                    <th style="width: 25%; text-align: center;">Remarks</th>
		                                                </tr>
		                                            </thead>
		                                            <tbody>
		                                              @foreach($lugenes as $key => $stud)
		                                               <tr>
	  		                                           	<td>{{++$key}}</td>
		                                               	<td style="padding-left: 10%">{{$stud->firstname}}</td>
		                                               	
		                                               </tr>
		                                               @endforeach
		                                            </tbody>
		                                        </table>
		                                    </form>
		                                </div>
		                               </div>
		                        	</div>
	                            </div>
	                        </div>
	                    </div>
	                
	            </div>
	        </div>
	    </div>











		<div id="AppForm" style="height: 11in; width: 8.5in;" hidden="">
		    <img src="{!! asset('assets/Images/Admin/PreAdmissionPage1.jpg') !!}" style="height: auto; width: 100%;"/>
		    <img src="{!! asset('assets/Images/Admin/PreAdmissionPage2.jpg') !!}" style="height: auto; width: 100%;"/>
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
		 
	</div></form>
	

	<!-- JQuery -->
      <script src="{!! asset('assets/jquery/dist/jquery.min.js') !!}"></script>
      <script src="{!! asset('assets/jquery-ui/jquery-ui.min.js') !!}"></script>
      <!-- DataTables -->
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
      <!-- FormValidation -->
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
      <!-- Charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      <script src="{!! asset('assets/DataTables/js/dataTables.scroller.min.js') !!}"></script>
      <script src="{!! asset('js/Admin/Student_Pre-Admission.js') !!}"></script>
	
	<!-- end of your custom script -->
	<
</body>
</html>