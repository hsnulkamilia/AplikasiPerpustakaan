@extends('template.app')
@section('content')
<div class="section-header">
  <h1>Halaman sanksi</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('admin.sanksi.update', $sanksi->id_sanksi) }}" method="POST"  >
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="exampleFormControlSelect1">ID Anggota</label>
            <select class="form-control" name="id_anggota" id="exampleFormControlSelect1">
              <option value="{{ $sanksi->id_anggota }}">{{ $sanksi->id_anggota }}</option>
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
            <label for="exampleFormControlSelect1">ID Peminjaman</label>
            <select class="form-control" name="id_peminjaman" id="exampleFormControlSelect1">
              <option value="{{ $sanksi->id_peminjaman }}">{{ $sanksi->id_peminjaman }}</option>
              @foreach ($peminjaman as $cus)
              <option value="{{ $cus->id_peminjaman }}">{{ $cus->id_peminjaman }}</option>
              @endforeach
             </select>
             @error('id_peminjaman')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
             @enderror
          </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Denda</label>
                <input type="number" name="jumlah_denda" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter jumlah" value="{{ $sanksi->jumlah_denda }}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @error('jumlah_denda')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
              </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Status</label>
              <select class="form-control" name="status" id="exampleFormControlSelect1">
                <option value="{{ $sanksi->status }}">{{ $sanksi->status }}</option>
                <option value="tunggakan">Tunggakan</option>
                <option value="lunas">Lunas</option>
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