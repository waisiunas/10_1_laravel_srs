@extends('layout.main')

@section('content')
<div class="container-fluid p-0">

    <div class="row">
        <div class="col-md-6">
            <h1>Courses</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('course.create') }}" class="btn btn-outline-primary">Add Course</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Table
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
