<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MobilController;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Tour;
use App\Models\Travel;
use App\Models\Galeri;
use App\Models\Sk;

Route::get('/', function () {
    $mobils = Mobil::all(); // ambil semua data dari tabel posts_mobil
    $motors = Motor::all(); 
    $tours = Tour::all(); 
    $travels = Travel::all(); 
    return view('home', compact('mobils', 'motors', 'tours', 'travels'));
});

Route::get('/sewa', function () {
    $mobils = Mobil::all(); // ambil semua data dari tabel posts_mobil
    $motors = Motor::all(); 
    return view('sewa', compact('mobils', 'motors'));
});

Route::get('/paket', function () {
    $tours = Tour::all(); 
    $travels = Travel::all();  
    return view('paket', compact('tours', 'travels'));
});

Route::get('/detail/{tipe}/{id}', function ($tipe, $id) {
    if ($tipe === 'tour') {
        $paket = Tour::findOrFail($id);
    } elseif ($tipe === 'travel') {
        $paket = Travel::findOrFail($id);
    } else {
        abort(404);
    }

    return view('detail', compact('paket', 'tipe'));
})->name('paket.detail');

Route::get('/antar', function () {
    $galeris = Galeri::all(); 
    return view('antar',compact('galeris'));
});

Route::get('/sk', function () {
    $sks = Sk::first();
    return view('sk', compact('sks'));
});

Route::get('/galleri', function () {
    $galeris = Galeri::all(); 
    return view('galleri', compact('galeris'));
});


Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::get('/try', function () {
//     return view('try');
// })->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
