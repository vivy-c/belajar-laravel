@extends('layout.v_template')
@section('title','guru')
 
@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Mata Pelajaran</th>
                <th>Foto Guru</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
             @foreach ($guru as $data)
                 <tr>
                     <td>{{ $no++ }}</td>
                     <td>{{ $data->nip }}</td>
                     <td>{{ $data-> nama_guru }}</td>
                     <td>{{ $data->mapel }}</td>
                     <td><img src="{{ url('foto_guru/'. $data->foto_guru) }}" width="100px"></td>
                     <td>
                         <a href="" class="btn btn-sm btn-warning">Edit</a>
                         <a href="" class="btn btn-sm btn-success">Detail</a>
                         <a href="" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                 </tr>
             @endforeach
        </tbody>
    </table>
@endsection 