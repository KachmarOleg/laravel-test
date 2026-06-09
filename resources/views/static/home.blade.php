@extends('layouts.main')

@section('header-title')
    Home page
@endsection

@section('content')
    <div class="hero">
        <div class="hero-over">
            <h1>Welcome to app</h1>
            <p>Learn programming from any device</p>
            <a href="#" class="hero-btn">Start</a>
        </div>
    </div>
        
    <div class="main-container">
        <div class="main-block">
            <h1>Home Page</h1>
            <p>Welcome to the home page!</p>
        </div>

        @include('includes.aside')
    </div>
@endsection