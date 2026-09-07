@extends('layouts.app')

@section('title', $title)

@section('content')

<section class="about-page">
    <div class="container">
        <div class="about-hero">
            <h1>About TalentBridge</h1>
            <p class="about-tagline">Connecting talent with opportunity across Kenya.</p>
        </div>

        <div class="about-content">
            <p>TalentBridge is a modern recruitment platform dedicated to connecting skilled professionals with outstanding career opportunities across Kenya. We believe that the right job can transform a life, and the right candidate can transform a business.</p>

            <p>Our mission is to simplify the hiring process by providing a transparent, accessible, and efficient platform where job seekers and employers can connect directly. We are committed to reducing barriers to employment and helping organizations find the talent they need to thrive.</p>

            <h2>What We Offer</h2>
            <ul>
                <li>A curated selection of career opportunities across multiple industries</li>
                <li>A simple, candidate-friendly application process</li>
                <li>Direct connections between employers and applicants</li>
                <li>A platform designed for clarity, speed, and trust</li>
            </ul>

            <h2>Our Values</h2>
            <ul>
                <li><strong>Integrity:</strong> We treat every candidate and employer with honesty and respect.</li>
                <li><strong>Accessibility:</strong> We believe everyone deserves a fair chance to showcase their skills.</li>
                <li><strong>Excellence:</strong> We continuously improve our platform to deliver the best recruitment experience.</li>
                <li><strong>Transparency:</strong> We provide clear information about roles, requirements, and processes.</li>
            </ul>

            <p>Whether you are taking the next step in your career or looking for top talent for your organization, TalentBridge is here to help you succeed.</p>
        </div>

        <div class="social-section">
            <h2>Connect With Us</h2>
        <div class="social-links">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social-link facebook" aria-label="Facebook">
                <svg viewBox="0 0 24 24" fill="currentColor" width="22" height="22"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                <span>Facebook</span>
            </a>
            <a href="https://x.com" target="_blank" rel="noopener noreferrer" class="social-link x" aria-label="X">
                <svg viewBox="0 0 24 24" fill="currentColor" width="22" height="22"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                <span>X</span>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="social-link linkedin" aria-label="LinkedIn">
                <svg viewBox="0 0 24 24" fill="currentColor" width="22" height="22"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                <span>LinkedIn</span>
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social-link instagram" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="currentColor" width="22" height="22"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                <span>Instagram</span>
            </a>
        </div>
        </div>

        <div class="stats-section">
            <div class="stat-card">
                <div class="stat-number">2026</div>
                <div class="stat-label">Registered</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">1 Million +</div>
                <div class="stat-label">Subscribers</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">10,000 +</div>
                <div class="stat-label">Employers</div>
            </div>
        </div>
    </div>
</section>

@endsection
