<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index()
    {
        $skills = [
            'PHP',
            'Laravel',
            'MySQL',
            'Git',
            'HTML',
            'CSS'
        ];

        return view('home', [
            'title' => 'Welcome to My First Laravel Website',
            'name' => 'Glory Nyambura',
            'course' => 'Laravel',
            'country' => 'Kenya',
            'skills' => $skills
        ]);
    }
}