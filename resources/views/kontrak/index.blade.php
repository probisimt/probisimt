@extends('layout.app') @section('content')
<div class="container-fluid mt-5">
    <div class="col-sm-12 p-2">
        Laporan Penerimaan dan Pengeluaran Harian
    </div>

    <div class="card text-dark bg-light mb-12 mt-1">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-solid fa-plus"></i> Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="container mt-5">
                <table class="table">
                    <thead class="table-light">
                        <th>#</th>
                        <th>Supplier</th>
                        <th>PO Direct</th>
                        <th>Kontrak Direct</th>
                        <th>PO Timbangan</th>
                        <th>Kontrak Timbangan</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $row)
                        <tr>
                            <td>{{ $index + $data->firstItem() }}</td>
                            <td>{{ $row->supplier}}</td>
                            <td>{{ $row->po_direct}}</td>
                            <td>{{ $row->kontrak_direct}}</td>
                            <td>{{ $row->po_timbang}}</td>
                            <td>{{ $row->kontrak_timbang}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/importkontrak" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="file" name="file" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-file-excel"></i> Import</button>
                </div>
        </div>
    </form>
    </div>
</div>
@endsection
