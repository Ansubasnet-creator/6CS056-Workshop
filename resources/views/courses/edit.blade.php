<x-layouts.app title="Edit Course">
    <div class="card">
        <h1>Edit Course</h1>

        <form action="{{ route('courses.update', $course) }}" method="POST">
            @csrf
            @method('PUT')

            @include('courses._form', [
                'course' => $course
            ])

            <button type="submit" class="btn btn-success">
                Update Course
            </button>

            <a href="{{ route('courses.index') }}" class="btn btn-secondary">
                Cancel
            </a>
        </form>
    </div>
</x-layouts.app>