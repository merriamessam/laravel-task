@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Student</h1>

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div>
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" required>
            </div>

            <button type="submit">Add Student</button>
        </form>

        <br>
        <a href="{{ route('students.index') }}">← Back to list</a>
    </div>
@endsection
