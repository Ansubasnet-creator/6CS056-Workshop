<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    // Display all students
    public function index()
    {
        $students = Student::latest()->get();

        return view('students.index', compact('students'));
    }

    // Display the student registration form
    public function create()
    {
        return view('students.create');
    }

    // Save a new student
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:500',
            'date_of_birth' => 'nullable|date',
        ]);

        Student::create($validatedData);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student created successfully!');
    }

    // Display one student
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // Display the edit form
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update student information
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('students', 'email')->ignore($student->id),
            ],
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:500',
            'date_of_birth' => 'nullable|date',
        ]);

        $student->update($validatedData);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student updated successfully!');
    }

    // Delete a student
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }
}
