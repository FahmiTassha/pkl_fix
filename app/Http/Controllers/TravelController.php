<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::paginate(10);
        return view('admin.travel', compact('travels'));
    }

    public function create()
    {
        return view('admin.travel.create');
    }

    public function store(Request $request)
    {
         // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'destinasi' => 'nullable|string',
            'include' => 'nullable|string',
            'orang' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama', 'orang', 'harga', 'deskripsi', 'destinasi', 'include']);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('travel'), $filename);
            $data['gambar'] = $filename;
        }
        Travel::create($data);

        return redirect()->route('admin.travel.index')->with('success', 'Paket Travel berhasil ditambahkan.');
    }

    public function show($id)
    {
        $travel = travel::findOrFail($id); 
        return view('admin.travel.show', compact('travel'));
    }

    public function edit(Travel $ptravel)
    {
        return view('admin.travel.edit', compact('travel'));
    }

    public function update(Request $request, Travel $travel)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'destinasi' => 'nullable|string',
            'include' => 'nullable|string',
            'orang' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama', 'orang', 'harga', 'deskripsi', 'destinasi', 'include']);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('travel'), $filename);
            $data['gambar'] = $filename;
        }
        $travel->update($data);

        return redirect()->route('admin.travel.index')->with('success', 'Paket Travel berhasil diperbarui.');
    }

    public function destroy(Travel $travel)
    {
        // Hapus file gambar jika ada
        if ($travel->gambar && file_exists(public_path($travel->gambar))) {
            unlink(public_path($travel->gambar));
        }
        $travel->delete();

        return redirect()->route('admin.travel.index')->with('success', 'Paket Travel berhasil dihapus.');
    }
}
