<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::all();
        return view('kriteria.index', compact('kriterias'));
    }

    public function create()
    {
        return view('kriteria.create');
    }

    
    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi data
        $validatedData = $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'bobot' => 'required|numeric',
            // tambahkan validasi lain yang diperlukan
        ]);

        // Membuat kriteria baru
        Kriteria::create($validatedData);

        // Redirect ke halaman daftar kriteria dengan pesan sukses
        return redirect()->route('kriteria.index')->with('success', 'Kriteria berhasil ditambahkan');
    }


    public function edit($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        return view('kriteria.edit', compact('kriteria'));
    }

    public function update(Request $request, $id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->update($request->all());
        return redirect()->route('kriteria.index');
    }

    public function destroy($id)
    {
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->delete();
        return redirect()->route('kriteria.index');
    }
}
