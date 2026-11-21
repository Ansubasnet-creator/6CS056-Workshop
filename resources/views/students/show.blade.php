<x-layouts.app title="Student Details">
    <div class="card">
        <h1>Student Details</h1>

        <div class="detail">
            <strong>Student ID:</strong>
            {{ $student->id }}
        </div>

        <div class="detail">
            <strong>Full Name:</strong>
            {{ $student->name }}
        </div>

        <div class="detail">
            <strong>Email:</strong>
            {{ $student->email }}
        </div>

        <div class="detail">
            <strong>Phone:</strong>
            {{ $student->phone }}
        </div>

        <div class="detail">
            <strong>Address:</strong>
            {{ $student->address ?? 'Not provided' }}
        </div>

        <div class="detail">
            <strong>Date of Birth:</strong>
            {{ $student->date_of_birth?->format('d M Y') ?? 'Not provided' }}
        </div>

        <div class="detail">
            <strong>Age:</strong>
            {{ $student->age ?? 'Not available' }}
        </div>

        <div class="detail">
            <strong>Created At:</strong>
            {{ $student->created_at->format('d M Y, h:i A') }}
        </div>

        <a href="{{ route('students.edit', $student) }}"
           class="btn btn-success">
            Edit Student
        </a>

        <a href="{{ route('students.index') }}"
           class="btn btn-secondary">
            Back to Student List
        </a>
    </div>
</x-layouts.app>
