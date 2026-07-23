@extends('layouts.app')

@section('content')

<h1>Contact Us</h1>



<form action="/contact" method="POST">  
    @csrf

    <p>
        <label for="name">Name</label><br>
        <input 
        type="text" 
        id="name" 
        name="name" 
        value ="{{ old('name') }}"
        class = "@error('name') error-input @enderror">
        @error('name')
        <p style="color: red;">{{ $message }}</p>
        @enderror

    </p>

    <p>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value ="{{ old('email') }}">
    </p>

    <p>
        <label for="message">Message</label><br>
        <textarea id="message" name="message" rows="5">{{ old('message') }}</textarea>
    </p>

    <button>Send Message</button>

</form>

@endsection
