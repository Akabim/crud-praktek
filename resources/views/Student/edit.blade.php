@extends('templates.app')

@php
$title = 'Data siswa';
$preTitle = 'Edit Data Siswa';
@endphp

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('student.update', $student->id)}}" method="post" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">
                    Nama
                </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama" value="{{$student->name}}">
                @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    Photo
                </label>
                <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" value='{{ old('photo') }}' placeholder="Masukkan Nama" value="{{ asset('storage/'.$student->photo) }}">
                @error('photo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <label for="" class="form-label">
                    Alamat
                </label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{$student->address}}">
                @error('address')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    No Telpon
                </label>
                <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Masukkan Telpon" value=" {{$student->phone_number}}">
                @error('phone_number')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    Kelas
                </label>
                <input type="text" name="class" class="form-control @error('class') is-invalid @enderror" placeholder="Masukkan Kelas" value="{{$student->class}}">
                @error('class')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">
                    Kelas
                </label>
                <select name="student_class_id" id="" class="form-control">
                    @foreach ($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                    @endforeach
                </select>
                @error('class')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" name="simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
