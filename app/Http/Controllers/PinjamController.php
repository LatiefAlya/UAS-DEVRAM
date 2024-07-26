<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pinjam;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjams = Pinjam::all();
        return view('pinjams.index', compact('pinjams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pinjams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nik' => 'required|unique:pinjams',
            'nama_peminjam' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'judul_buku' => 'required',
            'isbn' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required'
        ]);

        Pinjam::create($request->all());
        return redirect()->route('pinjams.index')->with('success', 'Data Peminjaman created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjam)
    {
        //
        return view('pinjams.show', compact('pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pinjam $pinjam)
    {
        //
        return view('pinjams.edit', compact('pinjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pinjam $pinjam)
    {
        //
        $request->validate([
            'nik' => 'required|unique:pinjams,nik,' . $pinjam->id,
            'nama_peminjam' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'judul_buku' => 'required',
            'isbn' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required'
        ]);

        $pinjam->update($request->all());
        return redirect()->route('pinjams.index')->with('success', 'Data Peminjam updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pinjam $pinjam)
    {
        //
        $pinjam->delete();
        return redirect()->route('pinjams.index')->with('success', 'Data Peminjam deleted successfully.');
    }
}
