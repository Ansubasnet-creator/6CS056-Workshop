<x-layouts.app title="Students">
    <div class="card">
        <h1>Student Management System</h1>

        <p>Manage all registered students here.</p>

        <a href="{{ route('students.create') }}" class="btn btn-primary">
            + Add New Student
        </a>

        @if ($students->isEmpty())
            <p>No students registered yet.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <a href="{{ route('students.show', $student) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('students.edit', $student) }}" class="btn btn-success">Edit</a>
                                <x-delete-form :action="route('students.destroy', $student)" />
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layouts.app>
