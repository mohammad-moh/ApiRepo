<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerdConteroller;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/main', [MainController::class, 'index'])->middleware(['auth', 'check.age']);
Route::get('/bard', [BerdConteroller::class, 'index'])->name('get.index');
Route::get('bard/edit/{id}', [BerdConteroller::class, 'edit'])->name('get.edit');
Route::post('/bard/update/{id}', [BerdConteroller::class, 'update'])->name('post.update');

Route::get('/bard/create', [BerdConteroller::class, 'create']);
Route::post('/bard/store', [BerdConteroller::class, 'store'])->name('post.store');
Route::get('/bard/delete/{id}', [BerdConteroller::class, 'destroy'])->name('get.delete');
Route::get('/bard/show/{id}', [BerdConteroller::class, 'show'])->name('get.show');