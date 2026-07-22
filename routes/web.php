<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//manajemen siswa
route::name('sugus.')->prefix('sugus')->group(function(){
    Route::get('/', [StudentController::class, 'index'])->name('index');

    Route::get('/{id}', ShowController::class)->name('show'); 
});