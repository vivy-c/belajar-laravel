@extends('layout.v_template')
@section('title','Guru')
 
@section('content')
<a href="/guru/add" class="btn btn-primary btn-sm mb-3">Add</a><br>

@if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Success!</h5>
        {{ session('pesan') }}
    </div>
@endif

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
                     <td>{{ $data->nip_guru }}</td>
                     <td>{{ $data-> nama_guru }}</td>
                     <td>{{ $data->mapel }}</td>
                     <td><img src="{{ url('foto_guru/'. $data->foto_guru) }}" width="100px"></td>
                     <td>
                         <a href="/guru/detail/{{ $data->id_guru }}" class="btn btn-sm btn-warning">Detail</a>
                         <a href="" class="btn btn-sm btn-success">Edit</a>
                         <a href="" class="btn btn-sm btn-danger">Delete</a>
                     </td>
                 </tr>
             @endforeach
        </tbody>
    </table>
@endsection 