@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman peminjaman</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.peminjaman.store') }}" method="POST"  >
          @csrf
          <div class="form-group">
            <label for="exampleFormControlSelect1">No Buku</label>
            <select class="form-control" name="no_buku" id="exampleFormControlSelect1">
              @foreach ($buku as $cus)
              <option value="{{ $cus->no_buku }}">{{ $cus->no_buku }}</option>
              @endforeach
             </select>
             @error('no_buku')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
             @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">ID Anggota</label>
            <select class="form-control" name="id_anggota" id="exampleFormControlSelect1">
              @foreach ($anggota as $cus)
              <option value="{{ $cus->id_anggota }}">{{ $cus->id_anggota }}</option>
              @endforeach
             </select>
             @error('id_anggota')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
             @enderror
          </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tgl Peminjaman</label>
                <input type="date" name="tgl_peminjaman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tgl">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @error('tgl_peminjaman')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tgl Pengembalian</label>
              <input type="date" name="tgl_pengembalian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tgl">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              @error('tgl_pengembalian')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Status</label>
              <select class="form-control" name="status" id="exampleFormControlSelect1">
                <option value="kembali">Kembali</option>
                <option value="belum">Belum</option>
               </select>
               @error('status')
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