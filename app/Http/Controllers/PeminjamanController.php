<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PeminjamanController extends Controller
{
    public function index(): View
    {
       $dataPeminjaman = peminjaman::latest()->paginate(10);
       return view('peminjaman.index',compact('dataPeminjaman'));
    }

    public function create(): View
    {
        return view('peminjaman.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'nama_peminjaman'      => 'required|min:2|unique:peminjaman,nama_peminjaman'
        ]);

        Peminjaman::create([
            'nama_peminjaman'        => $request->nama_peminjaman,
        ]);
        //redirect to index
        return redirect()->route('peminjaman.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $dataPeminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.edit', compact('dataPeminjaman'));
    }

    public function show(string $id): View
    {
        $Peminjaman = Peminjaman::findOrFail($id);

        return view('peminjaman.show', compact('peminjaman'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_peminjaman'      => 'required|min:2'
        ]);

        $dataPeminjaman = Peminjaman::findOrFail($id);
        $dataPeminjaman->update([
             'nama_peminjaman'  => $request->nama_peminjaman
            ]);

        return redirect()->route('peminjaman.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}