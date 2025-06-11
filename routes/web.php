<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScanController;
use Illuminate\Support\Facades\Route;

Route::get('/scan', function () {
    return view('scan.index');
})->name('scan');

Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/rekomendasi', function () {
    return view('rekomendasi.index');
})->name('rekomendasi');

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/scan', [ScanController::class, 'index'])->name('scan');
Route::post('/scan', [ScanController::class, 'scan'])->name('scan.proses');