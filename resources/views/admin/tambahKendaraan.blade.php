@extends('layouts/master')

@section('content')

<div class="container-fluid">
    <div class="card shadow md-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kendaraan</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
            @csrf
            
            </form>
        </div>
    </div>
</div>

@endsection