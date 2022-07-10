@extends('layouts.master')

@section('content')
<div class="container">
  <h1>Hello, Warga</h1>
  <a href="/warga/add" class="btn btn-primary">Tambah Warga</a>
  <table class="table table-hover">
    <thead>
      <th>Id</th>
      <th>NIK</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Tamat Sekolah</th>
      <th>Aksi</th>
    </thead>
    <tbody>
      @foreach($warga as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nik}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->jenis_kelamin}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->kepala}}</td>
        <td>
          <a href="/warga/{{$data->id}}/edit" class="btn btn-warning">Edit</a>
          <form action="/warga/{{$data->id}}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Hapus" class="btn btn-danger">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection