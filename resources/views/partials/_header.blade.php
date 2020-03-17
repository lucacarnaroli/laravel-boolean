<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <nav>
            <div>Boolean</div>
            <ul class="navbar">
                <li><a {{route('home.index')}} href="">Home</a></li>
                <li><a href="">Corso</a></li>
                <li><a href="{{route('student.index')}}">Dopo corso</a></li>
                <li><a href="">Lezione gratuita</a></li>
                <li><a href="">Candidati ora</a></li>
            </ul>
        </nav>