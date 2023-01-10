@extends('layout/admin')

@section('title', 'Admin | Form Ubah KRS')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah KRS</h3>
            
                <form method="post" action="/adkrs/{{ $adkrs->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="id_mhs" class="form-label">ID Mahasiswa</label>
                        <input type="text" class="form-control @error('id_mhs') is-invalid @enderror" id="id_mhs" placeholder="Masukkan ID Mahasiswa" name="id_mhs" value="{{ $adkrs->id_mhs }}">
                        @error('id_mhs')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="id_matkul" class="form-label">ID Maata Kuliah</label>
                        <input type="text" class="form-control @error('id_matkul') is-invalid @enderror" id="id_matkul" placeholder="Masukkan ID Mata Kuliah" name="id_matkul" value="{{ $adkrs->id_matkul }}">
                        @error('id_matkul')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control @error('nama_matkul') is-invalid @enderror" id="nama_matkul" placeholder="Nama Matkul" name="nama_matkul" value="{{ $adkrs->nama_matkul }}">
                        @error('nama_matkul')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="id_dosen" class="form-label">ID Dosen</label>
                        <input type="text" class="form-control @error('id_dosen') is-invalid @enderror" id="id_dosen" name="id_dosen" value="{{ $adkrs->id_dosen }}">
                        @error('id_dosen')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="hari" class="form-label">Hari</label>
                        <input type="text" class="form-control @error('hari') is-invalid @enderror" id="hari" name="hari" value="{{ $adkrs->hari }}">
                        @error('hari')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="pukul" class="form-label">Pukul</label>
                        <input type="text" class="form-control @error('pukul') is-invalid @enderror" id="pukul" name="pukul" value="{{ $adkrs->pukul }}">
                        @error('pukul')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror
                    
                    <div class="mb-3">
                        <label for="id_ruang" class="form-label">ID Ruang</label>
                        <input type="text" class="form-control @error('id_ruang') is-invalid @enderror" id="id_ruang" name="id_ruang" value="{{ $adkrs->id_ruang }}">
                        @error('id_ruang')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <button type="submit" class="btn btn-primary">Ubah Data</button>
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