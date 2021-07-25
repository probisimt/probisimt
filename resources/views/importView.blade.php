@extends('layout.app')
@section('content')
<div class="container mt-5">
    <div class="card bg-light mt-3">
        <div class="card-header">
            <h4>User Import - Export</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success"><i class="fas fa-file-import"></i> Import User Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}"><i class="fas fa-file-export"></i> Export User Data</a>
            </form>
        </div>
    </div>
</div>
<div class="container mt-5">
    <table class="table">
        <thead class="table-light">
            <th>#</th>
            <th>Nama</th>
            <th>E-Mail</th>
            <th>Password</th>
        </thead>
        <tbody>
            @foreach ($data as $index => $row)
            <tr>
                <td>{{ $index + $data->firstItem() }}</td>
                <td>{{ $row->name}}</td>
                <td>{{ $row->email}}</td>
                <td>{{ $row->password}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
