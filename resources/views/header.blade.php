<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BookStore</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



</head>
<body>
<header>

    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a href=""><img src="{{url('images.jpg')}}" style="width: 50px; height: 50px;"> &nbsp; &nbsp;</a>

        </li>
        <li class="nav-item">
            <a href="{{url('/')}}">Home &nbsp; &nbsp; &nbsp;  </a>
        </li>
        <li class="nav-item">
            <a href="{{url('user')}}">User  &nbsp; &nbsp; </a>
        </li>
        <li class="nav-item">
            <a href="">Contact Us &nbsp;&nbsp; &nbsp; &nbsp;</a>
        </li>
        <li class="nav-item">
            <a href="">Help &nbsp; &nbsp; &nbsp;</a>
        </li>
        <li class="nav-item">
            <a class="nav-item justify-content-end" style="float: right;" href="{{url('signup')}}">Signup &nbsp; &nbsp;</a>
        </li>
    </ul>
   {{-- <nav class="nav">
       <a href=""><img src="{{url('images.jpg')}}" style="width: 50px; height: 50px;"> &nbsp; &nbsp;</a>
        <a href="{{url('/')}}">Home &nbsp; &nbsp; &nbsp;  </a>
        <a href="{{url('user')}}">User  &nbsp; &nbsp; </a>
        <a href="">Contact Us &nbsp;&nbsp; &nbsp; &nbsp;</a>
        <a href="{{url('about')}}">About &nbsp;  &nbsp;</a>
        <a href="">Help &nbsp; &nbsp; &nbsp;</a>
        <a class="nav-item justify-content-end" style="float: right;" href="{{url('signup')}}">Signup &nbsp; &nbsp;</a>

    </nav>--}}
</header>



{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="{{url('/')}}">Home &nbsp; &nbsp;<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{url('user')}}">User &nbsp; &nbsp;</a>
                </li>
                <li class="nav-item">
                    <a href="">Contact Us &nbsp; &nbsp;</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('about')}}">About &nbsp; &nbsp;</a>
                </li>

                <li class="nav-item">
                    <a href="">Help</a>
                </li>
                <li class="nav-item justify-content-end">
                    <a href="{{url('signup')}}">Signup &nbsp; &nbsp;</a>
                </li>
            </ul>

        </div>
    </nav>--}}


  {{--  <a href="{{url('/')}}">Home</a>.
    <a href="{{url('user')}}">User</a>.
    <a href="">Contact Us</a>.
    <a href="{{url('about')}}">About</a>.
    <a href="{{url('signup')}}">Signup</a>.
    <a href="">Help</a>--}}
{{----}}

