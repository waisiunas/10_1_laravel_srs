@extends('layout.main')

@section('content')
<div class="container-fluid p-0">

    <div class="row">
        <div class="col-md-6">
            <h1>Edit Student</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('students') }}" class="btn btn-outline-primary">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('student.edit', $student) }}" method="POST">
                        @csrf

                        @include('partials.flash-messages')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter student name!" value="{{ old('name') ?? $student->name }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter student email!" value="{{ old('email') ?? $student->email }}">
                            @error('email')
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
