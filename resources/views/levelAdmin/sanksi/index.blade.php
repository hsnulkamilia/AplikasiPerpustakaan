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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.sanksi.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Anggota</th>
                            <th scope="col">ID Peminjaman</th>
                            <th scope="col">Jumlah Denda</th>
                            <th scope="col">Status</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($sanksi as $index => $pengguna)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $pengguna->id_anggota }}</td>
                            <td>{{ $pengguna->id_peminjaman }}</td>
                            <td>{{ $pengguna->jumlah_denda}}</td>
                            <td>{{ $pengguna->status}}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.sanksi.destroy', $pengguna->id_sanksi) }}" method="POST">
                                    <a href="{{ route('admin.sanksi.show', $pengguna->id_sanksi) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('admin.sanksi.edit', $pengguna->id_sanksi) }}" class="btn btn-sm btn-warning">EDIT</a> @csrf @method('DELETE')
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