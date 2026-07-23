@extends('layouts.app')

@section('content')

<h1>Edit Application</h1>

<form action="/applications/{{ $application->id }}" method="POST">

    @csrf
    @method('PUT')

    <p>
        <label>Full Name</label><br>
        <input
            type="text"
            name="full_name"
            value="{{ $application->full_name }}">
    </p>

    <p>
        <label>Email</label><br>
        <input
            type="email"
            name="email"
            value="{{ $application->email }}">
    </p>

    <p>
        <label>Phone</label><br>
        <input
            type="text"
            name="phone"
            value="{{ $application->phone }}">
    </p>

    <p>
        <label>County</label><br>
        <input
            type="text"
            name="county"
            value="{{ $application->county }}">
    </p>

    <p>
        <label>Education</label><br>
        <input
            type="text"
            name="education"
            value="{{ $application->education }}">
    </p>

    <p>
        <label>Years of Experience</label><br>
        <input
            type="number"
            name="experience"
            value="{{ $application->experience }}">
    </p>

    <p>
        <label>Position</label><br>
        <input
            type="text"
            name="position"
            value="{{ $application->position }}">
    </p>

    <p>
        <label>Expected Salary</label><br>
        <input
            type="number"
            step="0.01"
            name="salary"
            value="{{ $application->salary }}">
    </p>

    <p>
        <label>Cover Letter</label><br>
        <textarea
            name="cover_letter"
            rows="6">{{ $application->cover_letter }}</textarea>
    </p>

    <button type="submit">Update Application</button>

</form>

<br>

<a href="{{ route('applications') }}">← Back to Dashboard</a>

@endsection
