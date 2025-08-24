<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sk;
use Illuminate\Http\Request;

class SkController extends Controller
{
    public function index()
    {
        $sks = sk::paginate(10);
        return view('admin.sk', compact('sks'));
    }

    public function create()
    {
        return view('admin.sk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ketentuan' => 'required|string',
            'reservasi' => 'required|string',
        ]);

         $data = $request->only(['ketentuan', 'reservasi']);

        Sk::create($data);

        return redirect()->route('admin.sk.index')->with('success', 'Syarat & Ketentuan berhasil ditambahkan');
    }

    public function show($id)
    {
        $sk = sk::findOrFail($id); 
        return view('admin.sk.show', compact('sk'));
    }

    public function edit(Sk $sk)
    {
        return view('admin.sk.edit', compact('sk'));
    }

    public function update(Request $request, Sk $sk)
    {
        $request->validate([
            'ketentuan' => 'required|string',
            'reservasi' => 'required|string',
        ]);

         $data = $request->only(['ketentuan', 'reservasi']);

        Sk::create($data);

        return redirect()->route('admin.sk.index')->with('success', 'Syarat & Ketentuan berhasil ditambahkan');
    }

    public function destroy(Sk $sk)
    {
        $sk->delete();
        return redirect()->route('admin.sk.index')->with('success', 'Syarat & Ketentuan berhasil dihapus');
    }
}
