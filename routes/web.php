<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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

Route::get('/admin/sewamotor', function () {
    $motors = Motor::paginate(10); 
    return view('admin.sewamotor', compact('motors'));
});

Route::get('/admin/sewamobil', function () {
    $mobils = Mobil::paginate(10); 
    return view('admin.sewamobil', compact('mobils'));
});

Route::get('/admin/tour', function () {
    $tours = Tour::paginate(10); 
    return view('admin.tour', compact('tours'));
});

Route::get('/admin/travel', function () {
    $travels = Travel::paginate(10); 
    return view('admin.travel', compact('travels'));
});

Route::get('/admin/sk', function () {
    $sks = Sk::paginate(10); 
    return view('admin.sk', compact('sk'));
});

Route::get('/admin/galeri', function () {
    $sks = Sk::paginate(10); 
    return view('admin.galeri', compact('galeri'));
});




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


use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\Admin\AntarJemputController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\SkController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin');
    })->name('dashboard');

    // CRUD Motor
    Route::resource('motor', MotorController::class);
    
    // CRUD Mobil
    Route::resource('mobil', MobilController::class);

    //CRUD Paket Travel
    Route::resource('travel', TravelController::class);

    //CRUD Paket Tour
    Route::resource('tour', TourController::class);

    //CRUD Antar Jemput 
    Route::resource('antarjemput', AntarJemputController::class);

    //CRUD Galeri
    Route::resource('galeri', GaleriController::class);

    //CRUD SK
    Route::resource('sk', SkController::class);
});

Route::get('/admin/motor/{motor}', [MotorController::class, 'show'])->name('admin.motor.show');
