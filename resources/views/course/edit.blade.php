<!DOCTYPE html>
<html>

<head>
    <title>Edit Course</title>
</head>

<body>

    <h1>Edit Course</h1>

    @if($errors->any())
    <div>
        <h3>Please fix the following errors:</h3>

        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form
        action="/courses/{{ $course->id }}"
        method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $course->name) }}">
        </div>

        <br>

        <div>
            <label for="description">Description</label>

            <textarea
                id="description"
                name="description">{{ old('description', $course->description) }}</textarea>
        </div>

        <br>

        <div>
            <label for="duration">Duration</label>

            <input
                type="number"
                id="duration"
                name="duration"
                value="{{ old('duration', $course->duration) }}">
        </div>

        <br>

        <div>
            <label for="course_fee">Course Fee</label>

            <input
                type="number"
                id="course_fee"
                name="course_fee"
                step="0.01"
                value="{{ old('course_fee', $course->course_fee) }}">
        </div>

        <br>

        <div>
            <label for="difficulty_level">Difficulty Level</label>

            <select id="difficulty_level" name="difficulty_level">
                <option value="beginner" {{ old('difficulty_level', $course->difficulty_level) == 'beginner' ? 'selected' : '' }}>
                    Beginner
                </option>
                <option value="intermediate" {{ old('difficulty_level', $course->difficulty_level) == 'intermediate' ? 'selected' : '' }}>
                    Intermediate
                </option>
                <option value="advanced" {{ old('difficulty_level', $course->difficulty_level) == 'advanced' ? 'selected' : '' }}>
                    Advanced
                </option>
            </select>
        </div>

        <br>

        <button type="submit">
            Update Course
        </button>

    </form>

    <br>
    <a href="/courses">
        Back to Courses
    </a>

</body>

</html>