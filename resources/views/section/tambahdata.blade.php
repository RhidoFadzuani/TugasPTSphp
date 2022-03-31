@extends('layouts.layout')

@section('title', 'Form Tambah mahasiswa')

@section('css')
<style>
    .text-primary:hover {
        text-decoration: underline;
    }

    .text-grey {
        color: #6c757d;
    }

    .text-grey:hover {
        color: #6c757d;
    }

</style>
@endsection

@section('header')
<a href="{{ route('datamahasiswa.index') }}" class="text-primary">Data Petugas</a>
<a href="#" class="text-grey">/</a>
<a href="#" class="text-grey">Form Tambah Mahasiswa</a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                Form Tambah Mahasiswa
            </div>
            <div class="card-body">
                <form action="{{ route('datamahasiswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="npm">Nomor Induk Mahasiswa</label>
                        <input type="text" name="npm" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Jk">Jenis Kelamin</label>
                        <div class="input-group mb-3">
                            <select name="Jk" id="Jk" class="custom-select">
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text"  name="alamat" id="alamat"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Fakultas">Fakultas</label>
                        <input type="text"  name="fakultas" id="Fakultas"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Prodi">Prodi</label>
                        <input type="text" name="prodi" id="Prodi" class="form-control"
                            required>
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 100%">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        @if (Session::has('notif'))
        <div class="alert alert-danger">
            {{ Session::get('notif') }}
        </div>
        @endif
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
