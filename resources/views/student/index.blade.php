@extends('layouts.layout')

@section('content')
    <select name="filter" id="filter">
        <option value="All">All</option>
        <option value="man">Man</option>
        <option value="women">Women</option>
    </select>
    <div class="box-card">
        @foreach (config('students.students') as $key => $student)
        <div class="card">
            <img src="{{$student['img']}}">
            <div class="text">
                <a href="{{route('student.show',['id' => $key])}}">
                    <h2>
                        {{$student['name']}} ({{$student['age']}} anni)
                    </h2>
                </a>
            </div>
            <div class="info">
                <h4>Assunt{{($student['genere'] == 'm') ? 'o':'a'}} da {{$student['work']}}</h4>
                <p>{{$student['description']}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection

