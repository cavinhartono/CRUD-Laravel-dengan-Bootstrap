<?php

use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

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

Route::view('index', 'insert');
// 'index' = nama Route
// 'insert' = nama file di folder resources/views/namaFile.blade.php

// atau

Route::get('/warga', [WargaController::class, 'namaFunction']);
Route::get('/warga/add', [WargaController::class, 'namaFunctionCreate']);
Route::post('/warga/store', [WargaController::class, 'namaFunctionStore']);
Route::get('/warga/{id}/edit', [WargaController::class, 'namaFunctionEdit']);
Route::put('/warga/{id}', [WargaController::class, 'namaFunctionUpdate']);
Route::delete('/warga/{id}', [WargaController::class, 'namaFunctionDelete']);
