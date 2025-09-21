<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('databuku.index', compact('buku'));
    }

    public function create()
    {
        return view('databuku.create');
    }

    public function store(StoreBukuRequest $request)
    {
        Buku::create($request->validated());

        return redirect()->route('dataBuku')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('databuku.edit', compact('buku'));
    }

    public function update(UpdateBukuRequest $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->update($request->validated());

        return redirect()->route('dataBuku')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('dataBuku')->with('success', 'Buku berhasil dihapus.');
    }
}

