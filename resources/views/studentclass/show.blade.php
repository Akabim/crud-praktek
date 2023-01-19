@extends('templates.app')
@section('content')
<h1>Kelas {{ $student_classes->name }}</h1>
<div class="col-12">
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student_classes->students as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->phone_number}}</td>
                        <td>{{$student->class}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
