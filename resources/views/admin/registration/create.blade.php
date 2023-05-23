@extends('layout.main')

@section('content')
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-md-6">
                <h1>Add Registration</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('registrations') }}" class="btn btn-outline-primary">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('registration.create') }}" method="POST">
                            @csrf

                            @include('partials.flash-messages')

                            <div class="mb-3">
                                <label for="student_id" class="form-label">Student</label>
                                <select name="student_id" id="student_id"
                                    class="form-select @error('student_id') is-invalid @enderror">
                                    <option value="" selected hidden>Select a student!</option>
                                    @foreach ($students as $student)
                                        @if ($student->id == old('student_id'))
                                            <option value="{{ $student->id }}" selected>{{ $student->name }}</option>
                                        @else
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('student_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="course_id" class="form-label">Course</label>
                                <select name="course_id" id="course_id"
                                    class="form-select @error('course_id') is-invalid @enderror">
                                    <option value="" selected hidden>Select a course!</option>
                                    @foreach ($courses as $course)
                                        @if ($course->id == old('course_id'))
                                            <option value="{{ $course->id }}" selected>{{ $course->name }}</option>
                                        @else
                                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('course_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
