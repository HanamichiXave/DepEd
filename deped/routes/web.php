<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Super Admin Module
Route::group(array('prefix' => 'superadmin/'), function(){
		Route::get('/admin', array('uses' => 'SuperAdminController@admin', 'as' => 'admin'));
		Route::get('/asset', array('uses' => 'SuperAdminController@asset', 'as' => 'asset'));
		Route::get('/clinic', array('uses' => 'SuperAdminController@clinic', 'as' => 'clinic'));
		Route::get('/counselor', array('uses' => 'SuperAdminController@counselor', 'as' => 'counselor'));
		Route::get('/dashboard', array('uses' => 'SuperAdminController@dashboard', 'as' => 'dashboard'));
		Route::get('/disciplinary', array('uses' => 'SuperAdminController@disciplinary', 'as' => 'disciplinary'));
		Route::get('/document', array('uses' => 'SuperAdminController@document', 'as' => 'document'));
		Route::get('/ecanteen', array('uses' => 'SuperAdminController@ecanteen', 'as' => 'ecanteen'));
		Route::get('/finance', array('uses' => 'SuperAdminController@finance', 'as' => 'finance'));
		Route::get('/hr', array('uses' => 'SuperAdminController@hr', 'as' => 'hr'));
		Route::get('/library', array('uses' => 'SuperAdminController@library', 'as' => 'library'));
		Route::get('/lostandfound', array('uses' => 'SuperAdminController@lostandfound', 'as' => 'lostandfound'));
		Route::get('/onlineexam', array('uses' => 'SuperAdminController@onlineexam', 'as' => 'onlineexam'));
		Route::get('/parent', array('uses' => 'SuperAdminController@parent', 'as' => 'parent'));
		Route::get('/policy', array('uses' => 'SuperAdminController@policy', 'as' => 'policy'));
		Route::get('/preventive', array('uses' => 'SuperAdminController@preventive', 'as' => 'preventive'));
		Route::get('/principal', array('uses' => 'SuperAdminController@principal', 'as' => 'principal'));
		Route::get('/security', array('uses' => 'SuperAdminController@security', 'as' => 'security'));
		Route::get('/superadmin', array('uses' => 'SuperAdminController@superadmin', 'as' => 'superadmin'));
		Route::get('/teacher', array('uses' => 'SuperAdminController@teacher', 'as' => 'teacher'));
		Route::get('/transportation', array('uses' => 'SuperAdminController@transportation', 'as' => 'transportation'));


	});

//Administration Module		
Route::group(array('prefix'=>'admin/'), function(){
		Route::get('/studpreadmission', array('uses' => 'AdminController@studpreadmission', 'as' => 'studpreadmission'));
		Route::post('/studpreadmission', array('uses' => 'AdminController@Dostudpreadmission', 'as' => 'studpreadmission'));

		Route::get('/studgraderecord', array('uses' => 'AdminController@studgraderecord', 'as' => 'studgraderecord'));

		Route::get('/studteacherclassmanagement', array('uses' => 'AdminController@studteacherclassmanagement', 'as' => 'studteacherclassmanagement'));
		
		Route::get('/enrollment', array('uses' => 'AdminController@enrollment', 'as' => 'enrollment'));
		Route::post('/doenrollment', array('uses' => 'AdminController@Doenrollment', 'as' => 'doenrollment'));

		Route::get('/teacherattendance', array('uses' => 'AdminController@teacherattendance', 'as' => 'teacherattendance'));
		Route::get('/transportmanagement', array('uses' => 'AdminController@transportmanagement', 'as' => 'transportmanagement'));

});


//Asset module
Route::group(array('prefix'=>'asset/'), function(){
		Route::get('/assetdashboard', array('uses' => 'AssetController@assetdashboard', 'as' => 'assetdashboard'));
		Route::post('/asset-new', array('uses' => 'AssetController@insert', 'as' => 'asset-new'));
});

//Clinic Module
Route::group(array('prefix'=>'clinic/'), function(){
		Route::get('/clinicdashboard', array('uses' => 'ClinicController@clinicdashboard', 'as' => 'clinicdashboard'));
		Route::get('/incidentreport', array('uses' => 'ClinicController@incidentreport', 'as' => 'incidentreport'));
		Route::get('/studentlist', array('uses' => 'ClinicController@studentlist', 'as' => 'studentlist'));

});

//Policy Module
Route::group(array('prefix'=>'policy/'), function(){
		Route::get('/employeehandbook', array('uses' => 'PolicyController@employeehandbook', 'as' => 'employeehandbook'));
		Route::get('/policyschoolhandbook', array('uses' => 'PolicyController@policyschoolhandbook', 'as' => 'policyschoolhandbook'));
		Route::get('/schoolannouncement', array('uses' => 'PolicyController@schoolannouncement', 'as' => 'schoolannouncement'));
});

//Security Module
Route::group(array('prefix'=>'security/'), function(){
		Route::get('/Dashboard', array('uses' => 'SecurityController@Dashboard', 'as' => 'Dashboard'));
		Route::get('/activevisitor', array('uses' => 'SecurityController@activevisitor', 'as' => 'activevisitor'));
		Route::get('/visitorhistory', array('uses' => 'SecurityController@visitorhistory', 'as' => 'visitorhistory'));
		Route::get('/noidlist', array('uses' => 'SecurityController@noidlist', 'as' => 'noidlist'));
		Route::get('/noidhistory', array('uses' => 'SecurityController@noidhistory', 'as' => 'noidhistory'));
});

//Preventive Maintenance Module
Route::group(array('prefix'=>'preventive/'), function(){
		Route::get('/preventivemaintenance', array('uses' => 'PreventiveController@preventivemaintenance', 'as' => 'preventivemaintenance'));
});

//Counselor Module
Route::group(array('prefix'=>'counselor/'), function(){
		Route::get('/counselordashboard', array('uses' => 'CounselorController@counselordashboard', 'as' => 'counselordashboard'));
		Route::get('/certificates', array('uses' => 'CounselorController@certificates', 'as' => 'certificates'));
		Route::get('/counselorincidentreport', array('uses' => 'CounselorController@counselorincidentreport', 'as' => 'counselorincidentreport'));
		Route::get('/counselorstudentlist', array('uses' => 'CounselorController@counselorstudentlist', 'as' => 'counselorstudentlist'));
});

//Hr Module
Route::group(array('prefix'=>'hr/'), function(){
		Route::get('/Dashboard', array('uses' => 'HrController@hrDashboard', 'as' => 'hrDashboard'));
		Route::get('/hr-add-employee', array('uses' => 'HrController@hraddemployee', 'as' => 'hraddemployee'));
		Route::post('/hr-add-employeeSave',array('uses' => 'HrController@hrstoreemployee', 'as' => 'hrstoreemployee'));
		Route::get('/hr-employee-list', array('uses' => 'HrController@hremployeelist', 'as' => 'hremployeelist'));
		Route::get('/hr-payroll-admin-list', array('uses' => 'HrController@hrpayrolladminlist', 'as' => 'hrpayrolladminlist'));
		Route::get('/hr-leaves_management', array('uses' => 'HrController@hrleavesmanagement', 'as' => 'hrleavesmanagement'));
		Route::get('/hr-employee-evaluation', array('uses' => 'HrController@hremployeeevaluation', 'as' => 'hremployeeevaluation'));
		Route::get('/hr-promotion', array('uses' => 'HrController@hrpromotion', 'as' => 'hrpromotion'));
		Route::get('/hr-employee-attendance-list', array('uses' => 'HrController@hremployeeattendancelist', 'as' => 'hremployeeattendancelist'));
		Route::get('/hr-school-structure', array('uses' => 'HrController@hrschoolstructure', 'as' => 'hrschoolstructure'));
		Route::get('/hr-dashboard', array('uses' => 'HrController@hrdashboardb', 'as' => 'hrdashboardb'));
		Route::get('/hr-payroll-allemployee-list', array('uses' => 'HrController@hrpayrollallemployee', 'as' => 'hrpayrollallemployee'));
		Route::get('/hr-payroll-clinic-list', array('uses' => 'HrController@hrpayrollcliniclist', 'as' => 'hrpayrollcliniclist'));
		Route::get('/hr-payroll-counselor-list', array('uses' => 'HrController@hrpayrollcounselor', 'as' => 'hrpayrollcounselor'));
		Route::get('/hr-payroll-department-list', array('uses' => 'HrController@hrpayrolldepartment', 'as' => 'hrpayrolldepartment'));
		Route::get('/hr-payroll-finance-list', array('uses' => 'HrController@hrpayrollfinance', 'as' => 'hrpayrollfinance'));
		Route::get('/hr-payroll-hr-list', array('uses' => 'HrController@hrpayrollhrlist', 'as' => 'hrpayrollhrlist'));
		Route::get('/hr-payroll-library-list', array('uses' => 'HrController@hrpayrolllibrary', 'as' => 'hrpayrolllibrary'));
		Route::get('/hr-payroll-maintenance-list', array('uses' => 'HrController@hrpayrollmaintenance', 'as' => 'hrpayrollmaintenance'));
		Route::get('/hr-payroll-otherstaffs-list', array('uses' => 'HrController@hrpayrollotherstaffs', 'as' => 'hrpayrollotherstaffs'));
		Route::get('/hr-payroll-security-list', array('uses' => 'HrController@hrpayrollsecurity', 'as' => 'hrpayrollsecurity'));
		Route::get('/hr-payroll-teacher-list', array('uses' => 'HrController@hrpayrollteacher', 'as' => 'hrpayrollteacher'));
		Route::get('/hr-payroll-transportation-list', array('uses' => 'HrController@hrpayrolltransportation', 'as' => 'hrpayrolltransportation'));
		Route::get('/hr-view-payslip', array('uses' => 'HrController@hrviewpayslip', 'as' => 'hrviewpayslip'));
		Route::get('/hr-view-profile', array('uses' => 'HrController@hrviewprofile', 'as' => 'hrviewprofile'));
		Route::get('/payroll_summary_emp', array('uses' => 'HrController@payrollsummaryemp', 'as' => 'payrollsummaryemp'));
		Route::get('/payroll_summary_management', array('uses' => 'HrController@payrollsummarymngt', 'as' => 'payrollsummarymngt'));
		
});

// Document Module
 Route::group(array('prefix'=>'document/'), function(){
 		Route::get('/documentdashboard', array('uses'=>'DocumentController@documentdashboard', 'as' => 'documentdashboard'));
 		Route::get('/documentaccounting', array('uses'=>'DocumentController@documentaccounting', 'as' => 'documentaccounting')); 
 		Route::get('/documentadmin', array('uses'=>'DocumentController@documentadmin', 'as' => 'documentadmin')); 
 		Route::get('/listofdocuments', array('uses'=>'DocumentController@listofdocuments', 'as' => 'listofdocuments')); 

 });

 //finance
Route::group(array('prefix'=>'finance/'), function(){
		Route::get('/dashboard', array('uses'=>'FinanceController@finDashboard', 'as' => 'finDashboard'));
		Route::get('/bir-boa-cash-disbursement-journal', array('uses'=>'FinanceController@birdisbursement', 'as' => 'birdisbursement'));
		Route::get('/bir-boa-cash-receipt-journal', array('uses'=>'FinanceController@birreceipt', 'as' => 'birreceipt'));
		Route::get('/bir-boa-general-journal', array('uses'=>'FinanceController@birgenjournal', 'as' => 'birgenjournal'));
		Route::get('/bir-boa-general-ledger', array('uses'=>'FinanceController@birgenledger', 'as' => 'birgenledger'));
		Route::get('/bir-boa-purchase-journal', array('uses'=>'FinanceController@birpurjournal', 'as' => 'birpurjournal'));
		Route::get('/bir-boa-sale-journal', array('uses'=>'FinanceController@birsalejournal', 'as' => 'birsalejournal'));
		Route::get('/bir-book-of-accounts', array('uses'=>'FinanceController@birbookaccounts', 'as' => 'birbookaccounts'));
		Route::get('/fin-accounting-management-bank-transaction', array('uses'=>'FinanceController@finbanktransac', 'as' => 'finbanktransac'));
		Route::get('/fin-accounting-management-expenses', array('uses'=>'FinanceController@finexpenses', 'as' => 'finexpenses'));
		Route::get('/fin-accounting-management-payable', array('uses'=>'FinanceController@finpayable', 'as' => 'finpayable'));
		Route::get('/fin-accounting-management', array('uses'=>'FinanceController@finaccountmanagement', 'as' => 'finaccountmanagement'));
		Route::get('/fin-bir-alpha-list', array('uses'=>'FinanceController@finbiralpha', 'as' => 'finbiralpha'));
		Route::get('/fin-bir-forms', array('uses'=>'FinanceController@finbirforms', 'as' => 'finbirforms'));
		Route::get('/fin-bir-rev-com', array('uses'=>'FinanceController@finbirrev', 'as' => 'finbirrev'));
		Route::get('/fin-grade-school-students', array('uses'=>'FinanceController@fingradeschool', 'as' => 'fingradeschool'));
		Route::get('/fin-junior-high-students', array('uses'=>'FinanceController@finjuniorhigh', 'as' => 'finjuniorhigh'));
		Route::get('/fin-kinder-school-students', array('uses'=>'FinanceController@finkinderschool', 'as' => 'finkinderschool'));
		Route::get('/fin-payment-history', array('uses'=>'FinanceController@finpaymenthistory', 'as' => 'finpaymenthistory'));
		Route::get('/fin-school-account', array('uses'=>'FinanceController@finschoolaccount', 'as' => 'finschoolaccount'));
		Route::get('/fin-school-income', array('uses'=>'FinanceController@finschoolincome', 'as' => 'finschoolincome'));
		Route::get('/fin-senior-high-students', array('uses'=>'FinanceController@finseniorhigh', 'as' => 'finseniorhigh'));
		Route::get('/fin-student-assesment', array('uses'=>'FinanceController@finstudentassesment', 'as' => 'finstudentassesment'));


});

//Librarian Module
Route::group(array('prefix'=>'library/'), function(){
        Route::get('/library', array('uses' => 'LibrarianController@library', 'as' => 'library'));
        Route::post('/saveLibrary', array('uses' => 'LibrarianController@addnewbooklibrary', 'as' => 'addnewbooklibrary'));
        Route::get('/librarydashboard', 'LibrarianController@librarydashboard')->name('librarydashboard');
        Route::get('/borrowedlist', array('uses'=>'LibrarianController@borrowedlist','as' => 'borrowedlist'));
        Route::get('/catalogue', array('uses'=>'LibrarianController@catalogue','as' => 'catalogue'));
        Route::get('/cataloguedetails/{id}','LibrarianController@cataloguedetails')->name('cataloguedetails');
        Route::get('/libraryhistory', array('uses'=>'LibrarianController@libraryhistory','as' => 'libraryhistory'));

});

//Parent Module
Route::group(array('prefix'=>'parent/'), function(){
        Route::get('/childlist', array('uses' =>'ParentController@childlist', 'as'=> 'childlist'));
        Route::get('/parentdashboard', array('uses' =>'ParentController@parentdashboard', 'as'=> 'parentdashboard'));
        Route::get('/parentgrades', array('uses' =>'ParentController@parentgrades', 'as'=> 'parentgrades'));
        Route::get('/libraryportal', array('uses' =>'ParentController@libraryportal', 'as'=> 'libraryportal'));
        Route::get('/messagecalendar', array('uses' =>'ParentController@messagecalendar', 'as'=> 'messagecalendar'));
        Route::get('/schoolactivities', array('uses' =>'ParentController@schoolactivities', 'as'=> 'schoolactivities'));
        Route::get('/schoolannouncement', array('uses' =>'ParentController@schoolannouncement', 'as'=> 'schoolannouncement'));
        Route::get('/schoolhandbook', array('uses' =>'ParentController@schoolhandbook', 'as'=> 'schoolhandbook'));
        Route::get('/statementofaccount', array('uses' =>'ParentController@statementofaccount', 'as'=> 'statementofaccount'));
        Route::get('/parentsubjectlist', array('uses' =>'ParentController@parentsubjectlist', 'as'=> 'parentsubjectlist'));
        Route::get('/parentsubjectschedule/{id}', array('uses' =>'ParentController@parentsubjectschedule', 'as'=> 'parentsubjectschedule'));
        Route::get('/parentviewattendance/{id}','ParentController@parentviewattendance')->name('parentviewattendance');
        Route::get('/parentviewgrade', array('uses' =>'ParentController@parentviewgrade', 'as'=> 'parentviewgrade'));

});

//Teacher Module
Route::group(array('prefix'=>'teacher/'), function(){
		Route::get('/classgradingmanagement', array('uses' =>'TeacherController@classgradingmanagement', 'as'=> 'classgradingmanagement'));
		Route::get('/teacherdashboard', array('uses' =>'TeacherController@teacherdashboard', 'as'=> 'teacherdashboard'));
		Route::get('/teachermessages', array('uses' =>'TeacherController@teachermessages', 'as'=> 'teachermessages'));
		Route::get('/teacherclassattendance', array('uses' =>'TeacherController@teacherclassattendance', 'as'=> 'teacherclassattendance'));
		Route::get('/teacherclassgradedeped', array('uses' =>'TeacherController@teacherclassgradedeped', 'as'=> 'teacherclassgradedeped'));
		Route::get('/teacherclassgradeschool', array('uses' =>'TeacherController@teacherclassgradeschool', 'as'=> 'teacherclassgradeschool'));
		Route::get('/teacherclassgrade', array('uses' =>'TeacherController@teacherclassgrade', 'as'=> 'teacherclassgrade'));
		Route::get('/teacherclassprog', array('uses' =>'TeacherController@teacherclassprog', 'as'=> 'teacherclassprog'));

		Route::get('/teacherclassschedule', array('uses' =>'TeacherController@teacherclassschedule', 'as'=> 'teacherclassschedule'));
        Route::get('/teacherclassschedule/{id}', 'TeacherController@teacherclassschedule');

		Route::get('/teacherleave', array('uses' =>'TeacherController@teacherleave', 'as'=> 'teacherleave'));
        Route::post('/storeleave', array('uses' =>'TeacherController@storeleave', 'as'=> 'storeleave'));

		Route::get('/teacherlessonplan', array('uses' =>'TeacherController@teacherlessonplan', 'as'=> 'teacherlessonplan'));
        Route::post('/storelessonplan', array('uses' =>'TeacherController@storelessonplan', 'as'=> 'storelessonplan'));
        Route::post('/updatelessonplan/{id}', 'TeacherController@updatelessonplan');
        Route::post('/deletelessonplan/{id}', 'TeacherController@deletelessonplan');

		Route::get('/teacherpayslip', array('uses' =>'TeacherController@teacherpayslip', 'as'=> 'teacherpayslip'));
		Route::get('/teacherprofile', array('uses' =>'TeacherController@teacherprofile', 'as'=> 'teacherprofile'));
		Route::get('/teacherstudentgradedeped', array('uses' =>'TeacherController@teacherstudentgradedeped', 'as'=> 'teacherstudentgradedeped'));
		Route::get('/teacherstudentgradeschool', array('uses' =>'TeacherController@teacherstudentgradeschool', 'as'=> 'teacherstudentgradeschool'));
		Route::get('/teacherstudentgrades', array('uses' =>'TeacherController@teacherstudentgrades', 'as'=> 'teacherstudentgrades'));
		Route::get('/teacherstudprog', array('uses' =>'TeacherController@teacherstudprog', 'as'=> 'teacherstudprog'));
});

//Principal Module
Route::group(array('prefix'=>'security/'), function(){
		Route::get('/diploma', array('uses' => 'PrincipalController@diploma', 'as' => 'diploma'));
		Route::get('/diploma2', array('uses' => 'PrincipalController@diploma2', 'as' => 'diploma2'));
		Route::get('/diploma3', array('uses' => 'PrincipalController@diploma3', 'as' => 'diploma3'));
		Route::get('/document', array('uses' => 'PrincipalController@document', 'as' => 'document'));
		Route::get('/form137', array('uses' => 'PrincipalController@form137', 'as' => 'form137'));
		Route::get('/form1372', array('uses' => 'PrincipalController@form1372', 'as' => 'form1372'));
		Route::get('/form1373', array('uses' => 'PrincipalController@form1373', 'as' => 'form1373'));
		Route::get('/messages-memos', array('uses' => 'PrincipalController@messagesMemos', 'as' => 'messagesMemos'));
		Route::get('/student-desk', array('uses' => 'PrincipalController@studentDesk', 'as' => 'studentDesk'));
		Route::get('/teacher-desk', array('uses' => 'PrincipalController@teacherDesk', 'as' => 'teacherDesk'));
		Route::get('/transcript', array('uses' => 'PrincipalController@transcript', 'as' => 'transcript'));
		Route::get('/transcript2', array('uses' => 'PrincipalController@transcript2', 'as' => 'transcript2'));
		Route::get('/transcript3', array('uses' => 'PrincipalController@transcript3', 'as' => 'transcript3'));

});
//Online Exam Module
Route::group(array('prefix'=> 'onlinexam/'), function(){
		Route::get('/examdashboard', array('uses' => 'OnlineExamController@examdashboard', 'as' => 'examdashboard'));
		Route::get('/createexam', array('uses' => 'OnlineExamController@createexam', 'as' => 'createexam'));
		Route::get('/deleteexam', array('uses' => 'OnlineExamController@deleteexam', 'as' => 'deleteexam'));
		Route::get('/deletequestion', array('uses' => 'OnlineExamController@deletequestion', 'as' => 'deletequestion'));
		Route::get('/insertquestion', array('uses' => 'OnlineExamController@insertquestion', 'as' => 'insertquestion'));
		Route::get('/modifyquestion', array('uses' => 'OnlineExamController@modifyquestion', 'as' => 'modifyquestion'));
		Route::get('/onlineexam', array('uses' => 'OnlineExamController@onlineexam', 'as' => 'onlineexam'));
		Route::get('/showexam', array('uses' => 'OnlineExamController@showexam', 'as' => 'showexam'));
		Route::get('/showquestionofexam', array('uses' => 'OnlineExamController@showquestionofexam', 'as' => 'showquestionofexam'));
		Route::get('/showquestionperexam', array('uses' => 'OnlineExamController@showquestionperexam', 'as' => 'showquestionperexam'));
		Route::get('/showquestion', array('uses' => 'OnlineExamController@showquestion', 'as' => 'showquestion'));

});
//Lost and Found Module
Route::group(array('prefix'=> 'lostandfound/'), function(){
		Route::get('/lostandfounddashboard', array('uses' => 'LostandfoundController@lostandfounddashboard', 'as' => 'lostandfounddashboard'));
		Route::get('/lostandfoundclaimeditems', array('uses' => 'LostandfoundController@lostandfoundclaimeditems', 'as' => 'lostandfoundclaimeditems'));
		Route::get('/lostandfoundlostandfound', array('uses' => 'LostandfoundController@lostandfoundlostandfound', 'as' => 'lostandfoundlostandfound'));

});
