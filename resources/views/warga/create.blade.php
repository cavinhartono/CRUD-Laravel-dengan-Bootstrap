@extends('layouts.master')

@section('content')
<div class="container">
  <h1>Hello, add</h1>
  <form action="/warga/store" method="POST" class="row g-3">
    <!-- token -->
    @csrf
    <div class="col-md-6">
      <label for="nik" class="form-label">NIK</label>
      <input type="text" name="nik" id="nik" class="form-control">
    </div>
    <div class="col-md-6">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" id="nama" class="form-control">
    </div>
    <div class="col-md-6">
      <label for="alamat" class="form-label">Alamat</label>
      <input type='text' name="alamat" id="alamat" class="form-control"></input>
    </div>
    <div class="col-md-6">
      <label for="jk" class="form-label">Jenis Kelamin</label>
      <select name="jenis_kelamin" id="jk" class="form-select">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
    <div class="col-md-6">
      <label for="kepalaKeluarga" class="form-label">Tamat Sekolah</label>
      <input type="text" name="kepala" id="kepalaKeluarga" class="form-control">
    </div>
    <input type="submit" name="submit" value="Tambah" class="btn btn-primary">
  </form>
</div>
@endsection