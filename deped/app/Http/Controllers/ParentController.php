<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;
use App\StudClass;
use App\GateAttendance;
use App\Student;
use App\Teacher;

class ParentController extends Controller
{
    public function childlist(){
    	return view('Parent.child-list');
    }
    public function parentdashboard(){
    	return view('Parent.Dashboard');
    }
    public function parentgrades(Request $request, $id){
    	return view('Parent.grades');
    }
    public function libraryportal(){
    	return view('Parent.library-portal');
    }
    public function messagecalendar(){
    	return view('Parent.messagescalendar');
    }
    public function schoolactivities(){
        $children = Student::all();
    	return view('Parent.school-activities')->with('children', $children);
    }
    public function schoolannouncement(){
    	return view('Parent.school-announcement');
    }
    public function schoolhandbook(){
    	return view('Parent.school-handbook');
    }
    public function statementofaccount(){
    	return view('Parent.statement-of-account');
    }
    public function parentsubjectlist(){
    	return view('Parent.subject-list');
    }
    public function parentsubjectschedule(Request $request, $id){
        $classes = StudClass::select('stud_classes.*', 'users.*', 'rooms.*', 'sections.*')
            ->join('academics', 'stud_classes.classId', '=', 'academics.classId')
            ->join('teachers', 'teachers.teacherId', '=', 'stud_classes.teacherId')
            ->join('users', 'users.UserId', '=', 'teachers.userId')
            ->join('rooms', 'rooms.roomId', '=', 'stud_classes.roomId')
            ->join('sections', 'sections.sectionId', '=', 'stud_classes.sectionId')
            ->where('academics.studentId', $id)
            ->get();
        $adviser = Teacher::select('users.*')
            ->join('users', 'users.UserId', '=', 'teachers.userId')
            ->join('sections', 'sections.teacherId', '=', 'teachers.teacherId')
            ->join('stud_sections', 'stud_sections.sectionId', '=', 'sections.sectionId')
            ->where('stud_sections.studentId', $id)
            ->get();
        $grades = Grade::select('grades.*')
            ->join('sections', 'sections.gradeId', '=', 'grades.gradeId')
            ->get();
    	return view('Parent.subject-schedule')
            ->with('classes', $classes)
            ->with('grades', $grades)
            ->with('adviser', $adviser);
        return dd($adviser);
    }
    public function parentviewattendance(Request $request, $id){
        $child = Student::where('studentId', $id)->get();
        $gates = GateAttendance::where('studentId', $id)->get();
    	return view('Parent.view-attendance', [
    	    'day_num'=>date("j"),
            'year'=> date("Y"),
            'cont'=> true,
            'today'=> 27,
            'count' => 1,
            'present' => 0,
            'absent' => 0
        ])
            ->with('gates', $gates)
            ->with('child', $child);
        return dd($gates);
    }
    public function parentviewgrade(){
    	return view('Parent.view-grade');
    }

}
