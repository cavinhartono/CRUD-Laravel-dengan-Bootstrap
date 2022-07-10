@extends('layouts.master')

@section('content')
<div class="container">
  <h1>Hello, Edit.</h1>
  <form action="/warga/{{$warga->id}}" method="POST" class="row g-3">
    @method('put')
    <!-- kalo dieksekusi akan diambil -->

    <!-- token -->
    @csrf
    <div class="col-md-6">
      <label for="nik" class="form-label">NIK</label>
      <input type="text" name="nik" id="nik" value="{{$warga->nik}}" class="form-control">
    </div>
    <div class="col-md-6">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" id="nama" value="{{$warga->nama}}" class="form-control">
    </div>
    <div class="col-md-6">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" type="text" name="alamat" id="alamat" value="{{$warga->alamat}}" class="form-control">
    </div>
    <div class="col-md-6">
      <label for="jk" class="form-label">Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-select">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L" @if($warga->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
        <option value="P" @if($warga->jenis_kelamin == 'P') selected @endif>Perempuan</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="tamatsekolah" class="form-label">Tamat Sekolah</label>
      <input type="text" name="kepala" id="tamatsekolah" value="{{$warga->kepala}}" class="form-control">
    </div>

    <input type="submit" name="submit" value="Edit" class="btn btn-primary">
  </form>
  @endsection