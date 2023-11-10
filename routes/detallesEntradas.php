<?php 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('noticia', [HomeController::class,'noticia'])->name('noticia');
