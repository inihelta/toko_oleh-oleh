<?php

namespace App\Http\Controllers;

use App\Models\pesertalomba;
use Illuminate\Http\Request;

class PesertalombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesertalomba = Pesertalomba::all();
        return view('pesertalomba.index', compact('pesertalomba'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pesertalomba.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peserta' => 'required',
            'email' => 'required|email|unique:pesertalombas,email',
        ]);

        Pesertalomba::create($request->all());

        return redirect()->route('pesertalomba.index')
            ->with('success', 'Data added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(pesertalomba $pesertalomba)
    {
        $pesertalomba = Pesertalomba::findOrFail($pesertalomba->id);
        return view('pesertalomba.show', compact('pesertalomba'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pesertalomba $pesertalomba)
    {
        $pesertalomba = Pesertalomba::findOrFail($pesertalomba->id);
        return view('pesertalomba.edit', compact('pesertalomba'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pesertalomba $pesertalomba)
    {
        $request->validate([
            'nama_peserta' => 'required',
            'email' => 'required|email|unique:pesertalombas,email,' . $pesertalomba->id,
        ]);

        $pesertalomba->update($request->all());

        return redirect()->route('pesertalomba.index')
            ->with('success', 'Data updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Int $id)
    {
        $peserta = Pesertalomba::findOrFail($id);
        $peserta->delete();

        return redirect()->route('pesertalomba.index')
            ->with('success', 'Data deleted.');
    }
}
