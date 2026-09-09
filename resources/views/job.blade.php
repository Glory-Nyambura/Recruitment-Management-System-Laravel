@extends('layouts.app')

@section('title', $title)

@section('content')

<section class="job-detail">
    <div class="container">
        <div class="job-header">
            <h1>{{ $job['title'] }}</h1>
            <span class="badge">{{ $job['category'] }}</span>
        </div>

        <div class="job-meta-grid">
            <div class="job-meta-item">
                <strong>Date Posted</strong>
                <span>{{ \Carbon\Carbon::parse($job['date_posted'])->format('d M Y') }}</span>
            </div>
            <div class="job-meta-item">
                <strong>Deadline</strong>
                <span>{{ \Carbon\Carbon::parse($job['deadline'])->format('d M Y') }}</span>
            </div>
            <div class="job-meta-item">
                <strong>Job Type</strong>
                <span>{{ $job['type'] }}</span>
            </div>
            <div class="job-meta-item">
                <strong>Work Mode</strong>
                <span>{{ $job['onsite'] ?? 'Onsite' }}</span>
            </div>
            <div class="job-meta-item">
                <strong>Qualification</strong>
                <span>{{ $job['qualification'] }}</span>
            </div>
            <div class="job-meta-item">
                <strong>Experience</strong>
                <span>{{ $job['experience'] }}</span>
            </div>
            <div class="job-meta-item">
                <strong>Location</strong>
                <span>{{ $job['location'] }}</span>
            </div>
            <div class="job-meta-item">
                <strong>Job Field</strong>
                <span>{{ $job['job_field'] }}</span>
            </div>
        </div>

        <div class="job-sections">
            <div class="job-section">
                <h3>Job Purpose</h3>
                <p>{{ $job['job_purpose'] }}</p>
            </div>

            <div class="job-section">
                <h3>Key Responsibilities</h3>
                <ul class="job-bullet-list">
                    @foreach($job['key_responsibilities'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="job-section">
                <h3>Qualifications and Experience</h3>
                <ul class="job-bullet-list">
                    @foreach($job['detailed_qualifications'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="job-section">
                <h3>Skills</h3>
                <ul class="job-bullet-list">
                    @foreach($job['skills'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="job-cta">
            <a href="{{ route('apply', ['position' => $job['title']]) }}" class="btn-primary">Apply Now</a>
        </div>
    </div>
</section>

@endsection
