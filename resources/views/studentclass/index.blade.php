@extends('templates.app')
@section('content')
<div class="col-12">
    <div class="card">
        {{-- <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
                <a href="{{route('StudentClass.create')}}" class="btn btn-primary d-none d-sm-inline-block">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="5" y1="12" x2="19" y2="12" /></svg>
        Create new report
        </a>
        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" /></svg>
        </a>
    </div>
</div> --}}
<div class="table-responsive">
    <table class="table table-vcenter card-table">
        <thead>
            <tr>
                <th>Kelas</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student_classes as $class)
            <tr>
                <td><a href="{{ route('class.show', $class) }}">{{$class->name}}</a></td>
                <td>{{$class->slug}}</td>
                <td>
                    <form action="{{ route('class.edit', $class) }}" method="POST">
                        @csrf
                        @method('GET')
                        <button class="btn btn-primary">Edit</button>
                    </form>
                    <form action="{{ route('class.destroy', $class) }}" method="POST">
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
{{-- <div class="card-footer">
    {{ $class->links
            ss('pagination::bootstrap-4') }}
</div> --}}
</div>
</div>
@endsection
