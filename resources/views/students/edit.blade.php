
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>

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

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        .update-button {
            margin-top: 20px;
            background: #16a34a;
            color: white;
            padding: 11px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #2563eb;
        }

        .error {
            color: #dc2626;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Student</h1>

    @if($errors->any())
        <div class="error">
            <strong>Please correct the following errors:</strong>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <label for="name">Full Name</label>
        <input type="text" id="name" name="name"
               value="{{ old('name', $student->name) }}" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"
               value="{{ old('email', $student->email) }}" required>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone"
               value="{{ old('phone', $student->phone) }}" required>

        <label for="address">Address</label>
        <textarea id="address" name="address"
                  rows="3">{{ old('address', $student->address) }}</textarea>

        <label for="date_of_birth">Date of Birth</label>
        <input type="date" id="date_of_birth"
               name="date_of_birth"
               value="{{ old('date_of_birth', $student->date_of_birth) }}">

        <button type="submit" class="update-button">
            Update Student
        </button>

    </form>

    <a href="{{ route('students.index') }}" class="back-link">
        ← Back to Student List
    </a>

</div>

</body>
</html>
