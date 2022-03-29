<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RekamMedisController;
use App\Http\Controllers\RekamMedisPasienController;
use App\Http\Controllers\RekamMedisDokterController;
use App\Http\Controllers\RekamMedisFormController;

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

Route::get("/home", [HomeController::class, 'home']);
Route::get("/rekam-medis", [RekamMedisController::class, 'index']);
Route::get("/rekam-medis-pasien", [RekamMedisPasienController::class, 'index']);
Route::get("/rekam-medis-dokter", [RekamMedisDokterController::class, 'index']);
// Route::get("/form-rekam-medis", [RekamMedisFormController::class, 'index']);

Route::get('/form-rekam-medis', [RekamMedisFormController::class, 'input'])->name('input-form-medis');
Route::post('/proses-form/{id}', [RekamMedisFormController::class, 'proses'])->name('proses-form-medis');