<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Application;


Route::get('/', [HomeController::class, 'index'] ) ->name('home') ;

Route::get('/about', function () {
    return view('about', [
        'title' => 'Welcome to My First Laravel Website',
        'name' => 'Glory Nyambura',
        'course' => 'Laravel',
        'country' => 'Kenya'
    ]);
}) ->name('about');

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Us'
    ]);
})->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required'
    ]);

    $name = $request->input('name');

    return "Hello {$name}! Thank you for contacting us.";

});

Route::get('/careers', function () {
    return view('careers', [
        'title' => 'Careers'
    ]);
})->name('careers');

Route::get('/careers/apply', function () {
    return view('apply', [
        'title' => 'Job Application'
    ]);
})->name('apply');

Route::post('/careers/apply', function (Request $request) {

    $request->validate([
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

    Application::create($request->all());

return redirect()
    ->route('applications')
    ->with('success', 'Application submitted successfully!');
    


});

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




