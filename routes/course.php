<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

// Route::resource('courses', CourseController::class);


Route::get('/course/create', function () {
    return view('course.create');
});