<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('bukus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode' => 'required|unique:bukus',
            'judul' => 'required',
            'isbn' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_stok' => 'required'
        ]);

        Buku::create($request->all());
        return redirect()->route('bukus.index')->with('success', 'Daftar Buku created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
        return view('bukus.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
        return view('bukus.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
        $request->validate([
            'kode' => 'required|unique:bukus,kode,' . $buku->id,
            'judul' => 'required',
            'isbn' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_stok' => 'required'
        ]);

        $buku->update($request->all());
        return redirect()->route('bukus.index')->with('success', 'Data Buku updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
        $buku->delete();
        return redirect()->route('bukus.index')->with('success', 'Data Buku deleted successfully.');
    }
}
