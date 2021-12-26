@extends('layout.v_template')
@section('title','guru')
 
@section('content')
    @foreach ($guru as $data)
        NIP : {{ $data ['nip'] }} <br>
        nama : {{ $data ['nama'] }} <br>
        mapel : {{ $data ['mapel'] }} <br><br>
    @endforeach
@endsection 