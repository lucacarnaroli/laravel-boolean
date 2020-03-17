<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function __construct()
    {
        $this->getStudents();
    }
    public function index()
    {
        $students = $this->students;
        // $students = config('students.students');
        // dd(config('students.students'));
        return view('student.index',compact('students'));
    }

    public function show($id)
    {
        
    }

    // creo una funzione nella quale richiamo la $private students
    public function getStudents()
    {
        $this->students = config('students.students');
        // dd(config('students.students'));
    }
}
