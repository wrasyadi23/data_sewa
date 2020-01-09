@extends('layouts/master')

@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <button class="btn btn-primary btn-sm" onclick="window.location.href='/transport/tambah_kendaraan'">Tambah Kendaraan</button>
            </div>
            <div class="table-responsive">
                <div id="dataTable-wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <table id="dataTable" class="table table-bordered table-hover table-sm" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nopol</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Kompartemen</th>
                                <th>Departemen</th>
                                <th>Bagian</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kendaraan_data as $data)
                            <tr>
                                <th>{{$data->id_kend}}</th>
                                <th>{{$data->nopol}}</th>
                                <th>{{$data->merk_kend}}</th>
                                <th>{{$data->type_kend}}</th>
                                <th>{{$data->kompartemen}}</th>
                                <th>{{$data->departemen}}</th>
                                <th>{{$data->bagian}}</th>
                                <th></th>
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