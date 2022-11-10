@extends('templates.app')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('student.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">
                    Nama
                </label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    Alamat
                </label>
                <input type="text" name="address" class="form-control" placeholder="Masukkan Alamat">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    No Telpon
                </label>
                <input type="text" name="phone_number" class="form-control" placeholder="Masukkan No. Telp">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">
                    Kelas
                </label>
                <input type="text" name="class" class="form-control" placeholder="Masukkan Kelas">
            </div>
            <div class="mb-3">
                <input type="submit" name="simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
