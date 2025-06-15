<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(5);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
        ]);

        Student::create($request->only('name', 'age'));

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function edit(Student $student)
    {
        if (auth()->user()->role !== 'admin') {
        abort(403, 'Unauthorized');
    }
    return view('students.edit', compact('student'));    }

    public function update(Request $request, Student $student)
    {
        if (auth()->user()->role !== 'admin') {
        abort(403, 'Unauthorized');
    }
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
        ]);

        $student->update($request->only('name', 'age'));

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
