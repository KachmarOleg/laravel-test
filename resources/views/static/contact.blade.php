@extends('layouts.main')

@section('header-title')
    Contact page
@endsection

@section('content')
@if($errors->any())
    <div class="block-error">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="main-container">
        <div class="main-block">
            <h1>Contact Page</h1>
            
            <form action="{{ route('contact.post')}}" method="POST">
                @csrf

                <label for="name">Name:</label>
                <input type="text" placeholder="Your Name" id="name" name="name" value="{{ old('name') }}">

                <br>
                <label for="email">Email:</label>
                <input type="email" placeholder="Your Email" id="email" name="email" value="{{ old('email') }}">

                <br>
                <label for="subject">Subject:</label>
                <input type="text" placeholder="Subject" id="subject" name="subject" value="{{ old('subject') }}">
                <br>
                <label for="message">Message:</label>
                <textarea placeholder="Your Message" id="message" name="message">{{ old('message') }}</textarea>

                <br>
                <button type="submit">Send Message</button>
            </form>
        </div>

        @include('includes.aside')
    </div>

    
@endsection