@extends('layouts.app')

@section('title', $title)

@section('content')

<section class="positions">
    <div class="container">
        <h2>Explore Career Opportunities</h2>
        <p class="section-subtitle">Browse all available roles and find the opportunity that fits your career goals.</p>

        <livewire:search-filters />
    </div>
</section>

@endsection
