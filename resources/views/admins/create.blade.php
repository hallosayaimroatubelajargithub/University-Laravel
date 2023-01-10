@extends('layout/admin')

@section('title', 'Admin | Form Tambah Data Mahasiswa')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Mahasiswa</h3>
            
                <form method="post" action="/admins"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM" name="nim" value="{{ old('nim') }}">
                        @error('nim')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" placeholder="P/L" name="jk" value="{{ old('jk') }}">
                    </div>

                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
                        <input type="text" class="form-control" id="ttl" placeholder="YY/MM/DD" name="ttl" value="{{ old('ttl') }}">
                    </div>

                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" value="{{ old('agama') }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}">
                    </div>
                    <div class="mb-3">
                        <label for="fak" class="form-label">Fakultah</label>
                        <input type="text" class="form-control" id="fak" name="fak" value="{{ old('fak') }}">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="prodi" name="prodi" value="{{ old('prodi') }}">
                    </div>
                    <div class="mb-3">
                        <label for="smstr" class="form-label">Semester</label>
                        <input type="text" class="form-control" id="smstr" name="smstr" value="{{ old('smstr') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

        </div>
    </div>
</div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#273036" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,277.3C320,256,400,224,480,218.7C560,213,640,235,720,250.7C800,267,880,277,960,261.3C1040,245,1120,203,1200,165.3C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
  </svg>
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