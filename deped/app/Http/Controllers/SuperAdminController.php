<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function admin(){
    	return view('Admin.admin-management');
    }

    public function asset(){
    	return view('Asset.asset-management');
    }

    public function clinic(){
    	return view('Clinic.clinic-management');
    }

    public function counselor(){
    	return view('Counselor.counselor-management');
    }

    public function dashboard(){
    	return view('Dashboard.dashboard');
    }

    public function disciplinary(){
    	return view('Disciplinary.disciplinary-management');
    }

    public function document(){
    	return view('Document.document-management');
    }

    public function ecanteen(){
    	return view('E-Canteen.ecanteen-management');
    }

    public function finance(){
    	return view('Finance.finance-management');
    }

    public function home(){
    	return view('Home.login');
    }

    public function hr(){
    	return view('Hr.hr-management');
    }

    public function lostandfound(){
    	return view('LostandFound.lostandfound_management');
    }

    public function onlineexam(){
    	return view('Online Exam.online-exam-management');
    }

    public function parent(){
    	return view('Parent.parent-management');
    }

    public function policy(){
    	return view('Policy.policy-management');
    }

    public function preventive(){
    	return view('Preventive.preventive-maintenance-management');
    }

    public function principal(){
    	return view('Principal.principal-management');
    }

    public function security(){
    	return view('Security.security-management');
    }

    public function superadmin(){
    	return view('Super Admin.super-admin-management');
    }

    public function teacher(){
    	return view('Teacher.teacher-management');
    }

    public function transportation(){
    	return view('Transportation.transportation-management');
    }

}

