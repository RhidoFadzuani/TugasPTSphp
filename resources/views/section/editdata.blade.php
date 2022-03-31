@extends('layouts.layout')

@section('title', 'Form Edit mahasiswa')
    
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
    <a href="{{ route('datamahasiswa.index') }}" class="text-primary">Data Mahasiswa</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Form Edit Mahasiswa</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">
                    Form Edit Mahasiswa
                </div>
                <div class="card-body">
                    <form action="{{ route('datamahasiswa.update', $mahasiswa->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="npm" hidden>id</label>
                            <input hidden type="text" value="{{ $mahasiswa->id}}" name="npm" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="npm">Nomor Induk Mahasiswa</label>
                            <input type="text" value="{{ $mahasiswa->npm}}" name="npm" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" value="{{ $mahasiswa->nama}}" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="Jk">Jenis Kelamin</label>
                            <div class="input-group mb-3">
                                <select name="Jk" id="Jk" class="custom-select">
                                    @if ($mahasiswa->Jk == 'L')
                                    <option selected value="L">L</option>
                                    <option value="P">P</option>
                                    @else
                                    <option value="L">L</option>
                                    <option selected value="P">P</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" value="{{ $mahasiswa->alamat}}" name="alamat" id="alamat" class="form-control" required>
                        </div> 
                        <div class="form-group">
                            <label for="Fakultas">Fakultas</label>
                            <input type="text" value="{{ $mahasiswa->fakultas}}" name="fakultas" id="Fakultas" class="form-control" required>
                        </div> 
                        <div class="form-group">
                            <label for="Prodi">Prodi</label>
                            <input type="text" value="{{ $mahasiswa->prodi}}" name="prodi" id="Prodi" class="form-control" required>
                        </div> 
                        <button type="submit" class="btn btn-warning text-white" style="width: 100%">UPDATE</button>
                    </form>
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2" style="width: 100%" onclick="return confirm('APAKAH YAKIN?')">HAPUS</button>
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

