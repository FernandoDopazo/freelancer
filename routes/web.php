<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/',  [ProjectsController::class, 'index'])->name('projects.index');

Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');




Route::get('/projects-test', function () {
    $projects = Project::query()->inRandomOrder()->get()->toArray();
    return view('projects-test', compact('projects'));
});
