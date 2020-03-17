<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <nav class="navbar">
            <div class="logo">Boolean</div>
            <ul class="navbar-list">
                <li><a {{route('home.index')}} href="">Home</a></li>
                <li><a href="">Corso</a></li>
                <li><a class="{{(Request::route()->getName() == 'student.index') ? 'active' : ''}}" href="{{route('student.index')}}">Dopo corso</a></li>
                <li><a href="">Lezione gratuita</a></li>
                <li><a href=""><button>Candidati ora</button></a></li>
                
            </ul>
        </nav>