<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::paginate(10);
        return view('admin.tour', compact('tours'));
    }

    public function create()
    {
        return view('admin.tour.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'destinasi' => 'required|string',
            'include' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama', 'tempat', 'harga', 'deskripsi', 'destinasi', 'include']);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('tour'), $filename);
            $data['gambar'] = $filename;
        }
        Tour::create($data);

        return redirect()->route('admin.tour.index')->with('success', 'Paket Tour berhasil ditambahkan');
    }

    public function show($id)
    {
        $tour = tour::findOrFail($id); 
        return view('admin.tour.show', compact('tour'));
    }


    public function edit(Tour $tour)
    {
        return view('admin.tour.edit', compact('tour'));
    }

    public function update(Request $request, Tour $tour)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|string',
            'destinasi' => 'required|string',
            'include' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama', 'tempat', 'harga', 'deskripsi', 'destinasi', 'include']);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('tour'), $filename);
            $data['gambar'] = $filename;
        }

        $tour::upadate ($data);
        return redirect()->route('admin.tour.index')->with('success', 'Paket Tour berhasil diperbarui');
    }



    public function destroy(Tour $tour)
    {

        // Hapus file gambar jika ada
        if ($tour->gambar && file_exists(public_path($tour->gambar))) {
            unlink(public_path($tour->gambar));
        }

        $tour->delete();
        return redirect()->route('admin.tour.index')->with('success', 'Paket Tour berhasil dihapus');
    }
}
