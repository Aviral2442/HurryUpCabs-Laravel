<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController\AdminPanelController;


// Route for the Admin Panel
Route::get('/admin_panel', [AdminPanelController::class,'dashboard'])->name('Dashboard');


// Route for the Home page
Route::get('/', [HomeController::class,'index'])->name('Home');

// Route for the Contact page
Route::get('/contact', [HomeController::class,'contact'])->name('Contact');

// Route for the Registration and Login page
Route::get('/register', [HomeController::class,'register'])->name('Signup');
Route::get('/login', [HomeController::class,'login'])->name('Login');