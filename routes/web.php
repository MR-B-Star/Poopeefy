<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\SubmissionController;

// USER (lihat doang)
Route::resource('articles', ArticleController::class)->only(['index','show']);
Route::resource('industries', IndustryController::class)->only(['index','show']);
Route::resource('submissions', SubmissionController::class)->only(['index','show']);

use App\Http\Controllers\AuthController;

// LOGIN POST
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// LOGIN
Route::get('/login', function () {
    return view('auth.Login');
})->name('login');

// ROOT ROUTE
Route::get('/', function () {
    return redirect()->route('dashboard-awal');
});

// DASHBOARD AWAL
Route::get('/dashboard', function () {
    return view('DashboardAwal');
})->name('dashboard-awal');

// REGISTER
Route::get('/register', function () {
    return view('auth.Register');
})->name('register');

// DASHBOARD ADMIN
Route::get('/dashboard-admin', function () {
    return view('DashboardAdmin');
})->name('dashboard-admin');

// DASHBOARD PENGEPULL
Route::get('/dashboard-pengepull', function () {
    return view('DashboardPengepull');
})->name('dashboard-pengepull');

// FORM PENGEPULL
Route::get('/form-pengepull', function () {
    return view('FormPengepull');
})->name('form-pengepull');

// DASHBOARD INDUSTRI
Route::get('/dashboard-industri', function () {
    return view('DashboardIndustri');
})->name('dashboard-industri');

Route::post('/surat/{id}/approve', [SuratController::class, 'approve']);

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('DashboardAdmin');
    })->name('admin.dashboard');

    Route::resource('articles', ArticleController::class)->except(['index','show']);
    Route::resource('industries', IndustryController::class)->except(['index','show']);

});

Route::get('/submission',
    [SubmissionController::class, 'index']
)->name('submission.index');


// Route::get('/dashboard-admin', function () {
//     if (!session('is_admin')) {
//         return redirect('/login');
//     }
//     return view('DashboardAdmin');
// })->name('dashboard-admin');
