@extends('layout.main')

@section('content')
<div class="container-fluid p-0">

    <div class="row">
        <div class="col-md-6">
            <h1>Add Course</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('courses') }}" class="btn btn-outline-primary">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('course.create') }}" method="POST">
                        @csrf

                        @include('partials.flash-messages')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter course name!" value="{{ old('name') }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration" placeholder="Enter course duration!" value="{{ old('duration') }}">
                            @error('duration')
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
