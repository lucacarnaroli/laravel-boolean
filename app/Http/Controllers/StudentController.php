<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;

    public function __construct()
    {
        $this->getStudents();
    }
    public function index()
    {
        $data = [
            'students' => $this->students,
            'genders' => $this->genders
        ];
        // $students = $this->students;
        // $students = config('students.students');
        // dd(config('students.students'));
        return view('student.index', $data);
    }

    public function show($id)
    {
        if (!array_key_exists($id, $this->students)) {
            abort('404');
        };
        $student = $this->students[$id];
        return view('student.show',compact('student'));
    }

    // creo una funzione nella quale richiamo la $private students
    public function getStudents()
    {
        $this->students = config('students.students');
        // dd(config('students.students'));
    }
}
