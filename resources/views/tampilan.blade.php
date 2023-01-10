@extends('layout/main')

@section('title', 'Mahasiswa')

@section('container')
<br><br><br>
<div class="row text-center"><center>
  <div class="card-middle" style="width: 40rem;">
    <img class="card-img-top" src="images/2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Daftar Mahasiswa</h5>
      <p class="card-text">Lihat Daftar Mahasiswa Dari Beberapa Fakultas dan Jurusan</p>
      <a href="{{ url('/students')}}" class="btn btn-primary">Show</a>
    </div>
  </div></center><center>
  <div class="card-middle" style="width: 43rem;">
    <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mata Kuliah</h5>
      <p class="card-text">Lihat Daftar Mata Kuliah Dari Beberapa Fakultas dan Jurusan</p>
      <a href="{{ url('/matkul')}}" class="btn btn-primary">Show</a>
    </div>
  </div></center>
  </div>
@endsection

@section('copyright')
<div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-light">
    <!-- Copyright -->
    <div class="text-black mb-2 mb-md-0">
      Copyright © by imroatu solicah
    </div>
    <!-- Copyright -->
@endsection