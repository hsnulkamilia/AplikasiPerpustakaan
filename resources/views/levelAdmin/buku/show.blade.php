@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman buku</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
      <div class="col-md-12">
          <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                  <div class="card-body">
                      <h3>{{ $buku->judul }}</h3>
                      <p>{{ $buku->edisi }}</p>
                      <p>{{ $buku->no_rak }}</p>
                      <p>{{ $buku->tahun }}</p>
                      <p>{{ $buku->penerbit }}</p>
                      <p>{{ $buku->kd_penulis }}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection



