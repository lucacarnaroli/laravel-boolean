@extends('layouts.layout')

@section('content')

<div class="box-card">
    
    <div class="card">
        <img src="{{$student['img']}}">
        <div class="text">
            
            <h2>
                {{$student['name']}} ({{$student['age']}} anni)
            </h2>
        
        </div>
        <div class="info">
            <h4>Assunt{{($student['genere'] == 'm') ? 'o':'a'}} da {{$student['work']}}</h4>
            <p>{{$student['description']}}</p>
        </div>
    </div>
    
</div>
@endsection