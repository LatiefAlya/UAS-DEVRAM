<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nik' => 'required|unique:members',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required'
        ]);

        Member::create($request->all());
        return redirect()->route('members.index')->with('success', 'Data Anggota created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
        return view('members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        //
        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        //
        $request->validate([
            'nik' => 'required|unique:members,nik,' . $member->id,
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required'
        ]);

        $member->update($request->all());
        return redirect()->route('members.index')->with('success', 'Data Anggota updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        //
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Data Anggota deleted successfully.');
    }
}
