@extends('layout/admin')

@section('title', 'Admin | Form Ubah KHS')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah KHS</h3>
            
                <form method="post" action="/adkhs/{{ $adkhs->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="id_mhs" class="form-label">ID Mahasiswa</label>
                        <input type="text" class="form-control @error('id_mhs') is-invalid @enderror" id="id_mhs" placeholder="Masukkan ID Mahasiswa" name="id_mhs" value="{{ $adkhs->id_mhs }}">
                        @error('id_mhs')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="id_matkul" class="form-label">ID Maata Kuliah</label>
                        <input type="text" class="form-control @error('id_matkul') is-invalid @enderror" id="id_matkul" placeholder="Masukkan ID Mata Kuliah" name="id_matkul" value="{{ $adkhs->id_matkul }}">
                        @error('id_matkul')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control @error('nama_matkul') is-invalid @enderror" id="nama_matkul" placeholder="Nama Matkul" name="nama_matkul" value="{{ $adkhs->nama_matkul }}">
                        @error('nama_matkul')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="sks" class="form-label">SKS</label>
                        <input type="text" class="form-control @error('sks') is-invalid @enderror" id="sks" name="sks" value="{{ $adkhs->sks }}">
                        @error('sks')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="grade_huruf" class="form-label">Grade</label>
                        <input type="text" class="form-control @error('grade_huruf') is-invalid @enderror" id="grade_huruf" name="grade_huruf" value="{{ $adkhs->grade_huruf }}">
                        @error('grade_huruf')<div class="invalid-feedback"> {{ $message }}</div>
                    </div>@enderror

                    <div class="mb-3">
                        <label for="ipk" class="form-label">IPK</label>
                        <input type="text" class="form-control @error('ipk') is-invalid @enderror" id="ipk" name="ipk" value="{{ $adkhs->ipk }}">
                        @error('ipk')<div class="invalid-feedback"> {{ $message }}</div>
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