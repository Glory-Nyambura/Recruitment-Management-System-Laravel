@extends('layouts.app')

@section('title', $title)

@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Find the Right Opportunity.<br>Build Your Future.</h1>
        <p>Connect with top employers and discover career opportunities that match your skills and ambitions.</p>

        <livewire:search-filters />
    </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works">
    <div class="container">
        <h2>How It Works</h2>
        <p class="section-subtitle">Your journey to a rewarding career is just three steps away.</p>

        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">1</div>
                <h4>Search for a Job</h4>
                <p>Browse available positions and find one that matches your skills, experience, and career goals.</p>
            </div>
            <div class="step-card">
                <div class="step-number">2</div>
                <h4>Submit Your Application</h4>
                <p>Complete the application form with your details, experience, and a cover letter highlighting your strengths.</p>
            </div>
            <div class="step-card">
                <div class="step-number">3</div>
                <h4>Get Hired</h4>
                <p>Our team reviews your application and reaches out if you are shortlisted. Start your new role with confidence.</p>
            </div>
        </div>
    </div>
</section>

@endsection
