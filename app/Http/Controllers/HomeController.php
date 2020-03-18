<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        // $students = config('students.students');
        
        return view('home.index');
    }

    public function privacy()
    {
        
    }

    public function faq()
    {
        
    }
}
