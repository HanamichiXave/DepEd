<!DOCTYPE html>
<html>
   <head>
      <title>Administration Management</title>
      <link rel="icon" href="{!! asset('assets/images/logonatin.png') !!}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{!! asset('assets/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/dataTables/css/dataTables.bootstrap.min.css') !!}" rel="stylesheet">
      <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
      <!-- css for nav bar -->
      <link href="{!! asset('assets/custom/css/style.css') !!}" rel="stylesheet">
      <link href="{!! asset('assets/fontawesome/font-awesome.min.css') !!}" rel="stylesheet">
      <!-- end of css  -->
      <!-- your custom css -->
      <!-- end of your custom css -->
   </head>
   <style>
   
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
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Setting</a></li>
                        <li><a href="#exit">Logout</a></li>
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
            <li>Student Enrollment</li>
         </ol>
         <!-- your code start here -->
         <!-- Please observe indention -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <h4><strong>School Year 2016-2018</strong></h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <button type="button" class="btn btn-default pull-right" value='Print' onclick='printDiv();' ><i class="fa fa-print" aria-hidden="true"></i>&nbsp Print Hard Copy</button>
            </div>
            <br>
            <br>
         
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
               <div class="row">
                  <ul class="nav nav-pills nav-stacked" id="myTabs">
                     <li id="tab1" class="active window-vertical-style" ><a data-toggle="tab" href="#student-info"><font size="5" color="black">1. </font>Student Information</a></li>
                     <li id="tab2" class="window-vertical-style" ><a data-toggle="tab" href="#parent-info"><font size="5" color="black">2. </font>Parent Information</a></li>
                     <li id="tab3" class="window-vertical-style" ><a data-toggle="tab" href="#guardian-info"><font size="5" color="black">3. </font>Guardian Information</a></li>
                     <li id="tab4" class="window-vertical-style" ><a data-toggle="tab" href="#parent-account"><font size="5" color="black">4. </font>Parent Account</a></li>
                     <li id="tab5" class="window-vertical-style" ><a data-toggle="tab" href="#overview"><font size="5" color="black">4. </font>Print Preview</a></li>
                  </ul>
               </div>
            </div> 
               <form method="POST" action="{{action('AdminController@Doenrollment')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                     <div class="tab-content">
                        <div class="tab-pane fade-in active" id="student-info">
                           <div class="panel panel-custom">
                              <div class="panel-heading"><h5>Student Informations</h5></div>
                                 <div class="panel-body"> 
                                    <div class="row">
                                       <div class="col-lg-3" style="text-align: center;">
                                          <div class="form-group">
                                             <figure>
                                                <img id="studentimg" src="https://vignette.wikia.nocookie.net/expanse/images/8/80/Char_icon.png/revision/latest?cb=20170225162026" style="display: fixed; margin: auto;" height="150" width="150" placeholder="Upload Photo">
                                                <figcaption>
                                                   <span class="btn btn-file">
                                                   <input class="required input-sm" type="file" id="studentimginp" name="student_pic" style="width: 90px;">
                                                   </span>
                                                </figcaption>
                                             </figure>
                                          </div>
                                       </div>

                                       <div class="col-lg-9">
                                          <div class="row">
                                             <div class="col-lg-12 form-group">
                                                <label class="control-label" for="studId">Stud No. *</label>
                                                <div class="input-group">
                                                   <input class="required form-control" id="studId" type="text" name="student_no">
                                                   <span class="input-group-btn">
                                                      <button class="btn btn-secondary btn-info" id="validateSID" type="button">Check Availability</button>
                                                   </span>
                                                </div>
                                             </div>
                                             <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                                <label class="control-label" for="" >Last Name*</label>
                                                <input class="required form-control" type="text" name="lastname">
                                             </div>
                                             <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                                <label class="control-label" for="">First Name*</label>
                                                <input class="required form-control" type="text" name="firstname">
                                             </div>
                                             <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                                <label class="control-label" for="">Middle Name*</label>
                                                <input class="required form-control" type="text" name="middlename">
                                             </div>
                                             <div class="col-sm-12 col-md-12 col-lg-12 form-group" style="text-align: center">
                                                <label class="control-label">Address*</label>
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="Unit Number" name="unit_no">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="House Number" name="house_no">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="Street Name" name="street_name">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="Barangay/District Name" name="brgy_name">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="City/Municipality" name="municipal">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" id="postalCode" name="postalCode" placeholder="Postal Code" name="postal_code">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="landLine">Landline</label>
                                          <input class="required form-control" type="text" name="telephone">
                                       </div>
                                       <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="mobileNo">Mobile No.*</label>
                                          <div class="input-group">
                                             <span class="input-group-addon">+63</span>
                                             <input class="required form-control" placeholder="xxxxxxxxxx" type="text"  name="mobile">
                                          </div>
                                       </div>
                                       <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="emailAdd">Email Address</label>
                                          <input class="required form-control" id="emailAdd" name="emailAdd" type="email" name="email">
                                       </div>
                                       <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label">Gender *</label>
                                          <div class="row">
                                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                
                                                   <label class="radio-inline">
                                                      <input type="radio" name="gender" value="male">Male
                                                   </label>
                                                   <label class="radio-inline">
                                                      <input type="radio" name="gender" value="female">Female
                                                   </label>
                                                 
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="studentNationality">Nationality*</label>
                                          <select class="form-control" id="select-religion" name="nationality">
                                             <option selected="" disabled="">- SELECT NATIONALITY -</option>
                                             <option  value="Filipino" >Filipino</option>
                                             <option  value="American" >American</option>
                                             <option  value="Afghan" >Afghan</option>
                                             <option  value="Albanian" >Albanian</option>
                                             <option  value="Algerian" >Algerian</option>
                                             <option  value="Andorran" >Andorran</option>
                                             <option  value="Angolan" >Angolan</option>
                                             <option  value="Argentinian" >Argentinian</option>
                                             <option  value="Armenian" >Armenian</option>
                                             <option  value="Australian" >Australian</option>
                                             <option  value="Azerbaijani" >Azerbaijani</option>
                                             <option  value="Bahamian" >Bahamian</option>
                                             <option  value="Bangladeshi" >Bangladeshi</option>
                                             <option  value="Barbadian" >Barbadian</option>
                                             <option  value="Balorussian" >Balorussian</option>
                                             <option  value="Belgian" >Belgian</option>
                                             <option  value="Beninese" >Beninese</option>
                                             <option  value="Bhutanese" >Bhutanese</option>
                                             <option  value="Bosnian" >Bosnian</option>
                                             <option  value="Brazilian" >Brazilian</option>
                                             <option  value="British" >British</option>
                                             <option  value="Briton" >Briton</option>
                                             <option  value="Bruneian" >Bruneian</option>
                                             <option  value="Bulgarian" >Bulgarian</option>
                                             <option  value="Burmese" >Burmese</option>
                                             <option  value="Burundian" >Burundian</option>
                                             <option  value="Cambodian" >Cambodian</option>
                                             <option  value="Cameroonian" >Cameroonian</option>
                                             <option  value="Canadian" >Canadian</option>
                                             <option  value="Chandian" >Chandian</option>
                                             <option  value="Chinese" >Chinese</option>
                                             <option  value="Colombia" >Colombia</option>
                                             <option  value="Congolese" >Congolese</option>
                                             <option  value="Crotian" >Crotian</option>
                                             <option  value="Cuban" >Cuban</option>
                                             <option  value="Cypriot" >Cypriot</option>
                                             <option  value="Czech" >Czech</option>
                                             <option  value="Dane" >Dane</option>
                                             <option  value="Dominican" >Dominican</option>
                                             <option  value="Ecuadorean" >Ecuadorean</option>
                                             <option  value="Egyptian" >Egyptian</option>
                                             <option  value="Englishman" >Englishman</option>
                                             <option  value="Eritrean" >Eritrean</option>
                                             <option  value="Estonian" >Estonian</option>
                                             <option  value="Fijan" >Fijan</option>
                                             <option  value="Finn" >Finn</option>
                                             <option  value="Frenchman" >Frenchman</option>
                                             <option  value="Gabonese" >Gabonese</option>
                                             <option  value="Gambian" >Gambian</option>
                                             <option  value="Georgian" >Georgian</option>
                                             <option  value="German" >German</option>
                                             <option  value="Ghanaian" >Ghanaian</option>
                                             <option  value="Greek" >Greek</option>
                                             <option  value="Grenadian" >Grenadian</option>
                                             <option  value="Guatemalan" >Guatemalan</option>
                                             <option  value="Guinean" >Guinean</option>
                                             <option  value="Guyanese" >Guyanese</option>
                                             <option  value="Haitian" >Haitian</option>
                                             <option  value="Dutchman" >Dutchman</option>
                                             <option  value="Honduran" >Honduran</option>
                                             <option  value="Hungarian" >Hungarian</option>
                                             <option  value="Icelander" >Icelander</option>
                                             <option  value="Indian" >Indian</option>
                                             <option  value="Indonesian" >Indonesian</option>
                                             <option  value="Iranian" >Iranian</option>
                                             <option  value="Iraqi" >Iraqi</option>
                                             <option  value="Israeli" >Israeli</option>
                                             <option  value="Italian" >Italian</option>
                                             <option  value="Jamaican" >Jamaican</option>
                                             <option  value="Japanese" >Japanese</option>
                                             <option  value="Jordanian" >Jordanian</option>
                                             <option  value="Kazakh" >Kazakh</option>
                                             <option  value="Kenyan" >Kenyan</option>
                                             <option  value="Korean" >Korean</option>
                                             <option  value="Kuwaiti" >Kuwaiti</option>
                                             <option  value="Laotian" >Laotian</option>
                                             <option  value="Latvian" >Latvian</option>
                                             <option  value="Lebanese" >Lebanese</option>
                                             <option  value="Liberian" >Liberian</option>
                                             <option  value="Libyan" >Libyan</option>
                                             <option  value="Leichtensteiner" >Leichtensteiner</option>
                                             <option  value="Lithuanian" >Lithuanian</option>
                                             <option  value="Luxembourger" >Luxembourger</option>
                                             <option  value="Macedonian" >Macedonian</option>
                                             <option  value="Madagascan" >Madagascan</option>
                                             <option  value="Malawian" >Malawian</option>
                                             <option  value="Malaysian" >Malaysian</option>
                                             <option  value="Maldivian" >Maldivian</option>
                                             <option  value="Malian" >Malian</option>
                                             <option  value="Maltese" >Maltese</option>
                                             <option  value="Mauritanian" >Mauritanian</option>
                                             <option  value="Mauritian" >Mauritian</option>
                                             <option  value="Mexican" >Mexican</option>
                                             <option  value="Moldovan" >Moldovan</option>
                                             <option  value="Monacan" >Monacan</option>
                                             <option  value="Mongolian" >Mongolian</option>
                                             <option  value="Montenegrin" >Montenegrin</option>
                                             <option  value="Moroccan" >Moroccan</option>
                                             <option  value="Mozambican" >Mozambican</option>
                                             <option  value="Namibian" >Namibian</option>
                                             <option  value="Nepalese" >Nepalese</option>
                                             <option  value="Nicaraguan" >Nicaraguan</option>
                                             <option  value="Nigerien" >Nigerien</option>
                                             <option  value="Nigerian" >Nigerian</option>
                                             <option  value="Norwegian" >Norwegian</option>
                                             <option  value="Pakistani" >Pakistani</option>
                                             <option  value="Panamanian" >Panamanian</option>
                                             <option  value="Paraguayan" >Paraguayan</option>
                                             <option  value="Peruvian" >Peruvian</option>
                                             <option  value="Pole" >Pole</option>
                                             <option  value="Portuguese" >Portuguese</option>
                                             <option  value="Qatari" >Qatari</option>
                                             <option  value="Romanian" >Romanian</option>
                                             <option  value="Russian" >Russian</option>
                                             <option  value="Rwandan" >Rwandan</option>
                                             <option  value="Salvadorean" >Salvadorean</option>
                                             <option  value="Saudi" >Saudi</option>
                                             <option  value="Scot" >Scot</option>
                                             <option  value="Senegalese" >Senegalese</option>
                                             <option  value="Serbian" >Serbian</option>
                                             <option  value="Singaporean" >Singaporean</option>
                                             <option  value="Slovak" >Slovak</option>
                                             <option  value="Somali" >Somali</option>
                                             <option  value="Spaniard" >Spaniard</option>
                                             <option  value="Sri Lankan" >Sri Lankan</option>
                                             <option  value="Sudanese" >Sudanese</option>
                                             <option  value="Surinamese" >Surinamese</option>
                                             <option  value="Swazi" >Swazi</option>
                                             <option  value="Swede" >Swede</option>
                                             <option  value="Swiss" >Swiss</option>
                                             <option  value="Syrian" >Syrian</option>
                                             <option  value="Taiwanese" >Taiwanese</option>
                                             <option  value="Tadzhik" >Tadzhik</option>
                                             <option  value="Tanzanian" >Tanzanian</option>
                                             <option  value="Thai" >Thai</option>
                                             <option  value="Togolese" >Togolese</option>
                                             <option  value="Trinidadian" >Trinidadian</option>
                                             <option  value="Tunisian" >Tunisian</option>
                                             <option  value="Turk" >Turk</option>
                                             <option  value="Ugandan" >Ugandan</option>
                                             <option  value="Urkrainian" >Urkrainian</option>
                                             <option  value="Uruguayan" >Uruguayan</option>
                                             <option  value="Uzbek" >Uzbek</option>
                                             <option  value="Venenzuelan" >Venenzuelan</option>
                                             <option  value="Welshman" >Welshman</option>
                                             <option  value="Yemeni" >Yemeni</option>
                                             <option  value="Yugoslav" >Yugoslav</option>
                                             <option  value="Zambian" >Zambian</option>
                                             <option  value="Zimbabwean" >Zimbabwean</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-4 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="dialect">Dialect</label>
                                          <select class="form-control" id="select-religion" name="dielect">
                                             <option selected="" disabled="">- SELECT DIALECT -</option>
                                             <option data-hidden="true"></option>
                                             <option value="Tagalog">Tagalog</option>
                                             <option value="English">English</option>
                                             <option value="Cebuano">Cebuano</option>
                                             <option value="Hiligaynon">Hiligaynon</option>
                                             <option value="Waray-Waray">Waray-Waray</option>
                                             <option value="Kapampangan">Kapampangan</option>
                                             <option value="Bikol">Bikol</option>
                                             <option value="Albay Bikol">Albay Bikol</option>
                                             <option value="Pangasinan">Pangasinan</option>
                                             <option value="Maranao">Maranao</option>
                                             <option value="Maguindanao">Maguindanao</option>
                                             <option value="Kinaray-a">Kinaray-a</option>
                                             <option value="Tausug">Tausug</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="dob">Date of Birth *</label>
                                          <div class="input-group date form_date" data-date-format="dd MM yyyy" data-link-field="dob" data-link-format="dd MM yyyy">
                                             <input id="dateOfBirth" class="form-control" size="16" type="text" value="" readonly="" name="birthdate">
                                             <span class="input-group-addon">
                                                <div id="dateOfBirthIcon" class="glyphicon glyphicon-calendar datepicker"></div>
                                             </span>
                                             <span class="input-group-addon">
                                                <div id="dateOfBirthCloseIcon" class="glyphicon glyphicon-remove"></div>
                                             </span>
                                          </div>
                                       </div>
                                       <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="placeOfBirth">Place of Birth *</label>
                                          <input class="required form-control" id="placeOfBirth" name="placeOfBirth" type="text" name="birthplace">
                                       </div>
                                       <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="dialect">Religion *</label>
                                          <select class="form-control" id="select-religion" name="religion">
                                             <option selected="" disabled="">- SELECT RELIGION -</option>
                                             <option value="roman catholic">Roman Catholic</option>
                                             <option value="protestant">Protestant</option>
                                             <option value="other">Others</option>
                                          </select>
                                       </div>
                                       <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                          <label class="control-label" for="height">Height *</label>
                                          <div class="form-group clearfix">
                                             <input class="required form-control" id="height" name="height" type="text" placeholder="cm" name="height">
                                          </div>
                                       </div>
                                       <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="weight">Weight *</label>
                                          <div class="form-group clearfix">
                                             <input class="required form-control" id="weight" name="weight" type="text" placeholder="kg" name="weight">
                                          </div>
                                       </div>
                                       <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                          <label class="control-label" for="bloodtype">Blood Type</label>
                                          <select class="form-control" id="select-religion" name="blood_type">
                                             <option selected="" disabled="">- SELECT BLOOD TYPE -</option>
                                             <option value="A+">A+</option>
                                             <option value="A-">A-</option>
                                             <option value="B+">B+</option>
                                             <option value="B-">B-</option>
                                             <option value="O+">O+</option>
                                             <option value="O-">O-</option>
                                             <option value="AB+">AB+</option>
                                             <option value="AB-">AB-</option>
                                          </select>
                                       </div>
                                       <div class="col-sm-12 col-md-12 col-lg-12 clearfix">
                                          <label class="control-label" for="allergies">Any allergies</label>
                                          <textarea class="required form-control" id="allergies" name="allergies" rows="6" name="allergies"></textarea>
                                       </div>
                                       <div class="form-group clearfix col-md-12 col-lg-12">
                                          <label class="control-label">(*) Mandatory</label>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="parent-info">
                           <div class="panel panel-custom">
                              <div class="panel-heading"><h5>Parent Informations</h5></div>
                               <div class="panel-body"> 
                                 <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                                        <div class="form-inline">
                                                   <input class="fathersVitalStatus1 newparentRButton radio-inline" id="fathersVitalStatus1" name="parent_info" type="radio" value="new parent">
                                                   <label for="fathersVitalStatus1">New parent</label>
                                                   <input class="fathersVitalStatus2 newparentRButton radio-inline" id="fathersVitalStatus2" name="parent_info" type="radio" value="existing parent">
                                                   <label for="fathersVitalStatus2">Existing parent</label>
                                                </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                                       <div class="input-group">
                                          <input class="required form-control" id="ParentKidsId" name="ParentKidsId" placeholder="Search Parent - Student ID" name="parent_id">
                                          <span class="input-group-btn">
                                          <button class="btn btn-info waves-effect " type="button" name="searchPID" id="searchPID">Search my PID</button>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                                       <H4 class="control-label">FATHER'S INFORMATION</H4>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
                                       <div class="form-group">
                                          <figure>
                                             <img src="https://vignette.wikia.nocookie.net/expanse/images/8/80/Char_icon.png/revision/latest?cb=20170225162026" id="fatherimg" style="display: fixed; margin: auto;" height="150" width="150" placeholder="Upload Photo">
                                             <figcaption>
                                                <span class="btn btn-file">
                                                <input class="required input-sm" type="file" id="fatherimginp" name="file" style="width: 90px;">
                                                </span>
                                             </figcaption>
                                          </figure>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                          <div class="row">
                                             <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                                                <label class="control-label" for="studId">Vital Status *</label>
                                                <div class="form-inline">
                                                   <input class="fathersVitalStatus1 newparentRButton radio-inline" id="fathersVitalStatus1" name="f_vital_status" type="radio" value="Living">
                                                   <label for="fathersVitalStatus1">Living</label>
                                                   <input class="fathersVitalStatus2 newparentRButton radio-inline" id="fathersVitalStatus2" name="f_vital_status" type="radio" value="Deceased">
                                                   <label for="fathersVitalStatus2">Deceased</label>
                                                </div>
                                                <input type="hidden" id="statusVitalFather">
                                             </div>
                                             <div class="col-sm-12 col-md-6 col-lg-6 form-group">
                                                <label for="insertParentKidsId">Parent - Student ID</label>
                                                   <input class="required form-control fathersAdd newparentRB" id="insertParentKidsId" name="insertParentKidsId" placeholder="Enter Parent - Student ID">
                                             </div>
                                             <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                                <label class="control-label" for="">Last Name*</label>
                                                <input class="required form-control" type="text" name="f_lastname">
                                             </div>
                                             <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                                <label class="control-label" for="">First Name*</label>
                                                <input class="required form-control" id="FirstName" name="f_firstName" type="text">
                                             </div>
                                             <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                                <label class="control-label" for="">Middle Name*</label>
                                                <input class="required form-control" type="text" name="f_middlename">
                                             </div>
                                             <div class="col-sm-12 col-md-12 col-lg-12 form-group" style="text-align: center">
                                                <label class="control-label">Address*</label>
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="Unit Number" name="f_unit_no">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="House Number" name="f_house_no">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="Street Name" name="f_street_name">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="Barangay/District Name" name="f_brgy_name">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="City/Municipality" name="f_municipal">
                                             </div>
                                             <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                                <input class="required form-control" placeholder="Postal Code" name="f_postal_code">
                                             </div>
                                          </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="landLine">Landline</label>
                                       <input class="required form-control" type="text" name="f_telephone">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="mobileNo">Mobile No.*</label>
                                       <div class="input-group">
                                          <span class="input-group-addon">+63</span>
                                          <input class="required form-control" placeholder="xxxxxxxxxx" type="text"  name="f_mobile">
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="fathersEmailAddress">Email Address *</label>
                                       <div class="input-group">
                                          <input class="required form-control newparentRB" id="fathersEmailAddress" name="fathersEmailAddress" type="f_email" name="f_email">
                                          <span class="input-group-btn">
                                          <button class="btn btn-info" type="button" id="validateMoEmail">Check</button>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-4 clearfix">
                                       <label class="control-label" for="fathersDOB">Date of Birth</label>
                                       <div class="input-group date" data-date-format="dd MM yyyy" data-link-field="dob" data-link-format="dd MM yyyy">
                                          <input id="dateOfBirthFather" class="form-control" size="16" type="text" value="" readonly="" name="f_birthdate">
                                          <span class="input-group-addon">
                                             <div id="dateOfBirthCloseIconFather" class="glyphicon glyphicon-remove"></div>
                                          </span>
                                          <span class="input-group-addon">
                                             <div id="dateOfBirthIconFather" class="glyphicon glyphicon-calendar datepicker"></div>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-4 clearfix">
                                       <label class="ontrol-label" for="fathersPlaceOfBirth">Place of Birth </label>
                                       <input class="required form-control passValue newparentRB" id="fathersPlaceOfBirth" name="fathersPlaceOfBirth" type="text" name="f_birthlace">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="fathersReligion">Religion *</label>
                                       <select class="form-control" id="select-religion" name="f_religion">
                                          <option selected="" disabled="">- SELECT RELIGION -</option>
                                          <option value="">Roman Catholic</option>
                                          <option value="1">Protestant</option>
                                          <option value="2">Others</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="fathersNationality">Nationality *</label>
                                       <select class="form-control" id="select-religion" name="f_religion">
                                          <option selected="" disabled="">- SELECT NATIONALITY -</option>
                                         <option  value="Filipino" >Filipino</option>
                                             <option  value="American" >American</option>
                                             <option  value="Afghan" >Afghan</option>
                                             <option  value="Albanian" >Albanian</option>
                                             <option  value="Algerian" >Algerian</option>
                                             <option  value="Andorran" >Andorran</option>
                                             <option  value="Angolan" >Angolan</option>
                                             <option  value="Argentinian" >Argentinian</option>
                                             <option  value="Armenian" >Armenian</option>
                                             <option  value="Australian" >Australian</option>
                                             <option  value="Azerbaijani" >Azerbaijani</option>
                                             <option  value="Bahamian" >Bahamian</option>
                                             <option  value="Bangladeshi" >Bangladeshi</option>
                                             <option  value="Barbadian" >Barbadian</option>
                                             <option  value="Balorussian" >Balorussian</option>
                                             <option  value="Belgian" >Belgian</option>
                                             <option  value="Beninese" >Beninese</option>
                                             <option  value="Bhutanese" >Bhutanese</option>
                                             <option  value="Bosnian" >Bosnian</option>
                                             <option  value="Brazilian" >Brazilian</option>
                                             <option  value="British" >British</option>
                                             <option  value="Briton" >Briton</option>
                                             <option  value="Bruneian" >Bruneian</option>
                                             <option  value="Bulgarian" >Bulgarian</option>
                                             <option  value="Burmese" >Burmese</option>
                                             <option  value="Burundian" >Burundian</option>
                                             <option  value="Cambodian" >Cambodian</option>
                                             <option  value="Cameroonian" >Cameroonian</option>
                                             <option  value="Canadian" >Canadian</option>
                                             <option  value="Chandian" >Chandian</option>
                                             <option  value="Chinese" >Chinese</option>
                                             <option  value="Colombia" >Colombia</option>
                                             <option  value="Congolese" >Congolese</option>
                                             <option  value="Crotian" >Crotian</option>
                                             <option  value="Cuban" >Cuban</option>
                                             <option  value="Cypriot" >Cypriot</option>
                                             <option  value="Czech" >Czech</option>
                                             <option  value="Dane" >Dane</option>
                                             <option  value="Dominican" >Dominican</option>
                                             <option  value="Ecuadorean" >Ecuadorean</option>
                                             <option  value="Egyptian" >Egyptian</option>
                                             <option  value="Englishman" >Englishman</option>
                                             <option  value="Eritrean" >Eritrean</option>
                                             <option  value="Estonian" >Estonian</option>
                                             <option  value="Fijan" >Fijan</option>
                                             <option  value="Finn" >Finn</option>
                                             <option  value="Frenchman" >Frenchman</option>
                                             <option  value="Gabonese" >Gabonese</option>
                                             <option  value="Gambian" >Gambian</option>
                                             <option  value="Georgian" >Georgian</option>
                                             <option  value="German" >German</option>
                                             <option  value="Ghanaian" >Ghanaian</option>
                                             <option  value="Greek" >Greek</option>
                                             <option  value="Grenadian" >Grenadian</option>
                                             <option  value="Guatemalan" >Guatemalan</option>
                                             <option  value="Guinean" >Guinean</option>
                                             <option  value="Guyanese" >Guyanese</option>
                                             <option  value="Haitian" >Haitian</option>
                                             <option  value="Dutchman" >Dutchman</option>
                                             <option  value="Honduran" >Honduran</option>
                                             <option  value="Hungarian" >Hungarian</option>
                                             <option  value="Icelander" >Icelander</option>
                                             <option  value="Indian" >Indian</option>
                                             <option  value="Indonesian" >Indonesian</option>
                                             <option  value="Iranian" >Iranian</option>
                                             <option  value="Iraqi" >Iraqi</option>
                                             <option  value="Israeli" >Israeli</option>
                                             <option  value="Italian" >Italian</option>
                                             <option  value="Jamaican" >Jamaican</option>
                                             <option  value="Japanese" >Japanese</option>
                                             <option  value="Jordanian" >Jordanian</option>
                                             <option  value="Kazakh" >Kazakh</option>
                                             <option  value="Kenyan" >Kenyan</option>
                                             <option  value="Korean" >Korean</option>
                                             <option  value="Kuwaiti" >Kuwaiti</option>
                                             <option  value="Laotian" >Laotian</option>
                                             <option  value="Latvian" >Latvian</option>
                                             <option  value="Lebanese" >Lebanese</option>
                                             <option  value="Liberian" >Liberian</option>
                                             <option  value="Libyan" >Libyan</option>
                                             <option  value="Leichtensteiner" >Leichtensteiner</option>
                                             <option  value="Lithuanian" >Lithuanian</option>
                                             <option  value="Luxembourger" >Luxembourger</option>
                                             <option  value="Macedonian" >Macedonian</option>
                                             <option  value="Madagascan" >Madagascan</option>
                                             <option  value="Malawian" >Malawian</option>
                                             <option  value="Malaysian" >Malaysian</option>
                                             <option  value="Maldivian" >Maldivian</option>
                                             <option  value="Malian" >Malian</option>
                                             <option  value="Maltese" >Maltese</option>
                                             <option  value="Mauritanian" >Mauritanian</option>
                                             <option  value="Mauritian" >Mauritian</option>
                                             <option  value="Mexican" >Mexican</option>
                                             <option  value="Moldovan" >Moldovan</option>
                                             <option  value="Monacan" >Monacan</option>
                                             <option  value="Mongolian" >Mongolian</option>
                                             <option  value="Montenegrin" >Montenegrin</option>
                                             <option  value="Moroccan" >Moroccan</option>
                                             <option  value="Mozambican" >Mozambican</option>
                                             <option  value="Namibian" >Namibian</option>
                                             <option  value="Nepalese" >Nepalese</option>
                                             <option  value="Nicaraguan" >Nicaraguan</option>
                                             <option  value="Nigerien" >Nigerien</option>
                                             <option  value="Nigerian" >Nigerian</option>
                                             <option  value="Norwegian" >Norwegian</option>
                                             <option  value="Pakistani" >Pakistani</option>
                                             <option  value="Panamanian" >Panamanian</option>
                                             <option  value="Paraguayan" >Paraguayan</option>
                                             <option  value="Peruvian" >Peruvian</option>
                                             <option  value="Pole" >Pole</option>
                                             <option  value="Portuguese" >Portuguese</option>
                                             <option  value="Qatari" >Qatari</option>
                                             <option  value="Romanian" >Romanian</option>
                                             <option  value="Russian" >Russian</option>
                                             <option  value="Rwandan" >Rwandan</option>
                                             <option  value="Salvadorean" >Salvadorean</option>
                                             <option  value="Saudi" >Saudi</option>
                                             <option  value="Scot" >Scot</option>
                                             <option  value="Senegalese" >Senegalese</option>
                                             <option  value="Serbian" >Serbian</option>
                                             <option  value="Singaporean" >Singaporean</option>
                                             <option  value="Slovak" >Slovak</option>
                                             <option  value="Somali" >Somali</option>
                                             <option  value="Spaniard" >Spaniard</option>
                                             <option  value="Sri Lankan" >Sri Lankan</option>
                                             <option  value="Sudanese" >Sudanese</option>
                                             <option  value="Surinamese" >Surinamese</option>
                                             <option  value="Swazi" >Swazi</option>
                                             <option  value="Swede" >Swede</option>
                                             <option  value="Swiss" >Swiss</option>
                                             <option  value="Syrian" >Syrian</option>
                                             <option  value="Taiwanese" >Taiwanese</option>
                                             <option  value="Tadzhik" >Tadzhik</option>
                                             <option  value="Tanzanian" >Tanzanian</option>
                                             <option  value="Thai" >Thai</option>
                                             <option  value="Togolese" >Togolese</option>
                                             <option  value="Trinidadian" >Trinidadian</option>
                                             <option  value="Tunisian" >Tunisian</option>
                                             <option  value="Turk" >Turk</option>
                                             <option  value="Ugandan" >Ugandan</option>
                                             <option  value="Urkrainian" >Urkrainian</option>
                                             <option  value="Uruguayan" >Uruguayan</option>
                                             <option  value="Uzbek" >Uzbek</option>
                                             <option  value="Venenzuelan" >Venenzuelan</option>
                                             <option  value="Welshman" >Welshman</option>
                                             <option  value="Yemeni" >Yemeni</option>
                                             <option  value="Yugoslav" >Yugoslav</option>
                                             <option  value="Zambian" >Zambian</option>
                                             <option  value="Zimbabwean" >Zimbabwean</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 cleafix">
                                       <label class="control-label" for="dialect">Dialect</label>
                                       <select class="form-control" id="select-religion" name="f_dielect">
                                          <option selected="" disabled="">- SELECT DIALECT -</option>
                                          <option value="Tagalog">Tagalog</option>
                                          <option value="English">English</option>
                                          <option value="Cebuano">Cebuano</option>
                                          <option value="Hiligaynon">Hiligaynon</option>
                                          <option value="Waray-Waray">Waray-Waray</option>
                                          <option value="Kapampangan">Kapampangan</option>
                                          <option value="Bikol">Bikol</option>
                                          <option value="Albay Bikol">Albay Bikol</option>
                                          <option value="Pangasinan">Pangasinan</option>
                                          <option value="Maranao">Maranao</option>
                                          <option value="Maguindanao">Maguindanao</option>
                                          <option value="Kinaray-a">Kinaray-a</option>
                                          <option value="Tausug">Tausug</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="fathersOccupation">Occupation *</label>
                                       <input class="required form-control passValue newparentRB" id="fathersOccupation" name="f_occuation" type="text">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-6 clearfix">
                                       <label class="control-label" for="fathersCompany">Company Name</label>
                                       <input class="required form-control passValue newparentRB" id="fathersCompany" name="f_compname" type="text">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-6 clearfix">
                                       <label class="control-label" for="fathersCompLandLine">Company Landline No.</label>
                                       <input class="required form-control passValue newparentRB" id="fathersCompLandLine" name="f_company_landline" type="text">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-12 clearfix">
                                       <label class="control-label" for="fathersCompAddress">Company Address</label>
                                       <input class="required form-control passValue newparentRB" id="fathersCompAddress" name="f_comp_address" type="text">
                                    </div>
                                 </div>
                                 <hr class="panel-custom">
                                 <div class="row">
                                    <H4 class="col-lg-12 control-label">MOTHER'S INFORMATION</H4>
                                 </div>
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="text-align: center;">
                                       <div class="form-group">
                                          <figure>
                                             <img src="https://vignette.wikia.nocookie.net/expanse/images/8/80/Char_icon.png/revision/latest?cb=20170225162026" id="motherimg" style="display: fixed; margin: auto;" height="150" width="150" placeholder="Upload Photo">
                                             <figcaption>
                                                <span class="btn btn-file">
                                                <input class="required input-sm" type="file" id="motherimginp" name="file" style="width: 90px;">
                                                </span>
                                             </figcaption>
                                          </figure>
                                       </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                       <div class="row">
                                          <div class="col-sm-12 col-md-6 col-lg-12 form-group">
                                             <label class="control-label" for="studId">Vital Status *</label>
                                             <div class="form-inline">
                                                <input class="mothersVitalStatus1 newparentRButton" id="mothersVitalStatus1" name="m_vital_status" type="radio" value="Living">
                                                <label for="mothersVitalStatus1">Living</label>
                                                <input class="mothersVitalStatus2 newparentRButton" id="mothersVitalStatus2" name="m_vital_status" type="radio" value="Deceased">
                                                <label for="mothersVitalStatus2">Deceased</label>
                                             </div>
                                          </div>
                                          <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                             <label class="control-label" for="" >Last Name*</label>
                                             <input class="required form-control" type="text" name="m_lastname">
                                          </div>
                                          <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                             <label class="control-label" for="">Last Name*</label>
                                             <input class="required form-control" type="text" name="m_lastname">
                                          </div>
                                          <div class="col-sm-12 col-md-4 col-lg-4 form-group">
                                             <label class="control-label" for="MiddleName">Middle Name*</label>
                                             <input class="required form-control" type="text" name="m_middlename">
                                          </div>
                                          <div class="col-sm-12 col-md-12 col-lg-12 form-group" style="text-align: center">
                                             <label class="control-label">Address*</label>
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control" placeholder="Unit Number" name="m_unit_no">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control" placeholder="House Number" name="m_house_no">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control" placeholder="Street Name" name="m_street_name">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control" placeholder="Barangay/District Name" name="m_brgy_name">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control" placeholder="City/Municipality" name="m_municipal">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control" placeholder="Postal Code" name="m_postal_code">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="mothersLandLine">Landline No.</label>
                                       <input class="required form-control newparentRB" id="mothersLandLine" name="mothersLandLine" name="m_telephone">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="mothersMobileNo">Mobile No. *</label>
                                       <div class="input-group">
                                          <span class="input-group-addon">+63</span>
                                          <input class="required form-control newparentRB" id="mothersMobileNo" placeholder="xxxxxxxxxx" name="mothersMobileNo" type="text"  name="m_mobile">
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="mothersEmailAddress">Email Address *</label>
                                       <div class="input-group">
                                          <input class="required form-control newparentRB" id="mothersEmailAddress" name="mothersEmailAddress" type="email" name="m_email">
                                          <span class="input-group-btn">
                                          <button class="btn btn-info" type="button" id="validateMoEmail">Check</button>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-4 clearfix">
                                       <label class="control-label" for="mothersDOB">Date of Birth</label>
                                          <div class="input-group date form_date col-lg-12" data-date-format="dd MM yyyy" data-link-field="dob" data-link-format="dd MM yyyy">
                                             <input id="dateOfBirthMother" class="form-control" size="16" type="text" value="" readonly="" name="m_birthmont">
                                             <span class="input-group-addon">
                                                <div id="dateOfBirthCloseIconMother" class="glyphicon glyphicon-remove"></div>
                                             </span>
                                             <span class="input-group-addon">
                                                <div id="dateOfBirthIconMother" class="glyphicon glyphicon-calendar datepicker"></div>
                                             </span>
                                          </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-4 clearfix">
                                       <label class="control-label" for="mothersPlaceOfBirth">Place of Birth </label>
                                       <input class="required form-control passValue newparentRB" id="mothersPlaceOfBirth" name="mothersPlaceOfBirth" type="text" name="m_birthplace">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="mothersReligion">Religion *</label>
                                       <select class="form-control" id="select-religion" name="m_religion">
                                          <option selected="" disabled="">- SELECT RELIGION -</option>
                                          <option value="">Roman Catholic</option>
                                          <option value="1">Protestant</option>
                                          <option value="2">Others</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 cleafix">
                                       <label class="control-label" for="dialect">Nationality *</label>
                                       <select class="form-control" id="select-religion" name="m_nationality">
                                          <option selected="" disabled="">- SELECT NATIONALITY -</option>
                                          <option  value="Filipino" >Filipino</option>
                                             <option  value="American" >American</option>
                                             <option  value="Afghan" >Afghan</option>
                                             <option  value="Albanian" >Albanian</option>
                                             <option  value="Algerian" >Algerian</option>
                                             <option  value="Andorran" >Andorran</option>
                                             <option  value="Angolan" >Angolan</option>
                                             <option  value="Argentinian" >Argentinian</option>
                                             <option  value="Armenian" >Armenian</option>
                                             <option  value="Australian" >Australian</option>
                                             <option  value="Azerbaijani" >Azerbaijani</option>
                                             <option  value="Bahamian" >Bahamian</option>
                                             <option  value="Bangladeshi" >Bangladeshi</option>
                                             <option  value="Barbadian" >Barbadian</option>
                                             <option  value="Balorussian" >Balorussian</option>
                                             <option  value="Belgian" >Belgian</option>
                                             <option  value="Beninese" >Beninese</option>
                                             <option  value="Bhutanese" >Bhutanese</option>
                                             <option  value="Bosnian" >Bosnian</option>
                                             <option  value="Brazilian" >Brazilian</option>
                                             <option  value="British" >British</option>
                                             <option  value="Briton" >Briton</option>
                                             <option  value="Bruneian" >Bruneian</option>
                                             <option  value="Bulgarian" >Bulgarian</option>
                                             <option  value="Burmese" >Burmese</option>
                                             <option  value="Burundian" >Burundian</option>
                                             <option  value="Cambodian" >Cambodian</option>
                                             <option  value="Cameroonian" >Cameroonian</option>
                                             <option  value="Canadian" >Canadian</option>
                                             <option  value="Chandian" >Chandian</option>
                                             <option  value="Chinese" >Chinese</option>
                                             <option  value="Colombia" >Colombia</option>
                                             <option  value="Congolese" >Congolese</option>
                                             <option  value="Crotian" >Crotian</option>
                                             <option  value="Cuban" >Cuban</option>
                                             <option  value="Cypriot" >Cypriot</option>
                                             <option  value="Czech" >Czech</option>
                                             <option  value="Dane" >Dane</option>
                                             <option  value="Dominican" >Dominican</option>
                                             <option  value="Ecuadorean" >Ecuadorean</option>
                                             <option  value="Egyptian" >Egyptian</option>
                                             <option  value="Englishman" >Englishman</option>
                                             <option  value="Eritrean" >Eritrean</option>
                                             <option  value="Estonian" >Estonian</option>
                                             <option  value="Fijan" >Fijan</option>
                                             <option  value="Finn" >Finn</option>
                                             <option  value="Frenchman" >Frenchman</option>
                                             <option  value="Gabonese" >Gabonese</option>
                                             <option  value="Gambian" >Gambian</option>
                                             <option  value="Georgian" >Georgian</option>
                                             <option  value="German" >German</option>
                                             <option  value="Ghanaian" >Ghanaian</option>
                                             <option  value="Greek" >Greek</option>
                                             <option  value="Grenadian" >Grenadian</option>
                                             <option  value="Guatemalan" >Guatemalan</option>
                                             <option  value="Guinean" >Guinean</option>
                                             <option  value="Guyanese" >Guyanese</option>
                                             <option  value="Haitian" >Haitian</option>
                                             <option  value="Dutchman" >Dutchman</option>
                                             <option  value="Honduran" >Honduran</option>
                                             <option  value="Hungarian" >Hungarian</option>
                                             <option  value="Icelander" >Icelander</option>
                                             <option  value="Indian" >Indian</option>
                                             <option  value="Indonesian" >Indonesian</option>
                                             <option  value="Iranian" >Iranian</option>
                                             <option  value="Iraqi" >Iraqi</option>
                                             <option  value="Israeli" >Israeli</option>
                                             <option  value="Italian" >Italian</option>
                                             <option  value="Jamaican" >Jamaican</option>
                                             <option  value="Japanese" >Japanese</option>
                                             <option  value="Jordanian" >Jordanian</option>
                                             <option  value="Kazakh" >Kazakh</option>
                                             <option  value="Kenyan" >Kenyan</option>
                                             <option  value="Korean" >Korean</option>
                                             <option  value="Kuwaiti" >Kuwaiti</option>
                                             <option  value="Laotian" >Laotian</option>
                                             <option  value="Latvian" >Latvian</option>
                                             <option  value="Lebanese" >Lebanese</option>
                                             <option  value="Liberian" >Liberian</option>
                                             <option  value="Libyan" >Libyan</option>
                                             <option  value="Leichtensteiner" >Leichtensteiner</option>
                                             <option  value="Lithuanian" >Lithuanian</option>
                                             <option  value="Luxembourger" >Luxembourger</option>
                                             <option  value="Macedonian" >Macedonian</option>
                                             <option  value="Madagascan" >Madagascan</option>
                                             <option  value="Malawian" >Malawian</option>
                                             <option  value="Malaysian" >Malaysian</option>
                                             <option  value="Maldivian" >Maldivian</option>
                                             <option  value="Malian" >Malian</option>
                                             <option  value="Maltese" >Maltese</option>
                                             <option  value="Mauritanian" >Mauritanian</option>
                                             <option  value="Mauritian" >Mauritian</option>
                                             <option  value="Mexican" >Mexican</option>
                                             <option  value="Moldovan" >Moldovan</option>
                                             <option  value="Monacan" >Monacan</option>
                                             <option  value="Mongolian" >Mongolian</option>
                                             <option  value="Montenegrin" >Montenegrin</option>
                                             <option  value="Moroccan" >Moroccan</option>
                                             <option  value="Mozambican" >Mozambican</option>
                                             <option  value="Namibian" >Namibian</option>
                                             <option  value="Nepalese" >Nepalese</option>
                                             <option  value="Nicaraguan" >Nicaraguan</option>
                                             <option  value="Nigerien" >Nigerien</option>
                                             <option  value="Nigerian" >Nigerian</option>
                                             <option  value="Norwegian" >Norwegian</option>
                                             <option  value="Pakistani" >Pakistani</option>
                                             <option  value="Panamanian" >Panamanian</option>
                                             <option  value="Paraguayan" >Paraguayan</option>
                                             <option  value="Peruvian" >Peruvian</option>
                                             <option  value="Pole" >Pole</option>
                                             <option  value="Portuguese" >Portuguese</option>
                                             <option  value="Qatari" >Qatari</option>
                                             <option  value="Romanian" >Romanian</option>
                                             <option  value="Russian" >Russian</option>
                                             <option  value="Rwandan" >Rwandan</option>
                                             <option  value="Salvadorean" >Salvadorean</option>
                                             <option  value="Saudi" >Saudi</option>
                                             <option  value="Scot" >Scot</option>
                                             <option  value="Senegalese" >Senegalese</option>
                                             <option  value="Serbian" >Serbian</option>
                                             <option  value="Singaporean" >Singaporean</option>
                                             <option  value="Slovak" >Slovak</option>
                                             <option  value="Somali" >Somali</option>
                                             <option  value="Spaniard" >Spaniard</option>
                                             <option  value="Sri Lankan" >Sri Lankan</option>
                                             <option  value="Sudanese" >Sudanese</option>
                                             <option  value="Surinamese" >Surinamese</option>
                                             <option  value="Swazi" >Swazi</option>
                                             <option  value="Swede" >Swede</option>
                                             <option  value="Swiss" >Swiss</option>
                                             <option  value="Syrian" >Syrian</option>
                                             <option  value="Taiwanese" >Taiwanese</option>
                                             <option  value="Tadzhik" >Tadzhik</option>
                                             <option  value="Tanzanian" >Tanzanian</option>
                                             <option  value="Thai" >Thai</option>
                                             <option  value="Togolese" >Togolese</option>
                                             <option  value="Trinidadian" >Trinidadian</option>
                                             <option  value="Tunisian" >Tunisian</option>
                                             <option  value="Turk" >Turk</option>
                                             <option  value="Ugandan" >Ugandan</option>
                                             <option  value="Urkrainian" >Urkrainian</option>
                                             <option  value="Uruguayan" >Uruguayan</option>
                                             <option  value="Uzbek" >Uzbek</option>
                                             <option  value="Venenzuelan" >Venenzuelan</option>
                                             <option  value="Welshman" >Welshman</option>
                                             <option  value="Yemeni" >Yemeni</option>
                                             <option  value="Yugoslav" >Yugoslav</option>
                                             <option  value="Zambian" >Zambian</option>
                                             <option  value="Zimbabwean" >Zimbabwean</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 cleafix">
                                       <label class="control-label" for="dialect">Dialect</label>
                                       <select class="form-control" id="select-dialect" name="m_dielect">
                                          <option selected="" disabled="">- SELECT DIALECT -</option>
                                          <option data-hidden="true"></option>
                                          <option value="Tagalog">Tagalog</option>
                                          <option value="English">English</option>
                                          <option value="Cebuano">Cebuano</option>
                                          <option value="Hiligaynon">Hiligaynon</option>
                                          <option value="Waray-Waray">Waray-Waray</option>
                                          <option value="Kapampangan">Kapampangan</option>
                                          <option value="Bikol">Bikol</option>
                                          <option value="Albay Bikol">Albay Bikol</option>
                                          <option value="Pangasinan">Pangasinan</option>
                                          <option value="Maranao">Maranao</option>
                                          <option value="Maguindanao">Maguindanao</option>
                                          <option value="Kinaray-a">Kinaray-a</option>
                                          <option value="Tausug">Tausug</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 clearfix">
                                       <label class="control-label" for="mothersOccupation">Occupation *</label>
                                       <input class="required form-control passValue newparentRB" id="mothersOccupation" name="mothersOccupation" type="text" name="m_occupation">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-6 clearfix">
                                       <label class="control-label" for="mothersCompany">Company Name</label>
                                       <input class="required form-control passValue newparentRB" id="mothersCompany" name="mothersCompany" type="text" name="m_companyname">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-6 clearfix">
                                       <label class="control-label" for="mothersCompLandline">Company Landline No.</label>
                                       <input class="required form-control newparentRB" id="mothersCompLandline" name="mothersCompLandline" type="text" name="m_company_landline">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-12 clearfix">
                                       <label class="control-label" for="mothersCompAddress">Company Address</label>
                                       <input class="required form-control newparentRB" id="mothersCompAddress" name="mothersCompAddress" type="text" name="m_comp_address">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-sm-6 col-md-6 col-lg-6 clearfix">
                                       <label class="control-label">Parents are *</label>
                                       <div class="col-lg-12">
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="parentsStatus1 newparentRButton" id="together" type="radio" value="Together" name="parents">
                                             <label for="together">Together</label>
                                          </div>
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="parentsStatus2 newparentRButton" id="separated" type="radio" value="Separated" name="parents">
                                             <label for="separated">Separated</label>
                                          </div>
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="parentsStatus3 newparentRButton" id="widowed" type="radio" value="Widowed" name="parents">
                                             <label for="widowed">Widowed</label>
                                          </div>
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="parentsStatus4 newparentRButton" id="notmarried" type="radio" value="Not Married" name="parents">
                                             <label for="notmarried">Not Married</label>
                                          </div>
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="parentsStatus5 newparentRButton" id="marriage-annulled" type="radio" value="Marriage Annulled" name="parents">
                                             <label for="marriage-annulled">Marriage Annulled</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-6 col-md-6 col-lg-6 clearfix">
                                       <label class="control-label">Child is living with *</label>
                                       <div class="col-lg-12">
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="childStatus1 newparentRButton" id="bothParents" name="child_living" type="radio" value="Both Parents">
                                             <label for="bothParents">Both Parents</label>
                                          </div>
                                          <div class="radio"   style="padding-left: 18px">
                                             <input class="childStatus2 newparentRButton" id="father" name="child_living" type="radio" value="Father">
                                             <label for="father">Father</label>
                                          </div>
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="childStatus3 newparentRButton" id="mother" name="child_living" type="radio" value="Mother">
                                             <label for="mother">Mother</label>
                                          </div>
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="childStatus4 newparentRButton" id="relatived" name="child_living" type="radio" value="Relative">
                                             <label for="relatived">Relative</label>
                                          </div>
                                          <div class="radio" style="padding-left: 18px">
                                             <input class="childStatus5 newparentRButton" id="guardianed" name="child_living" type="radio" value="Guardian">
                                             <label for="guardianed">Guardian</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>      
                        </div>
                        <div class="tab-pane fade" id="guardian-info">
                           <div class="panel panel-custom">
                              <div class="panel-heading"><h5>Guardian Information</h5></div>
                              <div class="panel-body"> 
                                 <div class="row">
                                    <div class="col-lg-3" style="text-align: center;">
                                       <div class="form-group col-md-12 col-lg-4">
                                          <figure>
                                             <img src="https://vignette.wikia.nocookie.net/expanse/images/8/80/Char_icon.png/revision/latest?cb=20170225162026" id="guardianimg" style="display: fixed; margin: auto;" height="150" width="150" placeholder="Upload Photo">
                                             <figcaption>
                                                <span class="btn btn-file">
                                                <input class="required input-sm" type="file" id="guardianimginp" name="file" style="width: 90px;">
                                                </span>
                                             </figcaption>
                                          </figure>
                                       </div>
                                    </div>
                                    <div class="col-lg-9 form-group">
                                       <div class="row">
                                          <div class="col-sm-12 col-md-12 col-lg-12 form-group">
                                             <label class="control-label" for="guardianLastName">Auto Fill - Out</label>
                                             <div class="btn-group bootstrap-select">
                                                <select class="form-control" data-style="btn-white" id="guardiansForm" name="guardiansForm" tabindex="-98">
                                                   <option selected="" disabled="">Select from choices</option>
                                                   <option value="sameAsFather">Same as Father</option>
                                                   <option value="sameAsMother">Same as Mother</option>
                                                   <option value="fillUp">Fill-up the form</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <label class="control-label" for="mothersLastName">Last Name *</label>
                                             <input class="required form-control passValue mothersAdd newparentRB" id="mothersLastName" name="g_lastname" type="text">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <label class="control-label passValue " for="mothersFirstName">First Name *</label>
                                             <input class="required form-control passValue mothersAdd newparentRB" id="mothersFirstName" name="g_firstname" type="text">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <label class="control-label" for="mothersMiddleName">Middle Name *</label>
                                             <input class="required form-control passValue mothersAdd newparentRB" id="mothersMiddleName" name="g_middlename" type="text">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-12 col-lg-9 form-group" style="text-align: center">
                                             <label class="control-label">Address*</label>
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control mothersAdd newparentRB" id="motherUnitNumber" name="motherUnitNumber" placeholder="Unit Number" name="g_unit_no">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control mothersAdd newparentRB" id="motherHouseNumber" name="motherHouseNumber" placeholder="House/Bldg/Street Number" name="g_house_no">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control mothersAdd newparentRB" id="motherStreetName" name="motherStreetName" placeholder="Street Name" name="g_street_no">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control mothersAdd newparentRB" id="motherBrgyName" name="motherBrgyName" placeholder="Barangay/District Name" name="g_brgy_name">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control mothersAdd newparentRB" id="motherCity" name="motherCity" placeholder="City/Municipality" name="g_municipal">
                                          </div>
                                          <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                             <input class="required form-control mothersAdd newparentRB" id="motherPostalCode" name="motherPostalCode" placeholder="Postal Code" name="g_postal_code">
                                          </div>

                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                       <label class="control-label">Gender *</label>
                                          <form>
                                             <label class="radio-inline">
                                                <input type="radio" name="optradio" name="g_gender">Male
                                             </label>
                                             <label class="radio-inline">
                                                <input type="radio" name="optradio" name="g_gender">Female
                                             </label>
                                          </form>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                       <label class="control-label" for="guardiandateofbirth">Date Of Birth*</label>
                                       <div class="input-group date" data-date-format="dd MM yyyy" data-link-field="dob" data-link-format="dd MM yyyy">
                                          <input id="dateOfBirthGuardian" class="form-control" size="16" type="text" value="" readonly="" name="g_birthdate">
                                          <span class="input-group-addon">
                                             <div id="dateOfBirthCloseIconGuardian" class="glyphicon glyphicon-remove"></div>
                                          </span>
                                          <span class="input-group-addon">
                                             <div id="dateOfBirthIconGuardian" class="glyphicon glyphicon-calendar datepicker"></div>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                       <label class="control-label" for="dialect">Landline No.</label>
                                       <input class="required form-control passValue guardianLandLine newparentRB" id="guardiansLandLine" name="g_telephone" type="text">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-6 form-group">
                                       <label class="control-label" for="fathersMobileNo">Mobile No. *</label>
                                       <div class="input-group">
                                          <span class="input-group-addon">+63</span>
                                          <input class="required form-control passValue newparentRB" id="guardiansMobileNo" placeholder="xxxxxxxxxx" name="guardiansMobileNo" type="text"  name="g_mobile">
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-6 form-group">
                                       <label class="control-label" for="guardiansEmailAdd">Email Address</label>
                                       <div class="input-group">
                                          <input class="required form-control displayValue newparentRB" id="guardiansEmailAdd" name="g_email" type="email">
                                          <span class="input-group-btn">
                                          <button class="btn btn-info" id="validateGuEmail" type="button">Check</button>
                                          </span>
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                       <label class="control-label" for="guardiansReligion">Religion *</label>
                                       <select class="form-control" id="select-religion" name="g_religion">
                                          <option selected="" disabled="">- SELECT RELIGION -</option>
                                          <option value="">Roman Catholic</option>
                                          <option value="1">Protestant</option>
                                          <option value="2">Others</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                       <label class="control-label" for="dialect">Nationality *</label>
                                       <select class="form-control" id="select-religion" name="g_nationality">
                                          <option selected="" disabled="">- SELECT NATIONALITY -</option>
                                          <option  value="Filipino" >Filipino</option>
                                             <option  value="American" >American</option>
                                             <option  value="Afghan" >Afghan</option>
                                             <option  value="Albanian" >Albanian</option>
                                             <option  value="Algerian" >Algerian</option>
                                             <option  value="Andorran" >Andorran</option>
                                             <option  value="Angolan" >Angolan</option>
                                             <option  value="Argentinian" >Argentinian</option>
                                             <option  value="Armenian" >Armenian</option>
                                             <option  value="Australian" >Australian</option>
                                             <option  value="Azerbaijani" >Azerbaijani</option>
                                             <option  value="Bahamian" >Bahamian</option>
                                             <option  value="Bangladeshi" >Bangladeshi</option>
                                             <option  value="Barbadian" >Barbadian</option>
                                             <option  value="Balorussian" >Balorussian</option>
                                             <option  value="Belgian" >Belgian</option>
                                             <option  value="Beninese" >Beninese</option>
                                             <option  value="Bhutanese" >Bhutanese</option>
                                             <option  value="Bosnian" >Bosnian</option>
                                             <option  value="Brazilian" >Brazilian</option>
                                             <option  value="British" >British</option>
                                             <option  value="Briton" >Briton</option>
                                             <option  value="Bruneian" >Bruneian</option>
                                             <option  value="Bulgarian" >Bulgarian</option>
                                             <option  value="Burmese" >Burmese</option>
                                             <option  value="Burundian" >Burundian</option>
                                             <option  value="Cambodian" >Cambodian</option>
                                             <option  value="Cameroonian" >Cameroonian</option>
                                             <option  value="Canadian" >Canadian</option>
                                             <option  value="Chandian" >Chandian</option>
                                             <option  value="Chinese" >Chinese</option>
                                             <option  value="Colombia" >Colombia</option>
                                             <option  value="Congolese" >Congolese</option>
                                             <option  value="Crotian" >Crotian</option>
                                             <option  value="Cuban" >Cuban</option>
                                             <option  value="Cypriot" >Cypriot</option>
                                             <option  value="Czech" >Czech</option>
                                             <option  value="Dane" >Dane</option>
                                             <option  value="Dominican" >Dominican</option>
                                             <option  value="Ecuadorean" >Ecuadorean</option>
                                             <option  value="Egyptian" >Egyptian</option>
                                             <option  value="Englishman" >Englishman</option>
                                             <option  value="Eritrean" >Eritrean</option>
                                             <option  value="Estonian" >Estonian</option>
                                             <option  value="Fijan" >Fijan</option>
                                             <option  value="Finn" >Finn</option>
                                             <option  value="Frenchman" >Frenchman</option>
                                             <option  value="Gabonese" >Gabonese</option>
                                             <option  value="Gambian" >Gambian</option>
                                             <option  value="Georgian" >Georgian</option>
                                             <option  value="German" >German</option>
                                             <option  value="Ghanaian" >Ghanaian</option>
                                             <option  value="Greek" >Greek</option>
                                             <option  value="Grenadian" >Grenadian</option>
                                             <option  value="Guatemalan" >Guatemalan</option>
                                             <option  value="Guinean" >Guinean</option>
                                             <option  value="Guyanese" >Guyanese</option>
                                             <option  value="Haitian" >Haitian</option>
                                             <option  value="Dutchman" >Dutchman</option>
                                             <option  value="Honduran" >Honduran</option>
                                             <option  value="Hungarian" >Hungarian</option>
                                             <option  value="Icelander" >Icelander</option>
                                             <option  value="Indian" >Indian</option>
                                             <option  value="Indonesian" >Indonesian</option>
                                             <option  value="Iranian" >Iranian</option>
                                             <option  value="Iraqi" >Iraqi</option>
                                             <option  value="Israeli" >Israeli</option>
                                             <option  value="Italian" >Italian</option>
                                             <option  value="Jamaican" >Jamaican</option>
                                             <option  value="Japanese" >Japanese</option>
                                             <option  value="Jordanian" >Jordanian</option>
                                             <option  value="Kazakh" >Kazakh</option>
                                             <option  value="Kenyan" >Kenyan</option>
                                             <option  value="Korean" >Korean</option>
                                             <option  value="Kuwaiti" >Kuwaiti</option>
                                             <option  value="Laotian" >Laotian</option>
                                             <option  value="Latvian" >Latvian</option>
                                             <option  value="Lebanese" >Lebanese</option>
                                             <option  value="Liberian" >Liberian</option>
                                             <option  value="Libyan" >Libyan</option>
                                             <option  value="Leichtensteiner" >Leichtensteiner</option>
                                             <option  value="Lithuanian" >Lithuanian</option>
                                             <option  value="Luxembourger" >Luxembourger</option>
                                             <option  value="Macedonian" >Macedonian</option>
                                             <option  value="Madagascan" >Madagascan</option>
                                             <option  value="Malawian" >Malawian</option>
                                             <option  value="Malaysian" >Malaysian</option>
                                             <option  value="Maldivian" >Maldivian</option>
                                             <option  value="Malian" >Malian</option>
                                             <option  value="Maltese" >Maltese</option>
                                             <option  value="Mauritanian" >Mauritanian</option>
                                             <option  value="Mauritian" >Mauritian</option>
                                             <option  value="Mexican" >Mexican</option>
                                             <option  value="Moldovan" >Moldovan</option>
                                             <option  value="Monacan" >Monacan</option>
                                             <option  value="Mongolian" >Mongolian</option>
                                             <option  value="Montenegrin" >Montenegrin</option>
                                             <option  value="Moroccan" >Moroccan</option>
                                             <option  value="Mozambican" >Mozambican</option>
                                             <option  value="Namibian" >Namibian</option>
                                             <option  value="Nepalese" >Nepalese</option>
                                             <option  value="Nicaraguan" >Nicaraguan</option>
                                             <option  value="Nigerien" >Nigerien</option>
                                             <option  value="Nigerian" >Nigerian</option>
                                             <option  value="Norwegian" >Norwegian</option>
                                             <option  value="Pakistani" >Pakistani</option>
                                             <option  value="Panamanian" >Panamanian</option>
                                             <option  value="Paraguayan" >Paraguayan</option>
                                             <option  value="Peruvian" >Peruvian</option>
                                             <option  value="Pole" >Pole</option>
                                             <option  value="Portuguese" >Portuguese</option>
                                             <option  value="Qatari" >Qatari</option>
                                             <option  value="Romanian" >Romanian</option>
                                             <option  value="Russian" >Russian</option>
                                             <option  value="Rwandan" >Rwandan</option>
                                             <option  value="Salvadorean" >Salvadorean</option>
                                             <option  value="Saudi" >Saudi</option>
                                             <option  value="Scot" >Scot</option>
                                             <option  value="Senegalese" >Senegalese</option>
                                             <option  value="Serbian" >Serbian</option>
                                             <option  value="Singaporean" >Singaporean</option>
                                             <option  value="Slovak" >Slovak</option>
                                             <option  value="Somali" >Somali</option>
                                             <option  value="Spaniard" >Spaniard</option>
                                             <option  value="Sri Lankan" >Sri Lankan</option>
                                             <option  value="Sudanese" >Sudanese</option>
                                             <option  value="Surinamese" >Surinamese</option>
                                             <option  value="Swazi" >Swazi</option>
                                             <option  value="Swede" >Swede</option>
                                             <option  value="Swiss" >Swiss</option>
                                             <option  value="Syrian" >Syrian</option>
                                             <option  value="Taiwanese" >Taiwanese</option>
                                             <option  value="Tadzhik" >Tadzhik</option>
                                             <option  value="Tanzanian" >Tanzanian</option>
                                             <option  value="Thai" >Thai</option>
                                             <option  value="Togolese" >Togolese</option>
                                             <option  value="Trinidadian" >Trinidadian</option>
                                             <option  value="Tunisian" >Tunisian</option>
                                             <option  value="Turk" >Turk</option>
                                             <option  value="Ugandan" >Ugandan</option>
                                             <option  value="Urkrainian" >Urkrainian</option>
                                             <option  value="Uruguayan" >Uruguayan</option>
                                             <option  value="Uzbek" >Uzbek</option>
                                             <option  value="Venenzuelan" >Venenzuelan</option>
                                             <option  value="Welshman" >Welshman</option>
                                             <option  value="Yemeni" >Yemeni</option>
                                             <option  value="Yugoslav" >Yugoslav</option>
                                             <option  value="Zambian" >Zambian</option>
                                             <option  value="Zimbabwean" >Zimbabwean</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                       <label class="control-label" for="dialect">Dialect</label>
                                       <select class="form-control" id="select-religion" name="g_dialect">
                                          <option selected="" disabled="">- SELECT DIALECT -</option>
                                          <option value="Tagalog">Tagalog</option>
                                          <option value="English">English</option>
                                          <option value="Cebuano">Cebuano</option>
                                          <option value="Hiligaynon">Hiligaynon</option>
                                          <option value="Waray-Waray">Waray-Waray</option>
                                          <option value="Kapampangan">Kapampangan</option>
                                          <option value="Bikol">Bikol</option>
                                          <option value="Albay Bikol">Albay Bikol</option>
                                          <option value="Pangasinan">Pangasinan</option>
                                          <option value="Maranao">Maranao</option>
                                          <option value="Maguindanao">Maguindanao</option>
                                          <option value="Kinaray-a">Kinaray-a</option>
                                          <option value="Tausug">Tausug</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                       <label class="control-label" for="guardiansOccupation">Occupation *</label>
                                       <input class="required form-control displayValue newparentRB" id="guardiansOccupation" name="g_occupation" type="text">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-4 form-group">
                                       <label class="control-label" for="guardiansCompName">Company Name</label>
                                       <input class="required form-control displayValue newparentRB" id="guardiansCompName" name="g_compname" type="text">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6 col-lg-4 form-group">
                                       <label class="control-label" for="guardiansCompLandline">Company Landline</label>
                                       <input class="required form-control displayValue newparentRB" id="guardiansCompLandline" name="g_company_landline" type="text">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-8 col-lg-8 form-group">
                                       <label class="control-label" for="guardiansCompAdd">Company Address</label>
                                       <input class="required form-control displayValue newparentRB" id="guardiansCompAdd" name="guardiansCompAdd" type="text" name="g_comp_address">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4 col-lg-4 form-group">
                                       <label class="control-label" for="guardiansRelStud">Relationship to Student *</label>
                                       <input class="required form-control displayValue newparentRB" id="guardiansRelStud" name="g_relation" type="text">
                                    </div>
                                 </div>
                              </div>
                           </div> 
                        </div>
                        <div class="tab-pane fade" id="parent-account">
                           <div class="panel panel-custom">
                              <div class="panel-heading"><h5>Parent Account</h5></div>
                              <div class="panel-body"> 
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <H4 class="control-label">PARENTS ACCOUNT INFORMATION</h4>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="form-group col-lg-5 clearfix">
                                       <select class="form-control" id="accountEmail" name="accountEmail" data-style="btn-white" name="">
                                          <option selected="" disabled="">--Choose Email Address--</option>
                                          <option id="account1">Mother's Email</option>
                                          <option id="account2">Father's Email</option>
                                          <option id="account3">Guardian's Email</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-lg-12 clearfix">
                                       <label class="control-label required" for="empEmail">Email Address *</label>
                                          <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                             <input class="form-control newparentRB"   id="parent_email"   placeholder="Email Address" name="parent_email">
                                          </div>
                                    </div>
                                    <div class="form-group col-lg-12 clearfix">
                                      <label class="control-label required" id="parent_passwordlbl" for="staffRole">Password *</label>
                                          <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                             <input id="parent_password"   placeholder="Password" class="form-control"   name="parent_usename">
                                          </div>
                                    </div>
                                    <div id="passwordLbl" class="form-group col-lg-12 clearfix">
                                       <label class="control-label required" id="parent_passwordlbl" for="staffRole">Password *</label>
                                          <div class="input-group">
                                             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                             <input id="parent_password"   placeholder="Password" class="form-control"   name="parent_password">
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="overview">
                           <div class="panel panel-custom">
                              <div class="panel-heading"><h5>Print Preview</h5></div>
                              <div class="panel-body"> 
                                 <img src="{!! asset('assets/images/Admin/EnrollmentPage1.jpg')!!}" alt="Page 1" style="height: auto; width: 100%;">
                                 <img src="{!! asset('assets/images/Admin/EnrollmentPage2.jpg')!!}" alt="Page 2" style="height: 600px; width: 100%;">
                                 <button class="btn btn-success pull-right" type="submit
                                 ">Save & Print</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <input type="hidden" name="_token" value="{{csrf_token()}}">  
               </form>

         <!-- Form App PRINT -->
         <div id="AppForm" style="height: 11in; width: 8.5in;" hidden="">
            <img src="{!! asset('assets/Images/Admin/EnrollmentPage1.jpg')!!}" style="height: auto; width: 100%;">
            <img src="{!! asset('assets/Images/Admin/EnrollmentPage2.jpg')!!}" style="height: auto; width: 100%;">
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
      <!-- <script src="../../content/jquery/dist/jquery.min.js"></script> -->
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="{!! asset('js/Admin/AD_Enrollment.js') !!}"></script>
   </body>
</html>