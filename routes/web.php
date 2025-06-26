<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    // FIXME: Akun dummy
    if (!User::where('name', 'admin_dummy')->exists()) {
        User::create([
            'name' => 'admin_dummy',
            'nip' => '123',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]);
    }

    if (!User::where('name', 'staf_dummy')->exists()) {
        User::create([
            'name' => 'staf_dummy',
            'nip' => '456',
            'password' => Hash::make('456'),
            'role' => 'staf',
        ]);
    }

    return app(LoginController::class)->index();
})->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', function () {
    if (auth()->check()) {
        if (Session::has('admin_logged_in')) {
            return redirect('/dashboard');
        }
        elseif(Session::has('staff_logged_in')) {
            return redirect('/dokter');
        }
    }

    return view('login');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', function () {
    if (auth()->check()) {
        if (Session::has('admin_logged_in')) {
            return redirect('/dashboard');
        }
        elseif(Session::has('staff_logged_in')) {
            return redirect('/dokter');
        }
    }

    return view('login');
});

Route::get('/tv', function () {return view('tv');});

//admin dashboard
Route::get('/dashboard', function (){
    if (!auth()->check()) {
        return redirect('/');
    }

    if (Session::has('staff_logged_in')) {
        return view('dokter');
    }

    return view('dashboard');
})->name('dashboard');

//tambah-pasien
Route::get('/addpasien', function () {
    if (!auth()->check()) {
        return redirect('/');
    }

    if (Session::has('staff_logged_in')) {
        return view('dokter');
    }

    return view('addpasien');
})->name('addpasien');

//list-pasien
Route::get('/daftarpasien', function () {
    if (!auth()->check()) {
        return redirect('/');
    }

    if (Session::has('staff_logged_in')) {
        return view('dokter');
    }

    return view('daftarpasien');
})->name('daftarpasien');

//dokter dashboard
Route::get('/dokter', function () {
    if (!auth()->check()) {
        return redirect('/');
    }

    if (Session::has('admin_logged_in')) {
        return view('dashboard');
    }

    return view('dokter');
})->name('dokter');

Route::get('/session', function () {
    return Session::all();
});