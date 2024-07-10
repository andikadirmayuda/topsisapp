<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Karyawan;
use App\Models\SubBobot;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaians = Penilaian::with('karyawan', 'subBobot')->get();
        return view('penilaian.index', compact('penilaians'));
    }

    public function create()
    {
        $karyawans = Karyawan::all();
        $subBobots = SubBobot::all();
        return view('penilaian.create', compact('karyawans', 'subBobots'));
    }

    public function store(Request $request)
    {
        Penilaian::create($request->all());
        return redirect()->route('penilaian.index');
    }

    public function edit($id)
    {
        $penilaian = Penilaian::findOrFail($id);
        $karyawans = Karyawan::all();
        $subBobots = SubBobot::all();
        return view('penilaian.edit', compact('penilaian', 'karyawans', 'subBobots'));
    }

    public function update(Request $request, $id)
    {
        $penilaian = Penilaian::findOrFail($id);
        $penilaian->update($request->all());
        return redirect()->route('penilaian.index');
    }

    public function destroy($id)
    {
        $penilaian = Penilaian::findOrFail($id);
        $penilaian->delete();
        return redirect()->route('penilaian.index');
    }
}
