<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
// use App\Http\Controllers\CourseController;

// Route::resource('courses', CourseController::class);

Route::get('/course/create', function () {
    return view('course.create');
});

Route::post('/course', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
        'duration' => 'required|integer|min:1|max:100',
        'course_fee' => 'required|integer|min:1|max:100',
        'difficulty_level' => ['required', Rule::in(['Beginner', 'Intermediate', 'Advanced'])],
    ]);

    $course = Course::create($validated);
    return "Course {$course->name} created successfully!";
});

Route::get('/courses', function () {

    $courses = Course::all();

    return view('course.list', [
        'courses' => $courses
    ]);
});

Route::get('/courses/{id}', function ($id) {
    $course = Course::findOrFail($id);

    return view('course.detail', [
        'course' => $course
    ]);
});

//
Route::get('/courses/{id}/edit', function ($id) {
        $course = Course::findOrFail($id);

    return view('course.edit', [
        'course' => $course
    ]);
});


Route::put('/courses/{id}', function (Request $request, $id) {
    $course = Course::findOrFail($id);
    $validated = $request->validate([ 
        'name' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
        'duration' => 'required|integer|min:1|max:52',
        'course_fee' => 'required|integer|min:1|max:10',
        'difficulty_level' => ['required', Rule::in(['Beginner', 'Intermediate', 'Advanced'])],
    ]);

    $course->update($validated);
    return redirect('/courses/' . $course->id)
        ->with('success', 'Course updated successfully!'); 
});

Route::delete('/courses/{id}', function ($id) {
        $course = Course::findOrFail($id);

    $course->delete();

    return redirect('/courses')
        ->with(
            'success',
            'Course deleted successfully!'
        );
});
