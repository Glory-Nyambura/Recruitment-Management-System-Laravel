<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        $positions = [
            [
                'title' => 'Data Analyst',
                'category' => 'Technology',
                'location' => 'Nairobi, Kenya',
                'type' => 'Full-time',
                'description' => 'Analyze data trends, build reports, and provide actionable insights to support strategic business decisions.',
            ],
            [
                'title' => 'Laravel Developer',
                'category' => 'Technology',
                'location' => 'Remote / Nairobi',
                'type' => 'Full-time',
                'description' => 'Develop and maintain robust web applications using Laravel, modern PHP, and clean architecture principles.',
            ],
            [
                'title' => 'Office Administrator',
                'category' => 'Administration',
                'location' => 'Nairobi, Kenya',
                'type' => 'Full-time',
                'description' => 'Manage daily office operations, coordinate administrative tasks, and support teams across departments.',
            ],
            [
                'title' => 'Customer Support Officer',
                'category' => 'Customer Service',
                'location' => 'Nairobi / Mombasa',
                'type' => 'Full-time',
                'description' => 'Deliver outstanding customer experiences by resolving inquiries, troubleshooting issues, and maintaining client relationships.',
            ],
        ];

        $categories = [];
        $jobTitles = [];
        foreach ($positions as $position) {
            $categories[$position['category']] = ($categories[$position['category']] ?? 0) + 1;
            $jobTitles[$position['title']] = ($jobTitles[$position['title']] ?? 0) + 1;
        }

        $counties = [
            'Baringo', 'Bomet', 'Bungoma', 'Busia', 'Elgeyo-Marakwet',
            'Embu', 'Garissa', 'HomaBay', 'Isiolo', 'Kakamega', 'Kericho',
            'Kiambu', 'Kilifi', 'Kisii', 'Kisumu', 'Kitui', 'Kwale',
            'Laikipia', 'Lamu', 'Machakos', 'Malindi', 'Mandera', 'Marsabit',
            'Meru', 'Migori', 'Mombasa', 'Muranga', 'Nairobi', 'Nakuru',
            'Nandi', 'Narok', 'Nyamira', 'Nyandarua', 'Nyeri', 'Samburu',
            'Siaya', 'Tana River', 'Taita-Taveta', 'Tharaka-Nithi', 'Turkana',
            'Uasin Gishu', 'Vihiga', 'Wajir', 'Trans Nzoia', 'West Pokot',
        ];

        return view('home', [
            'title' => 'Job Hub — Find Your Next Opportunity',
            'positions' => $positions,
            'categories' => $categories,
            'job_titles' => array_keys($jobTitles),
            'counties' => $counties,
        ]);
    }
}
