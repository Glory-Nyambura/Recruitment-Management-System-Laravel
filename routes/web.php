<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Mail\ApplicationReceived;

use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'About TalentBridge'
    ]);
})->name('about');

Route::get('/careers', function () {
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

    return view('careers', [
        'title' => 'Careers',
        'positions' => $positions,
    ]);
})->name('careers');

Route::get('/careers/apply', function (Request $request) {
    $position = $request->query('position');
    return view('apply', [
        'title' => 'Job Application',
        'position' => $position,
    ]);
})->name('apply');

Route::get('/careers/{position}', function ($position) {
    $positions = [
        [
            'title' => 'Data Analyst',
            'category' => 'Technology',
            'location' => 'Nairobi, Kenya',
            'type' => 'Full-time',
            'onsite' => 'Onsite',
            'qualification' => 'BA/BSc/HND',
            'experience' => '3+ years',
            'job_field' => 'Technology',
            'date_posted' => '2025-01-15',
            'deadline' => '2025-02-15',
            'job_purpose' => 'Analyze data trends, build reports, and provide actionable insights to support strategic business decisions.',
            'key_responsibilities' => ['Collect and analyze complex datasets', 'Build dashboards and reports', 'Collaborate with cross-functional teams', 'Identify trends and provide actionable insights'],
            'detailed_qualifications' => ['Bachelor\'s degree in Statistics, Mathematics, Computer Science, or related field', 'Proven experience in data analysis', 'Proficiency in SQL, Excel, and data visualization tools'],
            'skills' => ['SQL', 'Excel', 'Tableau', 'Python', 'Data Visualization', 'Statistical Analysis'],
        ],
        [
            'title' => 'Laravel Developer',
            'category' => 'Technology',
            'location' => 'Remote / Nairobi',
            'type' => 'Full-time',
            'onsite' => 'Remote / Onsite',
            'qualification' => 'BA/BSc/HND',
            'experience' => '3+ years',
            'job_field' => 'Technology',
            'date_posted' => '2025-01-10',
            'deadline' => '2025-02-10',
            'job_purpose' => 'Develop and maintain robust web applications using Laravel, modern PHP, and clean architecture principles.',
            'key_responsibilities' => ['Build and maintain Laravel applications', 'Write clean, testable code', 'Collaborate with frontend developers', 'Optimize application performance'],
            'detailed_qualifications' => ['Bachelor\'s degree in Computer Science or related field', '3+ years of PHP/Laravel experience', 'Experience with REST APIs, MySQL, and version control'],
            'skills' => ['Laravel', 'PHP', 'MySQL', 'REST APIs', 'Git', 'JavaScript'],
        ],
        [
            'title' => 'Office Administrator',
            'category' => 'Administration',
            'location' => 'Nairobi, Kenya',
            'type' => 'Full-time',
            'onsite' => 'Onsite',
            'qualification' => 'Certificate / Diploma',
            'experience' => '2+ years',
            'job_field' => 'Administration',
            'date_posted' => '2025-01-20',
            'deadline' => '2025-02-20',
            'job_purpose' => 'Manage daily office operations, coordinate administrative tasks, and support teams across departments.',
            'key_responsibilities' => ['Oversee daily office operations', 'Manage schedules and appointments', 'Coordinate administrative tasks', 'Support team coordination'],
            'detailed_qualifications' => ['Certificate or Diploma in Business Administration or related field', '2+ years of office administration experience', 'Proficiency in MS Office suite'],
            'skills' => ['MS Office', 'Communication', 'Organization', 'Time Management', 'Customer Service'],
        ],
        [
            'title' => 'Customer Support Officer',
            'category' => 'Customer Service',
            'location' => 'Nairobi / Mombasa',
            'type' => 'Full-time',
            'onsite' => 'Onsite',
            'qualification' => 'KCSE + Certificate',
            'experience' => '2+ years',
            'job_field' => 'Customer Service',
            'date_posted' => '2025-01-25',
            'deadline' => '2025-02-25',
            'job_purpose' => 'Deliver outstanding customer experiences by resolving inquiries, troubleshooting issues, and maintaining client relationships.',
            'key_responsibilities' => ['Handle customer inquiries via phone, email, and chat', 'Troubleshoot and resolve customer issues', 'Maintain detailed records', 'Escalate complex issues when necessary'],
            'detailed_qualifications' => ['KCSE minimum', 'Certificate in Customer Service or related field preferred', '2+ years of customer support experience', 'Excellent communication skills'],
            'skills' => ['Communication', 'Problem Solving', 'CRM Software', 'Patience', 'Multitasking'],
        ],
    ];

    $job = null;
    foreach ($positions as $p) {
        if (strtolower($p['title']) === strtolower($position)) {
            $job = $p;
            break;
        }
    }

    if (!$job) {
        abort(404);
    }

    return view('job', [
        'title' => $job['title'] . ' - TalentBridge',
        'job' => $job,
    ]);
})->name('job.details');

Route::post('/careers/apply', function (Request $request) {

    $validated = $request->validate([
        'full_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'county' => 'required',
        'education' => 'required',
        'experience' => 'required|numeric',
        'position' => 'required',
        'salary' => 'required|numeric',
        'cover_letter' => 'required|min:20',
    ]);

    $application = Application::create([
        ...$validated,
        'user_id' => $request->user()?->id,
    ]);

    Mail::to($application->email)->send(
        new ApplicationReceived($application)
    );

    return view('thank-you', [
        'title' => 'Application Submitted',
        'name' => $application->full_name,
        'position' => $application->position,
    ]);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/applications', function () {
        $applications = Application::all();
        return view('applications', [
            'title' => 'Applications Dashboard',
            'applications' => $applications,
        ]);
    })->name('applications');

    Route::get('/applications/{id}', function ($id) {
        $application = Application::findOrFail($id);
        return view('show-application', [
            'title' => 'Application Details',
            'application' => $application,
        ]);
    });

    Route::get('/applications/{id}/edit', function ($id) {
        $application = Application::findOrFail($id);
        return view('edit-application', [
            'title' => 'Edit Application',
            'application' => $application,
        ]);
    });

    Route::put('/applications/{id}', function (Request $request, $id) {
        $application = Application::findOrFail($id);
        $application->update($request->all());
        return redirect()
            ->route('applications')
            ->with('success', 'Application updated successfully');
    });

    Route::delete('/applications/{id}', function ($id) {
        $application = Application::findOrFail($id);
        $application->delete();
        return redirect()
            ->route('applications')
            ->with('success', 'Application deleted successfully.');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Recruiter / Employer job posting dashboard
    Route::get('/recruiter', function () {
        return view('recruiter.dashboard', [
            'title' => 'Recruiter Dashboard',
        ]);
    })->middleware('role:recruiter')->name('recruiter.dashboard');

    Route::post('/recruiter/jobs', function (Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'job_purpose' => 'required|string',
            'key_responsibilities' => 'required|string',
            'detailed_qualifications' => 'required|string',
            'skills' => 'required|string',
        ]);

        $job = [
            'title' => $request->title,
            'category' => $request->category,
            'location' => $request->location,
            'type' => $request->type,
            'onsite' => $request->input('onsite', 'Onsite'),
            'qualification' => $request->input('qualification', 'BA/BSc/HND'),
            'experience' => $request->input('experience', '3+ years'),
            'job_field' => $request->input('job_field', $request->category),
            'date_posted' => now()->toDateString(),
            'deadline' => now()->addDays(30)->toDateString(),
            'job_purpose' => $request->job_purpose,
            'key_responsibilities' => array_values(array_filter(array_map('trim', explode("\n", $request->key_responsibilities)))),
            'detailed_qualifications' => array_values(array_filter(array_map('trim', explode("\n", $request->detailed_qualifications)))),
            'skills' => array_values(array_filter(array_map('trim', explode(',', $request->skills)))),
        ];

        session()->flash('success', 'Job "' . $job['title'] . '" posted successfully.');

        return redirect()->route('recruiter.dashboard');
    })->middleware('role:recruiter')->name('recruiter.jobs.store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
