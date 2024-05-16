<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Validation\Rule;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', ['anggota' => $anggota]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'no_hp' => [
                'required',
                'string',
                'max:15',
                'regex:/^[0-9]+$/',
                Rule::unique('anggota')->ignore($request->anggota_id), // Exclude the current Anggota record being updated
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('anggota')->ignore($request->anggota_id), // Exclude the current Anggota record being updated
            ],
            'alamat' => 'required|string|max:255',
        ], [
            'no_hp.unique' => 'The phone number has already been used.',
            'email.unique' => 'The email has already been taken.',
        ]);

        // Create or update an Anggota instance based on the existence of anggota_id
        if ($request->anggota_id) {
            $anggota = Anggota::findOrFail($request->anggota_id);
        } else {
            $anggota = new Anggota();
        }

        $anggota->nama = $request->nama;
        $anggota->no_hp = $request->no_hp;
        $anggota->email = $request->email;
        $anggota->alamat = $request->alamat;

        // Save the anggota to the database
        $anggota->save();

        // Redirect the user to the route corresponding to the book form
        return redirect()->route('buku.index')->with('success', 'Anggota data submitted successfully!');
    }
}
