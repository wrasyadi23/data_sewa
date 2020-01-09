@extends('layouts/master')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kontrak</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Cost Center</td>
                        <td>Account</td>
                        <td>Activity</td>
                        <td>Description</td>
                        <td>Menu</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kendaraan_sp as $data)
                    <tr>
                        <td>{{$data->cc}}</td>
                        <td>{{$data->acc}}</td>
                        <td>{{$data->act}}</td>
                        <td>{{$data->sp_deskripsi}}</td>
                        <td>Menu</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection