<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::view('/',  'projects.index')->name('projects.index');

Route::view('/project/{project}', 'projects.show')->name('projects.show');




Route::get('/projects-test', function () {
    $projects = Project::query()->inRandomOrder()->get()->toArray();
    return view('projects-test', compact('projects'));
});
