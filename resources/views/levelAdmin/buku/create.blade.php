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

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.buku.store') }}" method="POST"  >
          @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter judul">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @error('judul')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Edisi</label>
              <input type="text" name="edisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Edisi">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('edisi')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">No Rak</label>
              <select class="form-control" name="no_rak" id="exampleFormControlSelect1">
                @foreach ($rak as $cus)
                <option value="{{ $cus->kd_rak }}">{{ $cus->kd_rak }}</option>
                @endforeach
               </select>
               @error('no_rak')
               <div class="alert alert-danger mt-2">
                   {{ $message }}
               </div>
               @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tahun</label>
              <input type="date" name="tahun" class="form-control" id="exampleInputPassword1" placeholder="Enter Tahun">
              @error('tahun')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Penerbit</label>
              <input type="text" name="penerbit" class="form-control" id="exampleInputPassword1" placeholder="Enter Penerbit">
              @error('penerbit')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kode Penulis</label>
              <select class="form-control" name="kd_penulis" id="exampleFormControlSelect1">
                @foreach ($penulis as $cus)
                <option value="{{ $cus->kd_penulis }}">{{ $cus->kd_penulis }}</option>
                @endforeach
               </select>
               @error('kd_penulis')
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