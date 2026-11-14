<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
</head>
<body>
    <h1>Create Course</h1>
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
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>
        <button type="submit">Create Course</button>
    </form>
    
</body>
</html>