@extends('layout/main')

@section('container')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Fasilitas</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Jenis Fasilitas</th>
      <th scope="col">Jenis tes</th>
      <th scope="col">Harga</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">gambar</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $table_categoris as $table_mahasiswa ) 
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $table_mahasiswa->nama_fasilitas}}</td>
      <td>{{ $table_mahasiswa->deskripsi}}</td>
      <td>{{ $table_mahasiswa->jenis_fasilitas}}</td>
      <td>{{ $table_mahasiswa->jenis_tes}}</td>
      <td>{{ $table_mahasiswa->harga}}</td>
      <td>{{ $table_mahasiswa->telp}}</td>
      <td>{{ $table_mahasiswa->alamat}}</td>
      <td>{{ $table_mahasiswa->gambar}}</td>
    </tr>
 @endforeach
  </tbody>
</table>

@endsection