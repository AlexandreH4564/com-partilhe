<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PecaController;
use GuzzleHttp\Middleware;

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


// Route::resource('/Peca', '\App\Http\Controllers\PecaController')
//     ->middleware(['auth']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group( function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
        Route::get('/newitem', function () {
        return view('screens/newitem');
    })->name('newitem');
    Route::get('/newdoador', function () {
        return view('screens/newdoador');
    })->name('newdoador');
    Route::get('/joker', function () {
        return view('screens/joker');
    })->name('joker');


    Route::resource('/pecas', '\App\Http\Controllers\PecaController');
    Route::resource('/doador', '\App\Http\Controllers\DoadorController');
    // Route::get('/pecas/create', 'PecaController@create')->name('pecas.create');
    // Route::post('/pecas', 'PecaController@store')->name('pecas.store');

});

