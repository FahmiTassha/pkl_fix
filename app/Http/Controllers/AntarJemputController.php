<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AntarJemput;

class AntarJemputController extends Controller
{
    public function index()
    {
        $items = AntarJemput::all();
        return view('admin.antarjemput.index', compact('items'));
    }

    public function create()
    {
        return view('admin.antarjemput.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
        ]);

        AntarJemput::create($request->all());
        return redirect()->route('admin.antarjemput.index')->with('success', 'Paket Antar Jemput berhasil ditambahkan');
    }

    public function show($id)
    {
        $item = AntarJemput::findOrFail($id);
        return view('admin.antarjemput.show', compact('item'));
    }

    public function edit($id)
    {
        $item = AntarJemput::findOrFail($id);
        return view('admin.antarjemput.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
        ]);

        $item = AntarJemput::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('admin.antarjemput.index')->with('success', 'Paket Antar Jemput berhasil diperbarui');
    }

    public function destroy($id)
    {
        $item = AntarJemput::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.antarjemput.index')->with('success', 'Paket Antar Jemput berhasil dihapus');
    }
}
