<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Dotenv\Result\Result;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function gender(Request $request)
    {
       $data = $request->all();
       $students = config('students.students');
       $genders = config('students.genders');

        $result = [
            'error' => '',
            'response'=> []
        ];

        
        if(in_array($data['gender'], $genders)) {
           $genderPost = $data['gender'];
           if($data['gender'] == 'all') {
               $result['response'] = $students;
                return response()->json($result);
           } 
            else {
               foreach ($students as $key => $student) {
                   if($student['gender'] == $genderPost) {
                        $result['response'][] = $student;
                   }
               }
                return response()->json($result);
           }
       }
    }
}
