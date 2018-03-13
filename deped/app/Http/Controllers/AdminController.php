<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\admission;
use App\enrollment;
use Illuminate\Support\Facades\Input;


class AdminController extends Controller
{
    public function studpreadmission(){
        $lugenes = admission::all();


    	return view('Admin.Student_Pre-Admission')->with('lugenes',$lugenes);

    }
    public function Dostudpreadmission(request $request){
        

        $emp = new admission($request->all());
        $emp->language = implode(',',$request->language);
        
        $emp->f_english = implode(',',$request->f_english);
        $emp->m_english = implode(',',$request->m_english);
        $emp->f_filipino = implode(',',$request->f_filipino);
        $emp->m_filipino = implode(',',$request->m_filipino);
       
        $emp->father_citizenship = implode(',',$request->father_citizenship);
        $emp->mother_citizenship = implode(',',$request->mother_citizenship);
         
        $emp->save();
        return view('Admin.admin-management')->with('success','Register Successfully!');
    }
    public function studgraderecord(){
    	return view('Admin.AD-student-grade-record');
    }
    public function studteacherclassmanagement(){
    	return view('Admin.AD-student-teacher-class-management');
    }
    public function enrollment(){


    	return view('Admin.AD_Enrollment');
    }
    public function Doenrollment(request $request){

      $emps = new enrollment($request->all());
         

            if(Input::hasfile('student_pic'))
           {
               $request->file('student_pic')->move(public_path('/assets/images/Admin'), $request->file('student_pic')->getClientOriginalName());

               $emps->student_pic= '/' . $request->file('student_pic')->getClientOriginalName();
           }
            if(Input::hasfile('father_pic'))
           {
               $request->file('father_pic')->move(public_path('/assets/images/Admin'), $request->file('father_pic')->getClientOriginalName());

               $emps->father_pic= '/' . $request->file('father_pic')->getClientOriginalName();
           }
            if(Input::hasfile('mother_pic'))
           {
               $request->file('mother_pic')->move(public_path('/assets/images/Admin'), $request->file('mother_pic')->getClientOriginalName());

               $emps->mother_pic= '/' . $request->file('student_pic')->getClientOriginalName();
           } 

         $emps->save();
     
        return view('Admin.AD_Enrollment')->with('success','Register Successfully!');
}
    public function teacherattendance(){
    	return view('Admin.AD-teacher-attendance');
    }
    public function transportmanagement(){
    	return view('Admin.AD_Transport-Management');
    }
}
