<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'home'])->name('প্রধান পেইজ');
Route::get('/about', [FrontendController::class, 'about'])->name('আমাদের সম্পর্কে');
Route::get('/contact', [FrontendController::class, 'contact'])->name('যোগাযোগ');
Route::get('/teachers', [FrontendController::class, 'teachers'])->name('শিক্ষকমণ্ডলী');
Route::get('/testiominal', [FrontendController::class, 'testiominal'])->name('টেস্টিওমিনাল');
Route::get('/notices', [FrontendController::class, 'notices'])->name('নোটিশ');
Route::get('/costs', [FrontendController::class, 'costs'])->name('খরচের তালিকা');