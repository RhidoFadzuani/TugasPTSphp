@extends('Layouts.layout')

@section('title', 'Data Mahasiswa')
    
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Mahasiswa')
    
@section('content')
    <table id="masyarakatTable" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $k => $v)
            <tr>
                <td>{{ $k += 1 }}</td>
                <td hidden>{{ $v->id }}</td>
                <td>{{ $v->npm }}</td>
                <td>{{ $v->nama }}</td>
                <td>{{ $v->Jk }}</td>
                <td>{{ $v->alamat }}</td>
                <td>{{ $v->fakultas }}</td>
                <td>{{ $v->prodi }}</td>
                <td><a href="{{ route('datamahasiswa.show', $v->id) }}" class="btn btn-warning">Lihat</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#masyarakatTable').DataTable();
        } );
    </script>
@endsection