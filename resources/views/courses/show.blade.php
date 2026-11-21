
<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>

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

        h1 {
            color: #333;
        }

        p {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            margin-right: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Course Details</h1>

    <p>
        <strong>ID:</strong>
        {{ $course->id }}
    </p>

    <p>
        <strong>Course Name:</strong>
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
        <strong>Fee:</strong>
        {{ $course->fee }}
    </p>

    <p>
        <strong>Difficulty:</strong>
        {{ $course->difficulty }}
    </p>

    <p>
        <strong>Status:</strong>
        {{ $course->is_active ? 'Active' : 'Inactive' }}
    </p>

    <a href="{{ route('courses.edit', $course->id) }}">
        Edit Course
    </a>

    <a href="{{ route('courses.index') }}">
        Back to Courses
    </a>

</div>

</body>
</html>
