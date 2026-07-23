@extends('layouts.app')

@section('content')

<h1>{{ $title }}</h1>

<h2>About Me</h2>

<p>
    Hey there! My name is {{ $name }}.
    I am learning {{ $course }} one step at a time.
    I am from {{ $country }}.
</p>

<hr>

<h3>My Skills</h3>

<ul>
    <li>PHP</li>
    <li>Laravel</li>
    <li>MySQL</li>
    <li>Git</li>
    <li>HTML</li>
    <li>CSS</li>
</ul>

@endsection
