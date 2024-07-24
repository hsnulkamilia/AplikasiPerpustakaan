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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.peminjaman.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No buku</th>
                            <th scope="col">ID Anggota</th>
                            <th scope="col">Tgl Peminjaman</th>
                            <th scope="col">Tgl Pengembalian</th>
                            <th scope="col">Status</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($peminjaman as $index => $pengguna)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $pengguna->no_buku }}</td>
                            <td>{{ $pengguna->id_anggota }}</td>
                            <td>{{ $pengguna->tgl_peminjaman}}</td>
                            <td>{{ $pengguna->tgl_pengembalian }}</td>
                            <td>{{ $pengguna->status}}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.peminjaman.destroy', $pengguna->id_peminjaman) }}" method="POST">
                                    <a href="{{ route('admin.peminjaman.show', $pengguna->id_peminjaman) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('admin.peminjaman.edit', $pengguna->id_peminjaman) }}" class="btn btn-sm btn-warning">EDIT</a> @csrf @method('DELETE')
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