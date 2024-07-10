<?php

namespace App\Http\Controllers;

use App\Models\SubBobot;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class SubBobotController extends Controller
{
    public function index()
    {
        $subBobots = SubBobot::with('kriteria')->get();
        return view('sub-bobot.index', compact('subBobots'));
    }

    public function create()
    {
        $kriterias = Kriteria::all();
        return view('sub-bobot.create', compact('kriterias'));
    }

    public function store(Request $request)
    {
        SubBobot::create($request->all());
        return redirect()->route('sub-bobot.index');
    }

    public function edit($id)
    {
        $subBobot = SubBobot::findOrFail($id);
        $kriterias = Kriteria::all();
        return view('sub-bobot.edit', compact('subBobot', 'kriterias'));
    }

    public function update(Request $request, $id)
    {
        $subBobot = SubBobot::findOrFail($id);
        $subBobot->update($request->all());
        return redirect()->route('sub-bobot.index');
    }

    public function destroy($id)
    {
        $subBobot = SubBobot::findOrFail($id);
        $subBobot->delete();
        return redirect()->route('sub-bobot.index');
    }
}
