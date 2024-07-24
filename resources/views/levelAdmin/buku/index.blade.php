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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.buku.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Edisi</th>
                            <th scope="col">No Rak</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Kode Penulis</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($buku as $index => $pengguna)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $pengguna->judul }}</td>
                            <td>{{ $pengguna->edisi }}</td>
                            <td>{{ $pengguna->no_rak}}</td>
                            <td>{{ $pengguna->tahun }}</td>
                            <td>{{ $pengguna->penerbit}}</td>
                            <td>{{ $pengguna->kd_penulis }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.buku.destroy', $pengguna->no_buku) }}" method="POST">
                                    <a href="{{ route('admin.buku.show', $pengguna->no_buku) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('admin.buku.edit', $pengguna->no_buku) }}" class="btn btn-sm btn-warning">EDIT</a> @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data User Belum Ada.
                        </div>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection