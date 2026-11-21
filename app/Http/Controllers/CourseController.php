<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    // Reusable validation rules (DRY)
    private function rules(?Course $course = null): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('courses', 'name')->ignore($course?->id),
            ],

            'description' => 'required|string|max:1000',
            'duration' => 'required|integer|min:1',
            'fee' => 'required|numeric|min:0',
            'difficulty' => ['required', Rule::in(['Easy', 'Medium', 'Hard'])],
            'is_active' => 'required|boolean',
        ];
    }

    // Display all courses
    public function index()
    {
        $courses = Course::latest()->get();

        return view('courses.index', compact('courses'));
    }

    // Display course creation form
    public function create()
    {
        return view('courses.create');
    }

    // Store a new course
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->rules());

        Course::create($validatedData);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course created successfully!');
    }

    // Display one course
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // Display edit form
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    // Update course
    public function update(Request $request, Course $course)
    {
        $validatedData = $request->validate($this->rules($course));

        $course->update($validatedData);

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course updated successfully!');
    }

    // Delete course
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('courses.index')
            ->with('success', 'Course deleted successfully!');
    }
}
