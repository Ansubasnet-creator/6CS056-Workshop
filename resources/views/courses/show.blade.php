<x-layouts.app title="Course Details">
    <div class="card">
        <h1>Course Details</h1>

        <div class="detail">
            <strong>Course ID:</strong>
            {{ $course->id }}
        </div>

        <div class="detail">
            <strong>Course Name:</strong>
            {{ $course->name }}
        </div>

        <div class="detail">
            <strong>Description:</strong>
            {{ $course->description }}
        </div>

        <div class="detail">
            <strong>Duration:</strong>
            {{ $course->duration }} Weeks
        </div>

        <div class="detail">
            <strong>Course Fee:</strong>
            {{ $course->fee }}
        </div>

        <div class="detail">
            <strong>Difficulty:</strong>
            {{ $course->difficulty }}
        </div>

        <div class="detail">
            <strong>Status:</strong>
            {{ $course->is_active ? 'Active' : 'Inactive' }}
        </div>

        <div class="detail">
            <strong>Created At:</strong>
            {{ $course->created_at->format('d M Y, h:i A') }}
        </div>

        <a href="{{ route('courses.edit', $course) }}"
           class="btn btn-success">
            Edit Course
        </a>

        <a href="{{ route('courses.index') }}"
           class="btn btn-secondary">
            Back to Courses
        </a>
    </div>
</x-layouts.app>