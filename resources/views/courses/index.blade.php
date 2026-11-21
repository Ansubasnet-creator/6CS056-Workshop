<x-layouts.app title="Courses">
    <div class="card">
        <h1>Course Management System</h1>

        <p>Manage all available courses here.</p>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Add New Course
        </a>

        @if ($courses->isEmpty())
            <p>No courses registered yet.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course Name</th>
                        <th>Duration</th>
                        <th>Fee</th>
                        <th>Difficulty</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->duration }} Weeks</td>
                            <td>{{ $course->fee }}</td>
                            <td>{{ $course->difficulty }}</td>
                            <td>
                                {{ $course->is_active ? 'Active' : 'Inactive' }}
                            </td>
                            <td>
                                <a href="{{ route('courses.show', $course) }}"
                                   class="btn btn-primary">
                                    View
                                </a>

                                <a href="{{ route('courses.edit', $course) }}"
                                   class="btn btn-success">
                                    Edit
                                </a>

                                <x-delete-form
                                    :action="route('courses.destroy', $course)"
                                />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layouts.app>