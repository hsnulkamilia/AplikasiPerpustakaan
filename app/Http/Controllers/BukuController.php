<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; 

class BukuController extends Controller
{
    // Method to show the form
    public function index()
{
    $bukus = Buku::all(); 

    return view('buku.index', compact('bukus')); 
}
    // Method to store the submitted data
    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'judul' => 'required',
            'edisi' => 'required',
            'no_rak' => 'required',
            'tahun' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
        ]);

        // Create a new Buku instance and fill it with the validated data
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->edisi = $request->edisi;
        $buku->no_rak = $request->no_rak;
        $buku->tahun = $request->tahun;
        $buku->penerbit = $request->penerbit;
        $buku->penulis = $request->penulis;

        // Save the book to the database
        $buku->save();

        // Redirect the user back with a success message
        return redirect()->back()->with('success', 'Book added successfully!');
    }
}
