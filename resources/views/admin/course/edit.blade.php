@extends('layout.main')

@section('content')
<div class="container-fluid p-0">

    <div class="row">
        <div class="col-md-6">
            <h1>Edit Course</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('courses') }}" class="btn btn-outline-primary">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Edit Form
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
