@extends('templates.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('class.update', $student_classes->id)}}" method="post" enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">
                    Nama
                </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama" value="{{$student_classes->name}}">
                @error('name')
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
