<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello',
        'name' => 'Bhushan'
    ]);
})->middleware('log.requests');

Route::get('/jobs', function () {
    return view('jobs/index', [
        'jobs' => Job::with('employer')->latest()->paginate(3)
    ]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => 'required|min:3',
        'location' => 'required',
        'description' => 'required',
        'compensation' => 'required'
    ]);
    Job::create([
        'title' => request('title'),
        'location' => request('location'),
        'description' => request('description'),
        'compensation' => request('compensation'),
        'employer_id' => 1 // todo
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    
    return view('jobs/show', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
