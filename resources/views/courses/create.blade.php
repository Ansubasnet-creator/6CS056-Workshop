<x-layouts.app title="Add Course">
    <div class="card">
        <h1>Register New Course</h1>

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            @include('courses._form', [
                'course' => new \App\Models\Course()
            ])

            <button type="submit" class="btn btn-success">
                Save Course
            </button>

            <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                Cancel
            </a>
        </form>
    </div>
</x-layouts.app>