<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AccountsController;
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

Route::get('/', [FrontendController::class, 'home'])->name('হোম');
Route::get('/about', [FrontendController::class, 'about'])->name('আমাদের সম্পর্কে');
Route::get('/contact', [FrontendController::class, 'contact'])->name('যোগাযোগ');
Route::get('/teachers', [FrontendController::class, 'teachers'])->name('শিক্ষকমণ্ডলী');
Route::get('/testiominal', [FrontendController::class, 'testiominal'])->name('টেস্টিওমিনাল');
Route::get('/notices', [FrontendController::class, 'notices'])->name('নোটিশ');
Route::get('/costs', [FrontendController::class, 'costs'])->name('খরচের তালিকা');
Route::get('/mypanel', [AuthController::class, 'mypanel'])->name('My Panel');

//Admin's Panel --------------------------------------------------------------------------->
Route::middleware([
    'auth:sanctum',
    'usertype:1',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/admin')->group(function () {
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('ড্যাশবোর্ড(এডমিন)');
});

//Accountant's Panel --------------------------------------------------------------------------->
Route::middleware([
    'auth:sanctum',
    'usertype:2',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/accountant')->group(function () {
    Route::get('/dashboard', [AccountsController::class,'dashboard'])->name('ড্যাশবোর্ড(একাউন্টেড)');
}); 

//Teacher's Panel --------------------------------------------------------------------------->
Route::middleware([
    'auth:sanctum',
    'usertype:3',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/teacher')->group(function () {
    Route::get('/dashboard', [TeacherController::class,'dashboard'])->name('ড্যাশবোর্ড(শিক্ষক)');
});

//Student's Panel --------------------------------------------------------------------------->
Route::middleware([
    'auth:sanctum',
    'usertype:4',
    config('jetstream.auth_session'),
    'verified',
])->prefix('/student')->group(function () {
    Route::get('/dashboard', [StudentController::class,'dashboard'])->name('ড্যাশবোর্ড(শিক্ষার্থী)');
});