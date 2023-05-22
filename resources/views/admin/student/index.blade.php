@extends('layout.main')

@section('content')
    <div class="container-fluid p-0">

        <div class="row">
            <div class="col-md-6">
                <h1>Students</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('student.create') }}" class="btn btn-outline-primary">Add Student</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        @include('partials.flash-messages')

                        {{-- {{ dump($students) }} --}}

                        @if (count($students) > 0)
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
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        <a href="{{ route('student.edit', $student) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('student.delete', $student) }}" class="btn btn-danger">Delete</a>
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
