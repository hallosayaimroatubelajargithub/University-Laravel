@extends('layout/admin')

@section('title', 'Admin | Detail Mahasiswa')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Mahasiswa</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adstudents->nama}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adstudents->nim}}</h6>
                  <p class="card-text">Jenis Kelamin     : {{$adstudents->jk}}</p>
                  <p class="card-text">Tempat, Tgl Lahir : {{$adstudents->ttl}}</p>
                  <p class="card-text">Agama             : {{$adstudents->agama}}</p>
                  <p class="card-text">Alamat            : {{$adstudents->alamat}}</p>
                  <p class="card-text">Fakultas          : {{$adstudents->fak}}</p>
                  <p class="card-text">Program Studi     : {{$adstudents->prodi}}</p>
                  <p class="card-text">Semester          : {{$adstudents->smstr}}</p>
                  
                  <a href="{{ $adstudents->id }}/edit" class="btn btn-primary">Edit</a>
                  <form action="/admins/{{ $adstudents->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  <a href="/admins" class="btn btn-warning">Kembali</a>
                </div>
              </div>

        </div>
    </div>
</div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#273036" fill-opacity="1" d="M0,320L40,314.7C80,309,160,299,240,277.3C320,256,400,224,480,218.7C560,213,640,235,720,250.7C800,267,880,277,960,261.3C1040,245,1120,203,1200,165.3C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
  </svg>
@endsection

@section('copyright')
<br><br><br><br><br>

<div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-light">
    <!-- Copyright -->
    <div class="text-black mb-2 mb-md-0">
      Copyright © by imroatu solicah
    </div>
    <!-- Copyright -->
@endsection