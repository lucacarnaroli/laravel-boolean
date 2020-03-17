@extends('layouts.layout')

@section('content')
    <div class="box-card">
        @foreach (config('students.students') as $student)
        <div class="card">
            <img src="{{$student['img']}}">
            <h2>
                {{$student['name']}} ({{$student['age']}} anni)
            </h2>
            <h4>Assunt{{($student['genere'] == 'm') ? 'o':'a'}} da {{$student['work']}}</h4>
            <p>{{$student['description']}}</p>
        </div>
        @endforeach
    </div>
@endsection

