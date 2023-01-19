@extends('templates.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('class.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">
                    Nama
                </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Kelas" value={{ old ('name')}}>
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
