
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            color: #263238;
        }

        .detail {
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .edit-button {
            display: inline-block;
            margin-top: 20px;
            background: #2563eb;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            margin-left: 10px;
            color: #2563eb;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Details</h1>

    <div class="detail">
        <span class="label">Student ID:</span>
        {{ $student->id }}
    </div>

    <div class="detail">
        <span class="label">Full Name:</span>
        {{ $student->name }}
    </div>

    <div class="detail">
        <span class="label">Email:</span>
        {{ $student->email }}
    </div>

    <div class="detail">
        <span class="label">Phone:</span>
        {{ $student->phone }}
    </div>

    <div class="detail">
        <span class="label">Address:</span>
        {{ $student->address ?? 'Not provided' }}
    </div>

    <div class="detail">
        <span class="label">Date of Birth:</span>
        {{ $student->date_of_birth ?? 'Not provided' }}
    </div>

    <div class="detail">
        <span class="label">Created At:</span>
        {{ $student->created_at->format('d M Y, h:i A') }}
    </div>

    <a href="{{ route('students.edit', $student->id) }}"
       class="edit-button">
        Edit Student
    </a>

    <a href="{{ route('students.index') }}" class="back-link">
        ← Back to Student List
    </a>

</div>

</body>
</html>
