@extends('layout.v_template')
@section('title','Detail Guru')

@section('content')
<table class="table">
    <tr width="50px">
        <th >NIP</th>
        <th>:</th>
        <th>{{ $guru->nip_guru }}</th>
    </tr>
    <tr width="50px">
        <th >Nama Guru</th>
        <th>:</th>
        <th>{{ $guru->nama_guru }}</th>
    </tr>
    <tr width="50px">
        <th >Mata pelajaran</th>
        <th>:</th>
        <th>{{ $guru->mapel }}</th>
    </tr>
    <tr width="50px">
        <th >Foto Guru</th>
        <th>:</th>
        <th><img src="{{ url('foto_guru/'.$guru->foto_guru) }}" width="300px" alt=""></th>
    </tr>
    <tr>
        <th><a href="/guru" class="btn btn-success btn-sm">Kembali</a></th>
    </tr>
</table>
@endsection 