<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\StudClass;
use App\Academic;
use App\Grade;
use App\Section;
use App\Teacher;
use App\User;
use App\Lesson;
use App\Leave;

class TeacherController extends Controller
{
    public function classgradingmanagement(){
    	return view('Teacher.classgrading-management');
    }
    public function teacherdashboard(){
    	return view('Teacher.Dashboard');
    }
    public function teachermessages(){
    	return view('Teacher.messagescalendar');
    }
    public function teacherclassattendance(){
        $classes = StudClass::select('stud_classes.*', 'rooms.*')
            ->join('rooms', 'rooms.roomId', '=', 'stud_classes.roomId')
            ->get();
        $students = Student::all();
        $teachers = Teacher::all();
        $users = \App\User::all();
        $grades = Grade::all();
        $sections = Section::all();
        $male_total = Student::where('gender', '=', 'M')->count();
        $female_total = Student::where('gender', '=', 'F')->count();
        $academics = Academic::all();
        return view('Teacher.teacher_classattendance')
            ->with('students', $students)
            ->with('classes', $classes)
            ->with('male_total', $male_total)
            ->with('female_total', $female_total)
            ->with('academics', $academics)
            ->with('grades', $grades)
            ->with('sections', $sections)
            ->with('teachers', $teachers)
            ->with('users', $users);
    }
    public function teacherclassgradedeped(){
    	return view('Teacher.teacher_classgrade-deped');
    }
    public function teacherclassgradeschool(){
    	return view('Teacher.teacher_classgrade-school');
    }
    public function teacherclassgrade(){
    	return view('Teacher.teacher_classgrade');
    }
    public function teacherclassprog(){
    	return view('Teacher.teacher_classprog');
    }
    public function teacherclassschedule(){
        $classes = StudClass::select('stud_classes.*', 'sections.*', 'grades.*', 'rooms.*')
            ->join('sections', 'sections.sectionId', '=', 'stud_classes.sectionId')
            ->join('grades', 'grades.gradeId', '=', 'sections.gradeId')
            ->join('rooms', 'rooms.roomId', '=', 'stud_classes.roomId')
            ->get();
    	return view('Teacher.teacher_classschedule')
            ->with('classes', $classes);
    }
    public function teacherleave(){
        $leaves = Leave::all();

    	return view('Teacher.teacher_leaveandvacation')->with('leaves', $leaves);
    }
    public function storeleave(Request $request){
        $leave = new Leave;

        $this->validate($request, [
            'employeeName' => 'required',
            'employeeId' => 'required',
            'department' => 'required',
            'departmentHead' => 'required',
            'typeOfLeave' => 'required',
            'dateOfLeaveStart' => 'required',
            'dateOfLeaveEnd' => 'required',
            'dateOfFile' => 'nullable',
            'reasonOfLeave' => 'required',
        ]);

        $leave->employeeName = $request->input('employeeName');
        $leave->employeeId = $request->input('employeeId');
        $leave->department = $request->input('department');
        $leave->departmentHead = $request->input('departmentHead');
        $leave->typeOfLeave = $request->input('typeOfLeave');
        $leave->dateOfLeaveStart = $request->input('dateOfLeaveStart');
        $leave->dateOfLeaveEnd = $request->input('dateOfLeaveEnd');
        $leave->dateOfFile = $request->input('dateOfFile');
        $leave->reasonOfLeave = $request->input('reasonOfLeave');

        $leave->save();
        return redirect('/teacher/teacherleave')->with('success', 'Leave Submitted');
    }
    public function teacherlessonplan(Request $request){
        $lessons = Lesson::all();
    	return view('Teacher.teacher_lessonplan')
            ->with('lessons', $lessons);
    }
    public function storelessonplan(Request $request){
        $lessons = new Lesson;

        $this->validate($request, [
            'dateoflesson' => 'required',
            'time' => 'required',
            'subject' => 'required',
            'quarter' => 'required',
            'topic' => 'required',
            'title' => 'required',
            'gradelevel' => 'required',
            'duration' => 'required',
            'objective' => 'required',
            'reference' => 'required',
            'materials' => 'required',
            'tasks' => 'required',
            'notes' => 'required',
        ]);

        $lessons->dateoflesson = $request->input('dateoflesson');
        $lessons->time = $request->input('time');
        $lessons->subject = $request->input('subject');
        $lessons->quarter = $request->input('quarter');
        $lessons->topic = $request->input('topic');
        $lessons->title = $request->input('title');
        $lessons->gradelevel = $request->input('gradelevel');
        $lessons->duration = $request->input('duration');
        $lessons->objective = $request->input('objective');
        $lessons->reference = $request->input('reference');
        $lessons->materials = $request->input('materials');
        $lessons->tasks = $request->input('tasks');
        $lessons->notes = $request->input('notes');

        $lessons->save();
        return redirect('/teacher/teacherlessonplan')->with('success', 'Lesson Plan Created');
    }
    public function updatelessonplan(Request $request, $id){
        $lessons = Lesson::find($id);

        $this->validate($request, [
            'dateoflesson' => 'required',
            'time' => 'required',
            'subject' => 'required',
            'quarter' => 'required',
            'topic' => 'required',
            'title' => 'required',
            'gradelevel' => 'required',
            'duration' => 'required',
            'objective' => 'required',
            'reference' => 'required',
            'materials' => 'required',
            'tasks' => 'required',
            'notes' => 'required',
        ]);

        $lessons->dateoflesson = $request->input('dateoflesson');
        $lessons->time = $request->input('time');
        $lessons->subject = $request->input('subject');
        $lessons->quarter = $request->input('quarter');
        $lessons->topic = $request->input('topic');
        $lessons->title = $request->input('title');
        $lessons->gradelevel = $request->input('gradelevel');
        $lessons->duration = $request->input('duration');
        $lessons->objective = $request->input('objective');
        $lessons->reference = $request->input('reference');
        $lessons->materials = $request->input('materials');
        $lessons->tasks = $request->input('tasks');
        $lessons->notes = $request->input('notes');

        $lessons->save();
        return redirect('/teacher/teacherlessonplan')->with('success', 'Lesson Plan Updated');
    }
    public function deletelessonplan($id){
        $lessons = Lesson::find($id);
        $lessons->delete();
        return redirect('/teacher/teacherlessonplan')->with('error', 'Lesson Plan Removed');
    }
    public function teacherpayslip(){
    	return view('Teacher.teacher_payslip');
    }
    public function teacherprofile(){
    	return view('Teacher.teacher_profile');
    }
    public function teacherstudentgradedeped(){
    	return view('Teacher.teacher_studentgrades-deped');
    }
    public function teacherstudentgradeschool(){
    	return view('Teacher.teacher_studentgrades-school');
    }
    public function teacherstudentgrades(){
    	return view('Teacher.teacher_studentgrades');
    }
    public function teacherstudprog(){
    	return view('Teacher.teacher_studprog');
    }
}
