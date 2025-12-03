<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;

// This route now points to your new HomeController.
Route::get('/', [HomeController::class, 'index'])->name('home');

// These routes are correct and can stay the same.
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');