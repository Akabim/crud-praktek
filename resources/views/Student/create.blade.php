@extends('templates.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">
                    Nama
                </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama" value={{ old ('name')}}>
                @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    Foto
                </label>
                <input type="file" name="photo" id="" class="form-control @error('photo') is-invalid @enderror" placeholder="Masukkan Nama" value={{ old ('photo')}}>
                @error('photo')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    Alamat
                </label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Masukkan Alamat" value={{ old ('address')}}>
                @error('address')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    No Telpon
                </label>
                <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Masukkan Telpon" value={{ old ('phone_number')}}>
                @error('phone_number')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="form-label">
                    Kelas
                </label>
                <input type="text" name="class" class="form-control @error('class') is-invalid @enderror" placeholder="Masukkan Nama" value={{ old ('class')}}>
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
