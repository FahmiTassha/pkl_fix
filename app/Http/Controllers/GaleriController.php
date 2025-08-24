<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Tampilkan semua galeri
    public function index()
    {
        $galeris = Galeri::paginate(10);
        return view('admin.galeri', compact('galeris'));
    }

    // Simpan galeri baru
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('galeri'), $filename);

            Galeri::create([
                'gambar' => $filename
            ]);
        }

        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Gambar berhasil ditambahkan');
    }

    // Hapus galeri
    public function destroy(Galeri $galeri)
    {
        // hapus file fisik juga (opsional)
        $filePath = public_path('galeri/' . $galeri->gambar);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $galeri->delete();
        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Gambar berhasil dihapus');
    }
}
