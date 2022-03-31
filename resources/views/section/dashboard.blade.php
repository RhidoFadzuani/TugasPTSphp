@extends('Layouts.Layout')

@section('title', 'Data Mahasiswa')
    
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Mahasiswa')

@section('content')
<div class="row">

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <div class="cardtext">
                        <p>mahasiswa</p>
                    </div>
                    {{ $mahasiswa ?? '' }}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <div class="cardtext">
                        <p>Laki-laki</p>
                    </div>
                    {{ $laki ?? '' }}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <div class="cardtext">
                        <p>perempuan</p>
                    </div>
                    {{ $cewek?? '' }}
                </div>
            </div>
        </div>
    </div>



@endsection