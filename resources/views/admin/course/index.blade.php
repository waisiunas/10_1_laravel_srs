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

                        @include('partials.flash-messages')

                        @if (count($courses) > 0)
                        <table class="table table-bordered m-0">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Name</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->duration }}</td>
                                    <td>
                                        <a href="{{ route('course.edit', $course) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('course.delete', $course) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <div class="alert alert-danger m-0">No record found!</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
