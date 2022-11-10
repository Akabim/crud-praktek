@extends('templates.app')

@php
$title = 'Data siswa';
$preTitle = 'Edit Data Siswa';
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('student.update', $student->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">
                    Nama
                </label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{$student->name}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    Alamat
                </label>
                <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat" value="{{$student->address}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    No Telpon
                </label>
                <input type="text" name="phone_number" class="form-control" placeholder="Masukkan No. Telp" value="{{$student->phone_number}}">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    Kelas
                </label>
                <input type="text" name="class" class="form-control" placeholder="Masukkan Kelas" value="{{$student->class}}">
            </div>
            <div class="mb-3">
                <input type="submit" name="simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
