@extends('layouts.app')

@section('content')

<h1>Applications Dashboard</h1>

@if(session('success'))
    <div style="
        background-color:#d4edda;
        color:#155724;
        padding:10px;
        border:1px solid #c3e6cb;
        border-radius:5px;
        margin-bottom:20px;
    ">
        ✅ {{ session('success') }}
    </div>
@endif

<p><strong>Total Applications:</strong> {{ $applications->count() }}</p>

<table class="applications-table">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>County</th>
        <th>Experience</th>
        <th>Actions</th>
        <th>Applied On</th>
    </tr>

    @foreach($applications as $application)
        <tr>
            <td>{{ $application->id }}</td>
            <td>{{ $application->full_name }}</td>
            <td>{{ $application->email }}</td>
            <td>{{ $application->position }}</td>
            <td>{{ $application->county }}</td>
            <td>{{ $application->experience }}</td>

            <td>
    <a class="btn-view" href="/applications/{{ $application->id }}">View</a>

    <a class="btn-edit" href="/applications/{{ $application->id }}/edit">Edit</a>
</td>

            <td>{{ $application->created_at->format('d/m/Y') }}</td>
        </tr>
    @endforeach

</table>

@endsection

