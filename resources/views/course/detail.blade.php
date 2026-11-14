<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details</h1>

    <p>
        <strong>ID:</strong>
        {{ $course->id }}
    </p>

    <p>
        <strong>Name:</strong>
        {{ $course->name }}
    </p>

    <p>
        <strong>Description:</strong>
        {{ $course->description }}
    </p>

    <p>
        <strong>Duration:</strong>
        {{ $course->duration }} weeks
    </p>

    <p>
        <strong>Course Fee:</strong>
        ${{ $course->course_fee }}
    </p>

    <p>
        <strong>Difficulty Level:</strong>
        {{ $course->difficulty_level }}
    </p>

    <a href="/courses/{{ $course->id }}/edit">
        Edit Course
    </a>
    <br>

    <a href="/courses">
        Back to Courses
    </a>
</body>
</html>