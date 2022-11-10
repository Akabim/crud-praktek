@extends('templates.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kelas</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kelass as $kelas)
                            <tr>
                                <td>{{ $kelas->id }}</td>
                                <td>{{ $kelas->nama_kelas }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
