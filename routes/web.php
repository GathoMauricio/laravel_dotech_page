<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::get('es', function () {
    return view('index');
})->name('es');
Route::get('en', function () {
    return view('index');
})->name('en');
