<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/accueil', function () {
//     return view('accueil');
// });
// Route::get('/service', function () {
//     return view('service');
// });
// Route::get('/contact', function () {
//     return view('accueil');
// });

Route::get('cvs', [CvController::class, 'index'])->name('cv.index');
Route::get('cvs/create', [CvController::class, 'create']);
Route::put('cvs/{id}', [CvController::class, 'updat']);
Route::post('cvs', [CvController::class, 'store']);
Route::delete('cvs/{id}', [CvController::class, 'destroy']);
Route::get('cvs/{id}/edite', [CvController::class, 'edite'])->name('cv.edite');
// Route::resource('cvs', CvController::class );
Route::get('cvs/{id}/show', [CvController::class, 'show']);

Route::get('/confirm-password', function () {
    return view('auth.confirm-password');
})->middleware('auth')->name('password.confirm');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

