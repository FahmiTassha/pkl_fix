<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function index()
    {
        $motors = Motor::paginate(10);
        return view('admin.sewamotor', compact('motors'));
    }

    public function create()
    {
        return view('admin.motor.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama', 'tempat', 'harga']);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('travel'), $filename);
            $data['gambar'] = $filename;
        }
        Motor::create($data);

        return redirect()->route('admin.motor.index')->with('success', 'Motor berhasil ditambahkan');
    }

    public function show($id)
    {
        $motor = Motor::findOrFail($id); 
        return view('admin.motor.show', compact('motor'));
    }

    public function edit(Motor $motor)
    {
        return view('admin.motor.edit', compact('motor'));
    }

    public function update(Request $request, Motor $motor)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama', 'tempat', 'harga']);

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('motor'), $filename);
            $data['gambar'] = $filename;
        }

        $motor->update($data);

        return redirect()->route('admin.motor.index')->with('success', 'Motor berhasil diperbarui');
    }

    public function destroy(Motor $motor)
    {
        // Hapus file gambar jika ada
        if ($motor->gambar && file_exists(public_path($motor->gambar))) {
            unlink(public_path($motor->gambar));
        }

        $motor->delete();

        return redirect()->route('admin.motor.index')->with('success', 'Motor berhasil dihapus');
    }
}
