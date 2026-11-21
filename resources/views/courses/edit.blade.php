
<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f4f6f9;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 10px 18px;
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Course</h1>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Course Name</label>
        <input type="text" name="name"
            value="{{ old('name', $course->name) }}" required>

        <label>Description</label>
        <textarea name="description" required>{{ old('description', $course->description) }}</textarea>

        <label>Duration (Weeks)</label>
        <input type="number" name="duration" min="1"
            value="{{ old('duration', $course->duration) }}" required>

        <label>Course Fee</label>
        <input type="number" name="fee" min="0" step="0.01"
            value="{{ old('fee', $course->fee) }}" required>

        <label>Difficulty</label>
        <select name="difficulty" required>
            <option value="Easy" {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>Easy</option>
            <option value="Medium" {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="Hard" {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>Hard</option>
        </select>

        <label>Course Status</label>
        <select name="is_active" required>
            <option value="1" {{ old('is_active', $course->is_active ? '1' : '0') == '1' ? 'selected' : '' }}>Active</option>
            <option value="0" {{ old('is_active', $course->is_active ? '1' : '0') == '0' ? 'selected' : '' }}>Inactive</option>
        </select>

        <button type="submit">Update Course</button>
    </form>

    <br>

    <a href="{{ route('courses.index') }}">Back to Courses</a>

</div>

</body>
</html>
