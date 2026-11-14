<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
</head>

<body>
    <h1>Create Course</h1>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/course" method='POST'>
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="duration">Duration (hours):</label>
            <input type="number" name="duration" id="duration" required>
        </div>
        <div>
            <label for="course_fee">Course Fee:</label>
            <input type="number" name="course_fee" id="course_fee" step="0.01" required>
        </div>
        <div>
            <label for="difficulty_level">Difficulty Level:</label>
            <select name="difficulty_level" id="difficulty_level" required>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>
        </div>
        <button type="submit">Create Course</button>
    </form>

    <br>

    <a href="/courses">Back to Courses</a>

</body>

</html>