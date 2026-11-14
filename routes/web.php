<?php

// use App\Models\Student;
// use App\Models\Course;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
// use Illuminate\Validation\Rule;
// use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/student.php';
require __DIR__.'/course.php';
