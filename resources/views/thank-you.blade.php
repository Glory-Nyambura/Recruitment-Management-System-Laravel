@extends('layouts.app')

@section('title', 'Application Submitted')

@section('content')

<section class="hero">
    <div class="container">
        <div class="thank-you-card">
            <svg class="thank-you-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m5.616-4.916A11.82 11.82 0 0112 2.5c-2.643 0-5.137.773-7.186 2.105l-.08.05A9.98 9.98 0 00.345 7.2a9.977 9.977 0 001.65 8.3l.13.13a9.97 9.97 0 008.3 3.37c1.56.07 3.15.07 4.74 0a9.977 9.977 0 004.58-2.643l.11-.07a9.97 9.97 0 002.08-2.18 9.966 9.966 0 001.4-3.32 12.5 12.5 0 01-2.44.99 10.005 10.005 0 00-.72-3.07l-.2-.47a9.976 9.976 0 00-2.28-2.82l-.33-.2z" />
            </svg>
            <h1>Thank You, {{ old('full_name', $name ?? 'Applicant') }}!</h1>
            <p class="thank-you-message">
                Your application for the <strong>{{ $position ?? 'position' }}</strong> role has been submitted successfully.
            </p>
            <p class="thank-you-subtext">
                <strong>We have received your application and our team will review it shortly.</strong><br>
                <strong>You will hear back from us within 3-5 business days.</strong>
            </p>
            <a href="{{ route('home') }}" class="btn-primary">Return to Home</a>
        </div>
    </div>
</section>

@endsection
