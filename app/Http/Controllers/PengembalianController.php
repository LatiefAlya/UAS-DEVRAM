<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pengembalians = Pengembalian::all();
        return view('pengembalians.index', compact('pengembalians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pengembalians.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nik' => 'required|unique:pengembalians',
            'nama' => 'required',
            'judul_buku' => 'required',
            'isbn' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_pengembalian' => 'required',
            'kondisi_buku' => 'required',
            'denda' => 'required'
        ]);

        Pengembalian::create($request->all());
        return redirect()->route('pengembalians.index')->with('success', 'Data Pengembalian created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $pengembalian)
    {
        //
        return view('pengembalians.show', compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengembalian $pengembalian)
    {
        //
        return view('pengembalians.edit', compact('pengembalian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengembalian $pengembalian)
    {
        //
        $request->validate([
            'nik' => 'required|unique:pengembalians,nik,' . $pengembalian->id,
            'nama' => 'required',
            'judul_buku' => 'required',
            'isbn' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_pengembalian' => 'required',
            'kondisi_buku' => 'required',
            'denda' => 'required'
        ]);

        $pengembalian->update($request->all());
        return redirect()->route('pengembalians.index')->with('success', 'Data update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengembalian $pengembalian)
    {
        //
        $pengembalian->delete();
        return redirect()->route('pengembalians.index')->with('success', 'Data deleted successfully.');
    }
}
