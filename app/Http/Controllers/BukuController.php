<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }


    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_buku' => 'required|unique:bukus,kode_buku',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'jumlah_halaman' => 'required|integer|min:1',
        ]);

        Buku::create($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            abort(404);
        }

        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            abort(404);
        }

        $validatedData = $request->validate([
            'kode_buku' => 'required|unique:bukus,kode_buku,' . $id,
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'jumlah_halaman' => 'required|integer|min:1',
        ]);

        $buku->update($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            abort(404);
        }

        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }

    public function show($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            abort(404);
        }

        return view('buku.show', compact('buku'));
    }

    public function dashboard()
    {
        $jumlahBuku = Buku::count();
        return view('dashboard', compact('jumlahBuku'));
    }
}
