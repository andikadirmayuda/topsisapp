<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::with('karyawan')->get();
        return view('laporan.index', compact('laporans'));
    }

    public function create()
    {
        $karyawans = Karyawan::all();
        return view('laporan.create', compact('karyawans'));
    }

    public function store(Request $request)
    {
        Laporan::create($request->all());
        return redirect()->route('laporan.index');
    }

    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        $karyawans = Karyawan::all();
        return view('laporan.edit', compact('laporan', 'karyawans'));
    }

    public function update(Request $request, $id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->update($request->all());
        return redirect()->route('laporan.index');
    }

    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
        return redirect()->route('laporan.index');
    }
}
