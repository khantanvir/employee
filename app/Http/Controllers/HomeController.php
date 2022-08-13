<?php

namespace App\Http\Controllers;

use App\Models\Company\Company;
use App\Models\Employee\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $data['page_title'] = 'Home';
        return view('front/index');
    }
    //contact
    public function contact(){
        $data['page_title'] = 'Home | Contact Us';
        return view('front/contact');
    }
    //companies
    public function companies(){
        $data['page_title'] = 'Home | Company List';
        $data['list_of_company'] = Company::where('status',0)->orderBy('id','desc')->where('is_deleted',0)->paginate(10);
        return view('front/company',$data);
    }
    //companies
    public function employees(){
        $data['page_title'] = 'Home | Employee List';
        $data['list_of_employee'] = Employee::where('status',0)->orderBy('id','desc')->where('is_deleted',0)->paginate(10);
        return view('front/employee',$data);
    }
    
}
