@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman penulis</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.penulis.update', $penulis->kd_penulis) }}" method="POST"  >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Penulis</label>
            <input type="text" name="nama_penulis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter nama" value="{{ old('a', $penulis->nama_penulis)}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('nama_penulis')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tempat lahir" value="{{ old('a', $penulis->tempat_lahir)}}">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          @error('tempat_lahir')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1" placeholder="Enter Tanggal Lahir" value="{{ old('a', $penulis->tgl_lahir)}}">
          @error('tgl_lahir')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter email" value="{{ old('a', $penulis->email)}}">
          @error('email')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
              <br/>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>

        
        {{-- {{ $user->links() }} --}}
    </div>
</div>

@endsection