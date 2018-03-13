<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function diploma(){
    	return view('Principal.diploma');
    }
    public function diploma2(){
    	return view('Principal.diploma2');
    }
    public function diploma3(){
    	return view('Principal.diploma3');
    }
    public function document(){
    	return view('Principal.document');
    }
    public function form137(){
    	return view('Principal.form137');
    }
    public function form1372(){
    	return view('Principal.form1372');
    }
    public function form1373(){
    	return view('Principal.form1373');
    }
    public function messagesMemos(){
    	return view('Principal.messages-memos');
    }
    public function studentDesk(){
    	return view('Principal.student-desk');
    }
    public function teacherDesk(){
    	return view('Principal.teacher-desk');
    }
    public function transcript(){
    	return view('Principal.transcript');
    }
    public function transcript2(){
    	return view('Principal.transcript2');
    }
    public function transcript3(){
    	return view('Principal.transcript3');
    }
}
