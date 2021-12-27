@extends('layout.v_template')
@section('title','Tambah Data Guru')

@section('content')
<form action="/guru/insert" method="post" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">NIP</label>
                    <input type="text" name="nip_guru" id="nip_guru" class="form-control" value="{{ old('nip_guru') }}">
                    <div class="invalid-feedback">
                        @error('nip_guru')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nama Guru</label>
                    <input type="text" name="nama_guru" id="nama_guru" class="form-control" value="{{ old('nama_guru') }}">
                    <div class="text-danger">
                        @error('nama_guru')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Mapel</label>
                    <input type="text" name="mapel" id="mapel" class="form-control" value="{{ old('mapel') }}">
                    <div class="text-danger">
                        @error('mapel')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Foto Guru</label>
                    <input type="file" name="foto_guru" id="foto_guru" class="form-control" value="{{ old('foto_guru') }}" >
                    <div class="text-danger">
                        @error('foto_guru')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection 