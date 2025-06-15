@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students List</h1>
        <a href="{{ route('students.create') }}">➕ Add Student</a>

        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('students.create') }}">Add Student</a>

        <table border="1" cellpadding="10" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                       <td>
    @if (auth()->user()->role === 'admin')
        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    @else
        <span>Not authorized</span>
    @endif
</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $students->links() }}
    </div>
@endsection
