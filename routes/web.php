<?php

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

Route::get('/mod_secretaria', function () {
    return view('components.mod_secretaria');
})->name('mod_secretaria');

Route::get('/datos_acta', function () {
    return view('components.datos_acta');
})->name('datos_acta');

Route::get('/report', function () {
    return view('components.report');
})->name('report');



use Illuminate\Support\Facades\DB;

Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        die("No se pudo conectar a la base de datos: " . $e->getMessage());
    }
});
