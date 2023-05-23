@extends('layout.main')

@section('content')
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-md-6">
                <h1>Registrations</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('registration.create') }}" class="btn btn-outline-primary">Add Registration</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        @include('partials.flash-messages')

                        @if (count($registrations) > 0)
                            <table class="table table-bordered m-0">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Student</th>
                                        <th>Course</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($registrations as $registration)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $registration->student->name }}</td>
                                            <td>{{ $registration->course->name }}</td>
                                            <td>
                                                <a href="{{ route('registration.edit', $registration) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ route('registration.delete', $registration) }}"
                                                    class="btn btn-danger">Delete</a>
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
