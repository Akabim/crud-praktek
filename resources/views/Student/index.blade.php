@extends('templates.app')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Class</th>
                        <th>Jurusan</th>
                        <th class="w-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/'.$student->photo) }}" width="100px" alt="oke">
                        </td>
                        <td>{{$student->name}}</td>

                        <td class="text-muted">{{$student->phone_number}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->class}}</td>
                        <td>TJA {{$student->student_class_id}}</td>
                        <td>
                            <form action="{{ route('student.edit', $student) }}" method="POST">
                                @csrf
                                @method('GET')
                                <button class="btn btn-primary">Edit</button>
                            </form>
                            <form action="{{ route('student.destroy', $student) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure delete this data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $students->links
                    ('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
