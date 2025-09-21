<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreAnggotaRequest;
use App\Http\Requests\UpdateAnggotaRequest;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = User::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(StoreAnggotaRequest $request)
    {
        User::create($request->validated());


        return redirect()->route('dataAnggota')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $anggota = User::findOrFail($id);
        return view('anggota.edit', compact('anggota'));
    }

    public function update(UpdateAnggotaRequest $request, $id)
    {
        $anggota = User::findOrFail($id);
        $anggota->update($request->validated());

        return redirect()->route('dataAnggota')->with('success', 'Anggota berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $anggota = User::findOrFail($id);
        $anggota->delete();

        return redirect()->route('dataAnggota')->with('success', 'Anggota berhasil dihapus.');
    }
}
