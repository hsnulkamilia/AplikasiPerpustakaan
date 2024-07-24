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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.penulis.create') }}" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Penulis</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Email</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                        @forelse ($penulis as $index => $pengguna)
                        <tr>
                            <td class="text-center">
                                {{ ++$index }}
                            </td>
                            <td>{{ $pengguna->nama_penulis }}</td>
                            <td>{{ $pengguna->tempat_lahir }}</td>
                            <td>{{ $pengguna->tgl_lahir}}</td>
                            <td>{{ $pengguna->email }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('admin.penulis.destroy', $pengguna->kd_penulis) }}" method="POST">
                                    <a href="{{ route('admin.penulis.show', $pengguna->kd_penulis) }}" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="{{ route('admin.penulis.edit', $pengguna->kd_penulis) }}" class="btn btn-sm btn-warning">EDIT</a> @csrf @method('DELETE')
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