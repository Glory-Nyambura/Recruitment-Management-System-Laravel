@extends('layouts.app')

@section('content')

<h1>Application Details</h1>

<table class="applications-table">
    <tr>
        <th>Field</th>
        <th>Information</th>
    </tr>

    <tr>
        <td>Full Name</td>
        <td>{{ $application->full_name }}</td>
    </tr>

    <tr>
        <td>Email</td>
        <td>{{ $application->email }}</td>
    </tr>

    <tr>
        <td>Phone</td>
        <td>{{ $application->phone }}</td>
    </tr>

    <tr>
        <td>County</td>
        <td>{{ $application->county }}</td>
    </tr>

    <tr>
        <td>Education</td>
        <td>{{ $application->education }}</td>
    </tr>

    <tr>
        <td>Experience</td>
        <td>{{ $application->experience }} years</td>
    </tr>

    <tr>
        <td>Position</td>
        <td>{{ $application->position }}</td>
    </tr>

    <tr>
        <td>Expected Salary</td>
        <td>KES {{ number_format($application->salary, 2) }}</td>
    </tr>

    <tr>
        <td>Cover Letter</td>
        <td>{{ $application->cover_letter }}</td>
    </tr>
</table>

<br>
<a href="{{ route('home') }}">Home</a>
|
<a href="{{ route('applications') }}">Back to Dashboard</a>


@endsection


